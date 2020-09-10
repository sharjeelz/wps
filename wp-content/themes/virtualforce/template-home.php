<?php
/**
 * Template Name: Home
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
<main class="home">
    
    <section class="hero wow bounceInUp">
        <div class="wrapper">
            <div class="text_wrapper">
                <h2><?php the_field('hero_section_main_heading'); ?></h2>
                <h3><?php the_field('hero_section_sub_heading'); ?></h3>
                <p class="details"><?php the_field('hero_section_description'); ?></p>
                <a href="<?php the_field('hero_section_learn_more_link'); ?>" class="learn_more_link">Learn More</a>
            </div>
            <div class="img_wrap">
                <img src="<?php the_field('hero_section_image'); ?>" class="img-fluid" alt="Hero Image">
            </div>
        </div>
    </section>

    <section class="client_logos">
        <div class="wrapper">
            <div class="row">
                <?php
                    while( have_rows('section_client_logo') ) : the_row();
                    $sub_field = get_sub_field('client_logo');
                    $image = $sub_field['url'];
                ?>
                <div class="col-6 custom_width wow fadeIn">
                    <img src="<?php echo $image; ?>" class="img-fluid logo" alt="Logos">
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>


    <section class="portfolio">
        <div class="wrapper">
            <div class="row">
                <div class="col-12">
                    <p class="head">Some of our Disruptive Innovations</p>
                </div>
            </div>
        </div>

            <div class="slider">
                <?php
                    while( have_rows('section_view_portfolio_slider') ) : the_row();
                    $heading = get_sub_field('heading');
                    $description = get_sub_field('description');
                ?>
                <div>
                    <div class="wrap">
                        <h3><?php echo $heading; ?></h3>
                        <p class="details"><?php echo $description; ?></p>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <div class="wrapper">
                <a href="<?php echo site_url(); ?>/work" class="a_link_left">View Portfolio</a>
            </div>
           
    </section>

    <section class="tech_partner">
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-6 wow slideInLeft">
                    <div class="text_wrapper">
                        <p class="head">Versatility in Industry Verticals</p>
                        <h3><?php the_field('vertical_section_heading'); ?></h3>
                        <p class="details"><?php the_field('verticals_section_description'); ?></p>
                        <a href="<?php echo site_url(); ?>/industries" class="a_link_left">View Verticals</a>
                    </div>
                </div>
                <div class="col-lg-6 wow slideInRight">
                    <div class="img_wrap">
                        <img src="<?php the_field('verticals_section_image'); ?>" class="img-fluid" alt="Hero Image">
                    </div>
                </div>
            </div>
            
            
        </div>
    </section>

    <section class="blog">
        <div class="wrapper">
            <p class="head">Read About the Latest</p>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 wow fadeIn">
                    <div class="wrap">
                        <h3>4 Automation Testing Tips For Startups</h3>
                        <p class="details">For startups, automation testing is essential as it benefits in shortening development cycles, avoids repetitive tasks and helps in... </p>
                        <a href="javascript:void(0)" class="read_more_link">Read More <img src="<?php bloginfo('template_directory');?>/assets/images/next_arrow.png" alt="Next Icon"></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn">
                    <div class="wrap">
                        <h3>YourPDi — All Valuable Documents...</h3>
                        <p class="details">YourPDi wanted to provide its users with a safe and secure platform to store all the documents that are important and valuable to them... </p>
                        <a href="javascript:void(0)" class="read_more_link">Read More <img src="<?php bloginfo('template_directory');?>/assets/images/next_arrow.png" alt="Next Icon"></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn">
                    <div class="wrap">
                        <h3>Evolve Power with Blockchain...</h3>
                        <p class="details">Electric utilities and providers have a hard time meeting peak demand. Many of their consumers are willing to reduce electricity... </p>
                        <a href="javascript:void(0)" class="read_more_link">Read More <img src="<?php bloginfo('template_directory');?>/assets/images/next_arrow.png" alt="Next Icon"></a>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <div class="wrapper">
            <p class="head">Partners that Trust Us</p>
        </div>

    <section class="testimonials">
       
        
<div class="wrapper">
    <div class="wrap">
            <div class="slider">
            <?php
                    while( have_rows('section_testimonials_slider') ) : the_row();
                    $name = get_sub_field('name');
                    $designation = get_sub_field('designation');
                    $details = get_sub_field('details');
                    $avatar = get_sub_field('avatar');
                ?>
                    <div>
                        <div class="img_wrap">
                            <img src="<?php bloginfo('template_directory');?>/assets/images/testimonial_slider_img_placeholder.png" alt="" class="placeholder">
                            <img src="<?php echo $avatar; ?>" alt="" class="avatar">
                        </div>
                        <div class="text_wrapper">
                        <h2><?php echo $name; ?></h2>
                        <h3><?php echo $designation; ?></h3>
                        <p class="details"><?php echo $details; ?></p>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>

                <div class="slider_vertical">
                <?php
                    while( have_rows('section_testimonials_slider') ) : the_row();
                    $avatar = get_sub_field('avatar');
                ?>
                    <div>
                        <img src="<?php echo $avatar; ?>" alt="" class="avatar">
                    </div>   
                    <?php endwhile; ?>
                </div>
             
            </div>
</div>
            <div class="half_blue_bg"></div>
      
     
    </section>


    <section class="engage">
        <div class="wrapper">
            <div class="row">
                <div class="col-12">
                    <p class="head">Engage Today for a Better Tomorrow</p>
                </div>
                
            </div>
           
            <div class="row justify-content-center wow bounce">
                <div class="col-md-6 col-lg-4">
                    <a href="<?php echo site_url(); ?>/engage/">
                    <div class="wrap">
                        <h3>Digital Transformation</h3>  
                    </div>
                    <img src="<?php bloginfo('template_directory');?>/assets/images/Illustration-1.png" class="icon" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                <a href="<?php echo site_url(); ?>/engage/#1">
                    <div class="wrap">
                        <h3>Resource Augmentation</h3>  
                    </div>
                    <img src="<?php bloginfo('template_directory');?>/assets/images/Illustration-4.png" class="icon" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                <a href="<?php echo site_url(); ?>/engage/#2">
                    <div class="wrap">
                        <h3>Dedicated Teams</h3>  
                    </div>
                    <img src="<?php bloginfo('template_directory');?>/assets/images/Illustration-02.png" class="icon" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                <a href="<?php echo site_url(); ?>/engage/#3">
                    <div class="wrap">
                        <h3>Advisory</h3>  
                    </div>
                    <img src="<?php bloginfo('template_directory');?>/assets/images/Illustration-3.png" class="icon" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                <a href="<?php echo site_url(); ?>/engage/#4">
                    <div class="wrap">
                        <h3>Managed Support & Security</h3>  
                    </div>
                    <img src="<?php bloginfo('template_directory');?>/assets/images/Illustration-5.png" class="icon" alt="">
                    </a>
                </div>
              
            </div>
            
        </div>
    </section>



</main>

   





 
<?php get_footer(); ?>