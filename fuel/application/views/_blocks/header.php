<!doctype html>

<html class="no-js" lang="en">

<head>

	<?php if (!empty($is_blog)) : ?>
		<title><?php echo $CI->fuel_blog->page_title($page_title, ' : ', 'right')?></title>
	<?php else : ?>
		<title><?php echo fuel_var('page_title', '')?></title>
	<?php endif ?>
	
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<meta name="viewport" content="width=device-width">

	<?php if (!empty(fuel_var('meta_keywords'))): ?><meta name="keywords" content="<?php echo fuel_var('meta_keywords')?>" /><?php endif ?>
	<meta name="description" content="<?php echo fuel_var('meta_description')?>" />

	<link rel="icon" href="<?php echo site_url('favicon.ico')?>"/>

	<?php /*
	* All JavaScript in footer (_blocks/footer.php), except for jQuery and Modernizr. 
	* Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline 
	*/ ?>
	<?php echo jquery('1.10.2') ?>
	<?php echo js('modernizr'); ?>

	<?php echo css('main'); ?>
	<?php echo css($css); ?>
	
	<?php if (!empty($is_blog)) : ?>
	<?php echo $CI->fuel_blog->header()?>
	<?php endif; ?>

	<?php echo fuel_block('tracking')?>

</head>

<?php $bc = fuel_var('body_class', 'Body Class') ?>
<!--[if lte IE 8]><body class="<?php echo $bc;?> lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><body class="<?php echo $bc;?>"><!--<![endif]-->

	<!--[if lt IE 8]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

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
