<?php
add_action( 'init', 'register_cpt_trabalho' );

function register_cpt_trabalho() {

    $labels = array( 
        'name'               => _x( 'Trabalhos', 'trabalho' ),
        'singular_name'      => _x( 'Trabalho', 'trabalho' ),
        'add_new'            => _x( 'Adicionar Novo Trabalho', 'trabalho' ),
        'add_new_item'       => _x( 'Adicionar Novo Trabalho', 'trabalho' ),
        'edit_item'          => _x( 'Editar Trabalho', 'trabalho' ),
        'new_item'           => _x( 'Novo Trabalho', 'trabalho' ),
        'view_item'          => _x( 'Ver Trabalho', 'trabalho' ),
        'search_items'       => _x( 'Buscar Trabalhos', 'trabalho' ),
        'not_found'          => _x( 'Nenhum Trabalhos encontrado', 'trabalho' ),
        'not_found_in_trash' => _x( 'Nenhum Trabalhos encontrado', 'trabalho' ),
        'parent_item_colon'  => _x( 'Subordinado a Trabalho:', 'trabalho' ),
        'menu_name'          => _x( 'Trabalhos', 'trabalho' ),
    );

    $args = array( 
        'labels'              => $labels,
        'hierarchical'        => true,
        'description'         => 'description',
        'taxonomies'          => array( 'category' ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        //'menu_icon'         => '',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => true,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => true,
        'capability_type'     => 'post', 
        'supports'            => array( 'title', 
                                        'editor', 
                                        'author', 
                                        'thumbnail', 
                                        'custom-fields', 
                                        'trackbacks', 
                                        'comments', 
                                        'revisions', 
                                        'page-attributes', 
                                        'post-formats' ),
    );

    register_post_type( 'trabalho', $args );
}



if ( is_admin() && $post->type = "trabalho" ){ 
   
    // Register function to be called when admin interface is visited
    add_action( 'admin_init', 'cpt_trabalho_admin_interface_init' );

    // Function to register new meta box for book review post editor
    function cpt_trabalho_admin_interface_init() {

        add_meta_box( 

            //html id that will be applied to this metabox
            'cpt_trabalho_instituicao',

             //appears at the top of the new metabox when displayed
            'Instituição',

            //callback >  the function which will load the html into the metabox                           
            'cpt_trabalho_instituicao_html_def',

            //name of our custom post type
            'trabalho',

            //where the box will appear. can be "normal", "advanced" or "side"
            'normal',

            //priority within the context where the boxes should show ('high', 'core', 'default' or 'low') );
            'high',

            //(optional) Arguments to pass into your callback function. The callback will receive the  object and whatever parameters are passed through this variable
            ''
        );
    }

    // Function to display instituicao meta box contents
    function cpt_trabalho_instituicao_html_def( $post_type ) {
        require_once("metaboxes/instituicao.php");
    }


    add_action( 
            'save_post', 
            'cpt_trabalho_save_data', 
            10, 
            2 
    );

    function cpt_trabalho_save_data( $post_id = false, $post = false ) {
        
        // Check post type
        if ( $post->post_type == 'trabalho' ) {
            require_once("savedata.php");
        }
    }
}