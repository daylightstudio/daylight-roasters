<?php 
$path = '';
$title = $page_title;
?>
<meta property="og:site_name" content="The Site Title"/>
<meta property="og:url" content="<?=current_url()?>" />
<?php if(!empty($og_title)):
	echo '<meta property="og:title" content="'.$og_title.'" />'; 
 else:
 	echo '<meta property="og:title" content="'.$title.'" />';
 endif;
 ?>
<?php if(!empty($og_description)) echo '<meta property="og:description" content="'.$og_description.'" />'; ?>
<?php if(!empty($og_image)): ?>
<meta property="og:image" content="<?=img_path($path . $og_image, '', TRUE)?>" />
<?php else: ?>
<meta property="og:image" content="<?=img_path('_template/open_graph.jpg', '', TRUE)?>" />
<?php endif; ?>