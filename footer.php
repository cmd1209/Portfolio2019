			<!-- footer -->
			<footer class="footer textlight" role="contentinfo" id="contact">
				<div class="mw60">
				<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
				</div>
				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		<?php wp_footer(); ?>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/lib/jquery.inview.min.js" ></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/lib/owl.carousel.min.js" ></script>
		<!-- analytics -->
		<!-- <script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script> -->
	</body>
</html>
