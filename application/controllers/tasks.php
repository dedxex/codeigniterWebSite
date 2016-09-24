<?php 
class tasks extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('isLoggedIn')){
			$this->session->set_flashdata('noAccess','You are not allowed there');
			redirect('home/index');
		}
	}
	

	public function createTask(){
		$this->form_validation->set_rules('Taskname','Task Name','trim|required');
		$this->form_validation->set_rules('Taskbody','Task Body','trim|required');
		if($this->form_validation->run()==FALSE){
		$data['sidePage']='projects/blank';
		$data['main_view']='tasks/createTask';
		$this->load->view('layout/main',$data);
		}
		else{
			$data=array(
				'Taskname'=>$this->input->post('Taskname'),
				'ProjectTaskId'=>$this->session->userdata('projectId'),
				'Taskbody'=>$this->input->post('Taskbody'));
			if($this->taskModel->createTask($data)){
				$this->session->set_flashdata('tcreated','Task Created');
				}
				redirect('projects/index');
		}

	}
	public function deleteTask($id){
		
	}
	} ?>