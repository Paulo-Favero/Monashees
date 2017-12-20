<?php
/****************************************************
* PERMISSÃO PAGE 
*****************************************************/
function permissao_negada_redirect($cap){
    if (!current_user_can($cap)) {
        wp_redirect(site_url() . '/permissao-negada'); exit;
    }
}
/*********************************************
* IMAGEM
**********************************************/
function mo_img_crop($field, $width=450, $height=300, $options=null, $alt='imagem', $crop = false, $class= 'img-responsive'){
    $img = get_field($field, $options);
    if ($img) {
        $params = array( 'width' => $width, 'height' => $height, 'crop' => $crop);
        $image = bfi_thumb( $img['url'], $params );
        echo "<img class='{$class}' src='{$image}' alt='{$alt}'>";
    }
}
function mo_img_crop_url($field, $width=450, $height=300, $options=null, $alt='imagem', $crop = false, $class= 'img-responsive'){
    $img = get_field($field, $options);
    if ($img) {
        $params = array( 'width' => $width, 'height' => $height, 'crop' => $crop);
        $image = bfi_thumb( $img['url'], $params );
        echo "{$image}";
    }
}
function mo_get_img_url($img, $width=200, $height=200, $crop = false){
    if ($img) {
        $params = array( 'width' => $width, 'height' => $height, 'crop' => $crop);
        $image = bfi_thumb( $img['url'], $params );
        return $image;
    }
}
/*********************************************
* Funções OPTIONS
**********************************************/
function mo_options_page($menu_title, $page_title, $slug, $caps, $icon, $redirect = true){
    if (function_exists('acf_add_options_page')){
        acf_add_options_page( array(
            'menu_title' => $menu_title,
            'page_title' => $page_title,
            'menu_slug'  => $slug,
            'capability' => $caps,
            'icon_url'   => $icon,
            'redirect'   => $redirect
            )
        );
    }
}
/*********************************************
* Funções OPTIONS
**********************************************/
function mo_options_subpage($menu_title, $slug, $caps = 'manage_options'){
    if( function_exists('acf_add_options_sub_page') ){
        acf_add_options_sub_page(array(
            'title' => $menu_title,
            'parent' => $slug,
            'capability' => $caps
        ));
    }
}
/****************************************************
* MENU SITE
*****************************************************/
function mo_site_menu($idname, $tipo='ul', $marcador="", $title=null, $tag_title='h5', $class='item-menu'){
    if ($title) {
        echo "<${tag_title}>";
            echo $title;
        echo "</${tag_title}>";
    }
    wp_nav_menu(array( 'theme_location' => $idname, 'container' => $tipo, 'before' => $marcador, 'fallback_cb' => '', 'menu_class' => $class ));
}
/****************************************************
* TAGS
*****************************************************/

function mo_blog_categoria($term){
    $terms = get_the_terms($post->ID,$term);
    if ($terms) {
        foreach ($terms as $term) {
            $linkterm = get_term_link( $term );
            $label = $term->name;
            echo "<a href='{$linkterm}'> <i class='fa fa-tag'></i> $label </a>";
        }
    }
}

function mo_blog_categoria_item($term, $postID){
    $terms = get_the_terms($postID,$term);
    if ($terms) {
        foreach ($terms as $term) {
            $linkterm = get_term_link( $term );
            $label = $term->name;
            echo "<a href='{$linkterm}'> <i class='fa fa-tag'></i> $label </a>";
        }
    }
}



function mo_categoria($term, $postID){
    $terms = get_the_terms($postID,$term);
    if ($terms) {
        foreach ($terms as $term) {
            $label = $term->name;
            echo $label;
        }
    }
}

function mo_categoria_slug($term, $postID){
    $terms = get_the_terms($postID,$term);
    if ($terms) {
        foreach ($terms as $term) {
            $slug = $term->slug;
            echo $slug . ' ';
        }
    }
}


/****************************************************
* SALVAR MOEDA 
*****************************************************/
function moeda($valor) {
    $source = array('.', ',');
    $replace = array('', '.');
    $valor = str_replace($source, $replace, $valor); 
    return $valor;
}
/****************************************************
* DATA e HORA
*****************************************************/
function date_print($date_obj, $format='d-m-Y'){
    if ($date_obj) {
        $post_time = new DateTime($date_obj);
        $post_date = $post_time->format($format);
        echo $post_date;
    }
}
function hour_print($date_obj, $format='H:i'){
    if ($date_obj) {
        $post_time = new DateTime($date_obj);
        $post_hour = $post_time->format($format);
        echo $post_hour;
    }
}
/****************************************************
* PAGE TAB 
*****************************************************/
function tabClass($tab, $current){
    if ($tab == $current) {
        echo "class='this'";
    }
}
/****************************************************
* PAGE TAB CLASS NAME 
*****************************************************/
function tabClassName($tab, $current){
    if ($tab == $current) {
        echo "this";
    }
}
/****************************************************
* DEBUG 
*****************************************************/
function debug($var, $t='pr'){
    if ($t=='vd') {
        echo "<pre>";
            var_dump($var);
        echo "</pre>";
    }elseif($t=='pr'){
        echo "<pre>";
            print_r($var);
        echo "</pre>";
    }else{
        echo "<pre>";
            echo "Parâmetro inválido. Utilize 'vd' para var_dump e 'pr' para print_r.";
        echo "</pre>";
    }
}
/****************************************************
* TIRA ACENTOS E ESPAÇOS DE UMA STRING 
*****************************************************/
function idconvert($string) {
    $what   = array( 'ä','ã','à','á','â','ê','ë','è','é','ï','ì','í','ö','õ','ò','ó','ô','ü','ù','ú','û','À','Á','É','Í','Ó','Ú','ñ','Ñ','ç','Ç',' ','(',')',',',';',':','|','!','"','#','$','%','&','/','=','?','~','^','>','<','ª','º' );
    $by     = array( 'a','a','a','a','a','e','e','e','e','i','i','i','o','o','o','o','o','u','u','u','u','A','A','E','I','O','U','n','n','c','C','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_' );
    return str_replace($what, $by, strtolower(str_replace(" ", "-", $string)));
}
/************************************************************
* MENU DE TAXONOMIA
*************************************************************/
function mo_tax_menu($taxonomy, $posttype, $ordeby='name', $order='ASC', $showCount=0) {
    $args = array(
        'taxonomy'           => $taxonomy,
        'orderby'            => $ordeby,
        'order'              => $order,
        'show_count'         => $showCount,
        'style'              => 'list',
        'hide_empty'         => 1,
        'use_desc_for_title' => 1,
        'child_of'           => 0,
        'hierarchical'       => 1,
        'title_li'           => '',
        'show_option_none'   => '',
        'number'             => null,
        'echo'               => 1,
        'depth'              => 0,
        'current_category'   => 0,
        'show_option_all'    => '',
        'pad_counts'         => 0,
        'walker'             => null
    );
    echo "<ul>";
    if (!is_tax()) {
        $todos = 'current-cat';
    }
    echo "<li class='{$todos}'><a href='"; bloginfo('url'); echo"/{$posttype}'>Todos</a></li>";
    wp_list_categories( $args );
    echo "</ul>";
}
/****************************************************
* PÁGINAÇÃO 
*****************************************************/
function mo_paginacao(){
    $big = 999999999;
    echo "<div class='paginacao'>";
    echo paginate_links( array(
        'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format'    => '?paged=%#%',
        'current'   => max( 1, get_query_var('paged') ),
        'type'      => 'list',
        'prev_next' => true,
        'prev_text' => '‹',
        'next_text' => '›',
        'mid_size'  => 0,
        'end_size'  => 10
    ) );
    echo "</div>";
}