<?php

function buscaEmpresas(){
	$s = $_GET['s'];
	$argsPais = [
		'taxonomy' => 'pais',
		'hide_empty' => true,
	];
	$paises = get_terms($argsPais);
	$argSegmentos = [
		'taxonomy' => 'segmento',
		'hide_empty' => true,

	];
	$segmentos = get_terms($argSegmentos);
	
	$args = [
		'post_type' => 'empreendedores',
		'posts_per_page' => -1,
		'suppress_filters' => 0,
		's' => $s
	];
	$empreendedores = get_posts($args);
	?>
	<div class="itens">
		<div class="item <?php foreach($segmentos as $segmento) : ?><?php echo $segmento->slug . ' '; ?> <?php endforeach; ?><?php foreach($paises as $pais) : ?><?php echo $pais->slug . ' '; ?> <?php endforeach; ?>"></div>
		<?php if ($empreendedores): ?>
			<?php foreach( $empreendedores as $empreendedor) : ?>
			<?php
				$logo = get_field( 'img-logo-colorida', $empreendedor->ID );
				$thumb = get_field( 'img-thumb', $empreendedor->ID );
			?>
			<div data-scroll="no" data-grid="true" data-empresa="<?php echo $empreendedor->ID; ?>"  class="item item btn-open-empresa  <?php mo_categoria_slug('segmento', $empreendedor->ID); ?> <?php  mo_categoria_slug('pais', $empreendedor->ID); ?>" style="background-image: url('<?php echo $logo['url']; ?>'); ">
				<div class="empresa-imagem">
					<img class="img-responsive" src="<?php echo $thumb['url']; ?>" alt="">
				</div>
			</div>
			<?php endforeach; ?>
		<?php else : ?>
			<div class="no-results">
				<?php the_field( 'busca-resultado-frase', 'options' ); ?>
			</div>
		<?php endif ?>
	</div>
	
	<?php
	exit;
}

add_action('wp_ajax_nopriv_buscaEmpresas', 'buscaEmpresas');
add_action( 'wp_ajax_buscaEmpresas', 'buscaEmpresas' );
