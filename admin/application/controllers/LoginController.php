<?php 
 class LoginController extends CI_Controller{
	 
	 public function index(){
             
		$this->load->view('login');
                
	 }
	 
	 public function checkLogin(){
		$this->form_validation->set_rules('username', 'Username','trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_verifyUser');

		if ($this->form_validation->run()== FALSE)
		{
			$this->load->view('login');
		}
		else
		{
			redirect('HomeController/index');
			}
		
	 }
	 
	 public function verifyUser(){
		//$this->load->library('session');

		 $name=$_POST['username'];
		 $pass=$_POST['password'];
		 $this->load->model('LoginModel');
//		 if($this->LoginModel->login($name,$pass))
//		 return true;
//		 else
//		 {
//			 $this->form_validation->set_message('verifyUser','incorrect email or password');
//			return false;
//		 }
                         
                         
                 $result = $this->LoginModel->login($name,$pass);
                // print_r($result);
                 //echo $id;
                // echo "id-";echo $result['id'];
                 //echo "mail-";echo $result['user_email'];
                 
                 
	  $sess_array = array();
	   if($result)
	   {
	     
           $this->db->select('*');
	   $this->db->from('user_login');
	   $this->db->where('user_name',$name);
	   $this->db->where('user_password',$pass);
           $query=$this->db->get();
           $result_details = $query->result();
           
         //  $id=$result['id'];
         //  $email=$result['user_email'];
           
	   
	  // print_r($result_details);
          // exit;



//$sess_array = array();
               
              /* $newdata = array(
                   'username' => $this->input->post('username'),
   'password' => $this->input->post('password'),
   
        //'username'  => 'johndoe',
        //'email'     => 'johndoe@some-site.com',
        'logged_in' => TRUE
);
               $this->session->set_userdata($newdata);
               
                           print_r($this->session->all_userdata());
                           exit;*/

	     foreach($result_details as $row)
	     {
	       $sess_array = array(
		 'id' => $row->	id,
		 'username' => $row->user_name,
                 'email' => $row->user_email,
                  'logged_in' =>true
                       
	       );
              // echo $row->user_email;
	       $this->session->set_userdata($sess_array);
       
	     }
            // print_r($this->session->all_userdata($sess_array));
             //print_r('logged_in');
//            echo $data['username'] = $this->session->userdata('username');
//               echo $c=$this->session->all_userdata();
//               print_r($c);
            // exit;
          
	     return TRUE;
	   }
	   else
	   {
	     $this->form_validation->set_message('verifyUser', '<span>Invalid username or password</span>');
	     return false;
	   } 
           
//            print_r($this->session->all_userdata());
//            echo $data['username'] = $this->session->userdata('username');
//               echo $c=$this->session->all_userdata();
//               print_r($c);
//               exit;
	 }
         
         
         
         
          public function logout_user(){
       $this->session->unset_userdata('logged_in');
       session_destroy();
       redirect('LoginController','location',301); exit;
    }
 }

?>