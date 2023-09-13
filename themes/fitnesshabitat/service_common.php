<?php
/*
Template name: service-common
*/
?>
<?php get_header();?>
<section class="service-container">
<div class="container">
<div class="row profile-inner wow zoomIn">
<div class="col-md-12 col-xs-12 col-sm-12">
<?php
      if (have_posts()) : while (have_posts()) : the_post();
      the_content(__('(more...)')); ?>
      <?php endwhile; else: ?>
      <p> <?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
</div>
</div>

</div>
</section><div class="clearfix"></div> 
</section>



<?php get_footer(); ?>