<?php /* Template Name: start*/ ?>
<?php get_header(); ?>

<video poster="https://chadmdanford.com/wp-content/uploads/2018/11/filmsposter.jpg" id="topvid" playsinline autoplay muted loop>
  <source src="https://chadmdanford.com/wp-content/uploads/2018/11/Backgrounfilms5s.mp4" type="video/mp4">
</video>  

<section class="linesgradient vh100 flex flexcolumn flexcenter textlight" id="section1">
	<?php include('herologo.php'); ?>
	<div class="container centered bounce-in-right delay3">
		<h1><?php echo get_bloginfo( 'name' ); ?></h1>
		<h3><?php echo get_bloginfo( 'description' ); ?></h3>
	</div>
	<a href="#section2" class="downarrow"><span></span></a>
</section>

<section class="portraithero vh100 flex flexcolumn flexcenter textdark" id="section2">
	<div class="container centered">
		<?php the_content(); // Dynamic Content ?>
	</div>
</section>

<section class="vh100 reversegradient textlight" id="section3">
<div class="container centered">
	<h1 id="work">Recent Work</h1>
		<?php // the query
			$the_query = new WP_Query( 'post_type=post'); ?>
			<?php if ( $the_query->have_posts() ) : ?>
	

			<div class="grid grid--3col" id="projectgrid">
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					
					<?php $hero = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' ); ?>

					<a href="<?php the_permalink(); ?>" class="project hiddenbottom" style="background: url('<?php echo $hero['0'];?>')">
						<div class="project--meta">
							<h4><?php the_title(); ?></h4>
							<p>yeah yeah yeah</p>
						</div>
					</a>
					<?php endwhile; ?>
			</div>

			<!-- end of the loop -->
			<!-- pagination here -->
			<?php wp_reset_postdata(); ?>
			<?php else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

			</div>
</section>
<section class="vh100 textlight linesgradient flex flexcolumn flexcenter" id="section4">
	<div class="container centered">
		<h1>Key Talents</h1>
	</div>
</section>
<?php get_footer(); ?>