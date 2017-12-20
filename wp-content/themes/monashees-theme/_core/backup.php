<?php


function mo_search_form($placeholder='Faça sua busca', $postype=null) {
    echo "
    <form role='search' id='searchform'  action='"; bloginfo('url'); echo "' method='get'>
    <input type='text' id='s' name='s' data-swplive='true' value='' placeholder='{$placeholder}'>
    ";
    if ($postype) {
        echo "<input type='hidden' name='post_type' value='{$postype}'>";
    }
    echo "
    <button type='submit' id='ok' value='ok' name='ok'>
    <i class='fa fa-search'></i>
    Buscar
    </button>
    </form>
    ";
}


<?php
/*********************************************
* Funções diversas
**********************************************/

function mo_img($file, $alt, $folder, $class='img-item'){
    ?>
        <img class="<?php echo $class; ?>" src="<?php bloginfo('template_directory'); ?>/<?php echo $folder; ?>/<?php echo $file; ?>" alt="<?php echo $alt; ?>">
    <?php
}



/*********************************************
* Funções diversas
**********************************************/



function mo_img_crop_sub($field, $options= null, $width=200, $height=200, $alt='imagem', $crop = false, $class= 'img-responsive'){
    $img = get_sub_field($field, $options);
    if ($img) {
        $params = array( 'width' => $width, 'height' => $height, 'crop' => $crop);
        $image = bfi_thumb( $img['url'], $params );
        echo "<img class='{$class}' src='{$image}' alt='{$alt}'>";
    }
}


function mo_imgs_crop($img, $width=200, $height=200, $alt='imagem', $crop = false, $class= 'img-responsive'){
    if ($img) {
        $params = array( 'width' => $width, 'height' => $height, 'crop' => $crop);
        $image = bfi_thumb( $img['url'], $params );
        echo "<img class='{$class}' src='{$image}' alt='{$alt}'>";
    }
}









function mo_imgs_crop_link($img, $width=200, $height=200, $bigW=800, $bigH=600, $alt='imagem', $crop = false, $class= 'img-responsive'){
    if ($img) {
        $params     = array( 'width' => $width, 'height' => $height, 'crop' => $crop);
        $paramsBig  = array( 'width' => $bigW, 'height' => $bigH, 'crop' => $crop);
        $image      = bfi_thumb( $img['url'], $params );
        $imageBig   = bfi_thumb( $img['url'], $paramsBig );
        $titulo     = $img['title'];
        echo "<a class='swipebox' title='{$titulo}' href='{$imageBig}'><img class='{$class}' src='{$image}' alt='{$alt}'></a>";
    }
}

function mo_videos_thumb($videourl, $img, $width=200, $height=200, $alt='imagem', $crop = false, $class= 'img-responsive'){
    if ($img) {
        $params = array( 'width' => $width, 'height' => $height, 'crop' => $crop);
        $image = bfi_thumb( $img['url'], $params );
        echo "<a class='swipebox-video'  href='{$videourl}'><img class='{$class}' src='{$image}' alt='{$alt}'></a>";
    }
}


/************************************************************
* RESUMO DO POST
*************************************************************/
function mo_post_resume($limit) {
    $excerpt = explode(' ', get_the_content(), $limit);
    if (count($excerpt) >= $limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
    } else {
        $excerpt = implode(" ",$excerpt);
    } 
    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
    echo wpautop($excerpt);
}

/************************************************************
* TERMOS
*************************************************************/

function mo_terms($term, $tipo='slug', $postID){
    $terms = get_the_terms($postID, $term);
    if ($terms) {
        foreach ($terms as $term) {
            echo "<div class='categoria'>" . $term->$tipo . "</div>";
        }
    }
}

function mo_list_terms($term, $tipo='slug', $postID){
    $terms = get_the_terms($postID, $term);
    if ($terms) {
        foreach ($terms as $term) {
            echo $term->$tipo;
        }
    }
}



function mo_get_terms($term, $tipo='slug', $postID){
    $terms = get_the_terms($postID, $term);
    if ($terms) {
        foreach ($terms as $term) {
            return $term->$tipo;
        }
    }
}


function mo_paginacao(){
    global $wp_query;
    
    $big = 999999999;
    echo "<div class='paginacao'>";
    echo paginate_links( array(
        'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format'    => '?paged=%#%',
        'current'   => max( 1, get_query_var('paged') ),
        'total'     => $wp_query->max_num_pages,
        'type'      => 'list',
        'prev_next' => true,
        'prev_text' => 'Anterior',
        'next_text' => 'Próximo',
        'mid_size'  => 1,
        'end_size'  => 10
    ) );
    echo "</div>";
}




function mo_cpt_menu($cpt, $order='asc', $title='') {
   echo " <ul class='list-unstyled'>";

    $args = array(
        'sort_column'       => 'menu_order',
        'sort_order'        => $order,
        'child_of'          => 0,
        'style'             => 'list',
        'title_li'          => $title,
        'post_type'         => $cpt
    );
    wp_list_pages( $args );

   
    echo "</ul>";
}