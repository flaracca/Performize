<?php

class FABEV{

    private static $instance;
    
    public $Version;

	public function __construct() {

        
        $this->IncludeFiles();
        $this->DefineConstants();
        $this->Installation();
        $this->Evento_post_type();
        $this->TipoEvento_post_type();
        $this->Localita_post_type();
        $this->Pubblicita_post_type();

    }

	public static function instance() {

		if ( ! isset( self::$instance ) && ! ( self::$instance instanceof FABEV ) ) {

            
            self::$instance = new FABEV();
            
		}

        return self::$instance;

    }

    private function IncludeFiles() : void {}

    private function DefineConstants() : void {

        // Ajax URL.
        if ( ! defined( 'AJAX_URL' ) ) {
            define( 'AJAX_URL', admin_url('admin-ajax.php') );
        }

        if ( ! defined( 'FABEV_KEY' ) ) {
            define( 'FABEV_KEY', 'xOikl9!df0' );
        }

        // Plugin Folder Path.
        if ( ! defined( 'FABEV_DIR' ) ) {
            define( 'FABEV_DIR', plugin_dir_path( dirname( __FILE__, 1) ) );
        }

        // Plugin Folder URL.
        if ( ! defined( 'FABEV_URL' ) ) {
            define( 'FABEV_URL', plugin_dir_url( dirname( __FILE__, 1) ) );
        }

        // Others in class-main.php->DefineConstants
        // Site URL.
        if ( ! defined( 'FABEV_SITEURL' ) ) {
            define( 'FABEV_SITEURL', site_url() );
        }

        // Prefisso per le tabelle del plugin
        if ( ! defined( 'FABEV_DBPREFIX' ) ) {
            define( 'FABEV_DBPREFIX', 'FABEV_' );
        }

        // Prefisso WP
        if ( ! defined( 'FABEV_WPPREFIX' ) ) {
            global $wpdb;
            define( 'FABEV_WPPREFIX', $wpdb->prefix );
        }

        // Full Prefix Plugin Tables
        if ( ! defined( 'FABEV_PREFIX' ) ) {
            define( 'FABEV_PREFIX', FABEV_WPPREFIX . FABEV_DBPREFIX );
        }

        if ( ! defined( 'FABEV_PLUGIN_NAME' ) ) {
            define( 'FABEV_PLUGIN_NAME', plugin_basename(dirname( __FILE__, 1)) );
        }
    }
    
    private function Installation(){

        $installedVersion = get_option('FABEV_VERSION', '0.0.0');
        
        $debug = false;
        
        if ( $installedVersion == FABEV_VERSION && $debug == false ){
        
            // latest version installed
            return;

        } else {

            // is installed version older than this version?
            
            if ( version_compare(FABEV_VERSION, $installedVersion) == 1 OR $debug == true){
                
                
            }

        }
    }

    private function TipoEvento_post_type(){
        
        $labels = array(
            'name'                  => _x( 'Tipo Evento', 'Post type general name', 'fabeventi' ),
            'singular_name'         => _x( 'Tipo Evento', 'Post type singular name', 'fabeventi' ),
            'menu_name'             => _x( 'Tipo Evento', 'Admin Menu text', 'fabeventi' ),
            'name_admin_bar'        => _x( 'name_admin_bar', 'Add New on Toolbar', 'fabeventi' ),
            'add_new'               => __( 'Aggiungi nuovo', 'fabeventi' ),
            'add_new_item'          => __( 'Aggiungi nuovo Tipo Evento', 'fabeventi' ),
            'new_item'              => __( 'Nuovo Tipo Evento', 'fabeventi' ),
            'edit_item'             => __( 'Modifica Tipo Evento', 'fabeventi' ),
            'view_item'             => __( 'Vedi Tipo Evento', 'fabeventi' ),
            'all_items'             => __( 'Tutti', 'fabeventi' ),
            'search_items'          => __( 'Cerca Tipo Evento', 'fabeventi' ),
            'not_found'             => __( 'Nessuna Tipo Evento trovata.', 'fabeventi' ),
            'not_found_in_trash'    => __( 'Nessuna Tipo Evento trovata nel cestino.', 'fabeventi' ),
            'archives'              => _x( 'Archivi di Tipo Evento', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'fabeventi' ),
            'insert_into_item'      => _x( 'Inserisci in Tipo Evento', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'fabeventi' ),
            'filter_items_list'     => _x( 'Filtra Tipo Evento', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'fabeventi' ),
            'items_list_navigation' => _x( 'Navigazione Elenco Tipo Evento', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'fabeventi' ),
            'items_list'            => _x( 'Elenco Tipo Evento', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'fabeventi' ),
        );     
        $args = array(
            'labels'             => $labels,
            'description'        => 'Tipo Evento custom post type.',
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'tipoevento' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => 20,
            'supports'           => array( 'title' ),
            'show_in_rest'       => true,
            'public'            => false
        );

        register_post_type( 'tipoevento', $args );

        

    }

    private function Evento_post_type(){
        
        $labels = array(
            'name'                  => _x( 'Eventi', 'Post type general name', 'fabeventi' ),
            'singular_name'         => _x( 'Evento', 'Post type singular name', 'fabeventi' ),
            'menu_name'             => _x( 'Eventi', 'Admin Menu text', 'fabeventi' ),
            'name_admin_bar'        => _x( 'name_admin_bar', 'Add New on Toolbar', 'fabeventi' ),
            'add_new'               => __( 'Aggiungi nuovo', 'fabeventi' ),
            'add_new_item'          => __( 'Aggiungi nuovo Evento', 'fabeventi' ),
            'new_item'              => __( 'Nuovo Evento', 'fabeventi' ),
            'edit_item'             => __( 'Modifica Evento', 'fabeventi' ),
            'view_item'             => __( 'Vedi Evento', 'fabeventi' ),
            'all_items'             => __( 'Tutti', 'fabeventi' ),
            'search_items'          => __( 'Cerca Eventi', 'fabeventi' ),
            'not_found'             => __( 'Nessun Evento trovata.', 'fabeventi' ),
            'not_found_in_trash'    => __( 'Nessun Evento trovata nel cestino.', 'fabeventi' ),
            'archives'              => _x( 'Archivi di Eventi', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'fabeventi' ),
            'insert_into_item'      => _x( 'Inserisci in Evento', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'fabeventi' ),
            'filter_items_list'     => _x( 'Filtra Eventi', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'fabeventi' ),
            'items_list_navigation' => _x( 'Navigazione Elenco Eventi', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'fabeventi' ),
            'items_list'            => _x( 'Elenco Eventi', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'fabeventi' ),
        );     
        $args = array(
            'labels'             => $labels,
            'description'        => 'Evento custom post type.',
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'evento' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => 20,
            'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'taxonomies'         => array( 'evento_category', 'evento_tag' ),
            'show_in_rest'       => true
        );

        register_post_type( 'evento', $args );

        register_taxonomy( 'evento_category', 
						'evento', 
						array(
							'label'        => __( 'Categorie', 'fabeventi' ),
							'rewrite'      => array( 'slug' => 'evento_category' ),
							'hierarchical' => true,
						) 
					);


    }

    private function Localita_post_type(){
        
        $labels = array(
            'name'                  => _x( 'Località', 'Post type general name', 'fabeventi' ),
            'singular_name'         => _x( 'Località', 'Post type singular name', 'fabeventi' ),
            'menu_name'             => _x( 'Località', 'Admin Menu text', 'fabeventi' ),
            'name_admin_bar'        => _x( 'name_admin_bar', 'Add New on Toolbar', 'fabeventi' ),
            'add_new'               => __( 'Aggiungi nuova', 'fabeventi' ),
            'add_new_item'          => __( 'Aggiungi nuova Località', 'fabeventi' ),
            'new_item'              => __( 'Nuova Località', 'fabeventi' ),
            'edit_item'             => __( 'Modifica Località', 'fabeventi' ),
            'view_item'             => __( 'Vedi Località', 'fabeventi' ),
            'all_items'             => __( 'Tutte', 'fabeventi' ),
            'search_items'          => __( 'Cerca Località', 'fabeventi' ),
            'not_found'             => __( 'Nessuna Località trovata.', 'fabeventi' ),
            'not_found_in_trash'    => __( 'Nessuna Località trovata nel cestino.', 'fabeventi' ),
            'archives'              => _x( 'Archivi di Località', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'fabeventi' ),
            'insert_into_item'      => _x( 'Inserisci in Località', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'fabeventi' ),
            'filter_items_list'     => _x( 'Filtra Località', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'fabeventi' ),
            'items_list_navigation' => _x( 'Navigazione Elenco Località', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'fabeventi' ),
            'items_list'            => _x( 'Elenco Località', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'fabeventi' ),
        );     
        $args = array(
            'labels'             => $labels,
            'description'        => 'Località custom post type.',
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'localita' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => 20,
            'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'taxonomies'         => array( 'localita_category', 'localita_tag' ),
            'show_in_rest'       => true
        );

        register_post_type( 'localita', $args );

        register_taxonomy( 'localita_category', 
						'localita', 
						array(
							'label'        => __( 'Categorie', 'fabeventi' ),
							'rewrite'      => array( 'slug' => 'localita_category' ),
							'hierarchical' => true,
						) 
					);


    }

    private function Pubblicita_post_type(){
        
        $labels = array(
            'name'                  => _x( 'Pubblicità', 'Post type general name', 'fabeventi' ),
            'singular_name'         => _x( 'Pubblicità', 'Post type singular name', 'fabeventi' ),
            'menu_name'             => _x( 'Pubblicità', 'Admin Menu text', 'fabeventi' ),
            'name_admin_bar'        => _x( 'name_admin_bar', 'Add New on Toolbar', 'fabeventi' ),
            'add_new'               => __( 'Aggiungi nuova', 'fabeventi' ),
            'add_new_item'          => __( 'Aggiungi nuova Pubblicità', 'fabeventi' ),
            'new_item'              => __( 'Nuova Pubblicità', 'fabeventi' ),
            'edit_item'             => __( 'Modifica EvePubblicitànto', 'fabeventi' ),
            'view_item'             => __( 'Vedi Pubblicità', 'fabeventi' ),
            'all_items'             => __( 'Tutte', 'fabeventi' ),
            'search_items'          => __( 'Cerca Pubblicità', 'fabeventi' ),
            'not_found'             => __( 'Nessuna Pubblicità trovata.', 'fabeventi' ),
            'not_found_in_trash'    => __( 'Nessuna Pubblicità trovata nel cestino.', 'fabeventi' ),
            'archives'              => _x( 'Archivi di Pubblicità', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'fabeventi' ),
            'insert_into_item'      => _x( 'Inserisci in Pubblicità', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'fabeventi' ),
            'filter_items_list'     => _x( 'Filtra Pubblicità', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'fabeventi' ),
            'items_list_navigation' => _x( 'Navigazione Elenco Eventi', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'fabeventi' ),
            'items_list'            => _x( 'Elenco Pubblicità', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'fabeventi' ),
        );     
        $args = array(
            'labels'             => $labels,
            'description'        => 'Pubblicità custom post type.',
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'pubblicita' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => 20,
            'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'taxonomies'         => array( 'pubblicita_category', 'pubblicita_tag' ),
            'show_in_rest'       => true
        );

        register_post_type( 'pubblicita', $args );

        register_taxonomy( 'pubblicita_category', 
						'pubblicita', 
						array(
							'label'        => __( 'Categorie', 'fabeventi' ),
							'rewrite'      => array( 'slug' => 'pubblicita_category' ),
							'hierarchical' => true,
						) 
					);


    }
}
?>