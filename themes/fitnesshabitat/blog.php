<?php
/*
Template name: blog
*/
?>
<?php get_header();?>
<section class="blog-container">
<div class="container">
<div class="custom-heading">
<h3 class="center">Blogs</h3>
<p>A Blog is worth a thousand words</p>
</div>
<div class="row">
<div class="col-md-9 col-xs-12 col-sm-12">
<div class="news-style-one">
<?php $args = array('posts_per_page' => '3','order' => 'ASC', 'post_type' => 'blogs');
$recent = get_posts($args);
$count==0;
foreach( $recent as $post ){
	$image_url= wp_get_attachment_url( get_post_thumbnail_id($post->ID) );	?>
<div class="inner-box">
<div class="row">
<div class="image-column col-lg-4 col-md-5 col-sm-4 col-xs-12">
 <figure> <a> <img src="<?php echo $image_url; ?>" alt="blog-right"/></a> </figure>    
</div>
<div class="content-column col-lg-8 col-md-7 col-sm-8 col-xs-12">
<div class="lower-content">
<div class="posted-info"><?php the_time('F jS, Y') ?></div>
<ul class="clearfix">
  <li><a href="#"><i class="fa fa-user"></i><?php the_author_posts_link(); ?></a></li>
  <li><a href="<?php the_permalink(); ?>"><i class="fa fa-tags"></i><?php echo $post->post_excerpt; ?></a></li>
  <li><a href="<?php the_permalink(); ?>"><i class="fa fa-comments"></i><?php echo $post->comment_count ; ?> &nbsp;<?php echo "Comments" ;?></a></li>
</ul>
<h3><a href="<?php the_permalink(); ?>"><?php echo $post->post_title;?></a></h3>
<p><?php echo substr($post->post_content,0,200);?>[...]</p>
</div> 
</div>
</div>
</div>
<?php
$count++;
} 
?>
    <!--second post-->

 <!--second post-->

</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-3">
<div class="blog-aside">
<h6> <span> Recent Blogs </span></h6>
<?php $artgs = array('posts_per_page' => '4','order' => 'ASC', 'post_type' => 'blogs');
$current = get_posts($artgs);
$count==0;
foreach( $current as $repost ){
	$image= wp_get_attachment_url( get_post_thumbnail_id($repost->ID) );	?>



<div class="blog-small">
<figure> <a href="<?php the_permalink(); ?>"> <img src="<?php echo $image; ?>" alt="blog-thumbnail"/>  </a> </figure>
<div class="texted">
    <h5><?php echo substr ($repost->post_title,0,20);?>..</h5>
    <p><?php echo substr($repost->post_content,0,40);?>....</p>
    <b><?php the_time('F jS, Y') ?></b>
</div>
</div>
<?php
$count++;	
   }
?>

</div><div class="clearfix"></div>
<div class="blog-aside newsblock">
<h6> <span> NEWSLETTER </span></h6>
<div class="newsinner">
<h4> SUBSCRIBE NOW</h4>
<div class="">
<p> Subscribe to our Newsletter right now to be updated!</p>
<?php echo do_shortcode('[contact-form-7 id="60" title="newsletter"]'); ?>
</div>
</div>
</div>
</div>
</div>
<div class="styled-pagination text-center">
<ul>
    <li><a class="prev" href="<?php previous_posts_link(); ?>"><i class="fa fa-caret-left"></i></a></li>
    <li><a href="#" class="active">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a class="next" href="<?php echo get_next_posts_link(); ?>"><i class="fa fa-caret-right"></i></a></li>
</ul>
</div>
</div>
</section><div class="clearfix"></div>
</section>



<?php get_footer();?>