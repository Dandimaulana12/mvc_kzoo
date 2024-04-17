<?php

/**
* 
*/
class ticket extends controller
{
	
	public function pesan()
	{
		$this->views('ticket/pesan_tiket');
	}

	public function tambah(){
		if ($this->model('ticketModel')->tambahtiket($_POST, $_SESSION['id_user']) > 0) {
			header('Location:'.BASEURL.'/ticket/pesan');
		}
	}
}