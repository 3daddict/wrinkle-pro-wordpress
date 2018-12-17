<?php

function wpt_theme_styles() {
    wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400|Raleway:300');
    wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
};
add_action('wp_enqueue_scripts', 'wpt_theme_styles');

function wpt_theme_js() {
    wp_enqueue_script('boostrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery_js'), '', true);
    wp_enqueue_script('popper_js', get_template_directory_uri() . '/assets/js/popper.js', array('jquery_js'), '', true);
    wp_enqueue_script('main_js', get_template_directory_uri() . '/assets/js/main.js', array('jquery_js'), '', true);
    wp_enqueue_script('jquery_js', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', '', '', true);
};
add_action('wp_enqueue_scripts', 'wpt_theme_js');

// function remove_admin_login_header() {
//     remove_action('wp_head', '_admin_bar_bump_cb');
// }
// add_action('get_header', 'remove_admin_login_header');