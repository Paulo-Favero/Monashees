<?php

function getPessoaEquipe(){
	$pessoaID = $_GET['pessoaID'];
	?>
	<?php $foto = get_field( 'pessoa-foto-big', $pessoaID); ?>

	<div class="hidden-sm hidden-xs">
		<div class="detalhes-pessoa" style="background-image: url(<?php echo $foto['url']; ?>);">
			<div class="row">
				<div class="col-sm-6">
					<div class="texto">
						<h2><?php echo get_the_title($pessoaID); ?></h2>
						<div class="cargo"><?php mo_categoria('funcao', $pessoaID) ?></div>
						<?php echo wpautop(get_post_field('post_content', $pessoaID)); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="hidden-md hidden-lg">
		<div class="detalhes-pessoa">
			<div class="row">
				<div class="col-lg-6">
					<?php $foto = get_field( 'pessoa-foto', $pessoaID); ?>
					<?php if ($foto): ?>
						<div class="foto">
							<img src="<?php echo $foto['url']; ?>?v=4" alt="" class="img-responsive">
						</div>
					<?php endif ?>
					<br>
					<div class="texto">
						<h2><?php echo get_the_title($pessoaID); ?></h2>
						<div class="cargo"><?php mo_categoria('funcao', $pessoaID) ?></div>
						<?php echo wpautop(get_post_field('post_content', $pessoaID)); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	exit;
}

add_action('wp_ajax_nopriv_getPessoaEquipe', 'getPessoaEquipe');
add_action( 'wp_ajax_getPessoaEquipe', 'getPessoaEquipe' );
