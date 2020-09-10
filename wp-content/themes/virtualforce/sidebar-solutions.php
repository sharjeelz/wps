<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kualitee
 */ 
?>
<div class="sidebar">
    <img src="<?php bloginfo('template_directory');?>/assets/images/arrow_filters.png" alt="filter-arrow" class="arrow_filter">

        <ul class="sidebar_ul">
            <?php
            wp_nav_menu(
                array(
                    'container'  => '',
                    'items_wrap' => '%3$s',
                    'theme_location' => 'solution_sidebar',
                )
            );?>
        </ul>
</div>
<div class="backdrop_orange"></div>
