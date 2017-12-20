<?php

function img_template($file){
	echo "<img class='img-responsive' src='" . get_template_directory_uri() . "/_assets/_imgs/" . $file . "' alt=''>";
}

function img_template_url($file){
	echo get_template_directory_uri() . "/_assets/_imgs/" . $file;
}


/****************************************************
* TIRA ACENTOS E ESPAÇOS DE UMA STRING 
*****************************************************/

function mo_id($string) {
    $what   = array( 'ä','ã','à','á','â','ê','ë','è','é','ï','ì','í','ö','õ','ò','ó','ô','ü','ù','ú','û','À','Á','É','Í','Ó','Ú','ñ','Ñ','ç','Ç',' ','(',')',',',';',':','|','!','"','#','$','%','&','/','=','?','~','^','>','<','ª','º' );
    $by     = array( 'a','a','a','a','a','e','e','e','e','i','i','i','o','o','o','o','o','u','u','u','u','A','A','E','I','O','U','n','n','c','C','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_' );
    return str_replace($what, $by, strtolower(str_replace(" ", "-", $string)));
}

add_action('init', function () {
	ob_start();
});


/****************************************************
* DEBUG 
*****************************************************/
function modebug($var, $t='pr'){
	if ($t=='vd') {
		echo "<pre>";
			var_dump($var);
		echo "</pre>";
	}elseif($t=='pr'){
		echo "<pre>";
			print_r($var);
		echo "</pre>";
	}else{
		echo "<pre>";
			echo "Parâmetro inválido. Utilize 'vd' para var_dump e 'pr' para print_r.";
		echo "</pre>";
	}
}