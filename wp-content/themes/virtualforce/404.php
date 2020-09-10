<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<div class="page_not_found">
	<div class="wrapper">
		<div class="row">
			<div class="col-xl-6 order-2 order-xl-1">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/error_page_not_found_img.png" alt="404 Image" class="thumb">
			</div>
			<div class="col-xl-6 order-1 order-xl-2">
				<div class="wrap">
					<img src="<?php bloginfo('template_directory'); ?>/assets/images/four_o_four.png" alt="404 Image" class="text_img">
					<h6>Oh no!</h6><br/>
					<p class="details">
						It's not you, it's us. <br/><br/>
						It seems like the page is taking a day off.<br/><br/>
						While we hunt for it, why don't you go back or find us at our homepage?
					</p>
					<span>Happy browsing!</span>
				</div>
			
			</div>
		</div>
	</div>
	
</div>


<?php
get_footer();
