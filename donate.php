            <?php 
                $donate_bg =   get_option_tree( 'dotate_bg','', false ); 
            ?>
            <style>
                
                .donate_area{background: url('<?php echo $donate_bg; ?>');}
            </style>


            <div class="get_involved_area donate_area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 footer_hero">
                            <h2 class="white_text_yellow_bg fw_900 m_b_50 fz_45 lh_35">Donate Now</h2>

                            <p class="muse_font fz_25"><?php  get_option_tree( 'dotate_text','', true ); ?></p>

                            <a href="<?php  get_option_tree( 'dotate_link','', true ); ?>" class="white_box_shadow hvr_fade_yellow fw_700 fz_25 ">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>