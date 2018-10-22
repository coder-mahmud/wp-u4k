<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php wp_title(); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">      
        <link href="https://fonts.googleapis.com/css?family=Kanit:400,500,700,800,900" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

        <?php wp_head(); ?>   
    </head>

    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    	<div class="header_area">
            <div class="">
                <div class="row ">
                    <div class="col-md-12 align-self-center">
                        <div class="logo_menu_button_holder">
                            <a class="logo" href="<?php echo site_url('/')?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt=""></a>
                                <div class="menu-button">
                                    <div id="nav-icon3">
                                      <span></span>
                                      <span></span>
                                      <span></span>
                                      <span></span>
                                    </div>                            

                                </div>
                           

                        </div>

                        <div class="menu_holder">

                        <?php
                        if (function_exists('wp_nav_menu')) {
                            wp_nav_menu(array('theme_location' => 'wpj-main-menu','menu_class' => 'flexnav', 'fallback_cb' => 'wpj_default_menu',  'items_wrap' => '<ul data-breakpoint="800" id="%1$s" class="%2$s">%3$s</ul>'));
                        }
                        else {
                            wpj_default_menu();
                        }
                        ?>


<!--

                            <ul data-breakpoint="768" class="flexnav">
                                <li><a class="" href="#">Our Partners</a> </li>
                                <li><a class="" href="#">Who we are</a></li>
                                <li><a class="" href="#">Media & Events</a></li>
                                <li><a class="" href="#">Contact</a></li>
                                <li><a class="" href="#">Members Area</a></li>
                                <li><a class="" href="#">Donate</a></li>
                            </ul> 

                            -->              
                        </div>           

                </div>
            </div>
    	
    	</div>
    </div>