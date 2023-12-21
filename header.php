<?php
/**
 * Header Template
 * 
 * @package Codecraft
 */
?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ) ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Codecrafts</title>
        <?php wp_head(  ); ?>
    </head>

    <body>

        <?php 
            if( function_exists( 'wp_body_open' ) ) {
                wp_body_open(); 
            }
        
    ?>
        <div id="page" class="codecraft">
            <header id="master-header" class="site-header" role="banner">
                <?php get_template_part('template-parts/header/nav'); ?>
            </header>
            <div id="content" class="site-content">

        