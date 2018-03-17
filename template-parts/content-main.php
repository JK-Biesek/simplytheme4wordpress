
<?php
//Custom Prices
$pre_price = get_post_meta(8,'pre_price',true);
$second_price = get_post_meta(8,'starter_price',true);
$first_price = get_post_meta(8,'final_price',true);

//BTN Url and its text
$btn_text = get_post_meta(8,'btn_text',true);
$btn_url = get_post_meta(8,'study_link',true);

 ?>
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
