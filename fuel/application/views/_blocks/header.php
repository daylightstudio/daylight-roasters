<!doctype html>
<html lang="en">
<head>

	<?php if (!empty($is_blog)) : ?>
		<title><?php echo $CI->fuel_blog->page_title($page_title, ' : ', 'right')?></title>
	<?php else : ?>
		<title><?php echo fuel_var('page_title', '')?></title>
	<?php endif ?>

	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width,initial-scale=1">

	<?=fuel_block('og')?>

	<link rel="icon" href="<?php echo site_url('favicon.ico')?>"/>
	<link rel="apple-touch-icon-precomposed" href="<?=site_url('apple-touch-icon.png')?>">
	<?php // also include apple-touch-icon.png at root, 152x152 ?>

	<script>
		// Set cookie for retina screens... .htaccess then handles serving @2x images if they are available.
		if((window.devicePixelRatio===undefined?1:window.devicePixelRatio)>1)
			document.cookie='HTTP_IS_RETINA=1;path=/';
	</script>
	<?php echo jquery('1.10.2') ?>
	<?php /* if you want to use select2, otherwise remove...
	<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
	<script>(typeof S2 == 'function') || document.write('<script src="/assets/js/select2.min.js">\x3C/script>')</script>
	*/?>

	<!--[if lte IE 8 ]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

	<?=fuel_block('type')?>
	<?php echo css('main'); ?>
	<?php echo css($css); ?>

	<!--[if lte IE 8 ]><?php echo js('respond.min')?><![endif]-->

	<?php if (!empty($is_blog)) : ?>
	<?php echo $CI->fuel_blog->header()?>
	<?php endif; ?>
	
	<?=fuel_block('ga');?>
</head>

<?php $bc = fuel_var('body_class', 'Body Class') ?>
<!--[if IE 9]><body class="<?php echo $bc;?> ie"><![endif]-->
<!--[if gt IE 9]><! --><body class="<?php echo $bc;?>"><!-- ><![endif]-->
	<!--[if lt IE 9]>
	<div style="position:fixed;top:0;width:100%;height:30px;text-align:center;background:yellow;color:black;font-size:16px;z-index:9999;line-height:30px;">This site is optimized for IE9 or better. Please update your browser.</div>
	<![endif]-->
	<header class="header">
		<div class="wrapper">
			<div class="sitetitle"><a href="<?php echo site_url()?>" alt="Site Title"><img src="http://placehold.it/200x100"></a></div>

			<div class="mainnav-wrap">
				<a href="#" id="menu-toggle" class="mainnav-toggle">Menu <i class="fa fa-bars"></i></a>
				<nav class="mainnav-container" role="navigation">
					<a href="#" id="menu-toggle-close" class="mainnav-toggle-close">Close</a>
					<?php echo fuel_nav(array('container_tag_class' => 'mainnav', 'item_id_prefix' => 'nav_'))?>
				</nav>
			</div>
		</div>
	</header>
