<div class="card-deck middle-align">
<? 
	$posts = get_posts();
	if (have_posts()) {
		$post_count = 0;
		foreach ($posts as $post) {
			if ($post_count >= 4) {
				break;
			}
			$post_count++;
?> 	
		<div class="card" style="width: 18rem;">
			<img class="card-img-top" src="<? the_post_thumbnail_url()?>">
			<div class="card-body">
				<h4 class="card-title">
					<? the_title() ?>
				</h4>
				<p class="card-text">
					<? the_excerpt() ?>
				</p>
				<a href="<? the_permalink() ?>" class="btn">Đọc thêm</a>
			</div>
		</div>
<? 
		}
	}
?>
</div>