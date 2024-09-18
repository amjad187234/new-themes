<?php

// Menü-Registrierung
function mein_theme_setup() {
    register_nav_menus(array(
        'main-menu' => 'Hauptmenü'
    ));
}

add_action('after_setup_theme', 'mein_theme_setup');

// Theme-Support für Title-Tag hinzufügen
add_theme_support('title-tag');

// CSS und JS einbinden
function mein_theme_enqueue_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'mein_theme_enqueue_scripts');

// Benutzerdefinierte Länge für die Beitragszusammenfassung
function mein_benutzerdefinierter_excerpt($length) {
    return 20;
}

add_filter('excerpt_length', 'mein_benutzerdefinierter_excerpt');

// Breadcrumb Navigation
function mein_breadcrumb() {
    if (!is_front_page()) {
        echo '<nav class="breadcrumb">';
        echo '<a href="'.home_url().'">Startseite</a> » ';
        if (is_category() || is_single()) {
            the_category(' » ');
            if (is_single()) {
                echo " » ";
                the_title();
            }
        } elseif (is_page()) {
            echo the_title();
        }
        echo '</nav>';
    }
}
?>

