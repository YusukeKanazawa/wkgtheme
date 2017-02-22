<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="title-bar" data-responsive-toggle="site-navigation">
      <div class="title-bar-left">
        <div class="title-bar-title">
  				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
  			</div>
      </div>
      <div class="title-bar-right">
        <span>Username</span>
  			<button class="menu-icon" type="button" data-toggle="offCanvasRightMenu"></button>
      </div>
		</div>

		<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<ul class="menu">
					<li class="home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
				</ul>
			</div>
			<div class="top-bar-right">
				<?php foundationpress_top_bar_r(); ?>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</nav>
	</header>

  <div class="off-canvas-wrapper">
    <div class="off-canvas-absolute position-right" id="offCanvasRightMenu" data-off-canvas>
      <ul class="vertical menu">
        <li>
          <a href="#">Towel</a>
          <ul class="vertical menu">
            <li><a href="#">History</a></li>
            <li><a href="#"></a></li>
            <li><a href="#">ZURB</a></li>
            <li><a href="#">Com</a></li>
            <li><a href="#">Slash</a></li>
            <li><a href="#">Sites</a></li>
          </ul>
        </li>
        <li>
          <a href="#">TNG</a>
          <ul class="vertical menu">
            <li><a href="#">Foundation</a></li>
            <li><a href="#">Dot</a></li>
            <li><a href="#">ZURB</a></li>
            <li><a href="#">Com</a></li>
            <li><a href="#">Slash</a></li>
            <li><a href="#">Sites</a></li>
          </ul>
        </li>
        <li><a href="#">ZURB</a></li>
        <li><a href="#">Com</a></li>
      </ul>
    </div>
	<div class="off-canvas-content" data-off-canvas-content>
  	<section class="container">
  		<?php do_action( 'foundationpress_after_header' );
