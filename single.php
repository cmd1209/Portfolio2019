<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<video poster="https://chadmdanford.com/wp-content/uploads/2018/11/filmsposter.jpg" id="topvid" playsinline autoplay muted loop>
  <source src="<?php the_field( 'hero_background_video' ); ?>" type="video/mp4">
</video>  

<section class="linesgradient vh100 flex flexcolumn flexcenter textlight">
	<div class="container centered">
			<h1><?php the_title(); ?></h1>
			<h3><?php the_category(' | '); // Separated by vertical line ?></h3>
	</div>
</section>

<section class=" flex flexcolumn flexcenter vh100 reversegradient textlight">
	<div class="container centered">
		<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
		<?php the_content(); // Dynamic Content ?>
	</div>
</section>

<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>
<?php get_footer(); ?>
