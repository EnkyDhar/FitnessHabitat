<?php /*
   Template name:home

   */ ?>
<?php get_header(); ?>
<section class="main-block">
   <div id="hero-wrapper">
      <div class="carousel-wrapper">
         <div id="hero-carousel" class="carousel slide carousel-fade">
            <div class="carousel-inner mob-inner">
               <?php $argst = array('posts_per_page' => '-1','order' => 'ASC', 'post_type' => 'home_banner');
                  $current = get_posts($argst);
                  $count = 0;
                  foreach( $current as $hpost ){
                  	$image= wp_get_attachment_url( get_post_thumbnail_id($hpost->ID) );	?>
               <div class="item <?php echo ($count==0)?'active':''; ?>">
                  <img src="<?php echo $image; ?>">
                  <div class="slider-content">
                     <div class="offset-1  wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                        <?php echo $hpost->post_content; ?>
                        <!--<p>We keep Balance between Freedom and Security</p>-->
                     </div>
                  </div>
               </div>
               <?php
                  $count++;
                  }
                  ?>
            </div>
            <a class="left carousel-control arrows" href="#hero-carousel" data-slide="prev"><i class="fa fa-chevron-left left"></i></a><a class="right carousel-control arrows" href="#hero-carousel" data-slide="next"><i class="fa fa-chevron-right right"></i></a>
         </div>
      </div>
   </div>
   <!--<a  class="slider-btn scroll-work" href="#wewroked"><i class="fa fa-angle-down"> </i></a>-->
</section>
<div class="clearfix"></div>
<section class="whychoose-section">
   <div class="container">
            <!-- <div class="custom-heading ">
               <h3 class="white-icon mt-0">UPCOMING EVENTS </h3>
            </div> -->
      <!--<div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12 wow zoomIn">
         <div class="custom-heading"><h3>Upcoming Events </h3></div>
         </div>
         </div>-->
      <div class="row">
         <div class="col-xs-12 col-sm-4 col-md-6 wow zoomIn">
            <div class="left-box">
               <div class="custom-heading ">
                  <h3 class="white-icon mt-0">UPCOMING EVENTS </h3>
               </div>
               <div class="video-box">
                  <img class="video" src="<?php echo get_template_directory_uri(); ?>/img/img-2.png" class="img-responsive" />
                  <div class="play-box"><a href="javascript:void(0);">
                     <img class="play" src="<?php echo get_template_directory_uri(); ?>/img/play.png" class="img-responsive" />
                     </a>
                  </div>
               </div>
               <div class="events-box">
                  <div class="row">
                     <div class="col-md-12">
                        <table>
                           <tr>
                              <td><a href="<?php echo get_bloginfo('url') ?>/events/"><i class="fa fa-calendar"></i></a></td>
                              <td>
                               <h3>Upcoming Events <span>September 22,2018</span></h3>
                              </td>
                           </tr>
                      </table>
                     </div>
                  <!--<div class="col-md-7">
                     <div id="clockdiv">
                       <span class="text-block"><span class="count days"></span> <span class="text">days</span> </span>
                       <span class="text-block"><span class="count hours"></span> <span class="text">hours</span> </span>
                       <span class="text-block"><span class="count minutes"></span> <span class="text">minutes</span> </span>
                       <span class="text-block"><span class="count seconds">0</span> <span class="text">seconds</span></span>
                     </div>
                     </div>-->
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                     </div>
                  </div>
               </div>
            </div>
            
         </div>

		 <div class="col-xs-12 col-sm-4 col-md-6 wow zoomIn">
         <div class="right-box">
            <div class="custom-heading ">
               <h3 class="white-icon mt-0">Featuring </h3>
            </div>

            <div class="video-box">
               <img class="video" src="<?php echo get_template_directory_uri(); ?>/img/img.png" class="img-responsive" />
               <div class="play-box"><a href="javascript:void(0);">
                  <img class="play" src="<?php echo get_template_directory_uri(); ?>/img/play.png" class="img-responsive" />
                  </a>
               </div>
            </div>

            <div class="events-box">
                  <div class="row">
                     <div class="col-md-12">
                        <table>
                           <tr>
                              <td><a href="<?php echo get_bloginfo('url') ?>/events/"><i class="fa fa-calendar"></i></a></td>
                              <td>
                                 <h3>Upcoming Events <span>September 23,2018</span></h3>
                              </td>
                           </tr>
                        </table>
                     </div>
                     <!--<div class="col-md-7">
                        <div id="clockdiv1">
                        <span class="text-block"><span class="count days"></span> <span class="text">days</span> </span>
                        <span class="text-block"><span class="count hours"></span> <span class="text">hours</span> </span>
                        <span class="text-block"><span class="count minutes"></span> <span class="text">minutes</span> </span>
                        <span class="text-block"><span class="count seconds">0</span> <span class="text">seconds</span></span>
                        </div>
                        </div>-->
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                     </div>
                  </div>
               </div>

            </div>
         </div>
           

		 <!--<div class="col-xs-12 col-sm-4 col-md-4 wow zoomIn">
            <div class="video-box">
               <img class="video" src="<?php echo get_template_directory_uri(); ?>/img/img-2.png" class="img-responsive" />
               <div class="play-box"><a href="javascript:void(0);">
                  <img class="play" src="<?php echo get_template_directory_uri(); ?>/img/play.png" class="img-responsive" />
                  </a>
               </div>
            </div>
            <div class="events-box">
               <div class="row">
                  <div class="col-md-12">
                     <table>
                        <tr>
                           <td><a href="<?php echo get_bloginfo('url') ?>/events/"><i class="fa fa-calendar"></i></a></td>
                           <td>
                              <h3>Upcoming Events <span>September 22,2018</span></h3>
                           </td>
                        </tr>
                     </table>
                  </div>
                  <div class="col-md-7">
                     <div id="clockdiv">
                       <span class="text-block"><span class="count days"></span> <span class="text">days</span> </span>
                       <span class="text-block"><span class="count hours"></span> <span class="text">hours</span> </span>
                       <span class="text-block"><span class="count minutes"></span> <span class="text">minutes</span> </span>
                       <span class="text-block"><span class="count seconds">0</span> <span class="text">seconds</span></span>
                     </div>
                     </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  </div>
               </div>
            </div>
         </div>-->
      </div>
   </div>
</section>

<div class="clearfix"></div>
<section class="program-section">
   <div class="container">
      <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12 pad70 wow zoomIn">
            <div class="custom-heading">
               <h3 class="white-icon">Services</h3>
            </div>
            <div class="row">
               <div class="grey-block">
                  <div class="video-container">
                     <?php
                        $health_id = 19;
                        $health_post = get_post($health_id);
                        $image_health= wp_get_attachment_url( get_post_thumbnail_id($health_id) );
                        ?>
                     <a href="<?php echo get_bloginfo('url') ?>/health-coaching/">
                        <img src="<?php echo $image_health; ?>" alt="video-container">
                        <div class="hover-video">
                           <div class="hover-text">
                              <h3>Read More</h3>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="video-date">
                     <p> <span><?php echo $health_post->post_title; ?></span> </p>
                  </div>
               </div>
               <div class="grey-block">
                  <div class="video-container">
                     <?php
                        $nutrition_id = 23;
                        $nutrition_post = get_post($nutrition_id);
                        $image_nutrition= wp_get_attachment_url( get_post_thumbnail_id($nutrition_id) );
                        ?>
                     <a href="<?php echo get_bloginfo('url') ?>/nutrition/">
                        <img src="<?php echo $image_nutrition; ?>" alt="video-container">
                        <div class="hover-video">
                           <div class="hover-text">
                              <h3>Read More</h3>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="video-date">
                     <p><span><?php echo $nutrition_post->post_title; ?></span> </p>
                  </div>
               </div>
               <div class="grey-block">
                  <?php
                     $stress_id = 21;
                     $stress_post = get_post($stress_id);
                     $image_stress= wp_get_attachment_url( get_post_thumbnail_id($stress_id) );
                     ?>
                  <div class="video-container">
                     <a href="<?php echo get_bloginfo('url') ?>/stress-management/">
                        <img src="<?php echo $image_stress; ?>" alt="video-container">
                        <div class="hover-video">
                           <div class="hover-text">
                              <h3>Read More</h3>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="video-date">
                     <p><span><?php echo $stress_post->post_title; ?></span> </p>
                  </div>
               </div>
               <div class="grey-block">
                  <div class="video-container">
                     <?php
                        $fitness_id = 25;
                        $fitness_post = get_post($fitness_id);
                        $image_fitness= wp_get_attachment_url( get_post_thumbnail_id($fitness_id) );
                        ?>
                     <a href="<?php echo get_bloginfo('url') ?>/fitness-training/">
                        <img src="<?php echo $image_fitness; ?>" alt="video-container">
                        <div class="hover-video">
                           <div class="hover-text">
                              <h3>Read More</h3>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="video-date">
                     <p><span><?php echo $fitness_post->post_title; ?></span> </p>
                  </div>
               </div>
               <div class="grey-block">
                  <div class="video-container">
                     <?php
                        $rehab_id = 27;
                        $rehab_post = get_post($rehab_id);
                        $image_rehab= wp_get_attachment_url( get_post_thumbnail_id($rehab_id) );
                        ?>
                     <a href="<?php echo get_bloginfo('url') ?>/post-rehabilitation/">
                        <img src="<?php echo $image_rehab; ?>" alt="video-container">
                        <div class="hover-video">
                           <div class="hover-text">
                              <h3>Read More</h3>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="video-date">
                     <p><span><?php echo $rehab_post->post_title; ?></span> </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<div class="clearfix"></div>
<section class="testimonials-review">
   <div id="demo">
      <div class="container">
         <div class="col-md-12">
            <div class="custom-heading ">
               <h3 class="white-icon">Testimonials </h3>
            </div>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Carousel indicators -->
                  <ol class="carousel-indicators">
                     <?php $args = array('posts_per_page' => '-1','order' => 'ASC', 'post_type' => 'testimonials');
                        $recent = get_posts($args);
                        $count = 0;
                        foreach( $recent as $post ){
                        	$image_url= wp_get_attachment_url( get_post_thumbnail_id($post->ID) );	?>
                     <li data-target="#myCarousel" data-slide-to="<?php echo $count; ?>" class="<?php echo ($count==0)?'active':''; ?>"></li>
                     <?php
                        $count++;
                        } ?>
                  </ol>
                  <!-- Wrapper for carousel items -->
                  <div class="carousel-inner">
                     <?php $args = array('posts_per_page' => '-1','order' => 'ASC', 'post_type' => 'testimonials');
                        $current = get_posts($args);
                        $count = 0;
                        foreach( $recent as $post ){
                        	$image_url= wp_get_attachment_url( get_post_thumbnail_id($post->ID) );	?>
                     <div class="item carousel-item <?php echo ($count==0)?'active':''; ?>">
                        <div class="img-box"><img src="<?php echo $image_url; ?>"></div>
                        <p class="testimonial"><?php echo $post->post_content; ?></p>
                        <p class="overview"><b><?php echo $post->post_title; ?></b></p>
                     </div>
                     <?php
                        $count++;
                        }
                        ?>
                  </div>
                  <!-- Carousel controls -->
                  <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<div class="clearfix"></div>
<section class="newsletter-section">
   <div class="container">
      <div class="news-inner wow zoomIn">
         <!--<a> <img src="img/letter-icon.png" alt="letter"/> </a>-->
         <div class="custom-heading">
            <!--<h3 class="center">SUBSCRIPTION NEWSLETTER</h3>-->
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-menu') ) : endif; ?>
         </div>
         <!--<p class="news-text"> Keep up-to-date with our latest news, offers or packages. Subscribe Today!   </p>-->
         <div class="row">
            <?php echo do_shortcode('[contact-form-7 id="95" title="home-subscription"]') ?>
         </div>
      </div>
   </div>
</section>
</section>
<?php get_footer(); ?>