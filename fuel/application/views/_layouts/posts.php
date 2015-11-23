<?php $this->load->view('_blocks/header')?>

	<div class="main-container">
		<?php $this->load->view('_blocks/sections/hero', array('alignment' => 'center', 'title' => fuel_var('h1'), 'text' => 'Subheadline', 'background_image' => 'hero_events.jpg'))?>
		<?php $this->load->view('_blocks/breadcrumb')?>
		<section class="post-container">
			<div class="wrapper">
				<div class="row">
					<main class="post-main">
						<?=fuel_var('body', ''); ?>
					</main>
					<aside class="post-aside">
						<div class="post-aside-item">
							<h4 class="post-aside-title">Categories</h4>
							<ul class="post-aside-list">
								<li><a href="#">Cuppings</a></li>
								<li><a href="#">In-store Events</a></li>
								<li><a href="#">Roastings</a></li>
							</ul>
						</div>

						<div class="post-aside-item">
							<h4 class="post-aside-title">Archive</h4>
							<ul class="post-aside-list">
								<li><a href="#">November 2015</a></li>
								<li><a href="#">October 2015</a></li>
								<li><a href="#">September 2015</a></li>
							</ul>
						</div>
					</aside>
				</div>
			</div>
		</section>
	</div>

<?php $this->load->view('_blocks/footer')?>
