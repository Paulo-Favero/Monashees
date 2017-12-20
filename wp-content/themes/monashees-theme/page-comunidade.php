<?php get_header(); 
	$url1 = $_SERVER['SERVER_NAME']; 
	$url2 = $_SERVER ['REQUEST_URI'];
	$url2final = explode('?', $url2);
	$urlPage = 'http://' . $url1 . $url2final[0];
?>

<div class="monashees">
	<div class="page-comunidade">
		<?php $img1 = get_field( 'comunidade-img-1' ); ?>
		<?php $img2 = get_field( 'comunidade-img-2' ); ?>
		<?php $img3 = get_field( 'comunidade-img-3' ); ?>
		<?php $img4 = get_field( 'comunidade-img-4' ); ?>
		<?php $img5 = get_field( 'comunidade-img-5' ); ?>
		<?php $img6 = get_field( 'comunidade-img-6' ); ?>
		<?php $img7 = get_field( 'comunidade-img-7' ); ?>
		<?php $img8 = get_field( 'comunidade-img-8' ); ?>
		<?php $img9 = get_field( 'comunidade-img-9' ); ?>
		<?php $img10 = get_field( 'comunidade-img-10' ); ?>
		<?php $img11 = get_field( 'comunidade-img-11' ); ?>
		<?php $img12 = get_field( 'comunidade-img-12' ); ?>
		<?php $img13 = get_field( 'comunidade-img-13' ); ?>
		<?php $img14 = get_field( 'comunidade-img-14' ); ?>
		<?php $img15 = get_field( 'comunidade-img-15' ); ?>
		<div class="comunidade-box-img-1">
			<div class="titulo-page">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
                            <?php the_field( 'comunidade-texto-1' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="comunidade-section-2" style="background: url(<?php echo $img1['url']; ?>) no-repeat center top">
			<div class="container">
                
                <div class="row">
                    <div class="col-xs-12">
						<div class="box-texto">
                            <?php the_field( 'comunidade-texto-2' ); ?>
						</div>
					</div>
                    <div class="col-xs-12 hidden-xs hidden-sm">
                        
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="box-image img-triangulo-big">
                                    <img src="<?php echo $img2['url']; ?>" alt="" class="img-responsive">
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="box-image img-triangulo-big">
                                    <img src="<?php echo $img3['url']; ?>" alt="" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
					
				</div>
				
			</div>
		</div>
		<div class="comunidade-section-3" style="background: url(<?php echo $img4['url']; ?>) no-repeat center top">
			<div class="container">
                
                <div class="row">
					<div class="col-md-12">
						<div class="box-texto">
                            <?php the_field( 'comunidade-texto-3' ); ?>
						</div>
					</div>
				</div>
				<div class="fotos hidden-xs hidden-sm">
					
                    <br><br><br><br><br>
                    <div class="row">
                        
						<div class="col-xs-6">
							<div class="box-image img-triangulo-small">
								<img src="<?php echo $img5['url']; ?>" alt="" class="img-responsive">
								
							</div>
						</div>
						<div class="col-xs-6">
							<div class="box-image img-triangulo-small">
								<img src="<?php echo $img6['url']; ?>" alt="" class="img-responsive">
								
							</div>
                        </div>
                        
					</div>
				</div>
				
			</div>
		</div>
		<div class="comunidade-section-4 hidden-xs hidden-sm" style="background: url(<?php echo $img7['url']; ?>) no-repeat center top"></div>
		
		<div class="comunidade-section-6">
			<div class="container">
                
                <div class="row">
					<div class="col-md-6">
						<div class="box-texto">
							<?php the_field( 'comunidade-texto-4' ); ?>
							<br><br><br>
						</div>
						
						<img src="<?php echo $img8['url']; ?>" alt="" class="img-responsive">
					</div>
					<div class="col-xs-6 hidden-xs hidden-sm">
						<div class="box-image img-triangulo-small">
							<img src="<?php echo $img9['url']; ?>" alt="" class="img-responsive">
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="comunidade-section-7">
			<img src="<?php echo $img10['url']; ?>" class="bg_section-7">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="box-texto">
							<?php the_field( 'comunidade-texto-5' ); ?>
							<br><br>
						</div>
					</div>
				</div>
				<div class="fotos">
					<div class="row">
                        
						<div class="col-md-6 col-xs-12">
							<div class="box-image img-triangulo-small">								
								<img src="<?php echo $img11['url']; ?>" alt="" class="img-responsive">
								
							</div>
						</div>
						<div class="col-md-6 hidden-xs">
							<div class="box-image img-triangulo-small">								
								<img src="<?php echo $img12['url']; ?>" alt="" class="img-responsive">
								
							</div>
                        </div>
                        
					</div>
                    
				</div>
				
				
			</div>
        </div>
		
		<div class="comunidade-section-8" style="background: url(<?php echo $img13['url']; ?>) no-repeat center top">
			<div class="container">
                
                <div class="row">
					<div class="col-md-12">
						<div class="box-texto">
                            <?php the_field( 'comunidade-texto-6' ); ?>
						</div>
					</div>
				</div>
				<div class="fotos">
					
                    <br>
                    <div class="row">
                        
						<div class="col-md-6 col-xs-12">
							<div class="box-image img-triangulo-small first">
								
								<img src="<?php echo $img14['url']; ?>" alt="" class="img-responsive">
								
							</div>
						</div>
						<div class="col-xs-6 hidden-xs">
							<div class="box-image img-triangulo-small second">
								
								<img src="<?php echo $img15['url']; ?>" alt="" class="img-responsive">
								
							</div>
                        </div>
                        
					</div>
				</div>				
			</div>
		</div>


        <div class="comunidade-section-5">
            <div class="container">
                <div class="row">
                    <h2 class="hidden-md hidden-lg hidden-lg">Venture Advisors</h2>
                    
                    <?php 
                    $i = 0;
                    // $subpages = get_pages('child_of='.$post->ID,'sort_order=DESC');

					$args = array(
						'child_of' => $post->ID,
						'sort_column' => 'menu_order'
					); 
					$subpages = get_pages($args); 

                    foreach($subpages as $subpage){
                        $i ++;
                        
                        $idchild = $subpage->ID;
                        
                        $imgadv = get_field('imagem-advisor',$idchild);
                        
                        if($i == 6){
                            echo 
							'
                            <div class="col-xs-6" id="venture">
                                '.get_field('texto-advisors').'
                            </div>
                            ';
						?>
						<div class="col-xs-6 col-md-3">
							<a href="<?php echo get_field('linkedin',$idchild);?>" class="foto" target="_blank">
								<img src="<?php echo $imgadv['url']; ?>" alt="" class="img-responsive">
								<div class="nome"><?php echo get_the_title($idchild);?></div>
							</a>

						</div>
						<?php
                        }else{
						// data-pessoa="<?php echo $idchild 
                       ?>
					<div class="col-xs-6 col-md-3">
						<?php
						if(get_field('linkedin',$idchild)){
							?>
							<a href="<?php echo get_field('linkedin',$idchild);?>" class="foto" target="_blank">
							<?php
						}else{
							?>
							<div class="foto">
							<?php
						}
						?>
						
							<img src="<?php echo $imgadv['url']; ?>" alt="" class="img-responsive">
							<div class="nome"><?php echo get_the_title($idchild);?></div>
						<?php
						if(get_field('linkedin',$idchild)){
							?>
							</a>
							<?php
						}else{
							?>
							</div>
							<?php
						}
						?>

					</div>



                    <?php
                    }    
                    }
                    // echo $i;
                    ?>
                    
                    

				</div>
				
            </div>
		</div>

		
	</div>

</div>
<section class="topo">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-xs-6">
				<div class="logo">
					<a href="<?php bloginfo('url') ?>">
					<?php img_template('monashees.png?v=1') ?>
					</a>
				</div>
			</div> 
			<div class="col-md-9 col-xs-6">
				<div class="menu">
					<div class="menu-lingua">
						<a href="<?php echo $urlPage ?>" class="por">POR</a>
						<a href="<?php echo $urlPage ?>?lang=en" class="en">ENG</a>
						<a href="<?php echo $urlPage ?>?lang=es" class="es">ESP</a>
						<a href="<?php echo $urlPage ?>?lang=zh-hant" class="zh-hant">CHI</a>
					</div>
					<button class="btn-menu-site">
						<span></span>
						<span></span>
						<span></span>
					</button>
				</div>
			</div>
		</div>
	</div>
</section>		

<?php get_template_part('_parts/grid-empresas'); ?>
<?php get_template_part('_parts/popup-pessoas'); ?>
<?php get_template_part('_parts/popup-galeria'); ?>
<?php get_template_part('_parts/popup-empresas'); ?>

<?php get_footer('internas'); ?>

<link rel="stylesheet" type="text/css" href="<?php echo $urlAtual ?>/wp-content/themes/monashees-theme/styleSite.css" />