<?php

class User extends ActiveRecord\Model{
	
	var $password = FALSE;
	
	function before_save(){
		if($this->password)
			$this->hashed_password = $this->hash_password($this->password);
	}
	
	function hash_password($password){
		
		$salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
		$hash = hash('sha256', $salt . $password);
		
		return $salt . $hash;
	}
	
	private function validate_password($password){
		
		$salt = substr($this->$hashed_password, 0, 64);
		$hash = substr($this->$hashed_password, 64, 64);
		
		$password_hash = hash('sha256', $salt . $password);
		
		return $password_hash == $hash;
	}
	
	public static function login($email, $password){
		
		$user = User::find_by_email($email);
		
		if($user && $user->validate_password($password))
			return $user;
		else
			return FALSE;
	}
}