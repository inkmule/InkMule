<?
if($this->user) echo('The user ' . $this->user->email . ' is logged in.');
else redirect('login');
?>