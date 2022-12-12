<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'mrflooring'); ?></a>

        <header id="masthead" class="site-header bg-blue-500">
            <div class="mx-auto max-w-7xl px-4 sm:px-6">
                <h1 class="logo uppercase"><a href="#">Mr Flooring Installation</a></h1>

                <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>

                <div class="site-header__menu">
                    <nav class="main-navigation">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Projects</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
