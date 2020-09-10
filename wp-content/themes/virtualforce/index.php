<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main class="inner_pages">
    <div class="wrapper">
		<h1>Blogs</h1>

	<section class="latest_post">
		<div class="wrap_with_image">
			<h3>YOURPDI — ALL VALUABLE DOCUMENTS IN ONE PLACE</h3>
			<p class="category">FINTECH</p>
			<p>YourPDi wanted to provide its users with a safe and secure platform to store all the documents that are important and valuable to them. It wanted to offer a quick, easy, and secure way to share password.</p>
		</div>
		<img src="<?php bloginfo('template_directory');?>/assets/images/Illustration-04.png" alt="" class="right_thumb_image">
			<a href="" class="a_link_left">Read Article</a>
	</section>

	<section class="featured_posts">
		<div class="row justify-content-center">
                <div class="col-md-6 col-xl-4 wow fadeIn">
                    <div class="wrap">
						<h3>4 Automation Testing Tips For Startups</h3>
						<span class="category-date">Health Tech / Sep 25, 2019</span>
                        <p class="details">For startups, automation testing is essential as it benefits in shortening development cycles, avoids repetitive tasks and helps in... </p>
						
                        <a href="javascript:void(0)" class="read_more_link">Read More <img src="<?php bloginfo('template_directory');?>/assets/images/next_arrow.png" alt="Next Icon"></a>
						<img src="<?php bloginfo('template_directory');?>/assets/images/Illustration-04.png" alt="" class="right_thumb_image d-none d-xl-block">
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 wow fadeIn">
                    <div class="wrap">
						<h3>YourPDi — All Valuable Documents in...</h3>
						<span class="category-date">Health Tech / Sep 25, 2019</span>
                        <p class="details">YourPDi wanted to provide its users with a safe and secure platform to store all the documents that are important and valuable to them... </p>
                        <a href="javascript:void(0)" class="read_more_link">Read More <img src="<?php bloginfo('template_directory');?>/assets/images/next_arrow.png" alt="Next Icon"></a>
						<img src="<?php bloginfo('template_directory');?>/assets/images/Illustration-04.png" alt="" class="right_thumb_image d-none d-xl-block">
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 wow fadeIn">
                    <div class="wrap">
						<h3>Evolve Power with Blockchain...</h3>
						<span class="category-date">Health Tech / Sep 25, 2019</span>
                        <p class="details">Electric utilities and providers have a hard time meeting peak demand. Many of their consumers are willing to reduce electricity... </p>
                        <a href="javascript:void(0)" class="read_more_link">Read More <img src="<?php bloginfo('template_directory');?>/assets/images/next_arrow.png" alt="Next Icon"></a>
						<img src="<?php bloginfo('template_directory');?>/assets/images/Illustration-04.png" alt="" class="right_thumb_image d-none d-xl-block">
                    </div>
                </div>
            </div>
	</section>


	<section class="posts">
		<div class="row">
			<div class="col-12">
				<div class="wrap">
					<div class="wrap_with_image">
						<h3>Evolve Power with Blockchain — Demand Response Management System</h3>
						<span class="category-date">Health Tech / Sep 25, 2019</span>
					</div>
					<img src="<?php bloginfo('template_directory');?>/assets/images/Illustration-04.png" alt="" class="right_thumb_image d-none d-xl-block">
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-12">
				<div class="wrap">
					<div class="wrap_with_image">
						<h3>Evolve Power with Blockchain — Demand Response Management System</h3>
						<span class="category-date">Health Tech / Sep 25, 2019</span>
					</div>
					<img src="<?php bloginfo('template_directory');?>/assets/images/Illustration-04.png" alt="" class="right_thumb_image d-none d-xl-block">
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-12">
				<div class="wrap">
					<div class="wrap_with_image">
						<h3>Evolve Power with Blockchain — Demand Response Management System</h3>
						<span class="category-date">Health Tech / Sep 25, 2019</span>
					</div>
					<img src="<?php bloginfo('template_directory');?>/assets/images/Illustration-04.png" alt="" class="right_thumb_image d-none d-xl-block">
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-12">
				<div class="wrap">
					<div class="wrap_with_image">
						<h3>Evolve Power with Blockchain — Demand Response Management System</h3>
						<span class="category-date">Health Tech / Sep 25, 2019</span>
					</div>
					<img src="<?php bloginfo('template_directory');?>/assets/images/Illustration-04.png" alt="" class="right_thumb_image d-none d-xl-block">
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-12">
				<div class="wrap">
					<div class="wrap_with_image">
						<h3>Evolve Power with Blockchain — Demand Response Management System</h3>
						<span class="category-date">Health Tech / Sep 25, 2019</span>
					</div>
					<img src="<?php bloginfo('template_directory');?>/assets/images/Illustration-04.png" alt="" class="right_thumb_image d-none d-xl-block">
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</section>
	<?php

	$archive_title    = '';
	$archive_subtitle = '';

	if ( is_search() ) {
		global $wp_query;

		$archive_title = sprintf(
			'%1$s %2$s',
			'<span class="color-accent">' . __( 'Search:', 'twentytwenty' ) . '</span>',
			'&ldquo;' . get_search_query() . '&rdquo;'
		);

		if ( $wp_query->found_posts ) {
			$archive_subtitle = sprintf(
				/* translators: %s: Number of search results. */
				_n(
					'We found %s result for your search.',
					'We found %s results for your search.',
					$wp_query->found_posts,
					'twentytwenty'
				),
				number_format_i18n( $wp_query->found_posts )
			);
		} else {
			$archive_subtitle = __( 'We could not find any results for your search. You can give it another try through the search form below.', 'twentytwenty' );
		}
	} elseif ( ! is_home() ) {
		$archive_title    = get_the_archive_title();
		$archive_subtitle = get_the_archive_description();
	}

	if ( $archive_title || $archive_subtitle ) {
		?>

		<header class="archive-header has-text-align-center header-footer-group">

			<div class="archive-header-inner section-inner medium">

				<?php if ( $archive_title ) { ?>
					<h1 class="archive-title"><?php echo wp_kses_post( $archive_title ); ?></h1>
				<?php } ?>

				<?php if ( $archive_subtitle ) { ?>
					<div class="archive-subtitle section-inner thin max-percentage intro-text"><?php echo wp_kses_post( wpautop( $archive_subtitle ) ); ?></div>
				<?php } ?>

			</div><!-- .archive-header-inner -->

		</header><!-- .archive-header -->

		<?php
	}

	if ( have_posts() ) {

		$i = 0;

		while ( have_posts() ) {
			$i++;
			if ( $i > 1 ) {
				echo '<hr class="post-separator styled-separator is-style-wide section-inner" aria-hidden="true" />';
			}
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		}
	} elseif ( is_search() ) {
		?>

		<div class="no-search-results-form section-inner thin">

			<?php
			get_search_form(
				array(
					'label' => __( 'search again', 'twentytwenty' ),
				)
			);
			?>

		</div><!-- .no-search-results -->

		<?php
	}
	?>

	<?php get_template_part( 'template-parts/pagination' ); ?>
	</div>
</main><!-- #site-content -->

<?php //get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
