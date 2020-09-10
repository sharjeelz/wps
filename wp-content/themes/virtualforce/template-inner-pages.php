<?php

/**
 * Template Name: Inner Pages
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main class="inner_pages">
    <div class="wrapper">
        <?php $selected_sidebar = get_field_object('select_sidebar');
        $selected_sidebar_value = $selected_sidebar['value']; ?>
        <?php if ($selected_sidebar_value == 'solution') {
            get_sidebar('solutions');
        } elseif ($selected_sidebar_value == 'industry') {
            get_sidebar('industry');
        } elseif ($selected_sidebar_value == 'expertise') {
            get_sidebar('expertise');
        } elseif ($selected_sidebar_value == 'company') {
            get_sidebar('company');
        }
        ?>
        <div class="content_wrapper">

            <section class="overview">
                <?php// if (have_posts()) : while (have_posts()) : the_post(); the_content(); endwhile; endif; ?>

                <?php $right_thumb_image = get_field('right_thumb_image'); ?>
                <div class="<?php echo !empty($right_thumb_image) ? 'wrap_with_image' : 'wrap'; ?>">
                    <?php $h1 = get_field('page_custom_title');
                    if (!empty($h1)) : ?>
                    <h1><?php echo $h1; ?></h1>
                    <?php else :  ?>
                    <h1><?php the_title(); ?></h1>
                    <?php endif; ?>
                    <?php the_field('short_description'); ?>
                </div>
                <?php if (!empty($right_thumb_image)) : ?>
                <img src="<?php the_field('right_thumb_image'); ?>" alt="" class="right_thumb_image">
                <?php endif; ?>
                <h3><?php the_field('sub_heading'); ?></h3>
                <p><?php the_field('description'); ?></p>

                <?php if ($post->ID == 33) { ?>
                <a href="#" class="a_link_left">Our Process</a>
                <?php } ?>
            </section>


            <?php $heading = get_field('key_technologies_heading');
            if (!empty($heading)) : ?>
            <p class="head" id="key-technologies"><?php echo $heading; ?></p>
            <?php endif; ?>
            <?php if (have_rows('key_technologies')) : ?>
            <section class="expertise">
                <div class="row">
                    <?php while (have_rows('key_technologies')) : the_row(); ?>
                    <div class="col-lg-6">
                        <a href="<?php the_sub_field('link'); ?>">
                            <?php $description = get_sub_field('description');
                                    if (empty($description)) : $class = 'without_description' ?> <?php endif; ?>
                            <p class="head <?php echo $class; ?>"><?php the_sub_field('title'); ?></p>
                            <?php $description = get_sub_field('description');
                                    if (!empty($description)) : ?>
                            <p class="description"><?php echo $description; ?></p>
                            <?php endif; ?>
                        </a>
                    </div>
                    <?php endwhile; ?>
                </div>
            </section>
            <?php endif; ?>

            <?php if (is_page('healthtech')) : ?>
            <a href="<?php echo site_url(); ?>/works/healthtech/" class="a_link_left cta_healthtech">Our Healthtech
                Projects</a>
            <?php endif; ?>

            <?php if (have_rows('tech_stacks')) : ?>
            <section class="expertise_logos">
                <?php $heading = get_field('tech_stack_heading');
                    if (!empty($heading)) : ?>
                <p class="head"><?php echo $heading; ?></p>
                <?php endif; ?>
                <p><?php the_field('tech_stacks_short_description'); ?></p>

                <div class="logos_wrapper d-none d-md-block">
                    <div class="row justify-content-center">
                        <?php while (have_rows('tech_stacks')) : the_row(); ?>
                        <div class="col-2">
                            <?php
                                    $image = get_sub_field('logo');
                                    if (!empty($image)) : ?>
                            <img src="<?php echo esc_url($image['url']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>" class="logo" />
                            <?php endif; ?>
                            <span><?php the_sub_field('logo_title'); ?></span>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>

                <div class="logos_wrapper d-block d-md-none">
                    <div class="row justify-content-center ">
                        <?php $i = 0; ?>
                        <?php while (have_rows('tech_stacks')) : the_row(); ?>
                        <?php $i++;
                                if ($i > 12) {
                                    break;
                                } ?>
                        <div class="col-4">
                            <?php
                                    $image = get_sub_field('logo');
                                    if (!empty($image)) : ?>
                            <img src="<?php echo esc_url($image['url']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>" class="logo" />
                            <?php endif; ?>
                            <span><?php the_sub_field('logo_title'); ?></span>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </section>
            <?php endif; ?>

            <?php if (have_rows('portfolio')) : ?>
            <section class="portfolio">
                <?php $heading = get_field('portfolio_heading');
                    if (!empty($heading)) : ?>
                <p class="head" id="emerging-tech"><?php echo $heading; ?></p>
                <?php endif; ?>
                <div class="row justify-content-center">
                    <?php while (have_rows('portfolio')) : the_row(); ?>
                    <div class="col-md-6 col-lg-6 wow fadeIn">
                        <div class="wrap" style="border-right: 8px solid <?php the_sub_field('box_border_color'); ?>;">
                            <h3><?php the_sub_field('title'); ?></h3>
                            <?php $text = get_sub_field('description'); ?>
                            <p class="details"><?php echo strlen($text) > 80 ? substr($text, 0, 80) . '...' : $text; ?>
                            </p>
                            <a href="<?php the_sub_field('link'); ?>" class="read_more_link">View Portfolio <img
                                    src="<?php bloginfo('template_directory'); ?>/assets/images/next_arrow.png"
                                    alt="Next Icon"></a>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </section>
            <?php endif; ?>

        </div>
    </div>
</main>
<?php get_footer(); ?>