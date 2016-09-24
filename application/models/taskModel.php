<?php 
class taskModel extends CI_Model{

	public function getTask($id){
		$this->db->where('ProjectTaskId',$id);
		$q=$this->db->get('tasks');
		return $q->result();
	}
	public function createTask($data){
		$query=$this->db->insert('tasks',$data);
		return $query;
	}
	} ?>