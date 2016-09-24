<?php
class insertModel extends CI_Model
{
	public function insertUser($uname,$pass)
	{	
			$this->db->where(['Username'=>$uname,'Password'=>$pass]);
			$data=(['Username'=>$uname,'Password'=>$pass]);
			$q=$this->db->insert('users',$data);
			return $q=true;
		
		
	}
	public function updateUser($id)
	{
		$this->db->where(['id'=>$id]);
			$uname="Rocky";
			$pass="shame";
			$data=(['Username'=>$uname,'Password'=>$pass]);
			$q=$this->db->update('users',$data);
			return $q=true;
	}
	public function deleteUser($id)
	{
		$this->db->where(['id'=>$id]);
		$this->db->delete('users');
		return $q=true;
	}
	}
?>