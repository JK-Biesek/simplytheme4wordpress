<?php
  $who_section_img = get_field('image_section_who');
  $who_section_title = get_field('title_section_who');
  $who_section_body = get_field('section_who_body');
 ?>
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
