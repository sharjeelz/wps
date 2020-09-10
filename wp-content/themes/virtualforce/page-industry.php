<?php
/**
 * The template for displaying all pages    
 */

get_header();
?>
<main class="industry">
    <div class="wrapper">
        <?php get_sidebar('industry'); ?>
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
            <a href="<?php echo site_url(); ?>/work" class="a_link_left">View Portfolio</a>
        </section>

        <p class="head" id="key-technologies">Innovate in your industry verticals</p>

        <section class="expertise">
            <div class="row">
                <?php while( have_rows('key_technologies') ) : the_row();?>
                    <div class="col-sm-6">
                        <a href="<?php the_sub_field('link'); ?>">
                        <p class="head"><?php the_sub_field('title'); ?></p>
                        <!-- <p class="description"><?php the_sub_field('description'); ?></p> -->
                        </a>
                    </div>
                <?php endwhile; ?>
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
