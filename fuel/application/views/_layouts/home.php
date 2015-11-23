<?php $this->load->view('_blocks/header')?>

	<div class="main-container">
		<div class="main-repeater-container">
			<?php 
			if (!empty($sections)) :
				echo fuel_var('sections');
				foreach($sections as $key => $section):
					if(!empty($section['block'])):
						$blockname = $section['block']['block_name'];
						echo fuel_block('sections/'.$blockname, $section['block']);
					endif;
				endforeach;
			endif; ?>
			<section class="block-newsevents">
				<div class="wrapper">
					<div class="row">
						<div class="col">

							<?php $news = fuel_model('news') ?>

							<?php if (!empty($news)) : ?>
							<h4 class="newsevents-header">News</h4>
							<div class="newsevents-contain">
								<ul class="newsevents-list">

									<?php foreach($news as $item) : ?>
									<li>
										<div class="fancy-date"><span><?=$item->publish_date_formatted('M')?></span> <span><?=$item->publish_date_formatted('j')?></span></div>
										<p><?=fuel_edit($item)?><?=$item->title?><br>
										<a href="<?=$item->url?>" class="readmore-link">read more</a></p>
									</li>
									<?php endforeach; ?>

								</ul>
							</div>
							<p><a href="<?=site_url('news')?>" class="btn">View More News</a></p>
							<?php endif; ?>

						</div>
						<div class="col">

							<?php $events = fuel_model('events', 'upcoming', array(5)); ?>

							<?php if (!empty($events)) : ?>
							<h4 class="newsevents-header">Events</h4>
							<div class="newsevents-contain">
								<ul class="newsevents-list">

									<?php foreach($events as $event) : ?>
									<li>
										<div class="fancy-date"><span><?=$event->start_date_formatted('M')?></span> <span><?=$event->start_date_formatted('j')?></span></div>
										<p><?=fuel_edit($event)?><?=$event->name?><br>
										<a href="<?=$event->url?>" class="readmore-link">read more</a></p>
									</li>
									<?php endforeach; ?>
									
								</ul>
							</div>
							<p><a href="<?=site_url('events')?>" class="btn">View More Events</a></p>
							<?php endif; ?>

						</div>
					</div>
				</div>
			</section>
		</div>
	</div>

<?php $this->load->view('_blocks/footer')?>
