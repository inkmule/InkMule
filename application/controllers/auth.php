<?php if (!defined('BASEPATH')) die();
class Auth extends Main_Controller {

	public function index(){
	
		$this->load->view('include/header');
		$this->load->view('auth/login');
		$this->load->view('include/footer');
	}
	
	function login(){
		
		$this->load->view('include/header');
		$this->load->view('auth/login');
		$this->load->view('include/footer');
		
	}
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
