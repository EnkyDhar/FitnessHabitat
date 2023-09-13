<?php
/*
Template name: about
*/
?>
<?php get_header();?>
<section class="about-sec">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="custom-heading">
<?php
      if (have_posts()) : while (have_posts()) : the_post();
      the_content(__('(more...)')); ?>
      <?php endwhile; else: ?>
      <p> <?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>

</div>
</div>
</div>
</section>
<div class="clearfix"></div>
<section class="about-team">
<div class="container">
<!--<div class="custom-heading "><h3 class="white-icon">Our Professionals</h3></div>-->
<div class="row">
<?php $args = array('posts_per_page' => '-1','order' => 'ASC', 'post_type' => 'about_us');
$recent = get_posts($args);

foreach( $recent as $post ){
	$image_url= wp_get_attachment_url( get_post_thumbnail_id($post->ID) );	?>
<div class="col-md-12">
<div class="team-box">
<div class="team-img"><img src="<?php echo $image_url; ?>" class="img-responsive"></div>
<div class="team-content">
<h3><?php the_title(); ?></h3>
<?php echo $post->post_content; ?>
</div>
</div>
</div>
<?php
$count++;
}
?>	


</div>







</div>
</section> <div class="clearfix"></div>
</section>



<?php get_footer(); ?>