<?php /* Template Name: CustomPageT1 */ ?>
<?php get_header(); ?>
<?php echo do_shortcode("[slick-slider design='design-1']") ?>
<div class="main-container">

	<div class="content-area">
		<div class="middle-align">
		    <div class="vertical-element padding-bottom-50">
		    	<div class="vertical-element-title">
		    		<h1>Sản phẩm của chúng tôi</h1>	
		    	</div>
		    	<div class="vertical-element-content">
					<div class="card" style="width: 18rem;">
						<img class="card-img-top" src="https://images.unsplash.com/photo-1508138221679-760a23a2285b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="Card image cap">
						<div class="card-body">
							<h3 class="card-title">Card title</h3>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn">Mua hàng</a>
						</div>
					</div>
				</div>
		    </div>
		    <div class="vertical-element padding-bottom-50">
		    	<div class="vertical-element-title grey">
					<h1>Video giới thiệu</h1>
				</div>
				<div class="vertical-element-content center">
					<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/Fj9_62m4d1k?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
		    </div>
		    <div class="vertical-element padding-bottom-50 col-sm-12">
				<div class="vertical-element-title">
		    		<h1>Các bài viết</h1>	
		    	</div>
		    	<div class="vertical-element-content card-deck">
		    		<?php include("home-posts.php")?>
				</div>
		    </div>
		    <div class="vertical-element padding-bottom-50">
				<h1>Nhận xét</h1>
		    </div>
		    <div class="clear"></div>
		</div>
	</div>
</div>
<?php get_footer(); ?>