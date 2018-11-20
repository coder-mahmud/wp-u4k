<?php get_header(); ?>


    <?php 
        $show_header_hero_part = get_field('show_header_hero_part');
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
                        <a href="<?php the_field('heading_link_target'); ?>" class="yellow_box_shadow hvr-fade fw_700 fz_20">Get involved</a>
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
            <div class="row">
                <div class="col-md-12">
                    <?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
            
                    <?php the_content(); ?>

                    <?php endwhile; ?>

                    <?php else : ?>
                        <div class="post">
                            <h3><?php _e('404 Error&#58; Not Found', 'brightpage'); ?></h3>
                        </div>
                    <?php endif; ?>                    
                </div>
            </div>
        </div>
    </div>


    <?php 
        $show_footer_involved_part = get_field('show_footer_involved_part');
        if($show_footer_involved_part == "Yes"){
    ?>
    <div class="get_involved_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 footer_hero">
                    <h2 class="white_text_yellow_bg fw_900 m_b_50 fz_45 lh_35">Get Involved</h2>
                    <p class="muse_font fz_25"><?php the_field('get_involved_area_text'); ?> </p>
                    <a href="<?php the_field('get_involved_link'); ?>" class="white_box_shadow hvr_fade_yellow fw_700 fz_25 ">Contact Us</a>




                </div>
            </div>
        </div>
    </div>

    <?php 
        }
    ?>



<?php get_footer(); ?>