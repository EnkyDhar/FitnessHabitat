<?php
/**
 * The template for displaying all pages.
 *
 */

// Default page templates
?>

 <?php 
 get_header();
 ?>
<section class="about text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				 <?php the_content(__('(more...)')); ?>

				 <?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>