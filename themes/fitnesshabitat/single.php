<?php get_header(); ?>

<section class="features">
  <div class="container">
    <div class="col-md-6"> </div>
  </div>
</section>
<section class="blog">
  <div class="container">
    <div class="row">
      <div class="col-md-12 post-left">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="post-1 full_blog_img">
          <?php 



                      if ( has_post_thumbnail() ) {



	                  //the_post_thumbnail();



					  the_post_thumbnail('post-thumbnail', array( 'class'	=> "img-responsive" )); 



                      }



             ?>
             
          
          <div class="post-position grid news_desc full_blog news_desc2">
            <h3>
              <?php the_title(); ?>
            </h3>
            <h4>Posted on <?php the_time('F jS, Y') ?> <span>By <?php the_author_posts_link(); ?></span></h4>
            
            <p>
              <?php the_content(__('(more...)')); ?>
            </p>
            <hr>
            <?php comments_template(); ?>
          </div>
        </div>
        <?php endwhile; else: ?>
        <p>
          <?php _e('Sorry, no posts matched your criteria.'); ?>
        </p>
        <?php endif; ?>
      </div>
      <!--<div class="col-md-4 sidebar">
        <?php /*?><?php get_sidebar(); ?><?php */?>
      </div>-->
    </div>
  </div>
</section>
<?php get_footer(); ?>
