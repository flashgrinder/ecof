<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <? wp_head(); ?>
</head>
<body class="page bg--white js-page-open-menu">

<!-- Header -->
<header class="header header--home">
    <div class="header__body container">
        <div class="header__outer">
            <?php if( is_front_page() ): ?>
            <a href="<?= home_url(); ?>" class="header__logo logo header__logo--home">
                <img src="<?= STANDART_DIR; ?>img/logo-white.svg" alt="" class="header__logo-img logo__img">
                <img src="<?= STANDART_DIR; ?>img/logo-bg.svg" alt="" class="header__logo-decor">
            </a>
            <?php else : ?>
            <a href="<?= home_url(); ?>" class="header__logo logo">
                <img src="<?= STANDART_DIR; ?>img/logo.svg" alt="" class="header__logo-img logo__img">
            </a>
            <?php endif; ?>
            <div class="header__inner js-menu">
                <?php
                    wp_nav_menu([
                        'theme_location'  => 'header-menu',
                        'container'       => 'nav',
                        'container_class' => 'header__menu menu',
                        'menu_class'      => '',
                        'items_wrap'      => '<ul class="%2$s header__menu-list menu__list">%3$s</ul>'
                    ]);
                ?>
            </div>
            <?php if( !is_front_page() ): ?>
                <a href="tel:89536383516" class="header__phone text text--medium text--black text--w-light link hide-mobile">
                    8 953 638 35 16
                </a>
            <?php endif; ?>
            <div class="header__burger-menu burger-menu js-burger">
                <span class="burger-menu__line"></span>
            </div>
        </div>
    </div>
</header>
<!-- /. Header -->

<!-- MAIN -->
<main class="main page__container">