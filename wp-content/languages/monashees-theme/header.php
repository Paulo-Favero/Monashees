<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php the_field( 'site-titulo', 'options' ); ?></title>
	<meta charset="UTF-8">
	<meta name="revisit-after" content="5" />
	<base href="" />
	<!-- responsivo -->
	<meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
	<!-- app -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="application-name" content="">
	<!-- seo -->
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!-- author -->
	<meta name="author" content=""/>
	<!-- icons -->
	<link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="favicon.ico">
	<link rel="apple-touch-icon" sizes="57x57" href="favicon-57.png">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="favicon-57.png">
	<link rel="apple-touch-icon" sizes="72x72" href="favicon-72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="favicon-114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="favicon-120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="favicon-144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="favicon-152.png">
	<!-- facebook -->
	<meta property="og:url" content="" />
    <meta property="og:title" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta property="og:type" content="website" />
    <!-- wp -->
	<?php wp_head(); ?>
</head>
<body class="smooth-scroll">


	<div class="menu-site">
		<div class="topo-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-6">
						<?php img_template('monashees.png?v=1') ?>
					</div>
					<div class="col-xs-6 text-right">
						<button class="btn-close-menu">
							<span class="ion-close-round"></span>
						</button>
					</div>
				</div>
			</div>
		</div>
		<nav>
			<?php mo_site_menu('menu-topo');?>
		</nav>
		<div class="menu-lingua">
			<a href="<?php echo site_url() ?>">POR</a>
			<a href="<?php echo site_url() ?>/?lang=en">ENG</a>
			<a href="<?php echo site_url() ?>/?lang=es">ESP</a>
			<a href="<?php echo site_url() ?>/?lang=zh-hant">CHI</a>
		</div>
	</div>

	<section class="topo" id="inicio">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-6">
					<div class="logo">
						<a href="<?php bloginfo('url') ?>">
						<?php img_template('monashees.png?v=1') ?>
						</a>
					</div>
				</div>
				<div class="col-md-9 col-xs-6">
					<div class="menu">
						<div class="menu-lingua">
							<a href="<?php echo site_url() ?>">POR</a>
							<a href="<?php echo site_url() ?>/?lang=en">ENG</a>
							<a href="<?php echo site_url() ?>/?lang=es">ESP</a>
							<a href="<?php echo site_url() ?>/?lang=zh-hant">CHI</a>
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
