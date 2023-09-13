<?php
/*
Template name: common
*/
?>
<?php get_header();?>
<section class="inner-banner">
<?php  $ur=get_the_post_thumbnail_url();?>
<img src="<?php echo $ur; ?>" class="img-responsive" >

</section>

<section class="coming-container">
<div class="container">
<div class="row profile-inner wow zoomIn">
<div class="col-xs-12 col-sm-12 col-md-12">
<h1 class="title-bold"><?php
      if (have_posts()) : while (have_posts()) : the_post();
      the_content(__('(more...)')); ?>
      <?php endwhile; else: ?>
      <p> <?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?></h1>
</div>
</div>
</div>
</section><div class="clearfix"></div> 
</section>
<?php get_footer(); ?>

