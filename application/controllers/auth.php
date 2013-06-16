<?php if (!defined('BASEPATH')) die();
class Auth extends Main_Controller {

	public function index(){
	
		$this->user ? redirect('') : $this->content_view = 'auth/login';
	
	}
	
	function login(){
		
		//if user is already logged in, redirect to customer dashboard
		
		//user has submitted login
		if($_POST)
		{
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
