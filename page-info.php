<?php
  /*
  Template Name: Info Page
  */
  get_header();
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
            <?php
             while (have_posts() ) : the_post();
              the_content();
            endwhile; ?>
            <?php $loop = new WP_Query( array( 'post_type' => 'information','orderby'=>'post_id','order'=>'ASC')); ?>
            <hr>

            <div class="resource-row clearfix">

        <div class="album py-5 bg-light">
          <div class="container">

            <div class="row">
              <?php while ($loop->have_posts() ) : $loop->the_post(); ?>
                <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <?php
                    if(get_field('info_image')['id'] != 0) :
                     echo'<img class="card-img-top" src="'.get_field('info_image')['url'].'" alt="'.get_field('info_image')['alt'].'">';   endif;?>
                    <div class="card-body">
                      <p class="card-text"><?php the_content(); ?></p>
                      <div class="d-flex justify-content-between align-items-center">
                        <?php if(!empty(get_field('button_text'))) : echo'<small class="text-muted">
                        <a href="'.get_field('info_url').'">'.get_field('button_text').'</a> </small>';
                      endif; ?>
                      </div>
                    </div>
                  </div>
                </div>
            <?php  endwhile; ?>
            </div>
          </div>
        </div>
      </div>
        </section>
      </div><!-- content -->
    </div><!-- primary -->
  </div>
<?php get_footer(); ?>
