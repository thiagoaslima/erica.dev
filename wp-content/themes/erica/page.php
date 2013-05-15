<?php get_header(); ?>
	
	<!-- sidebar -->
	<div id="sidebar">
		
	</div>

	 <div id="content" className="clearfix">
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>

    </div><!-- #main -->

<?php get_footer(); ?>