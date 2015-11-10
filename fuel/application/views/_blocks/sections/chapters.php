<section class="block-chapters<?php if($centered == 'yes') echo ' block-center'; ?> cols-<?=count($columns)?>">
	<?php foreach($columns as $column): ?>
	<div class="col">
		<a href="<?=site_url($column['link'])?>">
			<?php if(!empty($column['image'])): ?><img src="$column['image']" alt="$column['title']" class="img-circle"><?php endif; ?>
			<?php if(!empty($column['title'])): ?><h4><?=$column['title']?></h4><?php endif; ?>
				<?=$column['text']?>
			<p><a href="<?=site_url($column['link'])?>" class="btn"><?=site_url($column['button_text'])?></a></p>
		</a>
	</div>
	<?php endforeach; ?>
</section>