<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		
		<!-- dns prefetch -->
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		
		<!-- meta -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		
		<!-- icons -->
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
			
		<!-- css + javascript -->
		<?php wp_head(); ?>
		<script>
		!function(){
			// configure legacy, retina, touch requirements @ conditionizr.com
			conditionizr()
		}()
		</script>
	</head>
	<body <?php body_class(); ?>>
	
		<!-- header -->
		<header>
        <div class="content clearfix">
            <h1>
            	<span class="visuallyhidden">Erica Leal | designer</span>
            	<a href="<?php echo home_url(); ?>">
            		<img id="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Erica Leal" width="165" height="25">
            	</a>
            </h1>

            <nav>
                <ul class="clearfix">
                    <li><a href="#">Portfólio</a></li>
                    <li><a href="#">Sobre mim</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>
        </div>
	    </header>
        <!-- /header -->