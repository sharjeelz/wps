<?php
/**
 * The template for displaying single posts and pages.
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
	<div class="sidebar">
		<p class="category">Fintech</p>
		<span class="category-date">Health Tech / Sep 25, 2019</span>
		<a href="javacript:" class="a_link_left">Subscribe</a>
	
	</div>
<div class="backdrop_orange"></div>
        <div class="content_wrapper">

        <section class="overview">
        <?php// if (have_posts()) : while (have_posts()) : the_post(); the_content(); endwhile; endif; ?>  

            <?php $right_thumb_image = get_field('right_thumb_image'); ?>
            <div class="<?php echo !empty( $right_thumb_image ) ? 'wrap_with_image' : 'wrap'; ?>">
                <?php  $h1 = get_field('page_custom_title');  if( !empty( $h1  ) ): ?>
                    <h1><?php echo $h1; ?></h1>
                <?php else:  ?>
                        <h1><?php the_title(); ?></h1>
                <?php endif; ?>
                <?php the_field('short_description'); ?>
            </div> 
            <?php if( !empty( $right_thumb_image ) ): ?>
                <img src="<?php the_field('right_thumb_image'); ?>" alt="" class="right_thumb_image">
            <?php endif; ?>
            <h3><?php the_field('sub_heading'); ?></h3>
            <p><?php the_field('description'); ?></p>

            <?php if( $post->ID == 33) { ?>
                <a href="#" class="a_link_left">Our Process</a>
            <?php } ?>            
        </section>

		</div>
	</div>
</main>





	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		}
	}

	?>



<?php //get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
