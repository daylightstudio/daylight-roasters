<?php 
/*
|--------------------------------------------------------------------------
| MY Custom Modules
|--------------------------------------------------------------------------
|
| Specifies the module controller (key) and the name (value) for fuel
*/


/*********************** EXAMPLE ***********************************

$config['modules']['quotes'] = array(
	'preview_path' => 'about/what-they-say',
);

$config['modules']['projects'] = array(
	'preview_path' => 'showcase/project/{slug}',
	'sanitize_images' => FALSE // to prevent false positives with xss_clean image sanitation
);

*********************** /EXAMPLE ***********************************/



/*********************** OVERWRITES ************************************/

// $config['module_overwrites']['categories']['hidden'] = TRUE; // change to FALSE if you want to use the generic categories module
// $config['module_overwrites']['tags']['hidden'] = TRUE; // change to FALSE if you want to use the generic tags module

/*********************** /OVERWRITES ************************************/

$config['modules']['news'] = array(
	'preview_path' => '', // put in the preview path on the site e.g products/{slug}
	'model_location' => '', // put in the advanced module name here
	'pages' => array(
		'base_uri' => 'news',
		'per_page' => 10,
		'layout' => 'news',
		'list' => 'news',
		'archive' => 'news',
		'post' => 'news/detail',
		'tag' => array('view' => 'news', 'empty_data_show_404' => TRUE, 'per_page' => 10), // this is essentially the same just using the string of 'news'
	)
);

$config['modules']['events'] = array(
	'preview_path' => 'events#event-{id}', // put in the preview path on the site e.g products/{slug}
	'model_location' => '', // put in the advanced module name here
	'default_col' => 'start_date',
	'default_order' => 'desc',
	'pages' => array(
		'base_uri' => 'events',
		'per_page' => 10,
		'layout' => 'events',
		'list' => 'events',
		'category' => array('view' => 'events', 'empty_data_show_404' => TRUE, 'per_page' => 10),
	),
	'advanced_search' => 'collapse',
);
