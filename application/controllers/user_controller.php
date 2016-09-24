<?php
class user_controller extends CI_Controller
{
	public function index()
	{
		$this->load->model('Users');
		$result['res']= $this->Users->get_user(124);
		//contacting with the model
		#$result2['res1']=$this->Users->Get_users();
		$this->load->view('show_users',$result);// communicating with the view
	}
}

?>