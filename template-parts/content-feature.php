<?php
//Advanced Custom Fields Plugin
  $feature_block_image = get_field('course_image_block');
  $feature_block_title = get_field('bloc_section_title');
  $feature_block_body = get_field('feature_block_body');
 ?>
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
