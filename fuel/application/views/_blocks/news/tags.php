<?php if ( $tags = $CI->fuel->posts->get_published_tags()) : ?>
<div class="post-aside-item">
	<h4 class="post-aside-title">Tags</h4>
	<ul class="post-aside-list">
		<?php foreach ($tags as $tag) : ?>
		<li>
			<?=fuel_edit($tag)?>
			<a href="<?=$CI->fuel->posts->url('tag/'.$tag->slug)?>"><?=$tag->name?></a>
		</li>
		<?php endforeach; ?>
	</ul>
</div>
<?php endif; ?>