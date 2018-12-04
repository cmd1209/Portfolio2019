			<!-- footer -->
			<footer class="footer textlight" role="contentinfo" id="contact">
				<div class="container">
				<?php 
					$id=467; 
					$post = get_post($id); 
					$content = apply_filters('the_content', $post->post_content); 
					echo $content;  
				?>


				</div>
				<div class="container centered">
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.
				</p>
				</div>
			</footer>
			<!-- /footer -->

		<?php wp_footer(); ?>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/lib/jquery.inview.min.js" ></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/lib/owl.carousel.min.js" ></script>
	</body>
</html>
