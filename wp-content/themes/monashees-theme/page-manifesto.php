<?php get_header(); 

	$url1 = $_SERVER['SERVER_NAME']; 
	$url2 = $_SERVER ['REQUEST_URI'];
	$url2final = explode('?', $url2);
	$urlPage = 'http://' . $url1 . $url2final[0];
?>

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
<div class="monashees">
	<div class="page-manifesto">
		<?php 
		// $img1 = get_field( 'manifesto-img-1' ); 
		// $img2 = get_field( 'manifesto-img-2' ); 
		// $img3 = get_field( 'manifesto-img-3' ); 
		// $img4 = get_field( 'manifesto-img-4' ); 
		// $img5 = get_field( 'manifesto-img-5' ); 
		// $img6 = get_field( 'manifesto-img-6' ); 
		?>
		<!-- style="background-image: url(<?php echo $img1['url']; ?>);" -->
		<div class="manifesto-box-img-1" >
			<div class="titulo-page">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h2><?php the_title(); ?></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="manifesto-section-1">
			<div class="container">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="box-texto">
							<?php the_field( 'manifesto-texto-1' ); ?>
						</div>
					</div>
					<div class="col-md-2"></div>
				</div>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="box-texto">
							<?php the_field( 'manifesto-texto-2' ); ?>
						</div>
					</div>
					<div class="col-md-2"></div>
				</div>
			</div>
		</div>
		<!-- <div class="manifesto-section-2">
			<div class="container">
				<div class="fotos">
					<div class="row">
						<div class="col-xs-6">
							<div class="box-image img-triangulo-big">
								<img src="<?php echo $img2['url']; ?>" alt="" class="img-responsive">
							</div>
						</div>
						<div class="col-xs-6">
							<div class="box-image img-triangulo-small">
								<img src="<?php echo $img3['url']; ?>" alt="" class="img-responsive">
							</div>
						</div>
					</div>
				</div>
				<div class="box-texto">
					<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-5">
							<?php the_field( 'manifesto-texto-2' ); ?>
						</div>
					</div>
					<div class="col-md-6"></div>
				</div>
			</div>
		</div>
		<div class="manifesto-box-img-2" style="background-image: url(<?php echo $img4['url']; ?>);">
			
		</div>
		<div class="manifesto-section-3">
			<div class="container">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10 col-xs-12">
						<div class="box-texto">
							<?php the_field( 'manifesto-texto-3' ); ?>
						</div>
					</div>
					<div class="col-md-1"></div>
				</div>
			</div>
		</div>
		<div class="manifesto-section-4">
			<div class="container">
				<div class="fotos">
					<div class="row">
						<div class="col-xs-6">
							<div class="box-image img-triangulo-small-r">
								<img src="<?php echo $img5['url']; ?>" alt="" class="img-responsive">
							</div>
						</div>
						<div class="col-xs-6">
							<div class="box-image img-triangulo-big-r">
								<img src="<?php echo $img6['url']; ?>" alt="" class="img-responsive">
							</div>
						</div>
					</div>
				</div>
				<div class="box-texto">
					<div class="row">
						<div class="col-md-6"></div>
						<div class="col-md-6">
							<?php the_field( 'manifesto-texto-4' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div> -->
	</div>

</div>


<?php get_template_part('_parts/grid-empresas'); ?>
<?php get_template_part('_parts/popup-empresas'); ?>

<?php get_footer('internas'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo $urlAtual ?>/wp-content/themes/monashees-theme/styleSite.css" />