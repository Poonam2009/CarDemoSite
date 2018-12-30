<?php 
 class LoginModel extends CI_Model{
	 
	 public function login($name,$pass){	
	   $this->db->select('id','user_name','user_password','user_email');
	   $this->db->from('user_login');
	   $this->db->where('user_name',$name);
	   $this->db->where('user_password',$pass);
	   $query=$this->db->get();
	   if($query->num_rows()==1)
	   {
	   return true;
	   }
	   else
	   {
		   return false;
		   }
		 
	 }
	 
	 
	 }





?>