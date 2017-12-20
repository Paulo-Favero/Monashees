<section class="grid-empresas ">
	<button type="button" id="btn-fechar-empresas">
		<span class="ion-close-round"></span>
	</button>
	<div class="busca-empresas">
		<h2><?php the_field( 'busca-titulo', 'options' ); ?></h2>
		<div class="box-busca">
			<label>
				<button type="button" id="btn-busca" class="ico">
					<span class="ion-ios-search-strong"></span>
				</button>
				<button type="button" id="btn-remove-busca" class="ico2">
					<span class="ion-android-close"></span>
				</button>
				<input type="text" id="campo-busca" placeholder="<?php the_field( 'busca-campo-label', 'options' ); ?>">
			</label>
		</div>
		<?php 
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
		?>
		<div class="box-filtros">
			<label>
				<div class="ico">
					<span class="ion-ios-arrow-down"></span>
				</div>
				<select id="select-pais">
					<option value="*"><?php the_field( 'busca-paises-label', 'options' ); ?></option>
					<?php if ($paises): ?>
						<?php foreach($paises as $pais) : ?>
							<option value=".<?php echo $pais->slug; ?>"><?php echo $pais->name ?></option>
						<?php endforeach; ?>
					<?php endif ?>
				</select>
			</label>
			<label>
				<div class="ico">
					<span class="ion-ios-arrow-down"></span>
				</div>
				<select id="select-segmentos">
					<option value="*"><?php the_field( 'busca-segmentos-label', 'options' ); ?></option>
					<?php if ($segmentos): ?>
						<?php foreach($segmentos as $segmento) : ?>
							<option value=".<?php echo $segmento->slug; ?>"><?php echo $segmento->name ?></option>
						<?php endforeach; ?>
					<?php endif ?>
				</select>
			</label>
		</div>
	</div>
	<div id="lista-itens-empresas">
		<div class="itens">
			<div class="item <?php foreach($segmentos as $segmento) : ?><?php echo $segmento->slug . ' '; ?> <?php endforeach; ?><?php foreach($paises as $pais) : ?><?php echo $pais->slug . ' '; ?> <?php endforeach; ?>"></div>
			<?php
				$args = [
					'post_type' => 'empreendedores',
					'posts_per_page' => -1,
					'suppress_filters' => 0
				];
				$empreendedores = get_posts($args);
			?>
			<?php if ($empreendedores): ?>
				<?php foreach( $empreendedores as $empreendedor) : ?>
				<?php
					$logo = get_field( 'img-logo-colorida-2', $empreendedor->ID );
					$thumb = get_field( 'img-thumb', $empreendedor->ID );
				?>
				<div  data-scroll="no" data-grid="true" data-empresa="<?php echo $empreendedor->ID; ?>" class="item btn-open-empresa <?php mo_categoria_slug('segmento', $empreendedor->ID); ?> <?php  mo_categoria_slug('pais', $empreendedor->ID); ?>" style="background-image: url('<?php echo $logo['url']; ?>'); ">
					<div class="empresa-imagem" >
						<img class="img-responsive" src="<?php echo $thumb['url']; ?>" alt="">
					</div>
				</div>
				<?php endforeach; ?>
			<?php endif ?>
		</div>
	</div>
</section>