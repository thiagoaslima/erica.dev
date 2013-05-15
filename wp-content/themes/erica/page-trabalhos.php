<?php get_header(); ?>
	
	<!-- sidebar -->
	<div id="sidebar">
		<?php get_sidebar() ?>
	</div>

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
	     if($loop->have_posts()) {
	     	$post = $loop->post;
	     }
	?>

	 <div id="content" className="clearfix">

            <div class="figure">
            	<?php
                // http://www.deluxeblogtips.com/meta-box/helper-function-to-get-meta-value/
            	$imgs = rwmb_meta( 'trabalhos_imagens', 'type=image&size=erica_view', $post->ID );
				foreach ( $imgs as $img ) {
				    echo "<img width='{$img['width']}' height='{$img['height']}' src='{$img['full_url']}' alt='{$img['alt']}' />";
				}
				?>
                <!-- <img src="i/calcinha-01.jpg" alt="">
                <img src="i/calcinha-02.jpg" alt="">
                <img src="i/calcinha-03.jpg" alt=""> -->
            </div>

            <div class="metadata">
        	<?php 
            	// print_r($post);
            	$inst = rwmb_meta('trabalhos_instituicao');
            	$atuacao = rwmb_meta( 'trabalhos_atuacao' );

                echo '<span class="instituicao">' . $inst . '</span>';
                if ($inst && $atuacao) echo '<span class="separador"> &bull; </span>';
                echo '<span class="atuacao">' . $atuacao . '</span>';
            ?>
            </div>

            <div class="dados-trabalho">
            <?php
            	$i = 1;
            	$title = the_title( $before = '', $after = '', $echo = false );
            	$desc = $post->post_content;
            	$obs = rwmb_meta( 'trabalhos_observacoes' );
            	$paginas = rwmb_meta( 'trabalhos_paginas' );
            	$formato = rwmb_meta( 'trabalhos_formato' );
                $acabamento = rwmb_meta( 'trabalhos_acabamento' );
            	$ano = rwmb_meta( 'trabalhos_ano' );
              
              	function sep() {
              		global $i;
              		if ($i) {
              			echo '<span class="separador"> &bull; </span>';
              			$i = 0;
              		}
              	}

                echo '<h2 class="titulo">' . $title . '</h2>';
                sep();
                
                if ($desc) echo '<span class="descricao">' . $desc . '</span>';
                if ($obs) $i += 1;

                sep();

                if ($obs) echo '<span class="observacao">' . $obs . '</span>';
                if ($paginas) $i += 1;

                sep();

                if ($paginas) echo '<span class="numero-paginas">' . $paginas . '</span>';
                if ($formato) $i += 1;

                sep();

                if ($formato) echo '<span class="formato">' . $formato . '</span>';
                if ($acabamento) $i += 1;

                sep();

                if ($acabamento) echo '<span class="acabamento">' . $acabamento . '</span>';
                if ($ano) $i += 1;

                sep();

                if ($ano) echo '<span class="ano">' . $ano . '</span>';

            ?>
            </div>

        </div>

<?php get_footer(); ?>