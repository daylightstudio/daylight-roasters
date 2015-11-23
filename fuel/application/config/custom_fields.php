<?php 
/*
|--------------------------------------------------------------------------
| Form builder 
|--------------------------------------------------------------------------
|
| Specify field types and other Form_builder configuration properties
| This file is included by the fuel/modules/fuel/config/form_builder.php file
*/
$fields['blockpicker'] = array(
        'class'     => 'MY_custom_fields',
        'function'  => 'blockpicker',
        'css'       => 'customfields/blockpicker',
        'js'        => array(
            'customfields/blockpicker',
        ),
        'js_function' => 'blockpicker_field',
        //'represents' => array('name' => 'block'),
);
include(FUEL_PATH.'config/custom_fields.php');

/* End of file form_builder.php */
/* Location: ./application/config/form_builder.php */