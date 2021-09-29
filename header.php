<!doctype html>
<html lang="<?php echo get_locale(); ?>">
<head>
    <title><?php echo wp_get_document_title(); ?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
<!--    <script async src="https://www.googletagmanager.com/gtag/js?-->
<!--    id=UA-180717046-2"></script>-->
<!--    <script>-->
<!--        window.dataLayer = window.dataLayer || [];-->
<!--        function gtag(){dataLayer.push(arguments);}-->
<!--        gtag('js', new Date());-->
<!--        gtag('config', 'UA-180717046-2');-->
<!--    </script>-->
</head>
<body <?php body_class(); ?>>
<div class="fixed-box">
    <header class="header">
        <div class="header__logo">
            <a class="header__logo-top" href="<?php echo home_url(); ?>" title="branding">
                <?php if( $logo_big = get_field('logo_big', 'option')):?>
                    <img src="<?php echo $logo_big['url'] ?>" alt="<?php echo $logo_big['alt'] ?>">
                <?php endif; ?>
            </a>
            <a class="header__logo-scroll" href="<?php echo home_url(); ?>" title="branding">
                <?php if( $logo_small = get_field('logo_small', 'option')):?>
                    <img src="<?php echo $logo_small['url'] ?>" alt="<?php echo $logo_small['alt'] ?>">
                <?php endif; ?>
            </a>
        </div>
        <div class="bar-container">
            <?php wp_nav_menu([
                'theme_location'    => 'primary',
                'container'         => 'nav',
                'container_class'   => 'navbar',
                'menu_class'        => 'navbar__nav',
            ]); ?>
        </div>
    </header>
</div>

