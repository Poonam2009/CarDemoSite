<?php 
 class HomeController extends CI_Controller{
	 
      public function index(){
	
      if($this->session->userdata('logged_in'))
       {
       $this->load->view('dashboard');
       }
       else
       {
         //If no session, redirect to login page
         redirect('LoginController', 'location',301);
       }
		
	 }
	 
 }

?>