<?php
/**
 * Theme Functions
 * 
 * @package Codecraft
 */


function codecrafts_enqueue_scripts(){

   wp_register_style( 'bootstrap-css', get_template_directory_uri(  ).'/bootstrap/bootstrap.min.css', ['stylesheets'], filemtime( get_template_directory().'/bootstrap/bootstrap.min.css'),'all' );
   wp_register_style( 'stylesheets',get_stylesheet_uri(  ),[],filemtime( get_stylesheet_directory().'/style.css'),'all');

   wp_register_script( 'main-js', get_template_directory_uri(  ).'/assets/main.js', [], filemtime( get_template_directory().'/assets/main.js'), true );
   wp_register_script( 'bootstrap-js', get_template_directory_uri(  ).'/bootstrap/bootstrap.min.js', [], filemtime( get_template_directory().'/bootstrap/bootstrap.min.js'), true );
   
   wp_enqueue_style('bootstrap-css');
   wp_enqueue_style('stylesheets');
   

   wp_enqueue_script( 'main-js' );
   wp_enqueue_script( 'bootstrap-js' );

}

add_action( 'wp_enqueue_scripts', 'codecrafts_enqueue_scripts' );