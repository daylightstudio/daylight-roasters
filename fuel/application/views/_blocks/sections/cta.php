<section class="block-cta<?php if($centered == 'yes') echo ' block-center'; ?> block-<?=$alignment?>"<?php if(!empty($background_image)):?> style="background-image:url(<?=img_path($background_image)?>);background-size:cover;"<?php endif; ?>>
	<div class="wrapper">
		<?php if($columns == 2): ?>
		<div class="row">
			<div class="col">
				<h2><?=$title?></h2>
			</div>
			<div class="col">
				<p><a href="<?=site_url($link)?>" class="btn"><?=$button_text?></a></p>
			</div>
		</div>
		<?php else: ?>
		<div class="col">
			<h2><?=$title?></h2>
			<p><a href="<?=site_url($link)?>" class="btn"><?=$button_text?></a></p>
		</div>
		<?php endif; ?>
	</div>
</section>