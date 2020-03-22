<?php /* Template Name: Shop template */ ?>
<?php get_header(); ?>
<div class="col-lg-12">	
	<div class="main-container">
		<div class="content-area">
			<div class="middle-align">
				<? echo do_shortcode("[products]") ?>
			</div>
		</div>
	</div>	
</div>
<?php get_footer(); ?>