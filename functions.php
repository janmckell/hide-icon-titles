<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    $parenthandle = 'parent-style';
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
}

function jm_enqueue_scripts() {
    wp_enqueue_script( 'hide-icon-titles', get_template_directory_uri() . '/js/hide-icon-titles.js', array(), '1.0.0', true );
    
    }
    add_action( 'wp_enqueue_scripts', 'jm_enqueue_scripts' );
    

/**
 * JM™ Admin Footer
 */

function jmtm_config_admin_footer_text() {
    echo '<p style="float:right;display:block;margin:30px 5px 10px 20px;">WordPress Web Development by <a href="https://janmckell.com/">JM™</a></p>';
}
add_action('admin_footer', 'jmtm_config_admin_footer_text');
