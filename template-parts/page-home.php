<?php
/*
Template Name: Home Page
*/
//Custom Fields

$opt_text = get_post_meta(8,'opt_text',true);
$opt_btn_text = get_post_meta(8,'opt_btn',true);

//Advanced Custom Fields Plugin
$feature_block_image = get_field('course_image_block');
$feature_block_title = get_field('bloc_section_title');
$feature_block_body = get_field('feature_block_body');

$project_feature_title = get_field('project_feature_title');
$project_feature_body = get_field('project_feature_body');

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
  <section id="feature">
    <div class="container">
      <div class="section-header">
        <?php if(!empty($feature_block_image)) : echo '<img src="'.$feature_block_image[url].'" alt="'.$feature_block_image[alt].'">'; endif ?>
        <?php echo '<h2>'.$feature_block_title.'</h2>';
        if(!empty($feature_block_body)) : echo '<p class="lead">'.$feature_block_body.'</p>';
        endif ?>
      </div>
      <div class="row">
        <div class="col-sm-2">
          <i class="ci ci-computer"></i>
          <h4>life time access to course</h4>
        </div>
        <div class="col-sm-2">
          <i class="ci ci-watch"></i>
          <h4>Avaiable at any time</h4>
        </div>
        <div class="col-sm-2">
          <i class="ci ci-calendar"></i>
          <h4>30 days of support</h4>
        </div>
        <div class="col-sm-2">
          <i class="ci ci-community"></i>
          <h4>Join us to become a happy user !</h4>
        </div>
        <div class="col-sm-2">
          <i class="ci ci-device"></i>
          <h4>Compatible at any device</h4>
        </div>
        <div class="col-sm-2">
          <i class="ci ci-instructor"></i>
          <h4>Made by developer </h4>
        </div>
      </div>
    </div>
  </section>
  <!--===========Project-->
  <section id="project-section">
    <div class="container">
       <h2><?php echo $project_feature_title;?></h2>
      <p class="lead"><?php echo $project_feature_body;?></p>
      <div class="row">
        <?php $loop = new WP_Query(array('post_type' =>'project_feature','orderby'=>'post_id','order'=>'ASC'));
        while($loop->have_posts()) : $loop->the_post(); ?>
        <div class="col-sm-4">
          <?php if(has_post_thumbnail()) : the_post_thumbnail(); endif;  ?>
          <h3><?php the_title(); ?></h3>
          <p><?php the_content(); ?></p>
        </div>
      <?php endwhile; ?>
      </div>
    </div>
  </section>
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
