<?php
/**
* 
*/
class login extends controller
{
	public function index()
	{
		$this->views('login/login');
	}

	public function masuk(){
		// $arr = $this->model('user_Model')->aksi_login($_POST);

		if ($this->model('user_Model')->aksi_login($_POST) > 0 ) {
		
			header('Location:'.BASEURL.'/ticket/pesan');
		}else{
			header('Location:'.BASEURL.'/login');
		}
			// var_dump($_POST);
	}
	
}