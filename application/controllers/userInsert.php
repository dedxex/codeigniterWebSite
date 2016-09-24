<?php
class userInsert extends CI_Controller
{
	public function index()
	{	
		$this->load->model('insertModel');
		$uname="Johnny";
		$pass="Cena";
		#$result=$this->insertModel->updateUser(34);
		#$result=$this->insertModel->insertUser($uname,$pass);
		$result=$this->insertModel->deleteUser(2);
		if($result == true)
		{
			#$status['r']="succesfully inserted";
			$this->load->view('insertView');
		}
		else
		{
			#$status['r']="already exist";
			$this->load->view('insertView2');
		}

	}
}
?>