<?php 
// for altering the _blocks/breadcrumb
if (!empty($category)) :
	$append['events/category/'.$category->slug] = array('label' => $category->name, 'parent_id' => 'events');	
	fuel_set_var('append', $append);
endif;
?>
<?php $this->load->view('_blocks/header')?>

	<div class="main-container">

		<?php $this->load->view('_blocks/breadcrumb')?>
		<section class="post-container">
			<div class="wrapper">
				<div class="row">
					<main class="post-main">
						<h2>Events<?=(!empty($category) ? ' : '.$category->name : '')?></h2>
						<?=fuel_var('body', ''); ?>
					</main>
					<aside class="post-aside">
						
						<?=fuel_block('events/categories')?>

					</aside>
				</div>
			</div>
		</section>
	</div>

<?php $this->load->view('_blocks/footer')?>
