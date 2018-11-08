<?php
/**
 * Enqueue parent theme style
 */
function mychildtheme_enqueue_styles() {
    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'mychildtheme_enqueue_styles' );


/*** AÑADIR TIPOGRAFÍAS DE GOOGLE FONTS PARA EL TEMA ***/

function miplugin_google_fonts( ){
    wp_enqueue_script('google-fonts', 'https://fonts.googleapis.com/css?family=ABeeZee|Abril+Fatface|Pacifico|Poiret+One|Raleway|Roboto|Satisfy');
   
}
add_action('wp_enqueue_scripts', 'miplugin_google_fonts');