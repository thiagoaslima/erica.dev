</div><!-- #main -->

			<!-- footer -->
			<footer class="footer" role="contentinfo">
		
				<div class="content">
					<!-- copyright -->
					<p class="copyright">
						&copy; <?php echo date("Y"); ?> Copyright <?php bloginfo('name'); ?>. 
					</p>
					<!-- /copyright -->

					<p class="creditos">Desenvolvido por <a href="mailto:thiagoaslima@gmail.com">Thiago Lima</a></p>
				</div>
				
			</footer>
			<!-- /footer -->
		
		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>
		
		<?php
		if (is_page('trabalhos') || ($post && $post->type == "trabalhos")) { ?>
			<script type="text-template" id='crsl-tmpl'>
				<div class="crsl-btn"><div class="crsl-inner"></div></div>
			</script>
			
		<?php } ?>

		<!-- analytics -->
		<script>
			var _gaq=[['_setAccount','UA-XXXXXXXX-XX'],['_trackPageview']];
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s)})(document,'script');
		</script>
	
	</body>
</html>