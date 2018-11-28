<?php


/* Theme styles and JS */
wp_enqueue_script('jquery');
function cwp_fc_scripts(){
  

  	wp_enqueue_style('normalize-style', get_template_directory_uri() .'/css/normalize.css');
  	wp_enqueue_style('bootstrap-style', get_template_directory_uri() .'/css/bootstrap.min.css');
  	wp_enqueue_style('flexnav', get_template_directory_uri() .'/css/flexnav.css');

 	  wp_enqueue_style( 'bxslider', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css' );
  	wp_enqueue_style( 'kanit-font', 'https://fonts.googleapis.com/css?family=Kanit:400,500,700,800,900' );
	  wp_enqueue_style( 'style', get_stylesheet_uri(),NULL, microtime() );
    wp_enqueue_style('lessframework-style', get_template_directory_uri() .'/css/lessframework.css',NULL, microtime() );
	  wp_enqueue_style('lightbox-style', get_template_directory_uri() .'/css/lightbox.css' );
        
  	wp_deregister_script('jquery');
  	wp_enqueue_script('jq','https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js',array(),'',false);

  	wp_enqueue_script('modernizer_script', get_template_directory_uri() .'/js/vendor/modernizr-3.5.0.min.js',array(),'',true);

	  wp_enqueue_script('bx-script', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js',array(),'',true);
  	wp_enqueue_script('bootstrap-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js', array(), null, true);
  	wp_enqueue_script('bootstrap', get_template_directory_uri() .'/js/bootstrap.min.js',array(),'',true);	
    wp_enqueue_script('flexnav_script', get_template_directory_uri() .'/js/jquery.flexnav.js',array(),'',true);
   	wp_enqueue_script('lightbox_script', get_template_directory_uri() .'/js/lightbox.min.js',array('jq'),'',true);


   	wp_enqueue_script('main_script', get_template_directory_uri() .'/js/main.js',array(),microtime(),true);

}
add_action('wp_enqueue_scripts','cwp_fc_scripts');


// Theme Support
add_theme_support( 'post-thumbnails', array( 'post', 'partner_items', 'testimonials','team','gallery' ) );

add_image_size( 'partner_image', 200, 50, true );
add_image_size( 'hero_small_mobile', 370, 470, true );
add_image_size( 'hero_medium_767', 767, 970, true );
add_image_size( 'hero_medium_406', 406, 513, true );
add_image_size( 'hero_medium_1055', 1055, 1335, true );
add_image_size( 'testimonial_image', 120, 120, true );
add_image_size( 'featured_post_image', 570, 460, true );
add_image_size( 'post_thumb_image', 220, 180, true );
add_image_size( 'post_large_image', 720, 900, true );
add_image_size( 'team_member_small', 165, 160, true );
add_image_size( 'gallery_thumb', 165, 160, true );



/*   Script tag for 3rd party JS resources */
function add_id_to_script( $tag, $handle, $src ) {

    if ( 'bootstrap-popper' === $handle ){
        $tag = '<script type="text/javascript" src="' . $src . '"  integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script> ';
    }

    return $tag;
}


add_filter( 'script_loader_tag', 'add_id_to_script', 10, 3 );




  // add menu support and fallback menu if menu doesn't exist
  add_action('init', 'wpj_register_menu');
  function wpj_register_menu() {
    if (function_exists('register_nav_menu')) {
      register_nav_menu( 'wpj-main-menu', __( 'Main Menu', 'brightpage' ) );
    }
  }
  function wpj_default_menu() {
    echo '<ul class="nav">';
    if ('page' != get_option('show_on_front')) {
      echo '<li><a href="'. home_url() . '/">Home</a></li>';
    }
    wp_list_pages('title_li=');
    echo '</ul>';
  }



// Custom posts
function cwpmh_u4k_custom_post() {
  register_post_type( 'partner_items', 
    array(
      'labels' => array(
        'name' => __( 'Partners' ),
        'singular_name' => __( 'Partner' ),
        'add_new_item' => __( 'Add New Partner' )
      ),
      'public' => true,
      'supports' => array('author', 'thumbnail', 'title', 'editor', 'custom-fields','excerpt'),
      'taxonomies' => array('category'),
      'has_archive' => true,
      'menu_position' => 5,  
      'show_in_admin_bar' =>true,
      'rewrite' => array('slug' => 'partner-item'),
      'menu_icon' => 'dashicons-share'
      
    )
  );
  
  

  register_post_type( 'testimonials',
    array(
      'labels' => array(
        'name' => __( 'Testimonials' ),
        'singular_name' => __( 'Testomonial' )
      ),
      'public' => true,
      'supports' => array('title', 'custom-fields', 'thumbnail','excerpt'),
      'has_archive' => true,
      'taxonomies' => array('category'),
      'rewrite' => array('slug' => 'testimonial-item'),
      'menu_icon' => 'dashicons-testimonial'

    )
  );


  
  

  register_post_type( 'team',
    array(
      'labels' => array(
        'name' => __( 'Team Member' ),
        'singular_name' => __( 'Team Member' )
      ),
      'public' => true,
      'supports' => array('title','editor', 'custom-fields', 'thumbnail','excerpt'),
      'has_archive' => true,
      'taxonomies' => array('category'),
      'rewrite' => array('slug' => 'team'),
      'menu_icon' => 'dashicons-admin-users'

    )
  );

  

  register_post_type( 'supporter',
    array(
      'labels' => array(
        'name' => __( 'Supporters' ),
        'singular_name' => __( 'Supporter' )
      ),
      'public' => true,
      'supports' => array('title','editor', 'custom-fields', 'thumbnail','excerpt'),
      'has_archive' => true,
      'taxonomies' => array('category'),
      'rewrite' => array('slug' => 'testimonial-item'),
      'menu_icon' => 'dashicons-heart'

    )
  );

  

  register_post_type( 'gallery',
    array(
      'labels' => array(
        'name' => __( 'Photo Gallery' ),
        'singular_name' => __( 'Photo Gallery' )
      ),
      'public' => true,
      'supports' => array('title','thumbnail'),
      'has_archive' => true,
      'taxonomies' => array('category'),
      'rewrite' => array('slug' => 'gallery'),
      'menu_icon' => 'dashicons-format-gallery'

    )
  );





}

add_action( 'init', 'cwpmh_u4k_custom_post' );


// Widgets

function bilanti_widget_areas() {

    
      register_sidebar( array(
      'name' => __( 'Footer Social Links', 'bilanti' ),
      'id' => 'footer_social_links',
      'before_widget' => '',
          'after_widget' => '',
          'before_title' => '<h3 class="white_text_gray_bg fw_900 fz_35 lh_20 footer_column_heading">',
          'after_title' => '</h3>',
      ) );
    
    
      register_sidebar( array(
      'name' => __( 'Footer support Links', 'bilanti' ),
      'id' => 'footer_support_links',
      'before_widget' => '',
          'after_widget' => '',
          'before_title' => '<h3 class="white_text_gray_bg fw_900 fz_35 lh_20 footer_column_heading">',
          'after_title' => '</h3>',
      ) );
    
    
    

  }
  add_action('widgets_init', 'bilanti_widget_areas');


// Option Tree

  add_filter( 'ot_show_pages', '__return_false' );
  add_filter( 'ot_show_new_layout', '__return_false' );
  add_filter( 'ot_theme_mode', '__return_true' );
  include_once( 'option-tree/ot-loader.php' );
  

  include_once( 'inc/theme-options.php' );


