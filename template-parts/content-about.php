<?php
//ABOUT ME VARIABLES
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
 ?>
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
