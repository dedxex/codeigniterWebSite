<?php 
class projects extends CI_Controller{
	public function __construct(){
		//
		parent::__construct();
		if(!$this->session->userdata('isLoggedIn')){
			$this->session->set_flashdata('noAccess','You are not allowed there');
			redirect('home/index');
		}
	}
	public function index(){
		$data['sidePage']='projects/blank';
		$data['main_view']='projects/index';
		$data['project']=$this->projectModel->getProjectt($this->session->userdata('userId'));
		$this->load->view('layout/main',$data);
	}

	public function displayProject($id){

		$data['sidePage']='projects/projectTasks';
		$data['projectData']=$this->projectModel->getProjectInfo($id);
		$data['taskdata']=$this->taskModel->getTask($id);
		$data['main_view']='projects/displayProject';
		$this->load->view('layout/main',$data);
	}
	public function createProject(){
		$this->form_validation->set_rules('Projectname','Project Name','trim|required');
		$this->form_validation->set_rules('Projectbody','Project Body','trim|required');
			if($this->form_validation->run()==FALSE){
			$data['sidePage']='projects/blank';
			$data['main_view']='projects/createProject';
			$this->load->view('layout/main',$data);
			}
		else{
			$data=array(
				'Projectname'=>$this->input->post('Projectname'),
				'Projectuserid'=>$this->session->userdata('userId'),
				'Projectbody'=>$this->input->post('Projectbody'));
			if($this->projectModel->createProject($data)){
				$this->session->set_flashdata('pcreated','Project Created');
				}
				redirect('projects/index');
		}

	}


	public function editProject($id){
		$this->form_validation->set_rules('Projectname','Project Name','trim|required');
		$this->form_validation->set_rules('Projectbody','Project Body','trim|required');


		if($this->form_validation->run()==FALSE){
			
			$data['projectdata']=$this->projectModel->getProjectInfo($id);
			$data['sidePage']='projects/projectTasks';
			$data['projectData']=$this->projectModel->getProjectInfo($id);
			$data['taskdata']=$this->taskModel->getTask($id);
			$data['main_view']='projects/editProject';
			$this->load->view('layout/main',$data);
		}
		else{
			$data=array(
				'Projectname'=>$this->input->post('Projectname'),
				'Projectbody'=>$this->input->post('Projectbody'));
			if($this->projectModel->editProject($id,$data)){
				$this->session->set_flashdata('edited');
			}
				redirect('projects/index');
		}

	}
	Public function deleteProject($id){
		if($this->projectModel->deleteProject($id)){
		$this->session->set_flashdata('pdeleted','Project Created');
	}
		redirect('projects/index');


	}
}

?>
