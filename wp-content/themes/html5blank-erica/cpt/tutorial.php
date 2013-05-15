<?php
// tutorial.php

/**
 *  Post Types: Offices, People and Projects
 */

// Offices
register_post_type('offices', array(    'label' => 'Offices','description' => '','public' => true,'show_ui' => true,'show_in_menu' => true,'capability_type' => 'post','hierarchical' => false,'rewrite' => array('slug' => ''),'query_var' => true,'exclude_from_search' => false,'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes',),'labels' => array (
  'name' => 'Offices',
  'singular_name' => 'Office',
  'menu_name' => 'Offices',
  'add_new' => 'Add Office',
  'add_new_item' => 'Add New Office',
  'edit' => 'Edit',
  'edit_item' => 'Edit Office',
  'new_item' => 'New Office',
  'view' => 'View Office',
  'view_item' => 'View Office',
  'search_items' => 'Search Offices',
  'not_found' => 'No Offices Found',
  'not_found_in_trash' => 'No Offices Found in Trash',
  'parent' => 'Parent Office',
),) );


// People
register_post_type('people', array( 'label' => 'People','description' => '','public' => true,'show_ui' => true,'show_in_menu' => true,'capability_type' => 'post','hierarchical' => false,'rewrite' => array('slug' => ''),'query_var' => true,'exclude_from_search' => false,'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes',),'labels' => array (
  'name' => 'People',
  'singular_name' => 'Person',
  'menu_name' => 'People',
  'add_new' => 'Add Person',
  'add_new_item' => 'Add New Person',
  'edit' => 'Edit',
  'edit_item' => 'Edit Person',
  'new_item' => 'New Person',
  'view' => 'View Person',
  'view_item' => 'View Person',
  'search_items' => 'Search People',
  'not_found' => 'No People Found',
  'not_found_in_trash' => 'No People Found in Trash',
  'parent' => 'Parent Person',
),) );


// Projects
register_post_type('projects', array(   'label' => 'Projects','description' => '','public' => true,'show_ui' => true,'show_in_menu' => true,'capability_type' => 'post','hierarchical' => false,'rewrite' => array('slug' => ''),'query_var' => true,'exclude_from_search' => false,'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes',),'labels' => array (
  'name' => 'Projects',
  'singular_name' => 'Project',
  'menu_name' => 'Projects',
  'add_new' => 'Add Project',
  'add_new_item' => 'Add New Project',
  'edit' => 'Edit',
  'edit_item' => 'Edit Project',
  'new_item' => 'New Project',
  'view' => 'View Project',
  'view_item' => 'View Project',
  'search_items' => 'Search Projects',
  'not_found' => 'No Projects Found',
  'not_found_in_trash' => 'No Projects Found in Trash',
  'parent' => 'Parent Project',
),) );



// Projects Taxonomies
register_taxonomy('project-types', array(
  0 => 'projects',
),array( 
  'hierarchical' => true, 
  'label' => 'Types',
  'show_ui' => true,
  'query_var' => true,
  'rewrite' => array('slug' => ''),
  'singular_label' => 'Type'
  )
);

// meta boxes
add_action('admin_init', 'register_portfolio_meta_boxes');

function register_portfolio_meta_boxes() {
    $prefix = 'p_';
    $meta_boxes = array();

    // Offices
    $meta_boxes[] = array(
        'title' => 'Office Location',
        'desc' => 'Please enter the physical location of the office',
        'pages' => array('offices'),
        'context' => 'side',
        'fields' => array(
            array(
                'name' => 'Location',
                'id' => $prefix . 'location',
                'desc' => 'Please enter the physical location of the office',
                'type' => 'text'
            )
        ) 
    );

    //People
    $meta_boxes[] = array(
        'title' => 'Personal Information',
        'desc' => 'Please enter the age and education',
        'pages' => array('people'),
        'fields' => array (
            array(
                'name' => 'Role',
                'id' => $prefix . 'role',
                'desc' => 'What does this person do?',
                'type' => 'text'
            ),
            array(
                'name' => 'Age',
                'id' => $prefix . 'age',
                'desc' => 'Enter the age',
                'type' => 'text'
            ),
            array(
                'name' => 'Education',
                'id' => $prefix . 'education',
                'desc' => 'Enther the education degree',
                'type' => 'text',
                'clone' => true
            )
        )
    );

    $meta_boxes[] = array(
        'title' => 'Project Data',
        'desc' => 'Project information goes here',
        'pages' => array('projects'),
        'fields' => array(
            array(
                'name' => 'Client',
                'id' => $prefix . 'client',
                'desc' => 'Enter the client',
                'type' => 'text'
            ),
            array(
                'name' => 'Budget',
                'id' => $prefix . 'budget',
                'desc' => 'Enter the budget',
                'type' => 'text'
            ),
            array(
                'name' => 'Images',
                'id' => $prefix . 'proj_images',
                'desc' => 'Upload your images',
                'type' => 'image'
            )
        )
    );

    foreach ($meta_boxes as $meta_box) {
        new RW_Meta_Box($meta_box);
    }


}
 
?>