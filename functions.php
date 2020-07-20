<?php
function add_script(){
  wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all' );
  wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
  wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), '3.5.1', true);
}
add_action( 'wp_enqueue_scripts', 'add_script' );
?>
