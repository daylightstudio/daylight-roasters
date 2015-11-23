<?php
class MY_custom_fields {

	/**
	 * Creates a style set of radio buttons of blocks and when selected, will display fields related to that block
	 *
	 * @access	public
	 * @param	array Fields parameters
	 * @return	string
	 */

	protected $CI;
	protected $fuel;
	
	// --------------------------------------------------------------------
	
	/**
	 * Constructor
	 *
	 * @access	public
	 * @return	void
	 */	
	public function __construct()
	{
		$this->CI =& get_instance();
		$this->fuel =& $this->CI->fuel;
	}

	public function blockpicker($params)
	{
		$form_builder =& $params['instance'];

		// check to make sure there is no conflict between page columns and layout vars
		if (!empty($params['block_name']))
		{
			// check to make sure there is no conflict between page columns and layout vars
			$layout = $this->fuel->layouts->get($params['block_name'], 'block');

			if (!$layout)
			{
				return;
			}

			if (!isset($params['context']))
			{
				$params['context'] = $params['key'];
			}

			$layout->set_context($params['context']);
			$fields = $layout->fields();

			$fb = new Form_builder();
			$fb->load_custom_fields(APPPATH.'config/custom_fields.php');
			
			$fb->question_keys = array();
			$fb->submit_value = '';
			$fb->cancel_value = '';
			$fb->use_form_tag = FALSE;

			if (!isset($params['module']) OR (isset($params['module']) AND $params['module'] == 'pages'))
			{
				$fb->name_prefix = 'vars';	
			}

			$fb->set_fields($fields);
			$fb->display_errors = FALSE;

			if (!empty($params['value']))
			{
				$fb->set_field_values($params['value']);	
			}
			
			$form = $fb->render();
			return $form;
		}
		else
		{
			$js = "<script type='text/javascript'>
			    $(function(){
					$('.blockpicker_group').each(function(){
						var style = ($(this).attr('style') ? $(this).attr('style') : '');
						var name = $(this).find('input').val();
						style = style + ' background-image: url(".img_path('_template/blockpicker/')."'+name+'.png);background-size:cover;';
						$(this).attr('style', style);
					});
			    })
			    </script>
			";
			
			$params['type'] = 'select';
			if (!isset($params['options']))
			{
				// if a folder is specified, we will look in that directory to get the list of blocks
				if (isset($params['folder']))
				{
					if (!isset($params['where']))
					{
						$params['where'] = array();
					}
					if (!isset($params['filter']))
					{
						$params['filter'] = '^_(.*)|\.html$';
					}
					if (!isset($params['order']))
					{
						$params['order'] = TRUE;
					}

					// set options_list to not be recursive since block layout names won't have slashes in them (e.g. sections/right_image... it would just be right_image)			
					if (!isset($params['recursive']))
					{
						$params['recursive'] = FALSE;
					}

					$params['options'] = $this->CI->fuel->blocks->options_list($params['where'], $params['folder'], $params['filter'], $params['order'], $params['recursive']);
				}

				// otherwise we use the ones found on the MY_fuel_layouts.php
				else
				{
					if (!isset($params['group']))
					{
						$params['group'] = '';
					}
					$params['options'] = $this->CI->fuel->layouts->options_list(TRUE, $params['group']);
				}
			}

			$select_class = 'blockpicker';
			$params['class'] = (!empty($params['class'])) ? $params['class'].' '.$select_class : $select_class;

			if (!empty($params['ajax_url']))
			{
				$params['data']['url'] = rawurlencode($params['ajax_url']);
			}
			//$params['style'] = (!empty($params['style'])) ? $params['style'].'; width: '.$params['width'] : 'width: '.$params['width'];
			$value = (is_array($params['value']) AND isset($params['value']['block_name'])) ? $params['value']['block_name'] : ((isset($params['value'])) ? $params['value'] : '');
			$params['value'] = $value;
			$params['mode'] = 'radios';
			$params['wrapper_class'] = 'blockpicker_group';
			$form_builder->add_js($js);
			$field = $form_builder->create_enum($params);
			$field = $field.'<div class="block_layout_fields"></div><div class="loader hidden"></div>';
			return $field;
		}
	}

}