<?php get_header(); ?>

        
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





<?php get_footer(); ?>