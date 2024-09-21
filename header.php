<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/core.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/wty1xyh.css">
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class('homepage'); ?>>

<header class="top-bar" id="top-bar-homepage">
    <div class="container">
        <div class="logo">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-5.png" id="logo-image" alt="<?php bloginfo('name'); ?> Logo">
                <?php bloginfo('name'); ?>
            </a>
        </div>

        <nav>
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => '',
                ) );
            ?>
        </nav>

        <button class="menu-button">Menu</button>
    </div>
</header>
