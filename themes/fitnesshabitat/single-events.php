<?php get_header();?>

<section class="inner-banner">
<img src="<?php echo get_template_directory_uri();?>/images/blog-banner.jpg" class="img-responsive">
<div class="container">
<div class="row">
<div class="col-md-12">
<ul>
<li><a href="http://amazingseven.net/canannamaincopy/">Home</a></li>
<li>/</li>
<li><a href="http://amazingseven.net/canannamaincopy/event/">Events</a></li>
<li>/</li>
<li><?php the_title(); ?></li>
</ul>
</div>
</div>
</div>
</section>


<section class="blog-page">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="blog-box">

			 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php  if ($post->ID == 218)
				
				{ ?>
                
				<div class="bolg-img"><?php echo do_shortcode('
[responsive-slider id=345]')?></div>
				<ul>
				<li><i class="fa fa-calendar"></i> <?php echo get_post_meta(get_the_ID(), 'startdate', TRUE); ?></li>
               	<!---<li><i class="fa fa-clock-o"></i><?php echo get_post_meta(get_the_ID(), 'event-time', TRUE); ?></li>--->
				</ul>
                <div class="blog-box-content">
                <h3><?php the_title(); ?></h3>
				<p><?php the_content(__('(more...)')); ?></p>
				</div>
				
        		<?php 
				} 
				 elseif($post->ID == 378)
				
				{ ?>
                
				<div class="bolg-img"><?php echo do_shortcode('
[responsive-slider id=383]')?></div>
				<ul>
				<li><i class="fa fa-calendar"></i> <?php echo get_post_meta(get_the_ID(), 'startdate', TRUE); ?></li>
               	<!---<li><i class="fa fa-clock-o"></i><?php echo get_post_meta(get_the_ID(), 'event-time', TRUE); ?></li>--->
				</ul>
                <div class="blog-box-content">
                <h3><?php the_title(); ?></h3>
				<p><?php the_content(__('(more...)')); ?></p>
				</div>
				
        		<?php } 
				
				 else
				 {
					?> 
					
					 <div class="bolg-img"><?php
if ( has_post_thumbnail() ) {
the_post_thumbnail( 'full' );
}
?></div>
				<ul>
				<li><i class="fa fa-calendar"></i> <?php echo get_post_meta(get_the_ID(), 'event-date', TRUE); ?></li>
               	<li><i class="fa fa-clock-o"></i><?php echo get_post_meta(get_the_ID(), 'event-time', TRUE); ?></li>
				</ul>
                <div class="blog-box-content">
                <h3><?php the_title(); ?></h3>
				<p><?php the_content(__('(more...)')); ?></p>
				<a class="event-view" href="http://amazingseven.net/canannamaincopy/volunteers/">Volunteers Now</a>		
<?php				
				 }
				
				?>
                <?php endwhile; else: ?>

                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
				</div>	
</div>


</div>

</div>
</div>
</section>

<?php get_footer(); ?>
