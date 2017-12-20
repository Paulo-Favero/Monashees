<?php

function detalhesEmpresa(){
	$empresaID = $_GET['empresaID'];
	$grid = $_GET['grid'];
	if(isset($_GET['carreira'])){
		$carreira = $_GET['carreira'];
	}else{
		$carreira = "";
	}
	
	
	$logo = get_field( 'img-logo-colorida', $empresaID ); 
	?>
		<button type="button" class="btn-close-modal" data-body-scroll="false" data-dismiss="modal">
			<span class="ion-close-round"></span>
		</button>
		<div class="detalhes-empreendedor">
			<div class="apresentacao">
				<div class="row">
					<div class="col-md-5">
						<?php if ($logo): ?>
							<div class="hidden-lg hidden-md">
								<img src="<?php echo $logo['url']; ?>" alt="" class="img-responsive" style="margin-bottom: 20px">
							</div>
						<?php endif ?>
						<div class="texto">
							<?php echo wpautop(get_post_field('post_content', $empresaID)); ?>							
							
								<br>
								<h4><?php the_field( 'localizacao-titulo', $empresaID ); ?></h4>
								<p><?php the_field( 'localizacao-endereco', $empresaID ); ?></p>
							<?php
								$apple = get_field( 'apple-store-url', $empresaID );
								$android = get_field( 'google-play-url', $empresaID );
								$site = get_field( 'site-url', $empresaID );
							?>
							<?php if ($apple || $android): ?>
								<div class="links-apps">
									<ul>
										<?php if ($apple): ?>
											<li>
												<a href="<?php echo $apple; ?>"  target="_blank">
													<div class="ico-loja">
														<span class="ion-social-apple"></span>
													</div>
													<div class="texto-loja">App Store</div>
												</a>
											</li>
										<?php endif ?>
										<?php if ($android): ?>
											<li>
												<a href="<?php echo $android; ?>"  target="_blank">
													<div class="ico-loja">
														<span class="ion-social-android"></span>
													</div>
													<div class="texto-loja">Google Play</div>
												</a>
											</li>
										<?php endif ?>
									</ul>
								</div>
							<?php endif ?>
							<?php if ($site): ?>
								<div class="link-site">
									<a href="<?php echo 'http://' . str_replace('http://','',$site) ?>" target="_blank"><?php echo str_replace('http://','',$site); ?></a>
								</div>
							<?php endif ?>
							
							
						</div>
					</div>
					<div class="col-md-7">
						<?php $imagem = get_field( 'img-popup', $empresaID ); ?>
						<?php if ($imagem): ?>
							<div class="foto">
								<br><br>
								<img src="<?php echo $imagem['url']; ?>" alt="" class="img-responsive">
							</div>
						<?php endif ?>
						
						<?php if ($logo): ?>
							<div class="logo hidden-sm hidden-xs">
								<img src="<?php echo $logo['url']; ?>" alt="" class="img-responsive">
							</div>
						<?php endif ?>
					</div>
				</div>
			</div>
			<div class="texto-sobre">
				<?php the_field( 'texto-apresentacao', $empresaID ); ?>
				
				
			</div>
			<?php if (have_rows('na-midia', $empresaID)): ?>
				<!-- <div class="na-midia">
					<h4><?php the_field( 'na-midia-titulo', $empresaID ); ?></h4>
					<div class="materias">
						<div class="row">
							<?php while(have_rows('na-midia', $empresaID)) : the_row(); ?>
							<div class="col-md-6">
								<div class="item">
									<?php $capa = get_sub_field( 'materia-foto'); ?>
									<?php if ($capa): ?>
										<div class="capa">
											<span>
												<img src="<?php echo $capa['url']; ?>" alt="" class="img-responsive">
											</span>
										</div>
									<?php endif ?>
									<div class="texto">
										<h5><?php the_sub_field( 'materia-titulo'); ?></h5>
										<p><?php the_sub_field( 'materia-resumo'); ?></p>
										<a href="<?php the_sub_field( 'materia-link-url'); ?>"><?php the_sub_field( 'materia-link-label'); ?> &raquo;</a>
									</div>
								</div>
							</div>
							<?php endwhile; ?>
						</div>
					</div>
				</div> -->
			<?php endif ?>
			<div class="empresa-localizacao">
				<div class="row">
					<?php $localizacao =  get_field( 'localizacao-endereco', $empresaID ); ?>
					<?php if ($localizacao): ?>
					<div class="col-md-4">
						<div class="box-localizacao">
							<div class="texto">
								<!-- <h4>Headquarters<?php #the_field( 'localizacao-titulo', $empresaID ); ?></h4>
								<p><?php the_field( 'localizacao-endereco', $empresaID ); ?></p> -->
							</div>
						</div>
					</div>
					<?php endif ?>
					<?php $presencas = get_the_terms($empresaID,'presenca'); ?>
					<?php if ($presencas): ?>
					<!-- <div class="col-md-4">
						<?php $language = ICL_LANGUAGE_CODE; ?>
						<div class="box-presenca">
							<h4><?php echo the_field( 'empresas-presenca-label', 'options' ); ?></h4>
							<ul>
								<?php foreach($presencas as $presenca) : ?>
								<li><span><?php echo $presenca->name ?></span></li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div> -->
					<?php endif ?>
				</div>
				<?php $linkcarreiras = get_field( 'oportunidades-link', $empresaID ); ?>
				<?php if ($linkcarreiras): ?>
					<div class="carreiras">
						<a href="<?php echo $linkcarreiras; ?>"   target="_blank"></a>
						<div class="ico"></div>
						<div class="carreira-texto">
						<?php #the_field( 'empresas-oportunidades-label', 'options' ); ?> 
						<?php

						if(isset($carreira)){
							switch ($carreira) {							
								case 'en':
									echo "Career<br>Opportunities";
									break;
								case 'es':
									echo "Oportunidades de<br>Empleo";
									break;
								case 'zh-hant':
									echo "職業機會";
									break;
								default:
									echo "Oportunidades de<br>Carreira";
							}

						}else{
							echo "Oportunidades de<br>Carreira";
						}
						?>
						&raquo;</div>
					</div>
				<?php endif ?>
			</div>
		</div>
	
	<?php
	exit;
}

add_action('wp_ajax_nopriv_detalhesEmpresa', 'detalhesEmpresa');
add_action( 'wp_ajax_detalhesEmpresa', 'detalhesEmpresa' );
