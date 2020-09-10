<?php
/**
 * Template Name: Contact Us
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
<main class="contact_us">
        <section class="contact_form">
            <div class="wrapper">
                <div class="row">
                    <div class="col-xl-6">
                        <h1>Contact Us</h1>
                        <p class="details">We’re happy to help you with any questions you may have. Fill out the form below and let’s start a conversation</p>
                        
                        <div class="row logos_desktop">
                            <div class="col-12">
                                <h3>Partners That Trust Us</h3>
                            </div>
                                <?php
                                    while( have_rows('client_logos') ) : the_row();
                                    $sub_field = get_sub_field('images');
                                    $image = $sub_field['url'];
                                ?>
                                <div class="col-6 col-sm-4 wow fadeIn">
                                    <img src="<?php echo $image; ?>" class="img-fluid logo" alt="Logos">
                                </div>
                                <?php endwhile; ?>
                            </div>
                    </div>
                    <div class="col-xl-6 d-none d-xl-block">
                        <?php echo do_shortcode('[contact-form-7 id="150" title="Contact form 1"]'); ?>
                    </div>
                </div>
                <div class="mobile_form_wrapper d-block d-xl-none">
                    <div class="row">
                        <div class="col-xl-6">
                            <?php echo do_shortcode('[contact-form-7 id="150" title="Contact form 1"]'); ?>
                        </div>
                    </div>
                </div>
                
                <div class="row logos_mobile">
                    <div class="col-12">
                        <h3>Partners That Trust Us</h3>
                    </div>
                        <?php
                            while( have_rows('client_logos') ) : the_row();
                            $sub_field = get_sub_field('images');
                            $image = $sub_field['url'];
                        ?>
                        <div class="col-6 col-sm-4 wow fadeIn">
                            <img src="<?php echo $image; ?>" class="img-fluid logo" alt="Logos">
                        </div>
                        <?php endwhile; ?>
                    </div>
            </div>
            <div class="half_blue_bg d-none d-xl-block"></div>
        </section>
</main>

   





 
<?php get_footer(); ?>