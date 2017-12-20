<?php
class moCpt{
	protected $labels = [];
	protected $arguments = [];
	
	public function __construct($name, $slug){
		$this->name = $name;
		$this->slug = $slug;
		add_action('init', [$this,'register_post_type']);
	}
	
	public function setLabels($labels = []){
		$this->labels = $labels;
	}

	public function setArguments($arguments = []){
		$this->arguments = $arguments;
	}

	protected function labels() {
		$default = array(
			'name'                  => __( $this->name                 , 'Post'  , 'mundoon' ) ,
			'singular_name'         => __( $this->name                 , 'Post' , 'mundoon' ) ,
			'menu_name'             => __( $this->name                 , 'mundoon' ),
			'name_admin_bar'        => __( $this->name                 , 'mundoon' ),
			'archives'              => __( 'Arquivo'                   , 'mundoon' ),
			'parent_item_colon'     => __( 'Parent Item:'              , 'mundoon' ),
			'all_items'             => __( $this->name                 , 'mundoon' ),
			'add_new_item'          => __( 'Adicionar'                 , 'mundoon' ),
			'add_new'               => __( 'Adicionar'                 , 'mundoon' ),
			'new_item'              => __( 'Novo'                      , 'mundoon' ),
			'edit_item'             => __( 'Editar'                    , 'mundoon' ),
			'update_item'           => __( 'Atualizar'                 , 'mundoon' ),
			'view_item'             => __( 'Ver'                       , 'mundoon' ),
			'search_items'          => __( 'Buscar'                    , 'mundoon' ),
			'not_found'             => __( 'Não encontrado'            , 'mundoon' ),
			'not_found_in_trash'    => __( 'Não encontrado na lixeira' , 'mundoon' ),
			'featured_image'        => __( 'Imagem principal'          , 'mundoon' ),
			'set_featured_image'    => __( 'Inserir imagem'            , 'mundoon' ),
			'remove_featured_image' => __( 'Remover imagem'            , 'mundoon' ),
			'use_featured_image'    => __( 'Usar imagem'               , 'mundoon' ),
			'insert_into_item'      => __( 'Inserir'                   , 'mundoon' ),
			'uploaded_to_this_item' => __( 'Upload'                    , 'mundoon' ),
			'items_list'            => __( 'Item'                      , 'mundoon' ),
			'items_list_navigation' => __( 'Navegar'                   , 'mundoon' ),
			'filter_items_list'     => __( 'Filtrar'                   , 'mundoon' ),
		);
		return array_merge( $default, $this->labels );
	}
	protected function arguments() {
		$default = array(
			'labels'              => $this->labels(),
			'capability_type'     => 'post',
			'hierarchical'        => false,
			'supports'            => array( 'title', 'editor', 'revisions', 'author'),
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'show_in_nav_menus'   => true,
			'publicly_queryable'  => true,
			'exclude_from_search' => false,
			'has_archive'         => true,
			'query_var'           => true,
			'can_export'          => true,
			'rewrite'             => true
		);
		return array_merge( $default, $this->arguments );
	}
	public function register_post_type() {
		register_post_type( $this->slug, $this->arguments() );
	}
}
