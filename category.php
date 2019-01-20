<?php get_header(); ?>


<section class="vh100 reversegradient textlight" id="section3">
<div class="container centered">
	<h1><?php single_cat_title(); ?></h1>
			<div class="grid grid--3col" id="projectgrid">



<?php if (have_posts()): while (have_posts()) : the_post(); ?>




					<?php $hero = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); ?>

					<a href="<?php the_permalink(); ?>" class="project hiddenbottom" style="background: url('<?php echo $hero['0'];?>')">
						<div class="project--meta">
							<h4><?php the_title(); ?></h4>
							<p class="caption"><?php echo $list_categories; // THIS WORKS ?></p>
						</div>
					</a>

<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>
			</div>

</div>
</section>


<?php get_footer(); ?>

