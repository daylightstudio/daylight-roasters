<!doctype html>
<html lang="en">
<head>

	<?php if (!empty($is_blog)) : ?>
		<title><?php echo $CI->fuel_blog->page_title($page_title, ' : ', 'right')?></title>
	<?php else : ?>
		<title><?php echo fuel_var('page_title', '')?></title>
	<?php endif ?>

	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<meta name="viewport" content="width=device-width,initial-scale=1">

	<?php if (!empty($meta_keywords)): ?>
	<meta name="keywords" content="<?php echo fuel_var('meta_keywords')?>" />
	<?php endif ?>
	<?php if (!empty($meta_description)): ?>
	<meta name="description" content="<?php echo fuel_var('meta_description')?>" />
	<?php endif ?>

	<link rel="icon" href="<?php echo site_url('favicon.ico')?>"/>
	<link rel="apple-touch-icon-precomposed" href="<?=site_url('apple-touch-icon.png')?>">
	<?php // also include apple-touch-icon.png at root, 152x152 ?>

	<script>
		// Set cookie for retina screens... .htaccess then handles serving @2x images if they are available.
		if((window.devicePixelRatio===undefined?1:window.devicePixelRatio)>1)
			document.cookie='HTTP_IS_RETINA=1;path=/';
	</script>
	<?php echo jquery('1.10.2') ?>

	<?php /* echo js('modernizr');
		Remove html5 shiv if you're using modernizr. Also add `class="no-js"` to the html tag */ ?>
	<!--[if lte IE 8 ]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

	<?php echo css('main'); ?>
	<?php echo css($css); ?>

	<?php if (!empty($is_blog)) : ?>
	<?php echo $CI->fuel_blog->header()?>
	<?php endif; ?>
</head>

<?php $bc = fuel_var('body_class', 'Body Class') ?>
<!--[if lte IE 8]><body class="<?php echo $bc;?> ie lt-ie9"><![endif]-->
<!--[if IE 9]><body class="<?php echo $bc;?> ie"><![endif]-->
<!--[if gt IE 9]><! --><body class="<?php echo $bc;?>"><!-- ><![endif]-->
	<header class="header clearfix">
		<div class="wrapper">
			<div class="row">
				<div class="sitetitle"><a href="<?php echo site_url()?>">Site Title</a></div>

				<nav class="mainnav_container">
					<?php /* edit main nav via admin or nav variables file (_variables/nav.php) */ ?>
					<?php echo fuel_nav(array('container_tag_class' => 'mainnav', 'item_id_prefix' => 'nav_'))?>
				</nav>
			</div>
		</div>
	</header>
