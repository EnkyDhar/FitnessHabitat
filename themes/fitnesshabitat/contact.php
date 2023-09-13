<?php
/*
Template name: contact
*/
?>
<?php get_header();?>
<section class="contact-side">
<div class="container">
<div class="row">
<div class="col-md-7 col-xs-12 col-sm-12">
<div class="contact-form wow zoomIn">
 <div class="form-bg"> 
<?php echo do_shortcode('[contact-form-7 id="64" title="Contact form" html_class="right-form"]'); ?>
</div> 
 </div>
</div>
<div class="col-md-4 col-md-offset-1 col-xs-12 col-sm-12">
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