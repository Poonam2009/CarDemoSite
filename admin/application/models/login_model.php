<?php


Class Login_model extends CI_Model
{
   function check_credentials($username,$password)
   {
      $this->db->select('id,user_name,user_password,user_email');
      $this->db->from('user_login');
      $this->db->where('user_name', $username);
      $this->db->where('user_password', $password);
      $this->db->limit(1);
      $query = $this->db-> get();
    //  echo $this->db->last_query(); die;

      if($query->mysqli_num_rows() == 1)
      {
        return $query->result();
      }
      else
      {
        return false;
      }
   }
}

/*Class Login_Model extends CI_Model {


// Read data using username and password
public function login($data) {
//echo "kjkj";
$condition = "user_name =" . "'" . $data['username'] . "' AND " . "user_password =" . "'" . $data['password'] . "'";
$this->db->select('*');
$this->db->from('user_login');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

//print_r($query);

if ($query->num_rows() == 1) {
return true;
} else {
return false;
}
}

// Read data from database to show data in admin page
public function read_user_information($username) {

$condition = "user_name =" . "'" . $username . "'";
$this->db->select('*');
$this->db->from('user_login');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {
return $query->result();
} else {
return false;
}
}


}*/

?>