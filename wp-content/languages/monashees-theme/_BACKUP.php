<?php get_header(); ?>





<div class="monashees" id="inicio">
	<section class="topo">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="logo">
						<?php img_template('monashees.png?v=1') ?>
					</div>
				</div>
				<div class="col-md-9">
					<div class="menu">
						<div class="menu-lingua">
							<a href="#">POR</a>
							<a href="#">ENG</a>
							<a href="#">ESP</a>
							<a href="#">CHI</a>
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
	<div class="section-apresentacao-2">
		
	</div>
	<section class="section-apresentacao">
		<div class="container">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-7">
					<div class="texto-1">
						<h2>Existe um outro mundo a ser conhecido</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5"></div>
				<div class="col-md-6">
					<div class="texto-2">
						<p>Um lugar em que as <strong>pessoas</strong> sejam o <br> verdadeiro centro de todas as relações. <br> Onde é preciso criar novas formas de <br> resolver questões para tornar a vida cada <br> vez mais <strong>repleta de significado</strong>.</p>
					</div>
				</div>
			</div>
		</div>
		
	</section>
	<!-- texto video -->
	<section class="section-video-texto">
		<div class="go-arrow">
			<a href="#"></a>
		</div>
		<div class="texto-bg-branco"></div>
		<section class="texto-video">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="texto-1" id="texto-fixo-scroll">
							<h2>Existem pessoas que querem construir esse mundo.</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5"></div>
					<div class="col-md-4">
						<div class="texto-2">
							<p>Que questionam o que já existe e <strong>revolucionam mercados</strong>, usando tecnologia para solucionar problemas relevantes, gerar valor e melhorar a vida de todos nós.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>
	<!-- item -->
	<div class="topo-design-white"></div>
	<section class="section-white section-empresa scroll-empresa empresa-1 section-texto-first" id="empresa-01">
		<div class="section-content" id="empresa-001">
			<div class="container">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<section class="texto-video-2">
							<h2>É com essas pessoas que formamos uma rede de criadores de novos caminhos.</h2>
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
	<?php $depoimentos = get_field( 'home-depoimentos' ); ?>
	<?php if ($depoimentos): ?>
		
	
	<div class="topo-design-black"></div>
	<section class="section-black first-empresa scroll-empresa section-empresa" id="empresa-02">
		<div class="section-content" id="empresa-002">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="box-textos">
							<div class="depoimento">
								<p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus tetur adipiscing elit euismod bibendum laoreet.</p>
								<p><strong>Lorem ispum, dolor sit e amet consec </strong> <span>Sócios da 99</span></p>
							</div>
							<a href="#" class="btn-primario hover-effect" data-toggle="modal" data-target="#detalhes-empreededor" data-scroll="no">Conheça a jornada</a>
							<div class="texto-complementar">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eusmod bibendm laoreet proin gravida.</p>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="box-images hover-effect" data-tilt-perspective="600" data-tilt-speed="2000" data-tilt-max="35">
							<div class="image">
								<?php img_template('99-taxi_FindoBranco.png') ?>
							</div>
							<div class="logo">
								<?php img_template('_logos/logo2.png') ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- item -->
	<div class="topo-design-white"></div>
	<section class="section-white  scroll-empresa section-empresa" id="empresa-03">
		<div class="section-content" id="empresa-003">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="box-images hover-effect" data-tilt-perspective="600" data-tilt-speed="2000" data-tilt-max="35">
							<div class="image">
								<?php img_template('ID_Wall_FundoBranco.png') ?>
							</div>
							<div class="logo">
								<?php img_template('_logos/petlove.png') ?>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="box-textos">
							<div class="depoimento">
								<p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus tetur adipiscing elit euismod bibendum laoreet.</p>
								<p><strong>Lorem ispum, dolor sit e amet consec </strong> <span>Sócios da 99</span></p>
							</div>
							<a href="#" class="btn-primario hover-effect" data-tilt-perspective="200" data-tilt-speed="2000" data-tilt-max="35">Conheça a jornada</a>
							<div class="texto-complementar">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eusmod bibendm laoreet proin gravida.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php endif ?>
	<!-- item -->
	<div class="topo-design-black"></div>
	<section class="section-black  scroll-empresa section-empresa" id="empresa-04">
		<div class="section-content" id="empresa-004">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="box-textos">
							<div class="depoimento">
								<p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus tetur adipiscing elit euismod bibendum laoreet.</p>
								<p><strong>Lorem ispum, dolor sit e amet consec </strong> <span>Sócios da 99</span></p>
							</div>
							<a href="#" class="btn-primario hover-effect" data-tilt-perspective="200" data-tilt-speed="2000" data-tilt-max="35">Conheça a jornada</a>
							<div class="texto-complementar">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eusmod bibendm laoreet proin gravida.</p>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="box-images hover-effect" data-tilt-perspective="600" data-tilt-speed="2000" data-tilt-max="35">
							<div class="image">
								<?php img_template('contaazul.png') ?>
							</div>
							<div class="logo">
								<?php img_template('_logos/logo2.png') ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- item -->
	<div class="topo-design-white"></div>
	<section class="section-white scroll-empresa section-empresa" id="empresa-05">
		<div class="section-content" id="empresa-005">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="box-images hover-effect" data-tilt-perspective="600" data-tilt-speed="2000" data-tilt-max="35">
							<div class="image">
								<?php img_template('Enjoei_FundoBranco.png') ?>
							</div>
							<div class="logo">
								<?php img_template('_logos/petlove.png') ?>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="box-textos">
							<div class="depoimento">
								<p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus tetur adipiscing elit euismod bibendum laoreet.</p>
								<p><strong>Lorem ispum, dolor sit e amet consec </strong> <span>Sócios da 99</span></p>
							</div>
							<a href="#" class="btn-primario hover-effect" data-tilt-perspective="200" data-tilt-speed="2000" data-tilt-max="35">Conheça a jornada</a>
							<div class="texto-complementar">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eusmod bibendm laoreet proin gravida.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- item -->
	<div class="topo-design-black"></div>
	<section class="section-black scroll-empresa section-empresa" id="empresa-06">
		<div class="section-content" id="empresa-006">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="box-textos">
							<div class="depoimento">
								<p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus tetur adipiscing elit euismod bibendum laoreet.</p>
								<p><strong>Lorem ispum, dolor sit e amet consec </strong> <span>Sócios da 99</span></p>
							</div>
							<a href="#" class="btn-primario hover-effect" data-tilt-perspective="200" data-tilt-speed="2000" data-tilt-max="35">Conheça a jornada</a>
							<div class="texto-complementar">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eusmod bibendm laoreet proin gravida.</p>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="box-images hover-effect" data-tilt-perspective="600" data-tilt-speed="2000" data-tilt-max="35">
							<div class="image">
								<?php img_template('Eduk_FundoBranco.png') ?>
							</div>
							<div class="logo">
								<?php img_template('_logos/logo2.png') ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- item -->
	<div class="topo-design-white"></div>
	<section class="section-final scroll-empresa section-white section-empresa" id="empresa-07">
		<div class="section-conteudo" id="empresa-007">
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<div class="texto-1">
							<h2>É por isso que investimos em pessoas inspiradoras, que incentivam relações mais justas, transparentes e colaborativas. </h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="texto-2">
							<p>Que usam a garra e a criatividade brasileiras para fortalecer suas empresas, fazer a diferença, transformar o nosso país em exemplo. <br> E, assim, construir novas possibilidades para um novo mundo. </p>
							<p><strong>Monashees. Juntos, criando novas realidades.</strong></p>
							<br>
							<a href="#" class="btn-primario hover-effect" data-tilt-perspective="200" data-tilt-speed="2000" data-tilt-max="35">Leia o manifesto completo</a>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		<div class="logo-people">
			<?php img_template('people.png') ?>
		</div>
	</section>

</div>

<div class="menu-empresas">
	<ul>
		<li><a href="#empresa-001"></a></li>
		<li><a href="#empresa-002"></a></li>
		<li><a href="#empresa-003"></a></li>
		<li><a href="#empresa-004"></a></li>
		<li><a href="#empresa-005"></a></li>
		<li><a href="#empresa-006"></a></li>
		<li><a href="#empresa-007"></a></li>
	</ul>
	<button type="button" class="btn-open-grid-empresas">
		<span></span>
		<span></span>
		<span></span>
		<span></span>
	</button>
</div>

<!-- apresentacao -->
<div class="videos">
	<section class="video-full video-1" data-vide-bg="<?php echo get_template_directory_uri(); ?>/_assets/_videos/video-3"></section>
	<section class="video-full video-2" data-vide-bg="<?php echo get_template_directory_uri(); ?>/_assets/_videos/video"></section>
</div>



<?php get_template_part('_parts/grid-empresas'); ?>
<?php get_template_part('_parts/popup-empresas'); ?>



<?php get_footer(); ?>