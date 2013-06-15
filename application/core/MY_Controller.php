<?php
class MY_Controller extends CI_Controller
{

	var $user = FALSE;
	
	//layout functionality
	protected $layout_view = 'application';
	protected $content_view = '';
	protected $view_data = array();
	
	function __construct()
	{
		parent::__construct();
		
		$this->user = $this->session->userdata('user_id') ? User::find($this->session->userdata('user_id')) : FALSE;
	}
	
	public function _output($output)
	{
		//set the default content view
		if($this->content_view !== FALSE && empty($this->content_view)) 
			$this->content_view = $this->router->class . '/' . $this->router->method;
			
		//render the content view
		$yield = file_exists(APPPATH . 'views/' . $this->content_view . EXT) 
			? $this->load->view($this->content_view, $this->view_data, TRUE) : FALSE;
			
		//render the layout
		if($this->layout_view)
			echo $this->load->view('layouts/' . $this->layout_view, array('yield' => $yield), TRUE);
		else
			echo $yield;
	}
}
