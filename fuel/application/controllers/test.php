<?php 

class Test extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->fuel->pages->render('about', array(), array('render_mode' => 'cms'));
	}

}