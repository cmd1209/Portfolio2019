<?php /* Template Name: start*/ ?>
<?php get_header(); ?>

<video poster="https://chadmdanford.com/wp-content/uploads/2018/11/filmsposter.jpg" id="topvid" playsinline autoplay muted loop>
  <source src="https://chadmdanford.com/wp-content/uploads/2018/11/Backgrounfilms5.mp4" type="video/mp4">
</video>  


<section class="linesgradient vh100 flex flexcolumn flexcenter textlight" id="section1">
	<?php include('herologo.php'); ?>
	<div class="container centered bounce-in-right delay3">
		<h1><em>Creating</em> Making Coding Shooting Framing <em>Editing</em> Developing Brainstorming like it‘s <em>1999</em>.</h1>
	</div>
	<a href="#section2" class="downarrow"><span></span></a>
</section>

<!-- portraitback -->
<section class="lineslightgradient vh100 flex flexcolumn flexcenter textdark" id="section2">
	<div class="container centered pskinny">
		<?php the_content(); // Dynamic Content ?>
	</div>
</section>

<section class="vh100 textlight darkback" id="section3">
<div class="container project-header centered">
	<h1>Recent Work</h1>
</div>
			
		<?php // the query
			$the_query = new WP_Query( 'post_type=post&cat=5'); ?>
			<?php if ( $the_query->have_posts() ) : ?>
			<!-- pagination here -->
			<!-- the loop -->
			<!-- <div class="textwrap hidden" id="projectintro">
				<h2>Recent Projects</h2>
				<p>I've had the pleasure of working on many wonderful web projects of the past decade or so.</p>
			</div> -->
			<div class="grid grid--3col" id="projectgrid">
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					
					<?php $hero = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' ); ?>
					<div class="project hiddenright" style="background: url('<?php echo $hero['0'];?>')">
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
<section class="vh100 textlight linesgradient flex flexcolumn flexcenter" id="section4">
	<div class="container centered">
		<h1>Key Talents</h1>
	</div>
</section>
<?php get_footer(); ?>