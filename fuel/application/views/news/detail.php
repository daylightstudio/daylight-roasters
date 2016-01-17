<?php 
/*
Example view that can be used to display events. 

$config['modules']['events'] = array(
	'preview_path' => 'events/{year}/{month}/{day}/{slug}', // put in the preview path on the site e.g products/{slug}
	'model_location' => '', // put in the advanced module name here
	'pages' => array(
		'base_uri' => 'events',
		'list' => 'events', // <-- THIS POINTS TO THE VIEW
		// CAN ALSO BE WRITTEN LIKE THE FOLLOWING:
		'list' => array('view' => 'events'), 
	)
);
*/
?>
<div class="posts left">

		<article class="row post-summary" id="news-<?=$post->id?>">

			<?=fuel_block(array('view' => 'posts/post_unpublished', 'vars' => array('post' => $post)))?>

			<div class="post-summary-thumbnail">
				<?php if ($post->has_image()) : ?>
				<p><img src="<?=$post->image_path?>" alt="<?=$post->title_entities?>" /></p>
				<?php endif; ?>
			</div>

			<div class="post-summary-content">
				<h3 class="post-summary-title">
					<?=fuel_edit($post)?>
					<?=$post->title?>
				</h3>

				<div class="post-meta">
					<span class="post-date"><?=$post->publish_date_formatted('F j, Y')?></span>
				</div>

				<?=$post->content_formatted?>

				<div class="post-categories">
					<?php if ($tags_linked = $post->tags_linked) : ?>
					<span>
					<?=$tags_linked?>
					</span>
					<?php endif; ?>
				</div>

			</div>
		</article>
</div>


