<?php if (!defined('BASEPATH')) die();
class Frontpage extends Main_Controller {

   public function index()
	{
	
		//$this->load->view('include/header');
		
		/*User::create(array(
			'email' => 'd.p.hostetler@gmail.com',
			'password' => 'tdp61231'
		));*/
		
		//if($this->user) die('The user ' . $this->user->email . ' is logged in.');
		//else die('nobody is logged in.');
		
		//$this->load->view('include/footer');
		
		$this->layout_view = 'frontpage';
		$this->content_view = null;
	}
   
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
