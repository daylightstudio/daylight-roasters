<?php $this->load->view('_blocks/header')?>
	
	<div class="main_container wrapper">
		<article class="primary_content">
			<?=fuel_var('body', ''); ?>
		</article>
		
		<aside class="secondary_content">
			<?=fuel_block('secondary')?>
		</aside>
	</div>
	
<?php $this->load->view('_blocks/footer')?>
