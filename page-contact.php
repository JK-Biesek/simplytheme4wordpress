<?php
/*Template Name: Contact Template*/
get_header();
$img_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
 ?>
 <?php if(has_post_thumbnail() ){
    echo'
      <section class="feature-image" data-type="background" data-speed="4" style="background:url('.$img_url.') 10% repeat fixed; background-size: cover;">
      <h1 class="page-title">'.get_the_title().'</h1>
      </section>
      <h1 class="page-title">Contact Us</h1>
      </section>
      '; }
        else {
            echo'
            <section class="feature-image feature-image-default-alt" data-type="background" data-speed="4">
            <h1 class="page-title">Contact Us</h1>
            </section>';
              }
      ?>

 <div class="container">
    <div class="row" id="primary">
      <div class="col-sm-12" id="content">
        <section class="main-content">
          <?php  while(have_posts() ) : the_post();
          the_content();
        endwhile; ?>
        </section>
      </div>
    </div>

  </div>
<?php get_footer(); ?>
