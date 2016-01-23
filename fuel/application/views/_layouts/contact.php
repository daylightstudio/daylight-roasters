<?php $this->load->view('_blocks/header')?>

	<div class="main-container">
		<div id="map" class="map">
			<?=location_map()?>
		</div>
		
		<?=fuel_block('breadcrumb')?>
		
		<main class="main-repeater-container">
			<section class="block-text">
				<div class="wrapper">
					<div class="row">
						<main class="post-main">
							<?=fuel_var('body', ''); ?>
						</main>
					</div>
				</div>
			</section>
		</main>
	</div>
		
<?php $this->load->view('_blocks/footer')?>
