<!-- sidebar -->
<?php
	
	// no default values. using these as examples
	$taxonomies = array( 
	    'tipos-trabalho'
	);

	$args = array(
	    'orderby'       => 'name', 
	    'order'         => 'ASC',
	    'hide_empty'    => false, 
	    'exclude'       => array(), 
	    'exclude_tree'  => array(), 
	    'include'       => array(),
	    // 'number'        => , 
	    'fields'        => 'all', 
	    // 'slug'          => , 
	    // 'parent'         => ,
	    'hierarchical'  => true, 
	    'child_of'      => 0, 
	    // 'get'           => , 
	    // 'name__like'    => ,
	    'pad_counts'    => false, 
	    // 'offset'        => , 
	    // 'search'        => , 
	    'cache_domain'  => 'core'
	);  

	$terms = get_terms($taxonomies, $args);

	foreach($terms as $term) {
	    wp_reset_query();
	    $args = array(
            'post_type' => 'trabalhos',
	        'tax_query' => array(
	            array(
	                'taxonomy' => 'tipos-trabalho',
	                'field' => 'slug',
	                'terms' => $term->slug,
	            ),
	        ),
	     );

	     $loop = new WP_Query($args);
	     if($loop->have_posts()) {
	        echo '<h3><span class="bar"></span>'.$term->name.'</h3>';
	        echo '<ul>';
	        while($loop->have_posts()) : $loop->the_post();
	            echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
	        endwhile;
	        echo '</ul>';
	     }
	}?>
    		
<!-- </aside> -->
<!-- /sidebar -->