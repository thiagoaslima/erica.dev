<?php
register_post_type('trabalhos',

  array(  

		'label' => 'Trabalhos',
		'description' => '',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array(
			'slug' => ''
		),

		'query_var' => true,
		'has_archive' => true,
		'exclude_from_search' => false,
		'supports' => array(
			'title',
			'editor',
			'comments',
			'thumbnail'
		),

		'taxonomies' => array(
			'category'
		),

		'labels' => array (
			'name' => 'Trabalhos',
			'singular_name' => 'Trabalho',
			'menu_name' => 'Trabalhos',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Novo Trabalho',
			'edit' => 'Editar',
			'edit_item' => 'Editar Trabalho',
			'new_item' => 'Novo Trabalho',
			'view' => 'Ver Trabalho',
			'view_item' => 'Ver Trabalho',
			'search_items' => 'Buscar Trabalhos',
			'not_found' => 'Nenhum Trabalho Encontrado',
			'not_found_in_trash' => 'Nenhum Trabalho Encontrado na Lixeira',
			'parent' => 'Trabalho'
		)
	) 
);

?>