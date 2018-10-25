<?php 

/*
Template Name: Partner Template
*/
get_header(); ?>

		
        <div class="home_hero_area hero_area">
            <div class="custom_container">
                <div class="row align-items-center">

                    <div class="col-md-6 m_m_b_15">
                        <div class="text_section">
                          <!--
                            <h2 class="green_text_with_yellow_bg black_900">We couldn't do</h2>
                            <h2 class="green_text_with_yellow_bg black_900">this greate work by </h2>
                            <h2 class="green_text_with_yellow_bg black_900">ourselves. Thanks </h2>
                            <h2 class="green_text_with_yellow_bg black_900">to our partners.</h2>
                          -->
                            <?php the_field('heading_text'); ?>
                            <?php
                              if(have_posts()):
                              while(have_posts()): the_post();


                            ?>
                            <?php the_content(); ?>
                            <a href="<?php the_field('link_target'); ?>" class="yellow_box_shadow hvr_fade_green fw_700 fz_20 ">Become a partner</a>

                          <?php endwhile; endif; ?>
                          <?php wp_reset_postdata(); ?>
                        </div>
                    </div>


                    <div class="col-md-6 no_padding_on_mobile">
                      <?php 
                        //print_r(the_field('heder_big_image')); 
                        echo wp_get_attachment_image( get_field('heder_big_image'), 'full');
                      ?>
                      <!--
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/school_boy.png" alt="">

                        <picture>
                          <source srcset="assets/images/hero--large.jpg" media="(min-width: 1380px)">
                          <source srcset="assets/images/hero--medium.jpg" media="(min-width: 990px)">
                          <source srcset="assets/images/hero--small.jpg" media="(min-width: 640px)">
                          <img src="assets/images/hero--smaller.jpg" alt="Coastal view of ocean and mountain">
                        </picture>
                      -->


                    </div>
                </div>
            </div>
        </div>      

       
       <div class="partners_list_area">
           <div class="container">
               <div class="row">


                <?php
                global $post;
                $args = array( 'posts_per_page' => -1, 'post_type'=> 'partner_items',);
                $myposts = get_posts( $args );
                foreach( $myposts as $post ) : setup_postdata($post); ?>



                     <div class="col-md-6 col-lg-4 single_partner">
                          <div class="inner_container">
                              
                              <?php the_post_thumbnail('partner_image'); ?>
                              <p class="muse_font lh_25">
                                  <?php the_content(); ?>
                              </p>
                              <a href="<?php the_field('partner_link'); ?>" class="parter_link fw_700"><i class="fas fa-long-arrow-alt-right"></i> <?php the_field('partner_name'); ?></a>                           
                          </div>

                     </div>

              

                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>


               </div>
           </div>
       </div>

        
        <?php

          $bg_image_desktop = get_field('become_a_partner_area_background_desktop')['url'];
          $bg_image_mobile = get_field('become_a_partner_area_background_mobile')['url'];
        ?>
        <style>


          @media only screen  and (max-width: 767px) {
            .become_partner_area{background: url('<?php echo $bg_image_mobile; ?>') no-repeat; background-size: cover; }

          }

          @media only screen  and (min-width: 768px) {
            .become_partner_area{background: url('<?php echo $bg_image_desktop; ?>') no-repeat; background-size: cover; }
          }
        </style>

        <div class="become_partner_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 footer_hero">
                        <h2 class="white_text_green_bg fw_900 m_b_50 fz_45 lh_35">Become a partner</h2>
                        <p class="muse_font fz_25"><?php the_field('become_a_partner_text', false,false); ?></p>
                        <a href="#" class="white_box_shadow hvr_fade_green fw_700 fz_25 ">Contact Us</a>




                    </div>
                </div>
            </div>
        </div>





<?php get_footer(); ?>