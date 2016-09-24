<?php
class Users extends CI_Model
{
	public function get_user($user_id)
	{
		$this->db->where('Password',$user_id);
		//$this->db->where(['id' => $user_id, 'Username'=>$u]);
		//this will match the $user_id with the value in the id column
		$query=$this->db->get('users');
		//with do a "select * from users" query operation
		return $query->result();
		//this will return $query in the form of objects
	}
	public function Get_users()
	{
		$query=$this->db->query("select * from users");
		return $query->num_rows();
	}
}
?>