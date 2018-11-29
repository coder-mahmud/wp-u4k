<?php 
/*
Template Name: Testimonial Template
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

    <div class="page_content_area">
        <div class="container">
            <div class="row row-eq-height">
                
                <?php
                     $color = get_field('author_name_color');
                ?>

                <style>
                    
                    .single_testimonial .inner_content{display: block; overflow: hidden; border:1px solid <?php echo $color; ?>; padding:15px; height: 100%; border-radius: 5px;}
                    .single_testimonial .title{font-size: 15px; color:<?php echo $color; ?>; text-align: right;}                    
                </style>
                <?php
                   


                   $args = array('post_type' => 'testimonials', 'posts_per_page' => -1,);
                   $category_posts = new WP_Query($args);
                   if($category_posts->have_posts()) : while($category_posts->have_posts()) : $category_posts->the_post();
                ?>
                    
                    <div class="col-md-6 single_testimonial">
                        <div class="inner_content">
                            <?php the_post_thumbnail('testimonial_image'); ?>
                            <p class="text"><?php the_field('testimonial_text',false ,false); ?></p>
                            <p class="title"> - <?php the_field('title'); ?></p>                          
                        </div>


                    </div>


                <?php endwhile; endif; ?>
                <?php wp_reset_query();  ?>



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