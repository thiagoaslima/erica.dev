<?php get_header('home'); ?>

<!-- Main Content -->
	<?php
	    wp_reset_query();
	    $args = array(
            'post_type' => 'trabalhos',
	        'tax_query' => array(
	            array(
	                'taxonomy' => 'tipos-trabalho',
	                'field' => 'slug',
	                'terms' => 'editorial',
	                'posts_per_page' => 1,
	            ),
	        ),
	     );

	     $loop = new WP_Query($args);
	     $images = array();
	     $titles = array();
	     $permalinks = array();
	     if( $loop->have_posts() ) {
	     	$post = $loop->post;
	     	$at_home = rwmb_meta( 'trabalhos_is_inHome' );
	     	$home_img = rwmb_meta( 'trabalhos_home_img', 'type=image', $post->ID);
	     	if($at_home && $home_img) {
	     		array_push($images, array_pop($home_img) );
	     		array_push($titles, the_title('', '', false));
				array_push($permalinks, get_permalink($post->ID) );
	     	}
	     }
	?>

	<div class="slider">
        <ul>
           <?php
           $qtde = count($images);
           $w = 100 / $qtde . '%'; 
           	while ( $images ) { 
           		$img = array_pop($images);
           		$link = array_pop($permalinks);
           		$tit = array_pop($titles);
           	?>
           	<li style='background-image:url(<?php echo $img["url"]; ?>); width: <?php echo $w; ?>'><a href="<?php echo $link; ?>"><span><?php echo $tit; ?></a></span></li>
           	<?php
           	}
           ?>
        </ul>
        
    </div>

    <?php get_footer(); ?>