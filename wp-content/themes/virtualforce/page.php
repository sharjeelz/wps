<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kualitee
 */

get_header();
?>

	<main class="pages">
		<div class="wrapper">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h1><?php the_title(); ?></h1> 
			<?php the_content(); ?>
			<?php endwhile; endif; ?>  
		</div>
	</main>
<?php
get_footer();
