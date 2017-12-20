<?php


add_theme_support( 'title-tag' );


/*****************************************************
* Classes
*****************************************************/

include_once('_core/cpt.class.php');
include_once('_core/tax.class.php');
include_once('_core/wp-metas-clear.php');
include_once('_core/fn-helpers.php');
include_once('_core/img-resize.php');
include_once('_core/funcoes.php');
include_once('_inc/scripts.php');


/*****************************************************
* Classes
*****************************************************/

function  regiao_filter_ajax(){}
add_action('wp_ajax_nopriv_regiao_filter_ajax', 'regiao_filter_ajax');
add_action( 'wp_ajax_regiao_filter_ajax', 'regiao_filter_ajax' );




/*****************************************************
* AJAX
*****************************************************/

include_once('_parts/ajax-fn-equipe.php');
include_once('_parts/ajax-fn-empresas.php');
include_once('_parts/ajax-fn-busca.php');

/*****************************************************
* Classes
*****************************************************/

// destaques
$empreendedores = new moCpt('Empreendedores', 'empreendedores');
$empreendedores->setArguments(
	[
		'supports' => array('title', 'editor'),
		'menu_icon'=> 'dashicons-media-text',
	]
);
$tax_pais = new moTax( 'País', 'pais', ['empreendedores']);
$tax_seguimento = new moTax( 'Segmento', 'segmento', ['empreendedores']);
$tax_presenca = new moTax( 'Presença', 'presenca', ['empreendedores']);



// destaques
$equipe = new moCpt('Equipe', 'equipe');
$equipe->setArguments(
	[
		'supports' => array('title', 'editor'),
		'menu_icon'=> 'dashicons-media-text',
	]
);
$tax_funcao = new moTax( 'Função', 'funcao', ['equipe']);



mo_options_subpage('Texto Equipe', 'edit.php?post_type=equipe', 'manage_options');
mo_options_subpage('Outros', 'options-general.php', 'manage_options');



function my_acf_init() {
	acf_update_setting('google_api_key', 'AIzaSyCu1GkFIhRzRcw7MyQ__2s_qXe9yl0o_J8');
}

add_action('acf/init', 'my_acf_init');





add_action( 'pre_get_posts', function ( $query ) {
if ( $query->is_post_type_archive( 'produtos' ) || is_tax( 'estado' ) && $query->is_main_query() && ! is_admin() ) {
    $query->set( 'posts_per_page', -1 );
  }
});

/*****************************************************
* MENU
*****************************************************/

function mundoon_admin_menu(){
    $configWPmenus = [
		'index.php',
		'edit.php',
		'upload.php',
		//'edit.php?post_type=page',
		'edit-comments.php',
		//'themes.php',
		//'plugins.php',
		//'users.php',
		//'tools.php',
		//'edit.php?post_type=acf-field-group',
		'admin.php?page=icwp-wpsf-plugin'
	];
	
	foreach ($configWPmenus as $menu) {
    	remove_menu_page($menu);
    }
}
add_action( 'admin_menu', 'mundoon_admin_menu' );



/*****************************************************
* menus
*****************************************************/

function site_menu() {
    register_nav_menu('menu-topo', 'Menu Topo');
}

add_action('after_setup_theme', 'site_menu');


add_filter( 'gform_confirmation_anchor', '__return_false' );



