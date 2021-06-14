<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LePays</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mate+SC&display=swap" rel="stylesheet">
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
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
                </a>
                
            </header>
        
        
            
        </div>
        
       <div class="menu"><?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) );?></div> 
      
      <?php wp_body_open(); ?>
      
    
    