<?php if (!defined('BASEPATH')) die();
class Auth extends Main_Controller {

	public function index(){
	
		$this->load->view('include/header');
		$this->load->view('auth/login');
		$this->load->view('include/footer');
	}
	
	function login(){
		
		
		if($_POST)
		{
			//user has submitted login
			$user = User::validate_login($_POST['email'], $_POST['password']);
			
			if($user)
				redirect('');
			else
			{
				$this->view_data['message'] = 'The email/password combination supplied is invalid, please try again.';
			}
		}
		
	}

	function logout()
	{
		User::logout();
		redirect('');
	}
}
