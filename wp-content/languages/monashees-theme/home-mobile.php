<div class="monashees monashees-full hidden-lg hidden-md">
	<div class="mobile-texto-1">
		<div class="texto-1">
			<?php the_field( 'texto-1-title' ); ?>
		</div>
		<div class="texto-2">
			<?php the_field( 'texto-1-texto' ); ?>
		</div>
		<div class="seta-design"><a href="#"></a></div>
	</div>
	<div class="mobile-space-texto-2"></div>
	<div class="mobile-texto-2">
		<div class="texto-1" id="texto-fixo-scroll-mobile">
			<?php the_field( 'texto-2-title' ); ?>
		</div>
		<div class="texto-2">
			<?php the_field( 'texto-2-texto' ); ?>
		</div>
	</div>
	<div class="topo-design-white-mobile"></div>
	<div class="mobile-texto-3">
		<?php the_field( 'texto-3-texto' ); ?>
	</div>
	<div class="mobile-empresas">
		<h3>Conheça suas histórias</h3>
		<div class="itens">
			<?php
				$empreendedoresArgs = [
					'post_type' => 'empreendedores',
					'posts_per_page' => -1,
					'suppress_filters' => 0
				];
				$empreendedores = get_posts($empreendedoresArgs);
			?>
			<?php if ($empreendedores): ?>
			<?php foreach($empreendedores as $empreendedore) : ?>
				<?php $logo = get_field( 'img-logo-pb', $empreendedore->ID ); ?>
				<?php if ($logo): ?>
					<div class="item btn-open-empresa" data-scroll="no" data-grid="false" data-empresa="<?php echo $empreendedore->ID; ?>">
						<div class="logo-empresa"><img src="<?php echo $logo['url']; ?>" class="img-responsive"></div>
					</div>
				<?php endif ?>
			<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
	<div class="topo-design-white-mobile"></div>
	<div class="mobile-texto-final">
		<div class="texto-1">
			<?php the_field( 'texto-4-title' ); ?>
		</div>
		<div class="texto-1">
			<?php the_field( 'texto-4-texto' ); ?>
		</div>
		<div class="link">
			<a href="<?php the_field( 'texto-4-link-url' ); ?>" class="btn-primario"><?php the_field( 'texto-4-link-label' ); ?></a>
		</div>
	</div>
	<div class="logo-people-mobile">
		<div class="people">
			<a target="_blank" href="http://www.peopleinteractive.com.br">
			<?php img_template('people.png') ?>
			</a>
		</div>
	</div>
</div>
