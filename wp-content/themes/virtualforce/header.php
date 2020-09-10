<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link rel="icon" href="<?php bloginfo('template_directory');?>/favicon.png" type="image/png" />
		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
	<div class="loader_wrapper">
		<img src="<?php bloginfo('template_directory');?>/assets/images/gif_loader_image.gif" alt="" class="loader">
	</div>
	<?php wp_body_open(); ?>
	<?php get_template_part( 'template-parts/modal-search' ); ?>
	<header class="main_header">
            <div class="row">
                <div class="col-6">
                    <div class="branding">
                        <a href="<?php echo site_url(); ?>"><img src="<?php the_field('main_logo', 'option'); ?>" alt="Logo"></a>
                    </div>
                </div>

                <div class="col-6">
				<button class="toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
					<?php twentytwenty_the_theme_svg( 'search' ); ?>
				</button><!-- .search-toggle -->

					<div class="hamburger_wrapper">
						<!-- Hamburger Starts Here -->
						<div class="hamburger_icon">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
						<!-- Hamburger Ends Here -->
					</div>
                </div>
            </div>
	</header>
	<div class="mega_menu_wrapper d-none d-xl-block">
	<nav class="main_nav">
            <div class="row">
                <div class="col-xl-2">
					<ul class="main_menu">
						<?php
						wp_nav_menu(
							array(
								'container'  => '',
								'items_wrap' => '%3$s',
								'theme_location' => 'main_menu_partner',
							)
						);?>
					</ul>
				</div>
				<div class="col-xl-2">
					<ul class="main_menu">
						<?php
						wp_nav_menu(
							array(
								'container'  => '',
								'items_wrap' => '%3$s',
								'theme_location' => 'main_menu_expertise',
							)
						);?>
					</ul>
				</div>
				<div class="col-xl-2">
					<ul class="main_menu">
						<?php
						wp_nav_menu(
							array(
								'container'  => '',
								'items_wrap' => '%3$s',
								'theme_location' => 'main_menu_solution',
							)
						);?>
					</ul>
				</div>
				<div class="col-xl-2">
					<ul class="main_menu">
						<?php
						wp_nav_menu(
							array(
								'container'  => '',
								'items_wrap' => '%3$s',
								'theme_location' => 'main_menu_work',
							)
						);?>
					</ul>
				</div>
				<div class="col-xl-2">
					<ul class="main_menu">
						<?php
						wp_nav_menu(
							array(
								'container'  => '',
								'items_wrap' => '%3$s',
								'theme_location' => 'main_menu_company',
							)
						);?>
					</ul>
				</div>
				<div class="col-xl-2">
					<ul class="main_menu">
						<?php
						wp_nav_menu(
							array(
								'container'  => '',
								'items_wrap' => '%3$s',
								'theme_location' => 'main_menu_engage',
							)
						);?>
					</ul>
                </div>
			</div>
			<div class="contact_detail_wrapper">
		<h4>Contact Us</h4>
		<p>48 Wall Street 5th Floor Suite #9 New York, NY, 10005</p>
		<a href="mailto:innovate@virtualforce.io" class="email">innovate@virtualforce.io</a>
		<a href="tel:+17183959793" class="tel">+1 718 395 9793</a>
		<a href="<?php echo site_url(); ?>/contact-us" class="a_link_left">Get In Touch</a>
	</div>
	</nav>

	
	</div>





	<div class="mega_menu_wrapper d-block d-xl-none">
	<nav class="main_nav mobile_nav">
            <div class="row">
                <div class="col-12">
					<ul class="main_menu">
						<?php
						wp_nav_menu(
							array(
								'container'  => '',
								'items_wrap' => '%3$s',
								'theme_location' => 'mobile_menu',
							)
						);?>
					</ul>
				</div>
			</div>
	<div class="contact_detail_wrapper">
		<h4>Contact Us</h4>
		<p>48 Wall Street 5th Floor Suite #9 New York, NY, 10005</p>
		<a href="mailto:innovate@virtualforce.io" class="email">innovate@virtualforce.io</a>
		<a href="tel:+17183959793" class="tel">+1 718 395 9793</a>
		<a href="<?php echo site_url(); ?>/contact-us" class="a_link_left">Get In Touch</a>
	</div>
	</nav>

    </div>
