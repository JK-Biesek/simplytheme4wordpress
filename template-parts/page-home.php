<?php
/*
Template Name: Home Page
*/
//Custom Fields

//Custom Prices
$pre_price = get_post_meta(8,'pre_price',true);
$second_price = get_post_meta(8,'starter_price',true);
$first_price = get_post_meta(8,'final_price',true);

//BTN Url and its text
$btn_text = get_post_meta(8,'btn_text',true);
$btn_url = get_post_meta(8,'study_link',true);

$opt_text = get_post_meta(8,'opt_text',true);
$opt_btn_text = get_post_meta(8,'opt_btn',true);

//Advanced Custom Fields Plugin

$income_feature_img = get_field('income_feature_image');
$income_title_main = get_field('income_section_title');
$income_description = get_field('icome_section_area');

$income_title_one = get_field('income_title_1');
$income_description_one = get_field('income_description_1');

$income_title_two = get_field('income_title_2');
$income_description_two = get_field('income_description_2');

$who_section_img = get_field('image_section_who');
$who_section_title = get_field('title_section_who');
$who_section_body = get_field('section_who_body');


$feature_block_image = get_field('course_image_block');
$feature_block_title = get_field('bloc_section_title');
$feature_block_body = get_field('feature_block_body');

$project_feature_title = get_field('project_feature_title');
$project_feature_body = get_field('project_feature_body');

$about_me_title = get_field('about_me_title');
$about_me = get_field('about_me_name');
$biography = get_field('biography');
$full_biography = get_field('full_biography');
$linkedin = get_field('linkedin');
$facebook = get_field('facebook');
$github = get_field('github');
$num_of_years = get_field('num_of_years');
$num_of_github = get_field('num_of_github');
$num_of_experience = get_field('num_of_experience');



get_header();?>

  <!--===========main-->
  <section id="main" data-type="background" data-speed="5">
    <article>
      <div class="container clearfix">
        <div class="row">
          <div class="col-sm-5">
            <img src="<?php bloginfo('stylesheet_directory') ?>/resources/img/logo-bootstrap.png" alt="Bootstrap Logo" class="logo">
          </div>
          <div class="col-sm-7 main-text">
            <h1><?php bloginfo('name'); ?></h1>
            <p class="lead"><?php bloginfo('description');?></p>
            <div id="price-timeline">
              <div class="price active">
                <h4>Pre launch price <small>Check It out</small></h4>
                <span><?php echo $pre_price; ?></span>
              </div>
              <div class="price">
                <h4>Launch Price <small>Check It out</small></h4>
                <span><?php echo $second_price; ?></span>
              </div>
              <div class="price">
                <h4>Final Price <small>Check It out</small></h4>
                <span><?php echo $first_price; ?></span>
              </div>
            </div>
            <p>
              <a href="<?php echo $btn_url; ?>" class="btn btn-lg btn-danger" role="button"><?php echo $btn_text; ?></a>
            </p>
          </div>
        </div>
      </div>
    </article>
  </section>
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
  <!--===========Income-->
  <section id="boost-income">
    <div class="container">
      <div class="section-header">
        <?php
          if(!empty($income_feature_img)){
            echo'<img src="'.$income_feature_img[url].'" alt="'.$income_feature_img[alt].'">';
          }
          ?>
        <h2><?php echo $income_title_main; ?></h2>
      </div>
      <p class="lead"><?php echo $income_description; ?></p>
      <div class="row">
        <div class="col-sm-6">
          <h4><?php echo $income_title_one; ?></h4>
          <p class="main_boost"><?php echo $income_description_one; ?></p>
        </div>
        <div class="col-sm-6">
          <h4><?php echo $income_title_two; ?></h4>
          <p class="main_boost"><?php echo $income_description_two; ?></p>
        </div>
      </div>
    </div>
  </section>
  <!--===========Benefits-->
  <section id="benefit">
    <div class="container">
      <div class="section-header">
        <?php
          if(!empty($who_section_img)) :
            echo '<img src="'.$who_section_img[url].'" alt="'.$who_section_img[alt].'">';
          endif; ?>
        <h2><?php echo $who_section_title;?></h2>
      </div>
      <div class="row">
        <div class="col-sm-8 offset-sm-2">
        <?php echo $who_section_body; ?>
        </div>
      </div>
    </div>
  </section>
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
  <!--===========Instructor-->
  <section id="instructor">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-6">
          <div class="row">
            <div class="col-lg-8">
              <h2><?php echo $about_me_title; ?> <small><?php echo $about_me; ?></small> </h2>
            </div>
            <div class="col-lg-4" id="social-circles">
              <?php if(!empty($github)) : ?>
              <a href="https://github.com/<?php echo $github;?>" target="_blank" class="badge social github"><i class="fa fa-github"></i></a>
              <?php endif; ?>
              <?php if(!empty($facebook)) : ?>
              <a href="www.facebook.com/<?php echo $facebook;?>" target="_blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>
              <?php endif; ?>
              <?php if(!empty($linkedin)) : ?>
              <a href="https://www.linkedin.com/in/<?php echo $linkedin;?>" target="_blank" class="badge social linkedin"><i class="fa fa-linkedin"></i></a>
              <?php endif; ?>
            </div>
          </div>
          <p class="lead"><?php echo $biography; ?></p>
          <p class="lead"><?php echo $full_biography; ?></p>
          <hr>
          <h3>Summary of my work</h3>
          <div class="row">
              <div class="col-xs-4">
                <div class="number">
                  <div class="number-circle">
                    <?php echo $num_of_github; ?> Github <span>repositories</span>
                  </div>
                </div>
              </div>
              <div class="col-xs-4">
                <div class="number">
                  <div class="number-circle">
                    <?php echo $num_of_experience; ?> year of<span>experience</span>
                  </div>
                </div>
              </div>
              <div class="col-xs-4">
                <div class="number">
                  <div class="number-circle">
                   <?php echo $num_of_years; ?> Years done in <span>Computing</span>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
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
