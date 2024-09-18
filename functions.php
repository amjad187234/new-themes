<?php
// Theme Setup
function mein_theme_setup() {
    // Theme unterstützt Menüs und Thumbnails
    add_theme_support('menus');
    add_theme_support('post-thumbnails');

    // Registriere Navigationsmenüs
    register_nav_menus(array(
        'main-menu' => 'Hauptmenü',
        'footer-menu' => 'Footermenü'
    ));
}
add_action('after_setup_theme', 'mein_theme_setup');

// Lade Styles und Scripts
function mein_theme_scripts() {
    wp_enqueue_style('mein-theme-style', get_stylesheet_uri());
    wp_enqueue_style('custom-fonts', get_template_directory_uri() . '/assets/css/fonts.css');
    wp_enqueue_script('mein-theme-script', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'mein_theme_scripts');
?>
