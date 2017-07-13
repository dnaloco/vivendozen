<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package r2gozen
 */

?><!doctype html>
<html <?php language_attributes();?>>
<head>
<meta charset="<?php bloginfo('charset');?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head();?>
</head>

<body <?php body_class();?>>
<div id="page" class="site">
<br><br>
	<a class="skip-link screen-reader-text" href="#content">ASDASD<?php esc_html_e('Skip to content', 'r2gozen');?></a>
	<?php if (get_header_image() && is_front_page()): ?>
	<figure class="header-image">
		<?php the_header_image_tag();?>
	</figure><!-- .header-image -->
	<?php endif;?>
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
the_custom_logo();?>

			<div class="site-branding__text">

				<?php
if (is_front_page() && is_home()): ?>
					<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name');?></a></h1>
				<?php else: ?>
					<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name');?></a></p>
				<?php
endif;

$description = get_bloginfo('description', 'display');
if ($description || is_customize_preview()): ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
endif;?>
			</div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'r2gozen');?></button>
			<?php
wp_nav_menu(array(
	'theme_location' => 'header',
	'menu_id' => 'primary-menu',
));
?>
		</nav><!-- #site-navigation -->


		<nav class="single-nav">
		<?php
wp_nav_menu(array(
	'theme_location' => 'header',
	'menu_id' => 'single-nav',
));
?>
		</nav>

		<nav class="menu-2">
		<?php
wp_nav_menu(array(
	'menu_id' => 'menu-2',
	'walker' => new rc_scm_walker,
));
?>
		</nav>

		<div class="clear"></div>

		<nav id="advanced-nav" class="advanced-nav menu" role="navigation">
                    <ul>
                        <li>
                            <a href="#">
                                <div class="icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="button-text">
                                    Home
                                    <span>is where the heart is</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="icon">
                                    <i class="fa fa-cutlery"></i>
                                </div>
                                <div class="button-text">
                                    Food
                                    <span>is nourishment for the soul</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="icon">
                                    <i class="fa fa-file-text"></i>
                                </div>
                                <div class="button-text">
                                    Recipes
                                    <span>guide you on your journey</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="icon">
                                    <i class="fa fa-paper-plane"></i>
                                </div>
                                <div class="button-text">
                                    News
                                    <span>brings new things</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
