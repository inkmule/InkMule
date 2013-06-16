<?php if (!defined('BASEPATH')) die();
class Customer extends Main_Controller
{
	public function index()
	{
		
	}
	
	function create(){
		
		//create user if form was submitted
		if($_POST){
			
			$this->load->library('form_validation');
			
			//set validation rules
			$rules = array(
				array(
					'field' => 'firstname',
					'label' => 'first name',
					'rules' => 'trim|required|max_length[20]|xss_clean'
				),
				array(
					'field' => 'lastname',
					'label' => 'last name',
					'rules' => 'trim|required|max_length[50]|xss_clean'
				),
				array(
					'field' => 'email',
					'label' => 'email',
					'rules' => 'trim|required|valid_email|is_unique[users.email]|xss_clean'
				),
				array(
					'field' => 'password',
					'label' => 'password',
					'rules' => 'trim|required|matches[confirmpassword]|xss_clean'
				),
				array(
					'field' => 'confirmpassword',
					'label' => 'confirm password',
					'rules' => 'trim|required|xss_clean'
				),
			);
			$this->form_validation->set_rules($rules);
			$this->form_validation->set_message('is_unique', 'An account already exists for this email address.');
			
			if($this->form_validation->run() == TRUE)
			{
				User::create(array(
					'firstname' => $_POST['firstname'],
					'lastname' => $_POST['lastname'],
					'email' => $_POST['email'],
					'password' => $_POST['password'],
					'usertypeid' => '2',
					'usertype' => 'customer'
				));
				
				redirect('customer/profile');
			}	
		}
	}
	
	function profile(){
		
	}
}
