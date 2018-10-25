<?php 

/*
Template Name: Contact
*/
get_header(); ?>

		
        <div class="home_hero_area hero_area contact_hero">
            <div class="custom_container">
                <div class="row align-items-center">

                    <div class="col-md-6 m_m_b_15">
                        <div class="text_section">
                            <h2 class="blue_text_with_yellow_bg black_900">Contact Us</h2>
                            <?php the_field('left_side_text'); ?>

                                                       
                            
                            
<!--
                            <p class="muse_font mt_0">For all general inquires email </p>
                            <p class="muse_font mt_0"><a href="mailto:info@uniforms4kids.org.au">info@uniforms4kids.org.au</a> </p>
                            
                            <div class="address_box">
                                <p class="name fw_700">Anne Macdonald APM</p>
                                <p class="muse_font">Coordinator</p>
                                <p class="muse_font">P: 0400 000 000</p>
                                <p class="muse_font"><a href="mailto:annie@uniforms4kids.com.au">E: annie@uniforms4kids.com.au</a></p>

                            </div>

                            <div class="address_box">
                                <p class="name fw_700">Pauline Pattinson</p>
                                <p class="muse_font">Media & Communications</p>
                                <p class="muse_font">P: 0400 000 000</p>
                                <p class="muse_font"><a href="mailto:pauline@uniforms4kids.com.au">E: pauline@uniforms4kids.com.au</a></p>

                            </div>
-->


                        </div>
                    </div>


                    <div class="col-md-6 no_padding_on_mobile">
                        <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/school_boy.png" alt=""> -->
                        <?php 
                          
                            echo wp_get_attachment_image( get_field('right_side_image')['id'], 'full');
                        ?> 
                    </div>
                </div>
            </div>
        </div>





<?php get_footer(); ?>