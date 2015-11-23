<?php if ($archives_by_month = $CI->fuel->posts->get_post_archives()) : ?>
<div class="post-aside-item">
	<h4 class="post-aside-title">Archives</h4>
	<ul class="post-aside-list">
		<?php foreach($archives_by_month as $month => $archives) :
		$month_str = date('F Y', strtotime(str_replace('/', '-', $month).'-01'));?>
		<li>
			<a href="<?=$this->fuel->posts->url('archive/'.$month)?>"><?=$month_str?></a> (<?=count($archives)?>)</a>
		</li>
		<?php endforeach; ?>
	</ul>
</div>
<?php endif; ?>