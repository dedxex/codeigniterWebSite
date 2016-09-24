<?php
class Home extends CI_Controller
{	
	public $cPage;
	public $sPage;

	public function index(){


	$this->cPage['sidePage']='users/loginVIew';
	$this->cPage['main_view']='home_view';
	$this->load->model('userModel');
	$this->load->view('layout/main',$this->cPage);
	}
	public function login()
	{
	$this->load->library('session');
	$this->load->library('form_validation');

	$this->form_validation->set_rules('username','Name','min_length[3]');
	$this->form_validation->set_rules('password','Pasword','min_length[3]');

	if($this->form_validation->run()== FALSE)
	{
	$dataLoginError=array(
	'error'=>validation_errors() );
	$this->session->set_flashdata($dataLoginError);
	redirect('home');
	}
	else
	{
		$uname= $this->input->post('username');
		$pass= $this->input->post('password');	
		$id=$this->userModel->loginUser($uname,$pass);
		if($id){
				$userdata=array(
				'userId'=>$id,
				'userName'=>$uname,
				'isLoggedIn'=>true);
				$this->cPage['main_view']='adminView';
				$this->session->set_userdata($userdata);
				$loginflashdata=array('loadAdminPage'=>true);
				$this->session->set_flashdata($loginflashdata);
				$this->session->set_flashdata('loginSuccess','You are logged in');
				$this->cPage['sidePage']='users/loginVIew';
				$this->cPage['main_view']='adminView';
				$this->load->view('layout/main',$this->cPage);
				}
		else{
		$this->session->set_flashdata('loginFailed','Sorry Wrong Username/password');
		redirect('home');
		}
	}
	}
	public function logout()
	{	
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->cPage['main_view']='home_view';
		$this->session->sess_destroy();
		redirect('home/index');
	}

	public function register()
	{
		$this->session->userdata['isLoggedIn']=false;
		$this->load->library('session');
		$this->load->library('form_validation');

		$temp1=array('hideLoginView' => true );
		$this->session->set_flashdata($temp1);

		$this->form_validation->set_rules('username','UserName','trim|required|min_length[3]');
		$this->form_validation->set_rules('firstname','FirstName','trim|required|min_length[3]');
		$this->form_validation->set_rules('lastname','LastName','trim|required|min_length[3]');
		$this->form_validation->set_rules('email','Email','trim|required|min_length[3]');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[3]');
		$this->form_validation->set_rules('cPassword','Pasword','min_length[3]|matches[password]');
		

		if($this->form_validation->run()== FALSE){
		$this->cPage['sidePage']='users/loginView';
		$this->cPage['main_view']='/users/userRegister';
		$this->load->view('layout/main',$this->cPage);
		$dataa=array(
		'errors'=>validation_errors() );
		$this->session->set_flashdata($dataa);	
		//redirect('home');
		}

	else

	{	
		$this->cPage['sidePage']='users/loginView';
		$this->cPage['main_view']='users/userRegister';
		$this->load->view('layout/main',$this->cPage);

		$uname= $this->input->post('username');
		$pass= $this->input->post('password');
		$email=$this->input->post('email');
		$lastname=$this->input->post('lastname');
		$firstname=$this->input->post('firstname');
		if($this->userModel->registerUser($uname,$pass,$email,$lastname,$firstname)){
			redirect('home');
		}
		else
		{
			echo "failed";
			redirect('home');
		}
	}
	}
}
?>