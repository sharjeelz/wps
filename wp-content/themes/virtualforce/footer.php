<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<footer class="footer">
            <div class="row">
			<div class="col-12 col-sm-4 col-lg-2">
				<p class="bio_text">Tech Advisory, Innovation,
					Design, and Engineering
					(AIDE) for Enterprises, 
					Digital Agencies,
					and Startups</p>
				</div>
                <div class="col-6 col-sm-4  col-lg-2 custom-pl">
					<ul class="footer_menu">
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
				<div class="col-6 col-sm-4  col-lg-2 pl-lg-5">
					<ul class="footer_menu">
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
				<div class="col-6 col-sm-4  col-lg-2">
					<ul class="footer_menu">
						<?php
						wp_nav_menu(
							array(
								'container'  => '',
								'items_wrap' => '%3$s',
								'theme_location' => 'footer_menu_expertise',
							)
						);?>
					</ul>
				</div>
				<div class="col-6 col-sm-4  col-lg-2">
					<ul class="footer_menu">
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
				 
				<div class="col-12 col-sm-4  col-lg-2">
						<ul class="list-unstyled social_wrapper">
						<?php while( have_rows('social_links', 'option') ) : the_row();?>
							<li><a href="<?php the_sub_field('link'); ?>" target="_blank">
								<img src="<?php bloginfo("template_directory");?>/assets/images/<?php the_sub_field('name'); ?>.png" alt="<?php the_sub_field('name'); ?>"></a>
							</li>
							<?php endwhile; ?>
						</ul>
						<a href="<?php echo site_url(); ?>/contact-us" class="a_link_left">Contact Us</a>
						<ul class="list-unstyled terms_policy_links">
							<li><a href="javascript:void(0)" id="subscribe_link">Subscribe</a></li>
							<!--<li><a href="<?php echo site_url(); ?>/privacy-terms">Privacy &amp; Terms</a></li>-->
                            <li><a href="javascript:">Privacy &amp; Terms</a></li>
						</ul>
						<p class="footer-copyright"><?php echo date_i18n(_x( 'Y', 'copyright date format', 'twentytwenty' )); ?> &copy; Copyright </p><!-- .footer-copyright -->
                </div>
   
	</div>
</footer>

<section class="newsletter">
	<div class="newsletter_wrapper">
		<p class="head">Subscribe to our newsletter</p>
		<?php echo do_shortcode('[contact-form-7 id="151" title="Newsletter Subscribe Form"]'); ?>
	</div>


	
</div>



					

		<?php wp_footer(); ?>

	</body>
</html>