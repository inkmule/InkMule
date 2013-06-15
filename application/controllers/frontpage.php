<?php if (!defined('BASEPATH')) die();
class Frontpage extends Main_Controller {

   public function index()
	{
		
		$this->load->view('include/header');
		
		$user = User::create(array(
			'email' => 'd.p.hostetler@gmail.com',
			'password' => 'tdp61231'
		));
		
		if(!$user) die('user could not be created');
		echo $user->username . ' was added.';
	
		$this->load->view('include/footer');
	}
   
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
