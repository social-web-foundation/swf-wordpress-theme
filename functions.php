<?php
// Enqueue theme styles and scripts
function social_web_foundation_enqueue_styles() {
    // Enqueue main stylesheet
    wp_enqueue_style('main-style', get_stylesheet_uri());

    // Enqueue additional stylesheets
    wp_enqueue_style('core-style', get_template_directory_uri() . '/css/core.css');
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/wty1xyh.css');

    // Add jQuery (optional, if needed for any functionality)
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'social_web_foundation_enqueue_styles');

// Theme setup function
function social_web_foundation_setup() {
    // Add theme support for title tag
    add_theme_support('title-tag');

    // Add theme support for featured images
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'social-web-foundation' ),
    ));
}
add_action('after_setup_theme', 'social_web_foundation_setup');

// Add custom image sizes (optional)
function social_web_foundation_image_sizes() {
    add_image_size('project-thumbnail', 600, 400, true); // Example custom size
}
add_action('after_setup_theme', 'social_web_foundation_image_sizes');

// Register widget area (optional)
function social_web_foundation_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Footer Widget Area', 'social-web-foundation' ),
        'id'            => 'footer-widget',
        'description'   => __( 'Add widgets here to appear in your footer.', 'social-web-foundation' ),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'social_web_foundation_widgets_init');
