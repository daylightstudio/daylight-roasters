<?php 
$path = '';
$page_title = fuel_var('page_title');
$meta_description = fuel_var('meta_description');
$meta_keywords = fuel_var('meta_keywords');
$title = (!empty($og_title) ? $og_title : $page_title);
$desc = (!empty($og_description) ? $og_description : $meta_description);
$image = (!empty($og_image) ? $og_image : '_template/graphic_social_tag_facebook.png');
?>
<meta name="keywords" content="<?=$meta_keywords?>" />
<meta name="description" content="<?=$meta_description?>" />

<meta property="og:site_name" content="LSN"/>
<meta property="og:url" content="<?=current_url()?>" />
<meta property="og:title" content="<?=$title?>" />
<meta property="og:description" content="<?=$desc?>" />
<meta property="og:image" content="<?=img_path($path . $image, '', TRUE)?>" />

<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@connectmyoffice" />
<meta name="twitter:title" content="<?=$title?>" />
<meta name="twitter:description" content="<?=$desc?>" />
<meta name="twitter:image" content="<?=img_path('_template/graphic_social_tag_facebook.png')?>" />