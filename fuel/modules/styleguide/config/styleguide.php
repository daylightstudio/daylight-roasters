<?php
/*
|--------------------------------------------------------------------------
| FUEL NAVIGATION: An array of navigation items for the left menu
|--------------------------------------------------------------------------
*/
$config['nav']['styleguide'] = array(
		'styleguide' => 'Styleguide',
	);


/*
|--------------------------------------------------------------------------
| ADDITIONAL SETTINGS:
|--------------------------------------------------------------------------
*/
$config['styleguide']['updated_time'] = '2014-07-21 11:34';
$config['styleguide']['maxwidth'] = '1180px';

/*
list of blocks to include in block styling section. Use args to pass dummy data to blocks if necessary. add 'nowrap' => TRUE if you want the block to live outside the wrapper bounds
app = blocks in the main application/views/blocks directory
module = blocks in the styleguide blocks directory, only for use within the styleguide for whatever reason
EXAMPLE:
$config['styleguide']['blocks'] = array(
	'app' => array(
		'components/jumbotron' => array('sg-nowrap' => TRUE, 'title' => 'Test Title', 'description' => 'This is the description', 'button_title' => 'CTA', 'button_link' => 'http://gooogle.com'),
	),
	'module' => array('breadcrumbs')
);
*/
$config['styleguide']['blocks'] = array(
	'app' => array(),
	'module' => array()
);