<?php
  $income_feature_img = get_field('income_feature_image');
  $income_title_main = get_field('income_section_title');
  $income_description = get_field('icome_section_area');

  $income_title_one = get_field('income_title_1');
  $income_description_one = get_field('income_description_1');

  $income_title_two = get_field('income_title_2');
  $income_description_two = get_field('income_description_2');
 ?>
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
