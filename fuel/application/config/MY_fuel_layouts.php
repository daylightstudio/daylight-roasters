<?php 
/*
|--------------------------------------------------------------------------
| MY Custom Layouts
|--------------------------------------------------------------------------
|
| specify the name of the layouts and their fields associated with them
*/

$config['default_layout'] = 'main';

$config['layouts_folder'] = '_layouts';

$config['hidden'] = array();

$config['layouts']['main'] = array(
	'label'    => 'Main',
	'file' 		=> $config['layouts_path'].'main',
	'class'		=> 'Main_layout',
	'filepath' => 'libraries/_layouts',
	'filename' => 'Main_layout.php',
	
	
	// 'fields'	=> array(
	// 	'Header' => array('type' => 'fieldset', 'label' => 'Header', 'class' => 'tab'),
	// 	'page_title' => array('label' => lang('layout_field_page_title')),
	// 	'meta_description' => array('label' => lang('layout_field_meta_description')),
	// 	'meta_keywords' => array('label' => lang('layout_field_meta_keywords')),
	// 	'Body' => array('type' => 'fieldset', 'label' => 'Body', 'class' => 'tab'),
	// 	'heading' => array('label' => lang('layout_field_heading')),
	// 	'body' => array('label' => lang('layout_field_body'), 'type' => 'textarea', 'description' => lang('layout_field_body_description')),
	// 	'body_class' => array('label' => lang('layout_field_body_class')),
	// )
);

/** BLOCKS **********************************/

$config['blocks']['full-width'] = array(
	'group' => 'Sections',
	'label' => 'Full Width',
	'fields' => array(
		'text' => array('type' => 'textarea'),
	),
);
$config['blocks']['intro'] = array(
	'group' => 'Sections',
	'label' => 'Intro Block',
	'fields' => array(
		'title' => array(),
		'text' => array('type' => 'textarea'),
	),
);
/* End of file MY_fuel_layouts.php */
/* Location: ./application/config/MY_fuel_layouts.php */

