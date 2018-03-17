<?php
/*
Template Name: Home Page
*/
//Custom Fields

$opt_text = get_post_meta(8,'opt_text',true);
$opt_btn_text = get_post_meta(8,'opt_btn',true);

get_header();?>
  <?php get_template_part('template-parts/content','main'); ?>
  <!--===========OPT-->
  <section id="options">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <p class="lead">
            <?php echo $opt_text; ?>
          </p>
        </div>
        <div class="col-sm-4">
          <button class="btn btn-lg btn-success btn-block" id="btn-sign" data-toggle="modal" data-target="#myModal"><?php echo $opt_btn_text; ?></button>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/content','income'); ?>
  <!--===========Benefits-->
  <?php get_template_part('template-parts/content','benefit'); ?>
  <!--===========Feature-->
  <?php get_template_part('template-parts/content','feature'); ?>
   <!--===========Project-->
  <?php get_template_part('template-parts/content','project'); ?>
  <!--===========Video-->
  <section id="video-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 offset-sm-2">
          <h2>Watch our promo video</h2>
          <iframe width="100%" height="415" src="https://www.youtube.com/embed/quiUytHXutM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </section>
    <?php get_template_part('template-parts/content','about'); ?>
  <!--===========Testimonials-->
  <section id="opinions">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 offset-sm-2">
          <h2 id="opinion">What People think about Jakub</h2>
          <?php $feedback_loop = new WP_Query(array('post_type' => 'feedbacks', 'orderby'=> 'post_id','order'=>'ASC'));

          while ($feedback_loop->have_posts() ): $feedback_loop->the_post(); ?>
          <div class="row testimonial">
            <div class="col-md-4">

              <?php if (has_post_thumbnail() ) : the_post_thumbnail(array( 200, 200) );
                endif;
               ?>
            </div>
            <div class="col-md-8">
              <blockquote>
              <?php  the_content(); ?>
                <cite>&mdash;<?php the_title() ?></cite>
              </blockquote>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </section>
	<?php get_footer();?>
