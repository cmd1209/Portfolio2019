<?php /* Template Name: start*/ ?>
<?php get_header(); ?>

<video poster="https://chadmdanford.com/wp-content/uploads/2018/11/shadowwork-poster.jpg" id="bottomvid" playsinline autoplay muted loop>
  <source src="https://chadmdanford.com/wp-content/uploads/2018/11/workshadows.mp4" type="video/mp4">
</video>  

<video poster="https://chadmdanford.com/wp-content/uploads/2018/11/elbebridge-poster.jpg" id="topvid" playsinline autoplay muted loop>
  <source src="https://chadmdanford.com/wp-content/uploads/2018/11/Elbbridge02.mp4" type="video/mp4">
</video>

<section class="linesgradient vh100 flex flexcolumn flexcenter dbg" id="section1">
	<?php include('herologo.php'); ?>
	<div class="container centered bounce-in-right delay3">
		<h1><em>Creating</em> Making Coding Shooting Framing <em>Editing</em> Developing Brainstorming like it‘s <em>1999</em>.</h1>
	</div>
	<a href="#section2" class="downarrow"><span></span></a>
</section>

<section class="vh100 flex flexcolumn flexcenter" id="section2">
	<div class="container centered hidden" id="section2intro">
			<?php the_content(); // Dynamic Content ?>
	</div>
</section>

<section class="vh150 dbg" id="section3">

			
		<?php // the query
			$the_query = new WP_Query( 'post_type=post&cat=5'); ?>
			<?php if ( $the_query->have_posts() ) : ?>
			<!-- pagination here -->
			<!-- the loop -->
			<!-- <div class="textwrap hidden" id="projectintro">
				<h2>Recent Projects</h2>
				<p>I've had the pleasure of working on many wonderful web projects of the past decade or so.</p>
			</div> -->
			
			<div class="project-grid project-grid--3l" id="projectgrid">
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					
					<?php $hero = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' ); ?>
					<div class="project hidden" style="background: url('<?php echo $hero['0'];?>')">
						<div class="project--meta">
							<p><?php the_title(); ?></p>
						</div>
					</div>
					<?php endwhile; ?>
			</div>

			<!-- end of the loop -->
			<!-- pagination here -->
			<?php wp_reset_postdata(); ?>
			<?php else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

</section>
<?php get_footer(); ?>