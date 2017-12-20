<?php get_header(); 
	
	$url1 = $_SERVER['SERVER_NAME']; 
	$url2 = $_SERVER ['REQUEST_URI'];
	$url2final = explode('?', $url2);
	$urlPage = 'http://' . $url1 . $url2final[0];
?>

<div class="monashees">
	<div class="page-equipe">
		<div class="page-title">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2><?php the_field( 'equipe-texto-title', 'options' ); ?></h2>
						<?php the_field( 'equipe-texto', 'options' ); ?>
					</div>
				</div>
			</div>
		</div>
		<!--
		===============
			CHEFES
		===============
		-->
		<?php
			$argChefes = [
				'post_type' => 'equipe',
				'posts_per_page' => -1,
				'suppress_filters' => 0
			];
			$chefes = get_posts($argChefes);
		?>
		<?php if ($chefes): ?>
			<div class="lista-pessoas">
				<?php foreach( $chefes as $chefe) : ?>
					<?php $foto = get_field( 'pessoa-foto', $chefe->ID); ?>
					<div class="item" data-scroll="no"  data-pessoa="<?php echo $chefe->ID; ?>">
						<?php if ($foto): ?>
							<div class="foto">
								<?php 
							        $params = array( 'width' => 826, 'height' => 812, 'crop' => true);
							        $image = bfi_thumb( $foto['url'], $params );
							        echo "<img class='{$class}' src='{$image}' alt='{$alt}'>";
								?>
							</div>
						<?php else : ?>
							<div class="foto">
								<?php img_template('_pessoas/no-pessoa.jpg'); ?>
							</div>
						<?php endif ?>
						<div class="nome"><?php echo $chefe->post_title; ?></div>
						<div class="cargo"><?php mo_categoria('funcao', $chefe->ID) ?></div>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif ?>
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
<?php get_template_part('_parts/popup-empresas'); ?>


<?php get_footer('internas'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo $urlAtual ?>/wp-content/themes/monashees-theme/styleSite.css" />