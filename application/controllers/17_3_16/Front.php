<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

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
	 */
	public function index()
	{
            $this->load->helper('url');
		$this->load->view('index.php');
	}
        public function registerUser()
        {

           
            $this->load->view('user-register.php');
           
	 }
         
           public function addUser()
        {
	       $username=$_POST['username'];
               $email=$_POST['email'];
                 $password=$_POST['password'];
                  $confirm_pwd=$_POST['confirm_pwd'];
                
               $this->form_validation->set_rules('username', 'Username','trim|required');
               $this->form_validation->set_rules('email', 'Email','trim|required|valid_email|callback_isEmailExist');
               $this->form_validation->set_rules('password', 'password','trim|required|matches[confirm_pwd]');
               $this->form_validation->set_rules('confirm_pwd', 'confirm Password','trim|required');
		

		if ($this->form_validation->run()== FALSE)
		{
			$this->load->view('user-register.php');
		}
		else
		{
		 $this->load->model('CustomerModel');
                 $this->CustomerModel->add_customer();
		}
	
	 }
         public function isEmailExist($email) {
    $this->load->library('form_validation');
    $this->load->model('CustomerModel');
    $is_exist = $this->CustomerModel->isEmailExist($email);

    if ($is_exist) {
        $this->form_validation->set_message(
            'isEmailExist', 'Email address is already exist.'
        );    
        return false;
    } else {
        return true;
    }
}
         
         public function thanks()
         {
             
			  echo "<script>alert('Thanks For Your Registeration') ;</script>";
        // redirect('Front',refresh);
          redirect(base_url());
			// echo "We will show you Customer Login Page very soon!";
         }
         
	
}
