<?php
add_action(
'wp_enqueue_scripts',
'al_enqueue_styles'
);
function al_enqueue_styles() {
wp_enqueue_style(
 //nom du style parent
 'twentynineteen',
 //chemin vers le fichier css parent
 get_template_directory_uri().'/style.css'
 );
}
if (function_exists( 'add_theme_support' )) {
  add_theme_support( 'post-thumbnails' );
}