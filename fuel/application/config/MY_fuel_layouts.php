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
$config['layouts']['home'] = array(
	'label'    => 'Home',
	'file' 		=> $config['layouts_path'].'home',
	'class'		=> 'Home_layout',
	'filepath' => 'libraries/_layouts',
	'filename' => 'Home_layout.php',
);

/** GENERIC BLOCKS **********************************/

$alignment = array('center', 'left', 'right');
$yesno = array('no', 'yes');

$config['blocks']['hero'] = array(
	'group' => 'Sections',
	'label' => 'Hero Block',
	'fields' => array(
		'title' => array(),
		'text' => array('type' => 'textarea'),
		'background_image' => array('comments' => '1200px x 400px'),
		'alignment' => array('type' => 'enum', 'options' => $alignment),
	),
);
$config['blocks']['textblock'] = array(
	'group' => 'Sections',
	'label' => 'Text Block',
	'fields' => array(
		'title' => array(),
		'text' => array('type' => 'textarea'),
		'centered' => array('type' => 'enum', 'options' => $yesno),
	),
);
$config['blocks']['twocol'] = array(
	'group' => 'Sections',
	'label' => '2 Column Block',
	// 'fields' => array(
	// 	'twocol' => array(
	// 		'type' => 'template',
	// 		'repeatable' => FALSE,
	// 		'view' => '_admin/fields/twocol',
	// 		'display_label' => FALSE,
	// 		'fields' => array(
	// 			'column_layout' => array('type' => 'select', 'options' => array(
	// 				'half' => 'Half',
	// 				'left-lg' => 'Larger left column',
	// 				'right-lg' => 'Larger right column',
	// 			)),
	// 			'column_left' => array('type' => 'textarea', 'style' => 'width: 400px;'),
	// 			'column_right' => array('type' => 'textarea', 'style' => 'width: 400px;'),
	// 			'centered' => array('type' => 'enum', 'options' => $yesno),
	// ))),
	'fields' => array(
		'column_layout' => array('type' => 'select', 'options' => array(
			'half' => 'Half',
			'left-lg' => 'Larger left column',
			'right-lg' => 'Larger right column',
		)),
		'column_left' => array('type' => 'textarea'),
		'column_right' => array('type' => 'textarea'),
		'centered' => array('type' => 'enum', 'options' => $yesno),
		
	),
);

/*

<p><img alt="" src="{img_path('home_illustration_sm.png')}" /></p>


<h3>We Know Beans About Beans</h3>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum cursus luctus. Ut bibendum orci velit, sit amet tempus erat tristique sed.</p>

<p>Vivamus eu quam ut ipsum porttitor posuere at quis nisi. Praesent pulvinar volutpat sollicitudin. Sed in posuere velit, ut lobortis nulla.</p>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam congue velit orci, eu venenatis libero imperdiet vel.</p>

 */
$config['blocks']['features'] = array(
	'group' => 'Sections',
	'label' => 'Features Block',
	'fields' => array(
		'title' => array(),
		'centered' => array('type' => 'enum', 'options' => $yesno),
		//'col_num' => array('type' => 'select', 'label' => 'Number of Columns', 'options' => array('3', '4')),
		'columns' => array('display_label' => FALSE,
			'init_display' => 'none',
			'type'          => 'template', 
			'float' => TRUE,
			'fields'        => array(
				'sections' => array('type' => 'section', 'label' => '{__title__}'),
				'title' => array(),
				'text' => array('type' => 'textarea'),
				'image' => array('comment' => '300px by 100px'),
				'link'  => array(),
				'button_text' => array(),
			),
			'class'         => 'repeatable',
			'add_extra'     => FALSE,
			'repeatable'    => TRUE,
			'min'			=> 3,
			'max'			=> 4,
			'title_field' => 'title',
			),
	),
);
$config['blocks']['chapters'] = array(
	'group' => 'Sections',
	'label' => 'Chapter Block',
	'fields' => array(
		'centered' => array('type' => 'enum', 'options' => $yesno),
		'columns' => array('display_label' => FALSE,
			'init_display' => 'none',
			'type'          => 'template', 
			'fields'        => array(
				'sections' => array('type' => 'section', 'label' => '{__title__}'),
				'title' => array(),
				'text' => array('type' => 'textarea'),
				'image' => array('comment' => '300px by 100px'),
				'link'  => array(),
				'button_text' => array(),
			),
			'class'         => 'repeatable',
			'add_extra'     => FALSE,
			'repeatable'    => TRUE,
			'min'			=> 2,
			'max'			=> 4,
			'title_field' => 'title',
			),
	),
);
$config['blocks']['quote'] = array(
	'group' => 'Sections',
	'label' => 'Quotation Block',
	'fields' => array(
		'quote' => array('type' => 'textarea', 'class' => 'no_editor'),
		'byline' => array(),
	),
);
$config['blocks']['cta'] = array(
	'group' => 'Sections',
	'label' => 'Call to Action',
	'fields' => array(
		'title' => array(),
		'link' => array(),
		'button_text' => array(),
		'background_image' => array('1200px by 300px'),
		'columns' => array('type' => 'select', 'options' => array('1', '2')),
		'alignment' => array('type' => 'select', 'options' => $alignment),
	),
);

/** CUSTOM BLOCKS **********************************/

$config['blocks']['menu'] = array(
	'group' => 'Sections',
	'label' => 'Menu Block',
	'fields' => array(
		'column_left' => array('type' => 'textarea'),
		'column_right' => array('type' => 'textarea'),
	),
);

/* End of file MY_fuel_layouts.php */
/* Location: ./application/config/MY_fuel_layouts.php */

