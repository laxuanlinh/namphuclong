<?php /* Template Name: Checkout template */ ?>
<?php get_header(); ?>
	<div class="col-12">
		<? echo do_shortcode("[woocommerce_checkout]") ?>
	</div>
<?php get_footer(); ?>