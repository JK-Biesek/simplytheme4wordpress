<?php
  /*
  Template Name: Info Page
  */
 ?>
 <?php get_header();
  $thumbnail_link = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
 ?>
</header>
<?php
if(has_post_thumbnail()){
  echo'<section class="feature-image" data-type="background" data-speed="4" style="background:url('.$thumbnail_link.') 10% repeat fixed; background-size: cover;">
    <h1 class="page-title">'.get_the_title().'</h1>
  </section>';
}else {
  echo'<section class="feature-image feature-image-default-alt" data-type="background" data-speed="4">
    <h1 class="page-title">'.get_the_title().'</h1>
  </section>';
}
?>
 <div class="container">
      <div class="row" id="primary">

        <div id="content" class="col-sm-12">

          <section class="main-content">
            <?php while (have_posts() ) : the_post(); 
              the_content();
            endwhile; ?>
            <hr>

            <div class="resource-row clearfix">

        <div class="album py-5 bg-light">
          <div class="container">

            <div class="row">
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <img class="card-img-top" src="resources/img/wordpress.png" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <small class="text-muted"><a href="https://wordpress.com">https://wordpress.com</a> </small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <img class="card-img-top" src="resources/img/Prestashop-logo.png" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <small class="text-muted"><a href="https://www.prestashop.com/">https://www.prestashop.com/</a> </small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <img class="card-img-top" src="resources/img/woo.png" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <small class="text-muted"><a href="https://woocomerce.com/">https://woocomerce.com/</a> </small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        </section>
      </div><!-- content -->
    </div><!-- primary -->
  </div>
<?php get_footer(); ?>
