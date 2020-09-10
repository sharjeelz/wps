<?php
/**
 * The template for displaying all pages
 */

get_header();
?>
<main class="solutions">
    <div class="wrapper">
        <?php get_sidebar('solutions'); ?>
        <div class="content_wrapper">

        <section class="overview">
        <?php// if (have_posts()) : while (have_posts()) : the_post(); the_content(); endwhile; endif; ?>  

            <?php $right_thumb_image = get_field('right_thumb_image'); ?>
            <div class="<?php echo !empty( $right_thumb_image ) ? 'wrap_with_image' : 'wrap'; ?>">
                <h1><?php the_field('page_custom_title'); ?></h1>
                <?php the_field('short_description'); ?>
            </div> 
            <?php if( !empty( $right_thumb_image ) ): ?>
                <img src="<?php the_field('right_thumb_image'); ?>" alt="" class="right_thumb_image">
            <?php endif; ?>
            <h3><?php the_field('sub_heading'); ?></h3>
            <p><?php the_field('description'); ?></p>
            <a href="#" class="a_link_left">Our Process</a>
        </section>

        <p class="head" id="key-technologies">Delve into Emerging Technologies</p>

        <section class="expertise">
            <div class="row">
                <?php while( have_rows('key_technologies') ) : the_row();?>
                    <div class="col-lg-6">
                        <a href="<?php the_sub_field('link'); ?>">
                        <p class="head"><?php the_sub_field('title'); ?></p>
                        <p class="description"><?php the_sub_field('description'); ?></p>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
            
        </section>


        <section class="expertise_logos">
            <p class="head">Expertise in Diverse Tech Stacks</p>
            <p><?php the_field('tech_stacks_short_description'); ?></p>

            <div class="logos_wrapper d-none d-md-block">
                <div class="row justify-content-center">
                <?php while( have_rows('tech_stacks') ) : the_row();?>
                <div class="col-2">
                <?php 
                    $image = get_sub_field('logo');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="logo" />
                    <?php endif; ?>
                        <span><?php the_sub_field('logo_title'); ?></span>
                </div>
                <?php endwhile; ?>
                </div>
                </div>

                <div class="logos_wrapper d-block d-md-none">
                <div class="row justify-content-center ">
                <?php $i = 0; ?>
                <?php while( have_rows('tech_stacks') ) : the_row();?>
                <?php $i++; if( $i > 12 ){ break; } ?>
                <div class="col-4">
                <?php 
                    $image = get_sub_field('logo');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="logo" />
                    <?php endif; ?>
                        <span><?php the_sub_field('logo_title'); ?></span>
                </div>
                <?php endwhile; ?>
                </div>
            </div>
        </section>

        <section class="portfolio">
            <p class="head" id="emerging-tech">Some of Our Disruptive Innovations</p>
            <div class="row justify-content-center">
            <?php while( have_rows('portfolio') ) : the_row();?>
                <div class="col-md-6 col-lg-6 wow fadeIn">
                    <div class="wrap" style="border-right: 8px solid <?php the_sub_field('box_border_color'); ?>;">
                        <h3><?php the_sub_field('title'); ?></h3>
                        <?php $text = get_sub_field('description'); ?>
                        <p class="details"><?php echo strlen($text) > 80 ? substr($text, 0, 80) .'...' : $text; ?> </p>
                        <a href="<?php the_sub_field('link'); ?>" class="read_more_link">View Portfolio <img src="<?php bloginfo('template_directory');?>/assets/images/next_arrow.png" alt="Next Icon"></a>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            
  
    </section>

    </div>
    </div>

   
</main>

<?php
get_footer();
?>
