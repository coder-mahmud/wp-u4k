<?php 
/*
Template Name: Welcome Template
*/
get_header(); ?>

		
        <div class="home_hero_area hero_area">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-md-6 m_m_b_15">
                        <div class="text_section">
                        <!-- 
                            <h2 class="blue_text_with_yellow_bg black_900">Transforming</h2>
                            <h2 class="blue_text_with_yellow_bg black_900">unwanted uniforms </h2>
                            <h2 class="blue_text_with_yellow_bg black_900">into clothes for </h2>
                            <h2 class="blue_text_with_yellow_bg black_900">children in need.</h2>
                            <p class="muse_font m_t_25">Through uniforms 4 Kids we are closing the gap between those serving in uniform, our communities and children. The program sees the uniforms continue to protect and serve. </p>
                        -->
                            <?php the_field('left_side_heading'); ?>
                            <p class="muse_font m_t_25"><?php the_field('left_side_text'); ?></p>
                            <a href="<?php the_field('donate_button_link'); ?>" class="yellow_box_shadow hvr-fade fw_700 fz_20">Donate Now</a>
                        </div>
                    </div>


                    <div class="col-md-6 no_padding_on_mobile">
                        <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/school_boy.png" alt=""> -->
                        <?php
                            $image = get_field('right_side_image')['id'];
                            //print_r($image); 
                            echo wp_get_attachment_image( $image, 'full');
                        ?>
                    </div>
                </div>
            </div>
        </div>      

       

        <div class="blog_area featured_blog_area">
            <div class="container">
                <div class="row">

                    
                    <div class="col-md-4">
                        
                        <!--
                        <h2 class="white_text_red_bg fw_900">Over</h2><br>
                        <h2 class="white_text_red_bg fz_40 fw_900">25,000</h2> <br>
                        <h2 class="white_text_red_bg fw_900">cothes</h2><br>
                        <p class="muse_font">provided to children in need</p>
                        <a href="#" class="white_box_shadow hvr_fade_red fw_700">Learn More</a>
                        -->

                        <?php the_field('green_area_column_one', false, false); ?>
                    </div>
                    
                    <div class="col-md-4">
                        
                        <!--
                        <h2 class="white_text_red_bg fw_900">Over</h2><br>
                        <h2 class="white_text_red_bg fz_40 fw_900">25,000</h2> <br>
                        <h2 class="white_text_red_bg fw_900">cothes</h2><br>
                        <p class="muse_font">provided to children in need</p>
                        <a href="#" class="white_box_shadow hvr_fade_red fw_700">Learn More</a>
                        -->

                        <?php the_field('green_area_column_two', false, false); ?>
                    </div>
                    
                    <div class="col-md-4">

                         <?php the_field('green_area_column_three', false, false); ?>

                        <!--
                        
                        <h2 class="white_text_red_bg fw_900">Over</h2><br>
                        <h2 class="white_text_red_bg fz_40 fw_900">25,000</h2> <br>
                        <h2 class="white_text_red_bg fw_900">cothes</h2><br>
                        <p class="muse_font">provided to children in need</p>
                        <a href="#" class="white_box_shadow hvr_fade_red fw_700">Learn More</a>
                        -->
                    </div>

                    



                </div>
            </div>
        </div>


        <?php 
            $bg_image = get_field('testimonial_area_background_image');
            $bg_image = $bg_image['url'];
            $bg_image_mobile = get_field('testimonial_ara_background_image_for_mobile');
            $bg_image_mobile = $bg_image_mobile['url'];

        ?>
        <style>
           

          @media only screen  and (max-width: 767px) {
            .testimonial_area{ background: url('<?php echo $bg_image_mobile; ?>') no-repeat; background-size: cover; }

          }

          @media only screen  and (min-width: 768px) {
             .testimonial_area{ background: url('<?php echo $bg_image; ?>') no-repeat; background-size: cover; }
          }


        </style>
        <div class="testimonial_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="white_text_yellow_bg fw_900 m_b_50 fz_45 lh_35">Why we do it</h2>

                        <div class="slider">

                        <?php
                        global $post;
                        $args = array( 'posts_per_page' => -1, 'post_type'=> 'testimonials');
                        $myposts = get_posts( $args );
                        foreach( $myposts as $post ) : setup_postdata($post); ?>
 
                            <div>

                                <div class="text_holder ">
                                    <p class="testimonial_text"><?php the_field('testimonial_text',false ,false); ?></p>
                                    <p class="testi_client_name"><?php the_field('title'); ?></p>

                                    <div class="testimonial_image_holder">
                                        <?php the_post_thumbnail('testimonial_image'); ?>
                                    </div>

                                </div>

                            </div>                       

                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>










<!--

                            <div>

                                <div class="text_holder">
                                    <p class="testimonial_text">Since getting this new clothes, I no longer worry about getting bullied at school. I feel like I can finally fit in!</p>
                                    <p class="testi_client_name">Anthony, 7 years old,Capalaba Queensland</p>

                                    <div class="testimonial_image_holder"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cropped.png" alt=""></div>

                                </div>

                            </div>

-->


                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="email_area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <h2 class="white_text_yellow_bg fw_900 m_b_50 fz_45 lh_35">Stay up to date</h2>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-8">
                        <form action="">
                            <input class="email" type="email" placeholder="Email Address">
                            <input type="submit" value="Subscribe" class="white_box_shadow hvr_fade_yellow fw_700 fz_25 ">
                        </form>
                    </div>
                </div>
            </div>
        </div>



<?php get_footer(); ?>