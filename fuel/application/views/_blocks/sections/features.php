<section class="block-features<?php if($centered == 1) echo ' block-center'; ?> cols-<?=count($columns)?>">
	<div class="wrapper">
		<?php if(!empty($title)):?><h3 class="block-header"><?=$title?></h3><?php endif; ?>
		<div class="row">
			<?php foreach($columns as $column): ?>
			<div class="col">
				<?php if(!empty($column['image'])): ?><img src="<?=img_path($column['image'])?>" alt="<?=$column['title']?>"><?php endif; ?>
				<?php if(!empty($column['title'])): ?><h4><?=$column['title']?></h4><?php endif; ?>
				<?=$column['text']?>
				<?php if(!empty($column['link'])): ?><p><a href="<?=site_url($column['link'])?>"><?=site_url($column['button_text'])?></a></p><?php endif; ?>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>