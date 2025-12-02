<?php
function amplite_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    
    // Updated: Flexible Custom Logo support for better responsiveness
    add_theme_support('custom-logo', array(
        'height'      => 100, // Suggested base height, but flexible
        'width'       => 400, // Suggested base width, but flexible
        'flex-height' => true, // Allows cropping to any height
        'flex-width'  => true, // Allows cropping to any width
        'header-text' => array('site-title', 'site-description'),
    ));
    
    register_nav_menus(array('primary' => __('Primary Menu', 'amplite')));
}
add_action('after_setup_theme', 'amplite_setup');

// Force 10 Posts on Homepage
function amplite_home_pagesize( $query ) {
    if ( ! is_admin() && $query->is_main_query() && $query->is_home() ) {
        $query->set( 'posts_per_page', 10 );
    }
}
add_action( 'pre_get_posts', 'amplite_home_pagesize' );

function amplite_widgets_init() {
    // Sidebar
    register_sidebar(array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="widget bg-white dark:bg-gray-800 p-6 rounded-lg border border-gray-200 dark:border-gray-700 mb-6">',
        'after_widget'  => '</div>',
        // Removed text-white to allow CSS variables to control color
        'before_title'  => '<h4 class="font-bold uppercase tracking-wider mb-4 border-b border-blue-500 pb-2 inline-block">',
        'after_title'   => '</h4>',
    ));

    // Header Right
    register_sidebar(array(
        'name'          => 'Header Right',
        'id'            => 'header-right',
        'description'   => 'Widgets for the right side of the header',
        'before_widget' => '<div class="header-widget">',
        'after_widget'  => '</div>',
    ));

    // Footer Columns (Removed text-white here too)
    register_sidebar(array(
        'name'          => 'Footer Column 1',
        'id'            => 'footer-1',
        'before_widget' => '<div class="footer-widget mb-6">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="text-lg font-bold mb-4">',
        'after_title'   => '</h5>',
    ));
    
    register_sidebar(array(
        'name'          => 'Footer Column 2',
        'id'            => 'footer-2',
        'before_widget' => '<div class="footer-widget mb-6">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="text-lg font-bold mb-4">',
        'after_title'   => '</h5>',
    ));
    
    register_sidebar(array(
        'name'          => 'Footer Column 3',
        'id'            => 'footer-3',
        'before_widget' => '<div class="footer-widget mb-6">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="text-lg font-bold mb-4">',
        'after_title'   => '</h5>',
    ));
}
add_action('widgets_init', 'amplite_widgets_init');

function amplite_scripts() {
    wp_enqueue_style('amplite-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'amplite_scripts');
?>
