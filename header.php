<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Meapu_wp
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
		<style>.masthead {
			background-image: url('<?php bloginfo('template_url')?>/img/home-page.jpg');
			background-position: 50% 90%;
		}
		</style>
		<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<div class="off-canvas position-left" id="offCanvas" data-off-canvas>
		<a href="#">
		<img src="<?php bloginfo('template_url')?>/img/logos/meapulogo-white.svg" alt="Clean My Space" class="meapu-logo--logo">
		</a>
		<nav class="mobile-menu">
		<?php 
			wp_nav_menu( $arg = array (
					'menu_class' => 'menu vertical',
					'theme_location' => 'primary'
			));
		?>
		</nav>
		<p class="text-center">
			<br>
			<a href="get-an-estimate/http://localhost/MeapuTest" class="large button button--invert">Get an Estimate</a>
		</p>
		</div>
		<div class="off-canvas-content" data-off-canvas-content>
			<div class="title-bar navigation-bar">
				<div class="title-bar-left">
				<button class="menu-icon hide-for-large" type="button" data-open="offCanvas"></button>
						
				<a href="http://localhost/MeapuTest">
				<img src="<?php bloginfo('template_url')?>/img/logos/meapulogo.svg" alt="Meapu Siivous" class="meapu-logo">
				</a>
					
				<nav class="float-right show-for-large main-menu">
				<?php 
					wp_nav_menu( $arg = array (
							'menu-class' => 'menu-item',
							'theme_location' => 'primary',
					));
				?>
				</nav>				
				</div>
								
				<div class="title-bar-right">
				<a href="tel:+358449883396" class="telephone-number"><i class="icon phone-icon"></i>010 3259 830</a>
				<a href="http://localhost/MeapuTest" class="button button--quote hide-for-small-only">Lahjakortti</a>
				</div>
				</div>
				
				<div class="tag-line">
					<div class="row">
						<div class="large-12 columns">
							<p class="tag-line__copy">Lahjakortti kotisiivoukseen. Puhtain joululahja löytyy <a class="highlighted" href="giftcard">Täältä!</a></p>
						</div>
					</div>
				</div>
				


