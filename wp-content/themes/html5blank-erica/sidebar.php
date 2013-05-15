<!-- sidebar -->
<aside class="sidebar" role="complementary">

	<?php //get_template_part('searchform'); ?>

<?php
	$args = array (
	    'type' => 'trabalhos', //your custom post type
	    'orderby' => 'name',
	    'order' => 'ASC',
	    'hide_empty' => 0 //shows empty categories
	);

	$categories = get_categories( $args );
	foreach ($categories as $category) { ?>

		<h3><span class="bar"></span><?php echo $category->name; ?></h3>

	<?php
	    $post_by_cat = get_posts(array('cat' => $category->term_id));

	    echo '<ul>';
	    foreach( $post_by_cat as $post ) {
	        setup_postdata($post);
	        echo '<li><a href="'.the_permalink().'">'.the_title().'</a></li>';
    }
    echo '</ul>';
}
    		
	<div class="sidebar-widget">
		<?php //if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>
	
	<div class="sidebar-widget">
		<?php //if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>
		
</aside>
<!-- /sidebar -->