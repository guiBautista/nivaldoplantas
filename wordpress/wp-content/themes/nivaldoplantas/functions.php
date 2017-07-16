<?php
class nivaldoplantas {
    function init () {
        add_action( 'wp_enqueue_scripts', array( __CLASS__, 'scripts' ) );
    }

    function scripts () {
        // js
        wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '1.0', true );

        // css
        wp_enqueue_style( 'bootstrap_css',  get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
        wp_enqueue_style( 'style_css',  get_template_directory_uri() . '/assets/css/style.css' );
    } 
}
add_action( 'init', array( 'nivaldoplantas', 'init' ) );
?>