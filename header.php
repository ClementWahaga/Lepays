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
    <?php
          wp_enqueue_style('style.css');
    ?>
    
    
    <?php wp_head(); 
          
    ?>
    
</head>

<body <?php body_class(); ?>>

    <nav>
            le pays
    </nav>
    <div class="container">
        <div><i class="fas fa-running"></i>Sport</div>
        <div><i class="far fa-newspaper"><a href="http://localhost/lepays/category/actu/"></a></i>Actu</div>
        <div><i class="fas fa-car-crash"><a href="http://localhost/lepays/2021/06/01/attaque-de-requin-mortel/"></a></i>Faits divers</div>
        <div><i class="fas fa-handshake"></i>Politique</div>
        
    </div>
    
        
    
    <?php wp_body_open(); ?>
    
    