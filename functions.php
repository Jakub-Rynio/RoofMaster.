<?php
/*
==========================
 Register menu
==========================
*/

function roof_master_register_menu()
{

    add_theme_support('menus');

    register_nav_menus(array(
        'primary-menu' => 'Menu glowne',
        'secondary_menu' => 'Menu stopki',
    ));
}
add_action('after_setup_theme', 'roof_master_register_menu');






/*
==========================
 INC FILES 
==========================
*/

function roof_master_inc_styles()
{

    //css files
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/assets/custom-css/roof_master.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), '5.0.0', 'all');


    //js filesj
 //   wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), '3.3.1', true);

    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '5.0.0', 'all');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/assets/custom-js/roof_master.js', array(), '1.0.0', 'mobile');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/assets/jquery/jquery-3.6.4.min.js', array(), '3.6.4', 'all');
}
add_action('wp_enqueue_scripts', 'roof_master_inc_styles');
