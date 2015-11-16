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

	<?=fuel_edit('create', 'Create Post', $module->info('module_uri'))?>
	
	<?php if (!empty($posts)) : ?>
		<?php foreach($posts as $post) : ?>

		<article class="row post-summary" id="event-<?=$post->id?>">

			<?=fuel_block(array('view' => 'posts/post_unpublished', 'vars' => array('post' => $post)))?>

			<div class="post-summary-thumbnail">
				<?php if ($post->has_image()) : ?>
				<p><img src="<?=$post->image_path?>" alt="<?=$post->title_entities?>" /></p>
				<?php endif; ?>
			</div>

			<div class="post-summary-content">
				<h3 class="post-summary-title">
					<?=fuel_edit($post)?>
					<?=$post->name?>
				</h3>

				<div class="post-meta">
					<h4><?=$post->date_range?></h4>
					<h4>@ <?=$post->location?></h4>
				</div>

				<?=$post->description_formatted?>

				<div class="post-categories">
					<?php if ($categories_linked = $post->categories_linked) : ?>
					<span>
					<?=$categories_linked?>
					</span>
					<?php endif; ?>
				</div>

			</div>
		</article>
		
		<?php endforeach; ?>


	<?php else: ?>
	<div class="no_posts">
		<p>There are no events available.</p>
	</div>
	<?php endif; ?> 
</div>


