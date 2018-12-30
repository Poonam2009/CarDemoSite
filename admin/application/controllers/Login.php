<?php
defined('BASEPATH') OR exit('No direct script access allowed');




class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	function __construct()
	{
		parent::__construct();
		
		if ( $this->input->post( 'remember' ) ) // set sess_expire_on_close to 0 or FALSE when remember me is checked.
		$this->config->set_item('sess_expire_on_close', '0'); // do change session config
	    
		//$this->load->library('session');
		$this->load->model('login_model','',TRUE);
	}
 
	public function index()
	{
		if($this->session->userdata('logged_in'))
		{
		  //$session_data = $this->session->userdata('logged_in');
		  //$data['username'] = $session_data['username'];
		  //$this->load->view('home_view', $data);
		  redirect('registation', 'location',301);
		}else{
		  $this->load->view('login');
		}
	}
	
	public function validateCredentials(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('login');
		}
		else
		{
			//Go to private area
			redirect('registation', 'location',301);
		}
	}
	
	public function check_database($password){
	   //Field validation succeeded.  Validate against database
	  $username = $this->input->post('username');
	
	   //query the database
	   $result = $this->login_model->check_credentials($username,$password);
	 
	   if($result)
	   {
	     $sess_array = array();
	     foreach($result as $row)
	     {
	       $sess_array = array(
		 //'id' => $row->N_UId,
		 //'username' => $row->S_FName
		 'id' => $row->id,
		 'username' => $row->username
	       );
	       $this->session->set_userdata('logged_in', $sess_array);
	     }
	     return TRUE;
	   }
	   else
	   {
	     $this->form_validation->set_message('check_database', '<span>Invalid username or password</span>');
	     return false;
	   }
	}
	
	function forgot_password(){
		$to = $this->input->post('email');
		$random_password = substr( "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ" ,mt_rand( 0 ,50 ) ,1 ) .substr( md5( time() ), 6);
		
		$from = "info@calvistechnologies.com";
		$subject = "Forget Password Recovery";
		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: ' .$from. "\r\n";
		$message = "Your new password is :".$random_password;
		
		mail($to, $subject, $message, $headers);

	}
}


/*class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 *
	 
	 public function __construct() {
      parent::__construct();

       // Load form helper library
       $this->load->helper('form');

      // Load form validation library
      $this->load->library('form_validation');

     // Load session library
     $this->load->library('session');
	 

    // Load database
    $this->load->model('Login_Model');
    }
	public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->view('login');
	}
	
	
	// Check for user login process
   public function user_login_process() {
    
	echo $username=$this->input->post('username');
	 echo   $password=$this->input->post('password');
	 $data = array(
   'username' => $this->input->post('username'),
   'password' => $this->input->post('password')
   );
	 
	 
	  $query = $this->Login_Model->login($data);


 // $this->form_validation->set_rules('userName', 'Username', 'required|callback_validateUser[' . $query->num_rows() . ']');
 $this->form_validation->set_rules('userName', 'Username', 'required|');
  $this->form_validation->set_rules('password', 'Password', 'required');

  $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
  $this->form_validation->set_message('required', 'Enter %s');

  if ($this->form_validation->run() == FALSE) {
   $this->load->view('login');
  }else{
   if($query){
    $query = $query->result();
    $user = array(
     'id' => $query[0]->id,
     'user_name' => $query[0]->user_name,
     'user_email' => $query[0]->user_email,
     'user_password' => $query[0]->user_password
    );

    $this->session->set_userdata($user);
   // redirect('index.php/successpage');
	  redirect('registation');
	
   }
  }
   
	
   /* $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

    if ($this->form_validation->run() == FALSE) 
	{
		//echo "after false";
    if(isset($this->session->userdata['logged_in'])){
		echo "after logged_in";
     $this->load->view('registation');
    }else{
    $this->load->view('login');
    }
   } else {
   $data = array(
   'username' => $this->input->post('username'),
   'password' => $this->input->post('password')
   );
   $result = $this->Login_Model->login($data);
  if ($result == TRUE) {

   $username = $this->input->post('username');
   $result = $this->Login_Model->read_user_information($username);
   if ($result != false) {
   $session_data = array(
  'username' => $result[0]->user_name,
  'email' => $result[0]->user_email,
   );
  // Add user data in session
   $this->session->set_userdata('logged_in', $session_data);
   $this->load->view('registation');
  }
  } else {
  $data = array(
  'error_message' => 'Invalid Username or Password'
  ); 
   $this->load->view('login', $data);
  }
  }*
  
  
  
 }
}*/
