<?php
/**
 * Button 1 element.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

?>
<li class="html header-button-1">
    <form role="search" method="get" class="header_search" action="<?php echo get_home_url(); ?>">
	    <div class="left">
			<input type="search" id="woocommerce-product-search-field-0" class="search-field mb-0" placeholder="Bắt đầu viết ..." value="" name="s" autocomplete="off">
			<input type="hidden" name="post_type" value="product">
		</div>
		<div class="right">
			<button type="submit" value="Tìm kiếm" class="header_submid" aria-label="Submit"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"><path fill="#3D445B" d="M12.5 11h-.79l-.28-.27A6.471 6.471 0 0 0 13 6.5 6.5 6.5 0 1 0 6.5 13c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L17.49 16l-4.99-5zm-6 0C4.01 11 2 8.99 2 6.5S4.01 2 6.5 2 11 4.01 11 6.5 8.99 11 6.5 11z"/></svg></button>
		</div>
    </form>
    <a href="<?php the_field('facebook','option'); ?>" class="header_face">
        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="18" viewBox="0 0 10 18"><path fill="#3D445B" fill-rule="evenodd" d="M5.85 17.133V9.318h2.661l.396-3.044H5.85V4.328c0-.88.248-1.482 1.528-1.482h1.635V.119C8.733.08 7.761 0 6.634 0 4.277 0 2.668 1.423 2.668 4.03v2.25H0v3.044h2.667v7.81h3.184z"/></svg>
    </a>
	<div class="header-button">
	<?php
		echo do_shortcode('[button text="'.flatsome_option('header_button_1').'" link="'.flatsome_option('header_button_1_link').'" target="'.flatsome_option('header_button_1_link_target').'" rel="'.get_theme_mod('header_button_1_link_rel').'" radius="'.flatsome_option('header_button_1_radius').'" size="'.flatsome_option('header_button_1_size').'" color="'.flatsome_option('header_button_1_color').'" depth="'.flatsome_option('header_button_1_depth').'"  depth_hover="'.flatsome_option('header_button_1_depth_hover').'" style="'.flatsome_option('header_button_1_style').'"]');
	?>
	</div>
</li>
