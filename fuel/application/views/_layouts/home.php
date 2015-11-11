<?php $this->load->view('_blocks/header')?>

	<div class="main-container">
		<div class="main-repeater-container">
			<?php 
			if (!empty($sections)) :
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
							<h4 class="newsevents-header">News</h4>
							<div class="newsevents-contain">
								<ul class="newsevents-list">
									<li>
										<div class="fancy-date"><span>Jun</span> <span>25</span></div>
										<p>Not sure what this text is<br>
										<a href="wibble" class="readmore-link">read more</a></p>
									</li>
									<li>
										<div class="fancy-date"><span>Aug</span> <span>02</span></div>
										<p>Not sure what this text is, either<br>
										<a href="wibble" class="readmore-link">read more</a></p>
									</li>
								</ul>
							</div>
							<p><a href="<?=site_url('news')?>" class="btn">View More News</a></p>
						</div>
						<div class="col">
							<h4 class="newsevents-header">Events</h4>
							<div class="newsevents-contain">
								<ul class="newsevents-list">
									<li>
										<div class="fancy-date"><span>Jun</span> <span>25</span></div>
										<p>Not sure what this text is<br>
										<a href="wibble" class="readmore-link">read more</a></p>
									</li>
									<li>
										<div class="fancy-date"><span>Aug</span> <span>02</span></div>
										<p>Not sure what this text is, either<br>
										<a href="wibble" class="readmore-link">read more</a></p>
									</li>
								</ul>
							</div>
							<p><a href="<?=site_url('news')?>" class="btn">View More Events</a></p>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>

<?php $this->load->view('_blocks/footer')?>
