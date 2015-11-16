<?php $this->load->view('_blocks/header')?>

	<div class="main-container">
		<?php if (!empty($hero_image)) : ?>
		<?=fuel_block('sections/hero', array('alignment' => 'center', 'size' => 'sm', 'title' => fuel_var('h1', ''), 'text' => fuel_var('body', ''), 'background_image' => $hero_image)) ?>
		<?php endif; ?>
		
		<?=fuel_block('breadcrumb')?>
		
		<main class="main-repeater-container">

			<section>
				<div class="wrapper">
					<div class="row">
						<main class="post-main">
							<?=fuel_var('body', ''); ?>
						</main>
						<aside class="post-aside">
							
							

						</aside>
					</div>
					
				</div>
			</section>
			


		</main>

	</div>

<?php $this->load->view('_blocks/footer')?>
