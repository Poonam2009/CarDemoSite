<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller 
{

         public function index()
         {

                if($this->session->userdata('logged_in'))
               {
               $this->load->view('customerlist.php');
               }
               else
               {
                 //If no session, redirect to login page
                 redirect('LoginController', 'location',301);
               }

         }
	
        public function UpdateStatus()
                
        {
           
                 // Turn on output buffering  
               ob_start();  
               //Get the ipconfig details using system commond  
               system('ipconfig /all');  
               // Capture the output into a variable  
               $mycomsys=ob_get_contents();  
               // Clean (erase) the output buffer  
               ob_clean();  
               $find_mac = "Physical"; //find the "Physical" & Find the position of Physical text  
               $pmac = strpos($mycomsys, $find_mac);  
               // Get Physical Address  
               $macaddress=substr($mycomsys,($pmac+36),17);  
               //Display Mac Address  
              // echo $macaddress; 

                    date_default_timezone_set('Asia/Kolkata');   
                    //$time_now=mktime(date('h')+5,date('i')+30,date('s'));
                    $date                  = date('Y-m-d H:i:s');
                    $macaddress            =substr($mycomsys,($pmac+36),17);
                   // $ip_address            =    $_SERVER['REMOTE_ADDR'];
                    //$created_by            =    $_SESSION['main']['user_mail'];
                    $created_on			   =	$date;

                     $date = date('Y-m-d h:i:s');
                     $created_by    = $this->session->userdata['username'];

                       $data=array(
                  'status' => $_POST['status'],
                   'modified_on' => $date,
                  'modified_by' => $created_by,
                     'ip_address' => $this->input->ip_address(),
                   'mac_address' => $macaddress
                  );
               $customer_id=$_POST['cust_register_id'];
           $this->db->where('cust_register_id',$customer_id);
        $this->db->update('customer_register',$data);

         redirect('Customer/index','location',301); 

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
                
               $this->form_validation->set_rules('username', 'Username','trim|required|max_length[12]');
               $this->form_validation->set_rules('email', 'Email','trim|required|valid_email|callback_isEmailExist');
               $this->form_validation->set_rules('password', 'password','trim|required|matches[conf_password]|max_length[12]');
               $this->form_validation->set_rules('confirm_pwd', 'confirm Password','trim|required|max_length[12]');
		

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
        public function isEmailExist($email) 
       {
            $this->load->library('form_validation');
            $this->load->model('CustomerModel');
            $is_exist = $this->CustomerModel->isEmailExist($email);

            if ($is_exist) 
              {
                $this->form_validation->set_message(
                    'isEmailExist', 'Email address is already exist.'
                );    
                return false;
             } 
            else 
             {
                return true;
             }
         }
         
         public function thanks()
         {
             echo "Thanks For Your Registeration your login credential will be active soon";
         }
         
	
}

