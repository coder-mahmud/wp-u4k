<?php 

/*
Template Name: Media & Events
*/
get_header(); ?>

		
        <div class="home_hero_area hero_area media_hero_area">
            <div class="container ">
                <div class="featured_article">


                <?php
                global $post;
                $args = array( 'posts_per_page' => -1, 'post_type'=> 'post','category_name' => 'Featured');
                $myposts = get_posts( $args );
                foreach( $myposts as $post ) : setup_postdata($post); ?>
                



                     <div class="row align-items-center ">

                        <div class="col-md-6 m_m_b_15">
                            <div class="text_section">
                                <!-- 
                                <h2 class="red_text_yellow_bg black_900 fz_40 lh_25">Hero news</h2>
                                <h2 class="red_text_yellow_bg black_900 fz_40 lh_25">articles go in  </h2>
                                <h2 class="red_text_yellow_bg black_900 fz_40 lh_25">this main  </h2>
                                <h2 class="red_text_yellow_bg black_900 fz_40 lh_25">section up here.</h2>
                                -->
                                <?php the_field('featured_post_heading'); ?>
                                <p class="muse_font m_t_25"><?php the_field('featured_post_short_description'); ?></p>
                                <a href="<?php the_permalink(); ?>" class="yellow_box_shadow hvr_fade_red fw_700 fz_20">Read more</a>
                            </div>
                        </div>


                        <div class="col-md-6 no_padding_on_mobile">
                            <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/media_page.png" alt=""> -->
                            <?php the_post_thumbnail('featured_post_image'); ?>
                        </div>

                    </div>



                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>






                </div>

            </div>
        </div>      

 
        <div class="article_list_area">
                 <div class="container">
                     <div class="row">



<?php
global $wp_query;
   $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $args = array('post_type' => 'post', 'posts_per_page' => 1, 'paged' => $paged);
    $blog_posts = new WP_Query($args);
    if($blog_posts->have_posts()) : while($blog_posts->have_posts()) : $blog_posts->the_post();
?>

                         <div class="col-md-4 single_article">
                             
                            <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/article_thumb.png" alt=""> -->
                            <?php the_post_thumbnail('post_thumb_image'); ?>
                            <h3 class="title fz_25 fw_700"><?php the_title(); ?></h3>
                            <?php the_excerpt(); ?>

                            <a href="<?php the_permalink(); ?>" class="read_more" ><i class="fas fa-long-arrow-alt-right"></i> Read more</a>

                         </div>  


<?php endwhile;  ?>


<?php endif; echo kriesi_pagination(); ?>
<?php wp_reset_query();  ?>










<!--



                         <div class="col-md-4 single_article">
                             
                            <img src="<?php echo get_template_directory_uri(); ?>/img/article_thumb.png" alt="">
                            <h3 class="title fz_25 fw_700">Minor article heading goes here</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                            <a href="#" class="read_more" ><i class="fas fa-long-arrow-alt-right"></i> Read more</a>

                         </div>



                         <div class="col-md-4 single_article">
                             
                            <img src="<?php echo get_template_directory_uri(); ?>/img/article_thumb.png" alt="">
                            <h3 class="title fz_25 fw_700">Minor article heading goes here</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                            <a href="#" class="read_more" ><i class="fas fa-long-arrow-alt-right"></i> Read more</a>

                         </div>


                         <div class="col-md-4 single_article">
                             
                            <img src="<?php echo get_template_directory_uri(); ?>/img/article_thumb.png" alt="">
                            <h3 class="title fz_25 fw_700">Minor article heading goes here</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                            <a href="#" class="read_more" ><i class="fas fa-long-arrow-alt-right"></i> Read more</a>

                         </div>



                         <div class="col-md-4 single_article">
                             
                            <img src="<?php echo get_template_directory_uri(); ?>/img/article_thumb.png" alt="">
                            <h3 class="title fz_25 fw_700">Minor article heading goes here</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                            <a href="#" class="read_more" ><i class="fas fa-long-arrow-alt-right"></i> Read more</a>

                         </div>



                         <div class="col-md-4 single_article">
                             
                            <img src="<?php echo get_template_directory_uri(); ?>/img/article_thumb.png" alt="">
                            <h3 class="title fz_25 fw_700">Minor article heading goes here</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                            <a href="#" class="read_more" ><i class="fas fa-long-arrow-alt-right"></i> Read more</a>

                         </div>


                         <div class="col-md-4 single_article">
                             
                            <img src="<?php echo get_template_directory_uri(); ?>/img/article_thumb.png" alt="">
                            <h3 class="title fz_25 fw_700">Minor article heading goes here</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                            <a href="#" class="read_more" ><i class="fas fa-long-arrow-alt-right"></i> Read more</a>

                         </div>



                         <div class="col-md-4 single_article">
                             
                            <img src="<?php echo get_template_directory_uri(); ?>/img/article_thumb.png" alt="">
                            <h3 class="title fz_25 fw_700">Minor article heading goes here</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                            <a href="#" class="read_more" ><i class="fas fa-long-arrow-alt-right"></i> Read more</a>

                         </div>



                         <div class="col-md-4 single_article">
                             
                            <img src="<?php echo get_template_directory_uri(); ?>/img/article_thumb.png" alt="">
                            <h3 class="title fz_25 fw_700">Minor article heading goes here</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                            <a href="#" class="read_more" ><i class="fas fa-long-arrow-alt-right"></i> Read more</a>

                         </div>
-->
                         <div class="col-md-12">
                             <a href="#" class="view_more">View more <i class="fas fa-long-arrow-alt-right"></i></a>
                         </div>



                     </div>
                 </div>
             </div> 





        <div class="get_involved_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 footer_hero">
                        <h2 class="white_text_yellow_bg fw_900 m_b_50 fz_45 lh_35">Donate Now</h2>
                        <p class="muse_font fz_25">Are you passionate about our cause and want to get involved? Contact us to see what ways you can volunteer and help change children's lives. </p>
                        <a href="#" class="white_box_shadow hvr_fade_yellow fw_700 fz_25 ">Contact Us</a>




                    </div>
                </div>
            </div>
        </div>





<?php get_footer(); ?>