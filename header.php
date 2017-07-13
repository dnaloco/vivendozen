<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head();?>
</head>
<body <?php body_class();?>>

<div id="page" class="site">

    <header id="masthead" class="site-header">
        <div class="site-branding">
            <?php
            the_custom_logo();

/*$custom_logo_id = get_theme_mod('custom_logo');

            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

            var_dump($logo);*/
?>
            <div class="site-branding__text">
                <?php
                if (is_front_page() && is_home()) : ?>
                                                    <h1 class="site-title">
                                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                            <?php bloginfo('name');?>

                                        </a>
                                                    </h1>
                <?php else : ?>
                    <p class="site-title">
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name');?></a>
                    </p>
                <?php
                endif;

$description = get_bloginfo('description', 'display');
if ($description || is_customize_preview()) : ?>
                    <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                <?php
endif;?>

            </div><!-- .site-branding__text -->
        </div><!-- .site-branding -->

        <nav id="site-navigation" class="main-navigation">
            <?php
            wp_nav_menu(array(
            'theme_location' => 'header',
            'menu_id' => 'primary-menu',
            ));
?>
        </nav>
    </header>

    <div id="content" class="site-content">
