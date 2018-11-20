<?php 

/*
Template Name: single template
*/
get_header(); ?>


       <div class="single_event_link_content container">
           <div class="row">
               <div class="col-md-12">
                   <span class="back_media left_aligned fz_25 fw_700"><i class="fas fa-long-arrow-alt-left"></i><a href="<?php echo bloginfo('home'); ?>/media-events/"> Back to Media & Events</a></span>

                   <?php if (strlen(get_next_post()->post_title) > 0) { ?>



                   <span class="back_media right_aligned fz_25 fw_700"><?php next_post_link('%link','Next Article');   ?> <i class="fas fa-long-arrow-alt-right"></i></span>
                   <?php

                    }
                   ?>

               </div>

               <div class="col-md-12 limited_width_single_content">
                   

               </div>
           </div>
       </div>


       <div class="post_details_area">
         <div class="container">
           <div class="row">
             <div class="col-md-12">
               
                <?php if(have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?> 
                    <?php the_content(); ?>
                <?php endwhile; ?>  
                <?php endif; ?>
             </div>
           </div>
         </div>
       </div>






            <?php get_template_part('donate'); ?>





<?php get_footer(); ?>