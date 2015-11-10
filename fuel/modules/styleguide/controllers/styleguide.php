<?php

class Styleguide extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$this->load->module_view('styleguide', 'index');

	}
	
}