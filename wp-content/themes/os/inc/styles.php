<?php
if(! defined('ABSPATH') ){
    exit;
}
/**
 * Подключение scripts and styles.
 */
function os_scripts() {
    //CSS
    wp_enqueue_style( 'os-style', get_stylesheet_uri() );

    wp_enqueue_style( 'os-css-vendor-bootstrap', get_template_directory_uri() . '/assets/css/vendor/bootstrap.min.css' );
    wp_enqueue_style( 'os-css-vendor-slider', get_template_directory_uri() . '/assets/css/vendor/slider.min.css' );
    wp_enqueue_style( 'os-css-vendor-icons', get_template_directory_uri() . '/assets/css/vendor/icons.min.css' );
    wp_enqueue_style( 'os-css-vendor-animation', get_template_directory_uri() . '/assets/css/vendor/animation.min.css' );
    wp_enqueue_style( 'os-css-vendor-gallery', get_template_directory_uri() . '/assets/css/vendor/gallery.min.css' );
    wp_enqueue_style( 'os-css-font-awesome', get_template_directory_uri() . '/assets/css/vendor/font-awesome.min.css' );
    wp_enqueue_style( 'os-css-vendor-default', get_template_directory_uri() . '/assets/css/default.css' );
    wp_enqueue_style( 'os-css-vendor-theme-yellow', get_template_directory_uri() . '/assets/css/theme-yellow.css' );

    //JS
    wp_enqueue_script( 'os-js-vendor-jquery', get_template_directory_uri() . '/assets/js/vendor/jquery.min.js', array(), true );
    wp_enqueue_script( 'os-js-vendor-easing', get_template_directory_uri() . '/assets/js/vendor/jquery.easing.min.js', array(), true );
    wp_enqueue_script( 'os-js-vendor-inview', get_template_directory_uri() . '/assets/js/vendor/jquery.inview.min.js', array(), true );
    wp_enqueue_script( 'os-js-vendor-popper', get_template_directory_uri() . '/assets/js/vendor/popper.min.js', array(), true );
    wp_enqueue_script( 'os-js-vendor-bootstrap', get_template_directory_uri() . '/assets/js/vendor/bootstrap.min.js', array(), true );
    wp_enqueue_script( 'os-js-vendor-ponyfill', get_template_directory_uri() . '/assets/js/vendor/ponyfill.min.js', array(), true );
    wp_enqueue_script( 'os-js-vendor-slider', get_template_directory_uri() . '/assets/js/vendor/slider.min.js', array(), true );
    wp_enqueue_script( 'os-js-vendor-animation', get_template_directory_uri() . '/assets/js/vendor/animation.min.js', array(), true );
    wp_enqueue_script( 'os-js-vendor-progress-radial', get_template_directory_uri() . '/assets/js/vendor/progress-radial.min.js', array(), true );
    wp_enqueue_script( 'os-js-vendor-bricklayer', get_template_directory_uri() . '/assets/js/vendor/bricklayer.min.js', array(), true );
    wp_enqueue_script( 'os-js-vendor-gallery', get_template_directory_uri() . '/assets/js/vendor/gallery.min.js', array(), true );
    wp_enqueue_script( 'os-js-vendor-shuffle', get_template_directory_uri() . '/assets/js/vendor/shuffle.min.js', array(), true );
    wp_enqueue_script( 'os-js-vendor-particles', get_template_directory_uri() . '/assets/js/vendor/particles.min.js', array(), true );
    wp_enqueue_script( 'os-js-main', get_template_directory_uri() . '/assets/js/main.js', array(), true );


}
add_action( 'wp_enqueue_scripts', 'os_scripts' );