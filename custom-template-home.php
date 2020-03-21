<?php /* Template Name: CustomPageT1 */ ?>
<?php get_header(); ?>
<?php echo do_shortcode("[slick-slider design='design-1']") ?>
<div class="main-container">
	<div class="content-area">
		<div class="middle-align">
		    <div class="vertical-element padding-bottom-50">
		    	<div class="divider"><span></span><span>Sản phẩm của chúng tôi</span><span></span></div>
		    	<div class="vertical-element-content">
					<? include("product-home.php") ?>
				</div>
		    </div>
		    <div class="vertical-element">
		    	<div class="divider"><span></span><span>Video giới thiệu</span><span></span></div>
				<div class="vertical-element-content center">
					<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/Fj9_62m4d1k?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
		    </div>
		    <div class="vertical-element col-sm-12">
				<div class="divider"><span></span><span>Các bài viết</span><span></span></div>
		    	<div class="vertical-element-content card-deck">
		    		<?php include("home-posts.php")?>
				</div>
		    </div>
		    <div class="vertical-element padding-bottom-50">
		    	<div class="divider"><span></span><span>Nhận xét</span><span></span></div>
				<div class="vertical-element-content card-deck">
		    		<?php include("testimonials.php")?>
				</div>
		    </div>
		    <div class="clear"></div>
		</div>
	</div>
</div>
<?php get_footer(); ?>