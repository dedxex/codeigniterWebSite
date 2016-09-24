<?php 
class userModel extends CI_Model
{
	public function loginUser($username,$password)
	{
		$this->db->where(['Username'=>$username]);
		$result=$this->db->get('users');
		$password_db=$result->row(3)->Password;
		if(password_verify($password,$password_db)){
			return $result->row(0)->id;
		}
		else{
			return false;
		}
	}
	public function registerUser($username,$password,$email,$lastname,$firstname)
	{
		$options=['cost'=>12];
		$encryptedPass=password_hash($this->input->post('password'),PASSWORD_BCRYPT,$options);
		$dataPara=(['Username'=>$username,'Password'=>$encryptedPass,'Email'=>$email,'Lastname'=>$lastname,'Firstname'=>$firstname]);
		$this->db->get('users');
		$insertStatus=$this->db->insert('users',$dataPara);
		return $insertStatus;
	}
}



?>