<?php 
// for altering the _blocks/breadcrumb
$heading = 'News';
switch($page_type)
{
	case 'tag':
		$append['news/tag/'.$tag->slug] = array('label' => $tag->name, 'parent_id' => 'news');
		$heading = 'News'.(!empty($tag) ? ' : '.$tag->name : '');
		break;
	case 'archive':
		$append['news/archive/'.$year.'/'.$month] = array('label' => 'Archive', 'parent_id' => 'news');
		$heading = 'News Archive '.$display_date;
		break;
}
	
fuel_set_var('append', $append);
?>
<?php $this->load->view('_blocks/header')?>

	<div class="main-container">

		<?php $this->load->view('_blocks/breadcrumb')?>
		<section class="post-container">
			<div class="wrapper">
				<div class="row">
					<main class="post-main">
						<h2><?=$heading?></h2>
						<?=fuel_var('body', ''); ?>

						<?php if (!empty($pagination)) : ?>
						<div class="pagination">
							<?=$pagination?>
						</div>
						<?php endif; ?>

					</main>
					<aside class="post-aside">
						
						<?=fuel_block('news/tags')?>

						<?=fuel_block('news/archives')?>

					</aside>
				</div>
			</div>
		</section>
	</div>

<?php $this->load->view('_blocks/footer')?>
