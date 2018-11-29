<?php 

/*
Template Name: Who we are template
*/
get_header(); ?>

    <?php 
        $show_header_hero_part = get_field('show_header_hero_part');
        $header_button_text = get_field('header_button_text');
        if($show_header_hero_part == "Yes"){
    ?>		
        <div class="home_hero_area hero_area">
            <div class="custom_container">
                <div class="row align-items-center">

                    <div class="col-md-6 m_m_b_15">
                        <div class="text_section">
                            <!--
                            <h2 class="blue_text_with_yellow_bg black_900">People Make</h2>
                            <h2 class="blue_text_with_yellow_bg black_900">organizations and </h2>
                            <h2 class="blue_text_with_yellow_bg black_900">we're proud to be </h2>
                            <h2 class="blue_text_with_yellow_bg black_900">a team that cares!</h2>
                            -->
                            <?php the_field('left_side_heading'); ?>
                            <p class="muse_font m_t_25"><?php the_field('left_side_text'); ?></p>
                            <a href="<?php the_field('heading_link_target'); ?>" class="yellow_box_shadow hvr-fade fw_700 fz_20"><?php echo $header_button_text; ?></a>
                        </div>
                    </div>


                    <div class="col-md-6 no_padding_on_mobile right_aligned">
                        <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/school_boy.png" alt=""> -->
                        <?php 
                            //print_r(get_field('header_big_image')); 
                            echo wp_get_attachment_image( get_field('header_big_image')['id'], 'full');
                        ?>
                    </div>
                </div>
            </div>
        </div>


    <?php
        }
    ?>    

       

        <div class="blog_area featured_member_area green_area">
            <div class="container">
                <div class="row">

 

                    <?php
                    global $post;
                    $args = array( 'posts_per_page' => -1, 'post_type'=> 'team',);
                    $myposts = get_posts( $args );
                    foreach( $myposts as $post ) : setup_postdata($post); ?>
                        <?php if(get_field('designation') == 'Patron'): ?>


                        <div class="col-md-6 single_column">

                            <!-- <img class="circled_165" src="<?php echo get_template_directory_uri(); ?>/img/cropped.png" alt=""> -->
                            <?php the_post_thumbnail( 'team_member_small', array( 'class'  => 'circled_165' ) ); ?>
                            <!--
                            <h2 class="white_text_red_bg fw_900 fz_25 lh_15">Commissioner</h2><br>
                            <h2 class="white_text_red_bg fw_900 fz_25 lh_15">Andrew Colvin</h2> <br>
                            <h2 class="white_text_red_bg fw_900 fz_25 lh_15">APM, OAM</h2><br>
                            -->

                            <?php the_field('title_text',false, false); ?>


                            <p class="designation fw_700"><?php the_field('designation'); ?></p>
                            <div class="muse_font">
                                <?php the_content(); ?>
                            </div>
                        </div>


                        <?php endif; ?>

                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>




                                        
                    



<!--
                    <div class="col-md-6 single_column">

                        <img class="circled_165" src="<?php echo get_template_directory_uri(); ?>/img/cropped.png" alt="">
                        
                        <h2 class="white_text_red_bg fw_900 fz_25 lh_15">Commissioner</h2><br>
                        <h2 class="white_text_red_bg fw_900 fz_25 lh_15">Andrew Colvin</h2> <br>
                        <h2 class="white_text_red_bg fw_900 fz_25 lh_15">APM, OAM</h2><br>
                        <p class="designation fw_700">Patron</p>
                        <p class="muse_font">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                        </p>
                    </div>
                    
-->


                    



                </div>
            </div>
        </div>

        
        <div class="member_area">
            <div class="container">
                <div class="row">




                    <?php
                    global $post;
                    $args = array( 'posts_per_page' => -1, 'post_type'=> 'team','order_by'=> 'post', 'order' => 'ASC');
                    $myposts = get_posts( $args );
                    foreach( $myposts as $post ) : setup_postdata($post); ?>

                        <?php if(get_field('designation') !== 'Patron'): ?>

                        <div class="col-md-4 single_member">
                            <?php the_post_thumbnail( 'team_member_small', array( 'class'  => 'circled_165' ) ); ?>
                            <h3 class="title fz_25 fw_700"><?php the_title(); ?></h3>
                            <h4 class="designation fz_25 fw_700"><?php the_field('designation'); ?></h4>
                            <div class="muse_font">
                                <?php the_content(); ?>
                            </div>

                        </div>
                        <?php endif;?>

                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>



                </div>
            </div>
        </div>

    <?php 
        $show_footer_involved_part = get_field('show_footer_involved_part');
        $footer_involved_area_heading = get_field('footer_involved_area_heading');
        $involved_area_button_text = get_field('involved_area_button_text');

        if($show_footer_involved_part == "Yes"){

        $get_involved_area_bg_for_desktop = get_field('get_involved_area_bg_for_desktop')['url'];
        $get_involved_area_bg_for_mobile = get_field('get_involved_area_bg_for_mobile')['url'];


    ?>

        <style>


          @media only screen  and (max-width: 767px) {
            .get_involved_area{background: url('<?php echo $get_involved_area_bg_for_mobile; ?>') no-repeat; background-size: cover; }

          }

          @media only screen  and (min-width: 768px) {
            .get_involved_area{background: url('<?php echo $get_involved_area_bg_for_desktop; ?>') no-repeat; background-size: cover; }
          }

        </style>

    
        <div class="get_involved_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 footer_hero">
                        <h2 class="white_text_yellow_bg fw_900 m_b_50 fz_45 lh_35"><?php echo $footer_involved_area_heading; ?></h2>
                        <p class="muse_font fz_25"><?php the_field('get_involved_area_text'); ?> </p>
                        <a href="<?php the_field('get_involved_link'); ?>" class="white_box_shadow hvr_fade_yellow fw_700 fz_25 "><?php echo $involved_area_button_text; ?></a>
                    </div>
                </div>
            </div>
        </div>
    <?php
        }
    ?>




<?php get_footer(); ?>