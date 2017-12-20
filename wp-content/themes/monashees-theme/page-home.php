<?php get_header(); 

if(isset($_GET['lang'])){
							
	$idioma = $_GET['lang'];							

	switch ($idioma) {
	
		case 'en':
			$carreira = "Career<br>Opportunities";
			break;
		case 'es':
			$carreira = "Oportunidades de<br>Empleo";
			break;
		case 'zh-hant':
			$carreira = "職業機會";
			break;

	}

}else{
	$carreira = "Oportunidades de<br>Carreira";
}
?>
<link rel="stylesheet" type="text/css" href="<?php echo $urlAtual ?>/wp-content/themes/monashees-theme/jquery.fullPage.css" />
<div class="topo">
	<div class="menu">
		<button class="btn-menu-site">
			<span></span>
			<span></span>
			<span></span>
		</button>
	</div>
</div>
<div id="fullpage">
	
	<div class="section video1">
		<div class="section-apresentacao">

			<video class="myVideo video1" loop muted controls="false" data-autoplay>
              <source data-src="<?php echo $urlAtual ?>/wp-content/themes/monashees-theme/imgs/video-3.mp4" type="video/mp4">
              <source data-src="<?php echo $urlAtual ?>/wp-content/themes/monashees-theme/imgs/video-3.webm" type="video/webm">
            </video>  
			<section class="topo">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="logo">
								<a href="<?php echo $urlAtual ?>">
								<?php img_template('monashees.png?v=1') ?>
								</a>
							</div>
						</div>
						<div class="col-md-9 col-xs-6">
							<div class="menu">
								<div class="menu-lingua">
									<a href="<?php echo site_url() ?>" class="por">POR</a>
									<a href="<?php echo site_url() ?>/?lang=en" class="en">ENG</a>
									<a href="<?php echo site_url() ?>/?lang=es" class="es">ESP</a>
									<a href="<?php echo site_url() ?>/?lang=zh-hant" class="zh-hant">CHI</a>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</section>		
			<div class="container">
				<div class="text">
					<div class="row">
						<div class="col-md-3 col-xs-1"></div>
						<div class="col-md-7 col-xs-10">
							<div class="texto-1">
								<?php the_field( 'texto-1-title' ); ?>								
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5 col-xs-3"></div>
						<div class="col-md-4 col-xs-8">
							<div class="texto-2">
								<?php the_field( 'texto-1-texto'); ?>
							</div>
						</div>
					</div>
				</div>
			
			</div>
    
		</div>

	</div>
	<div class="section video2">
		<div class="section-apresentacao">			
			<video class="myVideo video2" loop muted controls="false" data-autoplay >
              <source data-src="<?php echo $urlAtual ?>/wp-content/themes/monashees-theme/imgs/video.mp4" type="video/mp4">
              <source data-src="<?php echo $urlAtual ?>/wp-content/themes/monashees-theme/imgs/video.webm" type="video/webm">
            </video>  
			<!-- texto video -->
			
			<div class="container">
				<div class="text2">
					<div class="row">
						<div class="col-md-3 col-xs-1"></div>
						<div class="col-md-7 col-xs-10">
							<div class="texto-1">
								<?php the_field( 'texto-2-title' ); ?>							
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5 col-xs-3"></div>
						<div class="col-md-4 col-xs-8">
							<div class="texto-2">
								<?php the_field( 'texto-2-texto'); ?>
							</div>
						</div>
					</div>
				</div>


			</div>
		</div>
	

	</div>
	<div class="section bg-black">
		<div id="section3"></div>
		<div class="container" id="poligono">
			<div class="row">
				<div class="col-md-5"></div>
				<div class="col-md-6 col-xs-12">
					<section class="texto-1">
						<?php the_field( 'texto-3-texto' ); ?>
					</section>
				</div>
				<div class="col-xs-1"></div>
			</div>
		</div>

	</div>	

	<?php
	$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
	$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
	$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
	$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
	$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
	$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
	$symbian =  strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");
	if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian == true): 
?>
	
	<!--EMPRESAS MOBILE  -->
	<div class="section monashees monashees-full hidden-lg hidden-md">
		
		<div class="mobile-empresas">
			<!-- <h3>Conheça suas histórias</h3> -->
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
		
	</div>

	<!--FIM EMPRESAS MOBILE  -->
	
	<?php else : 
		if(!isset($_GET['lang'])){
			$idioma = 'pt-br';
		}else{
			$idioma = $_GET['lang'];
		}
		$querystr = "SELECT pm.meta_value, wp_posts.* 
					FROM wp_posts  
					JOIN wp_icl_translations t ON wp_posts.ID = t.element_id AND t.element_type = CONCAT('post_', wp_posts.post_type)  
					JOIN wp_postmeta pm on wp_posts.ID = pm.post_id
					WHERE wp_posts.post_type = 'empreendedores' 
					AND wp_posts.post_status = 'publish'
					AND ( ( t.language_code = '$idioma' AND wp_posts.post_type  IN ('post','page','acf-field-group','empreendedores','equipe' )  ) 
					OR wp_posts.post_type  NOT  IN ('post','page','acf-field-group','empreendedores','equipe' )  )  
					AND pm.meta_value = 'Preto' or  pm.meta_value = 'Branco'
					AND t.language_code = '$idioma' 
					AND wp_posts.post_status = 'publish'
					ORDER BY pm.meta_value DESC, RAND()
		";


		$emprees = $wpdb->get_results($querystr) or die(mysql_error());
		
		// shuffle($emprees);
		if ($emprees): 
		 	$i=0;
			
			foreach( $emprees as $empree) : 
				$i++;
				// if($i <=9){	

				$totalIds = $empree->ID.'-'.$totalIds;

			
			endforeach; 
			
		endif ;

		$exibirqnt = get_field( 'quantidade' );
		

		$totalIds = substr($totalIds,0,-1);
		$totalIds = explode('-',$totalIds);
		
		$totalArray = count($totalIds);
		$i = 1;
		$qtn = 1;
		$arrayqtn = $totalArray - 1;

		foreach($totalIds as $taot){
			if($qtn <= $exibirqnt){

				// echo $arrayqtn;
				// echo get_field( 'cor_background', $totalIds[$arrayqtn]);
				$textoDepoimento = get_field( 'depoimento-texto', $totalIds[$arrayqtn] );
				$textoComplemento = get_field( 'depoimento-complemento', $totalIds[$arrayqtn] );
				$socios = get_field( 'depoimento-socios', $totalIds[$arrayqtn] );
				$imagem = get_field( 'img-home', $totalIds[$arrayqtn] );
				$depoimentoPost = get_post($totalIds[$arrayqtn]);

				$arrayDepoimentos = get_field('depoimentos_socios',$totalIds[$arrayqtn] );
				$txtBt = get_field('btn-detalhes-label',$totalIds[$arrayqtn] );
				
				shuffle($arrayDepoimentos);
				// print_r($arrayDepoimentos);
				foreach($arrayDepoimentos as $dep){
					$nomeSocio =  $dep['nome_socio'];
					$textoDepo = $dep['conteudo_depoimento'];
				}

				$corFundo = get_field('cor_background', $totalIds[$arrayqtn]);
				
							
				if ($corFundo == 'Branco'){
					$layout = 'white';
					$c = 2;
					?>
					<div class="section section-white hidden-sm hidden-xs">
						<div class="section-empresa">				
							<div class="container btn-open-empresa" data-scroll="no" data-grid="false" data-carreira="<?php echo $_GET['lang']; ?>" data-empresa="<?php echo $totalIds[$arrayqtn]; ?>">
								<div class="row">
									<div class="col-xs-7">
										<div class="box-images">
											<?php if ($imagem): ?>
												<div class="image">
													 <img src="<?php echo $imagem['url']; ?>" alt="" class="img-responsive"> 
													<!-- <img src="<?php echo $urlAtual ?>/wp-content/themes/monashees-theme/imgs/img1.png" alt="" class="img-responsive"> -->
												</div>
											<?php endif ?>
										</div>
									</div>
									
									<div class="col-xs-5">
										<div class="box-textos">
											<?php if ($textoDepo): ?>
												<div class="depoimento">
													<p>
														<!-- O Hotelli surgiu do desejo de otimizar ao máximo o processo de aquisição de viagens para as empresas, atendendo a todas as necessidades das organizações nessa área de forma mais eficiente”. -->
													 <?php echo $textoDepo; ?> 
													</p>
													<p><strong><?php echo $nomeSocio; ?></strong> </p>
													<!-- <p><strong>Denis Pereira, Co-Founder & CEO</strong> </p> -->
												</div>
											<?php endif ?>
																		
										</div>						
									</div>					
								</div>
								<div class="row">
									<div class="col-xs-4"></div>
									<div class="col-xs-8">
										<div class="box-textos">
											<div class="texto-complementar">
												<p><?php echo $textoComplemento; ?></p>
												<!-- <p>O Hotelli facilita todos os processos relacionados a viagens corporativas. A empresa simplifica ao máximo o modo como as empresas compram viagens, gerando ganhos de eficiência relevantes em suas operações.</p> -->
												 
												<button type="button" class="btn-primario btn-open-empresa" data-scroll="no" data-grid="false" data-carreira="<?php echo $_GET['lang']; ?>" data-empresa="<?php echo $totalIds[$arrayqtn]; ?>">
													<?php echo $txtBt ?>
													<img src="<?php echo $urlAtual ?>/wp-content/themes/monashees-theme/imgs/ico_btn.png" alt="<?php echo $txtBt ?>">
												</button> 
												
												<!-- <button type="button" class="btn-primario btn-open-empresa" data-scroll="no" data-grid="false"  data-empresa="<?php echo $totalIds[$arrayqtn]; ?>">
													Saiba mais 
													<img src="<?php echo $urlAtual ?>/wp-content/themes/monashees-theme/imgs/ico_btn.png" alt="">
												</button> -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
				}else{
					$layout = 'black';
					$c = 1;
					?>
						<div class="section section-black hidden-sm hidden-xs">
							<div class="section-empresa">				
								<div class="container btn-open-empresa" data-scroll="no" data-grid="false" data-carreira="<?php echo $_GET['lang']; ?>" data-empresa="<?php echo $totalIds[$arrayqtn]; ?>">
									<div class="row">
										<div class="col-xs-5">
											<div class="box-textos">
												<?php if ($textoDepo): ?>
													<div class="depoimento">
													<p>
														<!-- O Hotelli surgiu do desejo de otimizar ao máximo o processo de aquisição de viagens para as empresas, atendendo a todas as necessidades das organizações nessa área de forma mais eficiente”. -->
													 <?php echo $textoDepo; ?>
													</p>
													 <p><strong><?php echo $nomeSocio; ?></strong> </p> 
													<!-- <p><strong>Denis Pereira, Co-Founder & CEO</strong> </p> -->
												</div>
												<?php endif ?>
												
												
												
											</div>
											
										</div>
										<div class="col-xs-7">
											<div class="box-images">
												<?php if ($imagem): ?>
													<div class="image">
														 <img src="<?php echo $imagem['url']; ?>" alt="" class="img-responsive"> 
														<!-- <img src="<?php echo $urlAtual ?>/wp-content/themes/monashees-theme/imgs/img2.png" alt="" class="img-responsive"> -->
													</div>	
												<?php endif ?>
												
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-8">
											<div class="box-textos">
												<div class="texto-complementar">
													<p><?php echo $textoComplemento; ?></p>
													<!-- <p>O Hotelli facilita todos os processos relacionados a viagens corporativas. A empresa simplifica ao máximo o modo como as empresas compram viagens, gerando ganhos de eficiência relevantes em suas operações.</p> -->
													<button type="button" class="btn-primario btn-open-empresa" data-scroll="no" data-grid="false" data-carreira="<?php echo $_GET['lang']; ?>" data-empresa="<?php echo $totalIds[$arrayqtn]; ?>">
													<?php echo $txtBt ?>
													<img src="<?php echo $urlAtual ?>/wp-content/themes/monashees-theme/imgs/ico_btn.png" alt="<?php echo $txtBt ?>">
												</button> 
												
												<!-- <button type="button" class="btn-primario btn-open-empresa" data-scroll="no" data-grid="false"  data-empresa="<?php echo $totalIds[$arrayqtn]; ?>">
													Saiba mais 
													<img src="<?php echo $urlAtual ?>/wp-content/themes/monashees-theme/imgs/ico_btn.png" alt="">
												</button> -->
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php
				}
					
				$nome_empree = "'".$depoimentoPost->post_name."'";
				$listaMenu = $listaMenu .'<li><a href="javascript: mover_topico('.$nome_empree.')"></a></li>';
				?>
				
				<?php
				
				
				if($arrayqtn > ($totalArray/2)){
					$novoArray = $arrayqtn; 
					if($totalArray == ($arrayqtn+1)){
						$arrayqtn = $totalArray - $arrayqtn;
					}else{
						$arrayqtn = $totalArray - $novoArray;
					}
					
				}else{
					if(($totalArray-$novoArray) == $arrayqtn){
						$arrayqtn = $novoArray - 1;
					}else{
						$arrayqtn = $totalArray - $novoArray;
					}
					
				}
				
				$i++;
				$qtn++; 
			}else{
				break;
			}
			
		}
	
	endif; ?>
	
	<div class="section section-white" id="fechamento">
		<div class="section-fechamento">			
			
			<div class="container">
				<div class="text2">
					<div class="row">
						
						<div class="col-md-8 col-xs-12">
							<div class="texto-1">
								<?php the_field( 'texto-4-title' ); ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-8 col-xs-12">
							<div class="texto-2">
								<?php the_field( 'texto-4-texto'); ?>								
							</div>
						</div>
					</div>
				</div>


			</div>
		</div>
		<div class="logo-people-home">
			<div class="people">				
				<img class="img-responsive" src="<?php echo $urlAtual ?>/wp-content/themes/monashees-theme/_assets/_imgs/monashees.png?v=1" alt="">			
			</div>
		</div>
	
	</div>
</div>


<?php get_template_part('_parts/menu-empresas'); ?>
<?php get_template_part('_parts/grid-empresas'); ?>
<?php get_template_part('_parts/popup-empresas'); ?>

<?php get_footer(); ?>


<link rel="stylesheet" type="text/css" href="<?php echo $urlAtual ?>/wp-content/themes/monashees-theme/styleSite.css" />
<script type="text/javascript" src="<?php echo $urlAtual ?>/wp-content/themes/monashees-theme/_assets/_js/jquery.fullPage.js"></script>

<script type="text/javascript">
	
	jQuery(document).ready(function() {
		
		
		var vids = $(".myVideo"); 
		$.each(vids, function(){
			this.controls = false; 
		}); 
		jQuery(document).on('click', '.btn-close-modal', function(e) {
			e.preventDefault();				
			$.fn.fullpage.setAllowScrolling(true);
		});
		
		jQuery(document).on('click', '.btn-open-empresa', function(e) {
			e.preventDefault();				
			$.fn.fullpage.setAllowScrolling(false);
		});
		var segu = 1200;	
		function initialization(){
			jQuery('#fullpage').fullpage({						
				navigation: true,
				navigationPosition: 'right',
				scrollingSpeed: 1000,
				autoScrolling:true,
				responsiveWidth: 1026,
					afterResponsive: function(isResponsive){					
				},
				onLeave: function(index, nextIndex, direction){
					if(nextIndex === 3){
					var destinationSection = jQuery('.section').eq(nextIndex-1);
					destinationSection.addClass('load-background');
					}						
				},					
				
				// onLeave: function(index, nextIndex, direction){						
					
				// 	if (nextIndex == 2 && direction == 'up'){
						
				// 		jQuery('#section3').animate({
				// 			bottom: '100px'
				// 		});
						
				// 	}
				// 	if(nextIndex == 3){
						
				// 		jQuery('#section3').animate({
				// 			bottom: '0px'
				// 		});
				// 	}
				// 	if(nextIndex == 3 && direction == 'down'){
				// 		jQuery('#section3').animate({
				// 			bottom: '0px'
				// 		});

				// 	}
				// 	if(nextIndex == 4){						
				// 		jQuery('#section3').animate({
				// 			bottom: '100px'
				// 		});							
				// 	}	
				// },
			});
		
		}	
		initialization();
		// if(jQuery(document).width() <= 992){
		// 	// jQuery.fn.fullpage.setAutoScrolling(false);
		// }
		
		jQuery(window).resize(function(){
			if(jQuery(document).width() <= 992){
				// jQuery.fn.fullpage.setAutoScrolling(false);				
			}else{
				jQuery.fn.fullpage.setAutoScrolling(true);
			}
		});
		jQuery('#fp-nav ul').append('<li><div id="emp-lista" class="open-grid-empresas"><span></span><span></span><span></span><span></span></div></li>');
		var grid = false;

		$('.open-grid-empresas').on('click', function(){			
			jQuery.fn.fullpage.setAllowScrolling(false);
			grid = true;
			$('.grid-empresas').addClass('on');
			$('body').addClass('no-overflow');
			$('.menu-site').fadeOut(300);

			var galeriaGrid2 = $('.grid-empresas .itens').isotope({
				itemSelector: '.item',
				layoutMode: 'packery',
			});
		})
		$('#btn-fechar-empresas').on('click', function(){	
			jQuery.fn.fullpage.setAllowScrolling(true);
		});
	});
	

</script>