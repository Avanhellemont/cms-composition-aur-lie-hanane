<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
</head>
<body>
<header>
<img class="header__logo--img" src="<?php bloginfo('template_url'); ?>/assets/svg/logo-full.svg" alt="logo">

<nav class="header__nav">
        
    
    <?php wp_nav_menu(array( 'theme_location' => 'menu_principal' ))  ?>
    </nav>



    <a href="#" class="header__button">Wishlist <img class="button__icon" src="<?php bloginfo('template_url'); ?>/assets/svg/bullet-list-black.svg" alt="logo"></a>
</header>
