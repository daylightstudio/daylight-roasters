<?php $this->load->view('_blocks/header')?>

	<div class="main-container">
		<?php if (!empty($hero_image)) : ?>
		<?=fuel_block('sections/hero', array('alignment' => 'center', 'size' => 'sm', 'title' => fuel_var('h1', ''), 'text' => '', 'background_image' => $hero_image)) ?>
		<?php endif; ?>
		
		<?=fuel_block('breadcrumb')?>
		
		<main class="main-repeater-container">
			<?php if (!empty($body)) : ?>
			<section class="block-text">
				<div class="wrapper">
					<div class="col">
						<?=fuel_var('body')?>
					</div>
				</div>
			</section>
			<?php endif;  ?>
			<?php if (!empty($sections)) :
				echo fuel_var('sections');
				foreach($sections as $key => $section):
					if(!empty($section['block'])):
						$blockname = $section['block']['block_name'];
						echo fuel_block('sections/'.$blockname, $section['block']);
					endif;
				endforeach;
			endif; ?>
		</main>

	</div>

<?php $this->load->view('_blocks/footer')?>
