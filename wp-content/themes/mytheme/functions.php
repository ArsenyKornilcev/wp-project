<?php
    add_action( 'wp_enqueue_scripts', 'add_scripts_and_styles');
    add_theme_support( 'custom-logo' );

    function add_scripts_and_styles() {
        wp_deregister_script( 'jquery' );
        wp_enqueue_script('swiper-js', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', false, null, 'footer');
        wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/script.js', array('swiper-js'), null, 'footer');

        wp_enqueue_style('style', get_stylesheet_uri(), 'style.css');
    }
?>