<?php
/**
 * The template for displaying Single Engage Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package virtualforce
 */


get_header();
?>

<main class="engage-archive">

        <div class="wrapper">
            <?php get_sidebar('engage'); ?>
            <div class="content_wrapper">
            <section class="content">
                <div class="row min-h overflow-hidden">
                    <div class="col-md-12">
                        <?php $counts = 0;?>
                        <?php while ( have_posts() ) : the_post(); ?>
                        <div class="engage-box content-all active" id="navigation<?php echo $counts;?>">
                            <div class="row mb-5">
                                <div class="col-lg-7 my-auto <?php the_field('text_alignment'); ?>">
                                    <h2 class="h1-main "><?php the_title();?></h2>
                                    <p><?php the_content();?></p>
                                </div>
                                <div class="col-lg-5 text-center text-lg-<?php the_field('image_align'); ?>">
                                    <div class="d-inline-block engage-img">
                                        <?php echo get_the_post_thumbnail('','full');?> </div>

                                </div>
                            </div>
                        </div>
                        <?php $counts++; ?>
                        <?php endwhile; ?>

                    </div>
                </div>
                </section>
            </div>
        </div>

</main>


<?php get_footer()?>