<?php 

/*
Template Name: single template
*/
get_header(); ?>

		
        <div class="home_hero_area hero_area single_event_hero_area">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-md-6 m_m_b_15">
                        <div class="text_section">

                          <!--
                            <h2 class="red_text_yellow_bg fz_45 black_900">Hero news</h2>
                            <h2 class="red_text_yellow_bg fz_45 black_900">articles go in </h2>
                            <h2 class="red_text_yellow_bg fz_45 black_900">this main</h2>
                            <h2 class="red_text_yellow_bg fz_45 black_900">section up here.</h2>
                            <p class="muse_font m_t_25">Without our people , we'd be nothing. With a diverse range of skillset and experience we're a team who are passionate about making a real difference in the world and we always do it with a smile.</p>
                          -->

                          <?php the_field('single_page_heading_left_text'); ?>


                        </div>
                    </div>


                    <div class="col-md-6 no_padding_on_mobile">
                        <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/school_boy.png" alt=""> -->
                        <?php the_post_thumbnail('post_large_image'); ?>
                    </div>
                </div>
            </div>
        </div>      

       <div class="single_event_link_content container">
           <div class="row">
               <div class="col-md-12">
                   <span class="back_media left_aligned fz_25 fw_700"><i class="fas fa-long-arrow-alt-left"></i><a href="/media-events/"> Back to Media & Events</a></span>
                   <span class="back_media right_aligned fz_25 fw_700"><?php next_post_link('%link','Next Article'); ?> <i class="fas fa-long-arrow-alt-right"></i></span>

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