<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Original+Surfer&display=swap" rel="stylesheet">
    <?php
          wp_enqueue_style('style.css');
    ?>
    
    
    <?php wp_head(); 
          
    ?>
    
</head>

<body <?php body_class(); ?>>

<div class="header">
    <header class="admin-bar">
        <a href="<?php echo home_url( '/' ); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="Logo">
        </a>
        
    </header>
    <?php wp_nav_menu( array( 'theme_location' => 'mymenu' ) );?>
</div>
        
    
    <?php wp_body_open(); ?>