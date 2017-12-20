<?php get_header(); ?>

<div class="monashees" id="inicio">
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



<?php get_template_part('_parts/grid-empresas'); ?>
<?php get_template_part('_parts/popup-pessoas'); ?>
<?php get_template_part('_parts/popup-empresas'); ?>


<?php get_footer('internas'); ?>