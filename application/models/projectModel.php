<?php 
class projectModel extends CI_Model{
	public function getProject(){
		$query=$this->db->get('projects');
		return $query->result();
		//result() method return an array
	}
	public function getProjectInfo($id){
		$this->db->where('id',$id);
		$query=$this->db->get('projects');
		return $query->row();
	}
	public function createProject($data){
		$query=$this->db->insert('projects',$data);
		return $query;
	}

	public function editProject($id,$data){
		$this->db->where('id',$id);
		$query=$this->db->update('projects',$data);
		return true;
	}
	public function deleteProject($id){
		$this->db->where('id',$id);
		$this->db->delete('projects');
	}

	public function getProjectt($userId){
		$this->db->where('Projectuserid',$userId);
		$query=$this->db->get('projects');
		return $query->result();
		//result() method return an array
	}

	} ?>