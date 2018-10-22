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
        
  	wp_deregister_script('jquery');
  	wp_enqueue_script('jq','https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js',array(),'',false);

  	wp_enqueue_script('modernizer_script', get_template_directory_uri() .'/js/vendor/modernizr-3.5.0.min.js',array(),'',true);

	   wp_enqueue_script('bx-script', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js',array(),'',true);
  	wp_enqueue_script('bootstrap-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js', array(), null, true);
  	wp_enqueue_script('bootstrap', get_template_directory_uri() .'/js/bootstrap.min.js',array(),'',true);	
   	wp_enqueue_script('flexnav_script', get_template_directory_uri() .'/js/jquery.flexnav.js',array(),'',true);
   	wp_enqueue_script('main_script', get_template_directory_uri() .'/js/main.js',array(),microtime(),true);

}


add_action('wp_enqueue_scripts','cwp_fc_scripts');




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
