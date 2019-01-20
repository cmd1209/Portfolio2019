<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<video poster="https://chadmdanford.com/wp-content/uploads/2018/11/filmsposter.jpg" id="topvid" playsinline autoplay muted loop>
  <source src="<?php the_field( 'hero_background_video' ); ?>" type="video/mp4">
</video>  

<section class="linesgradient vh100 textlight">
	<div class="container centered top10">
		<h1><?php the_title(); ?></h1>
		<h3 class="category"><?php the_category(' | '); // Separated by vertical line ?></h3>
	</div>
	<div class="container centered top10">
	<?php the_content(); // Dynamic Content ?>
	</div>
</section>

<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>

<?php get_footer(); ?>
