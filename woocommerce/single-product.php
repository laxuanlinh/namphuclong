<? 
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} 
?>

<? get_header(); ?>
	<div class="col-lg-12">	
		<div class="main-container">
			<div class="content-area">
				<div class="middle-align">
					<? do_action( 'woocommerce_before_main_content' ); ?>

					<? while (have_posts()) : ?>
						<? the_post(); ?>
						<? wc_get_template_part( 'content', 'single-product' ); ?>
					<?php endwhile;?>

					<? do_action( 'woocommerce_after_main_content' ); ?> 
				</div>
			</div>
		</div>	
	</div>
<?php get_footer(); ?>