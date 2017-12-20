<?php
class moTax {
	protected $labels = array();
	protected $arguments = array();
	public function __construct( $name, $slug, $object_type ) {
		$this->name        = $name;
		$this->slug        = $slug;
		$this->object_type = $object_type;
		add_action( 'init', array( &$this, 'register_taxonomy' ) );
	}
	public function setLabels( $labels = array() ) {
		$this->labels = $labels;
	}
	public function setArguments( $arguments = array() ) {
		$this->arguments = $arguments;
	}
	protected function labels() {
		$default = array(
			'name'                       => __( $this->name            , 'mundoon' , $this->name),
			'singular_name'              => __( $this->name            , 'mundoon' , $this->name),
			'add_or_remove_items'        => __( 'Adicionar ou remover' , 'mundoon' , $this->name),
			'view_item'                  => __( 'Visualizar'           , 'mundoon' , $this->name),
			'edit_item'                  => __( 'Editar'               , 'mundoon' , $this->name),
			'search_items'               => __( 'Buscar'               , 'mundoon' , $this->name),
			'update_item'                => __( 'Atualizar'            , 'mundoon' , $this->name),
			'parent_item'                => __( 'Parent:'              , 'mundoon' , $this->name),
			'parent_item_colon'          => __( 'Parent:'              , 'mundoon' , $this->name),
			'menu_name'                  => __( $this->name            , 'mundoon' , $this->name),
			'add_new_item'               => __( 'Adicionar'            , 'mundoon' , $this->name),
			'new_item_name'              => __( 'Novo'                 , 'mundoon' , $this->name),
			'all_items'                  => __( 'Todos'                , 'mundoon' , $this->name),
			'separate_items_with_commas' => __( 'Separar'              , 'mundoon' , $this->name),
			'choose_from_most_used'      => __( 'Mais utilizados'      , 'mundoon' , $this->name)
		);
		return array_merge( $default, $this->labels );
	}
	protected function arguments() {
		$default = array(
			'labels'            => $this->labels(),
			'hierarchical'      => true, // Like categories.
			'public'            => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => true,
		);
		return array_merge( $default, $this->arguments );
	}
	public function register_taxonomy() {
		register_taxonomy( $this->slug, $this->object_type, $this->arguments() );
	}
}