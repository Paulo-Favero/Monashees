<?php get_header(); ?>


<div class="monashees monashees-full hidden-sm hidden-xs">
	<!-- empresentacao -->
	<div class="section-apresentacao-2"></div>
	<section class="section-apresentacao">
		<div class="container">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-7">
					<div class="texto-1">
						<?php the_field( 'texto-1-title' ); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5"></div>
				<div class="col-md-5">
					<div class="texto-2">
						<?php the_field( 'texto-1-texto'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- texto video -->
	<section class="section-video-texto active">
		<div class="go-arrow">
			<a href="#"></a>
		</div>
		<div class="texto-bg-branco"></div>
		<section class="texto-video">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="texto-1" id="texto-fixo-scroll">
							<?php the_field( 'texto-2-title' ); ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5"></div>
					<div class="col-md-4">
						<div class="texto-2">
							<?php the_field( 'texto-2-texto' ); ?>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>
	<!-- texto pre empresas -->
	<div class="topo-design-white"></div>
	<section class="section-white section-empresa scroll-empresa empresa-1 section-texto-first" id="empresa-01">
		<div class="section-content" id="empresa-001">
			<div class="container">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<section class="texto-video-2">
							<?php the_field( 'texto-3-texto' ); ?>
						</section>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--
	===============================
		EMPRESAS
	===============================
	-->
	<?php $depoimentos = get_field( 'home-depoimentos'); ?>
	<?php if ($depoimentos): ?>
		<?php $i = 0; foreach($depoimentos as $depoimento) : $i++; ?>
			<?php
				$textoDepoimento = get_field( 'depoimento-texto', $depoimento );
				$textoComplemento = get_field( 'depoimento-complemento', $depoimento );
				$socios = get_field( 'depoimento-socios', $depoimento );
				$imagem = get_field( 'img-home', $depoimento );
				$depoimentoPost = get_post($depoimento);
			?>
			<?php if ($i % 2 == 0): ?>
				<!-- item white -->
				<div class="topo-design-white"></div>
				<section class="section-white section-empresa <?php echo ($i==1)? 'first-empresa' : '';?>"  id="empresa-<?php echo $i; ?>">
					<div class="section-content" id="<?php echo $depoimentoPost->post_name; ?>">
						<div class="container">
							<div class="row">
								<div class="col-md-7">
									<div class="box-images">
										<?php if ($imagem): ?>
											<div class="image">
												<img src="<?php echo $imagem['url']; ?>" alt="" class="img-responsive">
											</div>
										<?php endif ?>
									</div>
								</div>
								<div class="col-md-5">
									<div class="box-textos">
										<?php if ($textoDepoimento): ?>
											<div class="depoimento">
												<?php echo $textoDepoimento; ?>
												<p><strong><?php echo $socios; ?></strong> <span><?php the_field( 'empresas-complemento-socios', 'options' ); ?> <?php echo get_the_title($depoimento); ?></span></p>
											</div>
										<?php endif ?>
										<button type="button" class="btn-primario btn-open-empresa" data-scroll="no" data-grid="false"  data-empresa="<?php echo $depoimento; ?>"><?php the_field( 'btn-detalhes-label', $depoimento  ); ?></button>
										<div class="texto-complementar">
											<p><?php echo $textoComplemento; ?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			<?php else : ?>
				<!-- item black -->
				<div class="topo-design-black"></div>
				<section class="section-black section-empresa <?php echo ($i==1)? 'first-empresa' : '';?>" id="empresa-<?php echo $i; ?>">
					<div class="section-content" id="<?php echo $depoimentoPost->post_name; ?>">
						<div class="container">
							<div class="row">
								<div class="col-md-5">
									<div class="box-textos">
										<?php if ($textoDepoimento): ?>
											<div class="depoimento">
												<?php echo $textoDepoimento; ?>
												<p><strong><?php echo $socios; ?></strong> <span><?php the_field( 'empresas-complemento-socios', 'options' ); ?> <?php echo get_the_title($depoimento); ?></span></p>
											</div>
										<?php endif ?>
										<button type="button" class="btn-primario btn-open-empresa" data-scroll="no" data-grid="false" data-empresa="<?php echo $depoimento; ?>"><?php the_field( 'btn-detalhes-label', $depoimento ); ?></button>
										<div class="texto-complementar">
											<p><?php echo $textoComplemento; ?></p>
										</div>
									</div>
								</div>
								<div class="col-md-7">
									<div class="box-image">
										<?php if ($imagem): ?>
											<div class="image">
												<img src="<?php echo $imagem['url']; ?>" alt="" class="img-responsive">
											</div>
										<?php endif ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			<?php endif ?>
		<?php endforeach; ?>
	<?php endif; ?>
	<!--
	===============================
		TEXTO FINAL
	===============================
	-->
	<div class="topo-design-white"></div>
	<section class="section-final scroll-empresa section-white section-empresa" id="empresa-07">
		<div class="section-conteudo" id="empresa-007">
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<div class="texto-1">
							<?php the_field( 'texto-4-title' ); ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="texto-2">
							<?php the_field( 'texto-4-texto' ); ?>
							<br>
							<a href="<?php the_field( 'texto-4-link-url' ); ?>" class="btn-primario"><?php the_field( 'texto-4-link-label' ); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="logo-people-home">
		<div class="people">
			<a target="_blank" href="http://www.peopleinteractive.com.br">
			<?php img_template('people.png') ?>
			</a>
		</div>
	</div>
</div>


<?php get_template_part('_parts/menu-empresas'); ?>
<?php get_template_part('_parts/home-mobile'); ?>
<?php get_template_part('_parts/videos'); ?>
<?php get_template_part('_parts/grid-empresas'); ?>
<?php get_template_part('_parts/popup-empresas'); ?>



<?php get_footer(); ?>