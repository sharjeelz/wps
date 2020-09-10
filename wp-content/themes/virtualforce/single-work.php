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
                        <div class="row">
                            <?php while ( have_posts() ) : the_post();?>

                            <div class="col-12 col-lg-6 mw-60">
                                <h1><?php the_title();?></h1>
                                <h3><?php echo get_field('info_tag_line')?></h3>
                                <p class="portfolio-tag side-orange"><?php echo get_field('tags')?></p>
                            </div>
                            <div class="col-lg-6 wow bounceInUp">
                                <p class="details"><?php the_content()?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="img-fluid wow fadeIn text-center thumbnail-image">
                                    <?php echo get_the_post_thumbnail();?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-right mt-5">
                                <?php if(get_adjacent_post( true, '', false, 'works')) :?>
                                    <a href="<?php echo get_permalink( get_adjacent_post( true, '', false, 'works'));?>" class="prev-btn">Previous</a>
                                <?php endif;?>
                                <?php if(get_adjacent_post( true, '', true, 'works')) :?>
                                    <a href="<?php echo get_permalink( get_adjacent_post( true, '', true, 'works'));?>" class="next-btn">Next</a>
                                <?php endif;?>
                            </div>
                        </div>
                        <section class="tech-stack">

                            <div class="row">
                                <div class="col-md-12 p-0">
                                    <?php
                                    if( get_field('tech_field_toggle') == false ) {
                                    $dnonet = 'd-none';
                                    }
                                    ?>
                                    <div class="tech-blue <?php echo $dnonetx?>  wow fadeIn">
                                        <h2>
                                            Tech
                                        </h2>
                                        <ul class="tech-list">
                                            <?php
                                            if( have_rows('tech_stack') ):
                                                // Loop through rows.
                                                while( have_rows('tech_stack') ) : the_row();
                                                    // Load sub field value.
                                                    $sub_value = get_sub_field('technology');
                                                    // Do something...
                                                echo  '<li>' . $sub_value . '</li>';
                                                // End loop.
                                                endwhile;
                                            // No value.
                                            else :
                                                // Do something...
                                            endif;
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </section>

                        <?php
                    if( get_field('challenges_field_toggle') == false ) {
                       $dnone = 'd-none';
                    }
                    ?>
                        <section class="challenges <?php echo $dnone?>">
                            <div class="row">
                                <div class="col-md-6 pr-50 wow bounceInLeft">
                                    <h2 class="side-orange portfolio-tag pb-md-5">
                                        <?php echo get_field('main_heading_1')?></h2>
                                    <p class="details"><?php echo get_field('challenges_content')?></p>
                                </div>
                                <div class="col-md-6 pl-50 wow bounceInRight solutions">
                                    <h2 class="side-orange portfolio-tag pb-md-5">
                                        <?php echo get_field('main_heading_2')?></h2>
                                    <?php echo get_field('solutions_content')?>
                                </div>
                            </div>
                        </section>
                        <?php
                    if( get_field('orange_proposition_toggle') == false ) {
                       $dnones = 'd-none';
                    }
                    ?>
                        <section class="proposition <?php echo $dnones?>">
                            <div class="row">
                                <div class="col-md-12 p-0">
                                    <div class="orange-box  wow fadeIn">
                                        <h2><?php echo get_field('value_proposition_heading')?></h2>
                                        <p><?php echo get_field('value_pro')?></p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <?php endwhile; wp_reset_postdata();
                     ?>
                    </div>
                </div>
                </section>
            </div>
        </div>




</main>


<?php get_footer(); ?>