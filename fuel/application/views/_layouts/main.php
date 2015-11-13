<?php $this->load->view('_blocks/header')?>

	<div class="main-container">
		<?php $this->load->view('_blocks/sections/hero', array('alignment' => 'center', 'title' => fuel_var('h1', ''), 'text' => fuel_var('body', ''), 'background_image' => $hero_image))?>
		<?php $this->load->view('_blocks/breadcrumb')?>

		<main class="main-repeater-container">
			<?php 
			if (!empty($sections)) :
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
