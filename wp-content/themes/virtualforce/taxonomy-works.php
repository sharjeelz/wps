<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package virtualforce
 */


get_header();
?>

<main class="portfolio">

        <div class="wrapper">
            <?php get_sidebar('work'); ?>
            <div class="content_wrapper">
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="h1-main pb-4 fw-600">Our Disruptive Innovations</h1>
                        <div class="row">
                            <?php while(have_posts()) : the_post();?>
                            <div class="col-lg-6 col-xl-4 col-md-6 pb-5">
                                <a href="<?php the_permalink(); ?>"
                                    style="background-color:<?php echo get_field('hover_color_code')?>">
                                    <div class="project-box">
                                        <h4><?php the_title();?></h4>
                                        <p><?php echo get_field('impact_tag_line')?></p>
                                        <div class="p-logo text-right w-100"><img
                                                src="<?php echo get_field('small_logo')?>" alt="" class=""></div>
                                    </div>
                                </a>
                            </div>
                            <?php 
                                
                                endwhile;
                            
                            wp_reset_postdata();
                            

                            ?>

                        </div>
                    </div>
                </div>
                </section>
            </div>
        </div>



</main>


<?php get_footer(); ?>