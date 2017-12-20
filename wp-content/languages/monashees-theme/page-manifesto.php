<?php get_header(); ?>
<div class="monashees" id="inicio">
	<div class="page-manifesto">
		<?php $img1 = get_field( 'manifesto-img-1' ); ?>
		<?php $img2 = get_field( 'manifesto-img-2' ); ?>
		<?php $img3 = get_field( 'manifesto-img-3' ); ?>
		<?php $img4 = get_field( 'manifesto-img-4' ); ?>
		<?php $img5 = get_field( 'manifesto-img-5' ); ?>
		<?php $img6 = get_field( 'manifesto-img-6' ); ?>
		<div class="manifesto-box-img-1" style="background-image: url(<?php echo $img1['url']; ?>);">
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
					<div class="col-md-6"></div>
					<div class="col-md-6">
						<div class="box-texto">
							<?php the_field( 'manifesto-texto-1' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="manifesto-section-2">
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
					<div class="col-md-6">
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
					<div class="col-md-12">
						<div class="box-texto">
							<?php the_field( 'manifesto-texto-3' ); ?>
						</div>
					</div>
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
		</div>
	</div>

</div>


<?php get_template_part('_parts/grid-empresas'); ?>
<?php get_template_part('_parts/popup-empresas'); ?>



<?php get_footer('internas'); ?>