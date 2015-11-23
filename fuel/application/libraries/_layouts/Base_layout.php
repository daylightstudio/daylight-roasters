<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Base_layout extends Fuel_layout {

	function initialize($params = array())
	{
		parent::initialize($params);
	}

	// --------------------------------------------------------------------

	/**
	 * Generic fields used for most all pages
	 *
	 * @access	public
	 * @return	array
	 */	
	function fields()
	{
		$fields = parent::fields();
		return $fields;
	}

	// --------------------------------------------------------------------

	/**
	 * Fields related to the meta area
	 *
	 * @access	public
	 * @return	array
	 */	
	function meta_fields()
	{
		$fields['Meta'] = array('type' => 'fieldset', 'label' => 'Meta', 'class' => 'tab');
		$fields['meta_section'] = array('type' => 'copy', 'label' => 'The following fields control the meta information found in the head of the HTML.');
		$fields['page_title'] = array('style' => 'width: 520px', 'label' => lang('layout_field_page_title'));
		$fields['meta_description'] = array('style' => 'width: 520px', 'label' => lang('layout_field_meta_description'));
		$fields['meta_keywords'] = array('style' => 'width: 520px', 'label' => lang('layout_field_meta_keywords'));
		$fields['canonical'] = array('style' => 'width: 520px', 'label' => 'Canonical', 'comment' => 'Use this field if you have 2 pages with similar content. It should be the URL value of the page you want search engines to deem as the real page that represents the content. If left blank, a canonical link will be generated.');
		$fields['Open Graph'] = array('type' => 'section', 'label' => 'Open Graph');
		$fields['og_title'] = array('label' => 'Open Graph title', 'comment' => 'Used for social networks like Facebook and LinkedIn when sharing links');
		$fields['og_description'] = array('label' => 'Open Graph description', 'comment' => 'Used for social networks like Facebook and LinkedIn when sharing links');
		$fields['og_image'] = array('type' => 'asset', 'label' => 'Open Graph image', 'comment' => 'Used for social networks like Facebook and LinkedIn when sharing links');
		$this->add_fields($fields);
	}

	// --------------------------------------------------------------------

	/**
	 * Fields related to the main area
	 *
	 * @access	public
	 * @return	array
	 */	
	function main_fields()
	{
		$fields['Main Content'] = array('type' => 'fieldset', 'label' => 'Main Content', 'class' => 'tab');
		$fields['h1'] = array('label' => 'Main heading');
		$fields['body'] = array('type' => 'textarea');
		$fields['hero_image'] = array();
		$this->add_fields($fields);
	}

	// --------------------------------------------------------------------

	/**
	 * Fields related to sections
	 *
	 * @access	public
	 * @return	array
	 */	
	function section_fields()
	{
		$fields['Sections'] = array('type' => 'fieldset', 'label' => 'Sections', 'class' => 'tab');
		$fields['sections'] = array(
					'display_label' => FALSE,
					'type'          => 'template', 
					'fields'	=> array(
									'heading' => array('type' => 'section', 'value' => 'Section <span class="num"></span>'),
									'block' => array('type' => 'blockpicker', 'group' => 'Sections')

						),
					'class'         => 'repeatable',
					'add_extra'     => FALSE,
					'repeatable'    => TRUE,
				);
		$this->add_fields($fields);
	}

	// --------------------------------------------------------------------

	/**
	 * Fields related to sidebar
	 *
	 * @access	public
	 * @return	array
	 */	
	function sidebar_fields()
	{
		$fields['Sidebar_fields'] = array('type' => 'fieldset', 'label' => 'Sidebar', 'class' => 'tab');

		$fields['sidebar'] = array(
					'display_label' => FALSE,
					'type'          => 'template', 
					'fields'        => array('block' => array('type' => 'block', 'group' => 'Sidebar', 'first_option' => 'Select one...')),
					'class'         => 'repeatable',
					'add_extra'     => FALSE,
					'repeatable'    => TRUE,
				);
		$this->add_fields($fields);
	}

	// --------------------------------------------------------------------

	/**
	 * Hook used for processing variables specific to a layout
	 *
	 * @access	public
	 * @param	array	variables for the view
	 * @return	array
	 */	
	function pre_process($vars)
	{
		$blocks = $this->CI->fuel_layouts->get(NULL, 'block');
		foreach($blocks as $block)
		{
			$vars = $block->pre_process($vars);
		}
		return $vars;
	}

}