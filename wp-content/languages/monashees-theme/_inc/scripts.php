<?php


/******************************************************************
	* Scripts do site
*******************************************************************/

function app_scripts() {

	wp_register_script( 'site', get_template_directory_uri() . '/_assets/_js/app-min.js' , 'jquery', rand(0,20000000), true );
	


	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'site' );


	// style site
	wp_enqueue_style( 'site', get_stylesheet_uri(), 1, rand(0,20000000), 'all' );


	wp_localize_script( 'site', 'site',
	    array( 
	        'ajaxurl' => admin_url( 'admin-ajax.php' ),
	    )
	);

}

add_action("wp_enqueue_scripts", "app_scripts", 99);

