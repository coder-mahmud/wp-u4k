
        <div class="footer_area">
            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <img class="footer_logo" src="<?php get_option_tree( 'logo_footer', '', true ); ?>" alt="">
                    </div>
                    <div class="col-md-3">

                        <?php dynamic_sidebar('footer_social_links'); ?>

                        <!--
                        <h3 class="white_text_gray_bg fw_900 fz_35 lh_20 footer_column_heading">Follow us</h3>
                        <ul class="footer_links">
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Twitter</a></li>
                        </ul>
                    -->
                    </div>
                    <div class="col-md-3">

                        <?php dynamic_sidebar('footer_support_links'); ?>
                        <!--
                        <h3 class="white_text_gray_bg fw_900 fz_35 lh_20 footer_column_heading">Support us</h3>
                        <ul class="footer_links">
                            <li><a href="#">Donate</a></li>
                            <li><a href="#">Partner with us</a></li>
                            <li><a href="#">Get Involved</a></li>
                        </ul>
                        -->                        

                    </div>

                </div>
            </div>
        </div>


        <div class="footer_bottom_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <hr class="gray_line">
                        <p class="muse_font">&copy; Uniform 4 Kids 2018</p>                        
                    </div>
                </div>
            </div>

        </div>


        
        <script type="text/javascript">
        

            jQuery(document).ready(function($) {
                
                // initialize FlexNav
                /*
                $(".flexnav").flexNav({
                    'transitionSpeed' : '1.6s', 'itemHeight': 50,
                    'animationSpeed':     650, 
                });
                */


                $(".flexnav").flexNav({
                    //'animationSpeed' : 1000
                });

                $('.slider').bxSlider();
                $('.featured_article').bxSlider();

                $('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
                    $(this).toggleClass('open');
                });
                console.log('ki khobor!!');
            });
        
        </script>	
		
		<?php wp_footer(); ?>
    </body>
</html>
