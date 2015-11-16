<?php if ( $categories = $CI->fuel->posts->get_published_categories()) : ?>
<div class="post-aside-item">
	<h4 class="post-aside-title">Categories</h4>
	<ul class="post-aside-list">
		<?php foreach ($categories as $category) : ?>
		<li>
			<?=fuel_edit($category)?>
			<a href="<?=$CI->fuel->posts->url('category/'.$category->slug)?>"><?=$category->name?></a>
		</li>
		<?php endforeach; ?>
	</ul>
</div>
<?php endif; ?>