<?php wp_footer(); 
    
    $url1 = $_SERVER['SERVER_NAME']; 
	$url2 = $_SERVER ['REQUEST_URI'];
	$url2final = explode('?', $url2);
	$urlPage = 'http://' . $url1 . $url2final[0];
?>

<footer>
    
	<div class="logo-people-home">
		<div class="people">				
			<img class="img-responsive" src="http://monashees.wpengine.com/wp-content/themes/monashees-theme/_assets/_imgs/monashees.png?v=1" alt="">			
		</div>
	</div>

</footer>
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
        <a href="<?php echo $urlPage ?>" class="por">POR</a>
        <a href="<?php echo $urlPage ?>?lang=en" class="en">ENG</a>
        <a href="<?php echo $urlPage ?>?lang=es" class="es">ESP</a>
        <a href="<?php echo $urlPage ?>?lang=zh-hant" class="zh-hant">CHI</a>
    </div>
</div>

</body>
</html>
<link rel="stylesheet" type="text/css" href="<?php echo $urlAtual ?>/wp-content/themes/monashees-theme/_assets/_css/bootstrap-select.css" />
<script type="text/javascript" src="<?php echo $urlAtual ?>/wp-content/themes/monashees-theme/_assets/_js/bootstrap-select.min.js"></script>
<?php
    
    if(isset($_GET['lang'])){
        $idMenu = $_GET['lang'];
?>
    <script>
        $ = jQuery;
        jQuery(document).ready(function(){
            jQuery('.<?php echo $idMenu?>').addClass('active');
        })
    </script>	
<?php
    }else{
?>
    <script>			
        jQuery(document).ready(function(){
            jQuery('.por').addClass('active');
        })
    </script>	
<?php
}
?>