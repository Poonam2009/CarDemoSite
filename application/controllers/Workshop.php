<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Workshop extends CI_Controller {

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
           /*     $this->load->view('header.php');*/
		$this->load->view('index.php');
	}
        public function workshopRegister()
        {
//		$this->form_validation->set_rules('username', 'Username','trim|required');
//		$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_verifyUser');
//
//		if ($this->form_validation->run()== FALSE)
//		{
//			$this->load->view('login');
//		}
//		else
//		{
//			redirect('HomeController/index');
//		}
	
            
            $this->load->view('workshop-register.php');
	 }
         
        
         public function addWorkshop()
        {
		
             
            // print_r($_POST);
             //exit;
             
             $business_type     = $this->input->post('business_type');
             $mob_mechanic      = $this->input->post('mob_mechanic');
             $business_name     = $this->input->post('business_name');
             $tin_no            = $this->input->post('tin_no');
             $servicetex        = $this->input->post('servicetex');
             $address           = $this->input->post('address');
             $owner             = $this->input->post('owner');
             $mobile_no         = $this->input->post('mobile_no');
             $website_name      = $this->input->post('website_name');
             $email             = $this->input->post('email');
             $selected_all      = $this->input->post('selected_all');
             $selected_makes    = $this->input->post('selected_makes');
             $make              = $this->input->post('make');
              $service_type              = $this->input->post('service_type');
               $facility_type              = $this->input->post('facility_type');
                $monday              = $this->input->post('monday');
                 $mon_start              = $this->input->post('mon_start');
                  $mon_end              = $this->input->post('mon_end');
                
                  $tuesday              = $this->input->post('tuesday');
                 $tues_start              = $this->input->post('tues_start');
                  $tues_end              = $this->input->post('tues_end');
                  $wednesday              = $this->input->post('wednesday');
                 $wed_start              = $this->input->post('wed_start');
                  $wed_end              = $this->input->post('wed_end');
                  $thrusday              = $this->input->post('thrusday');
                 $thrs_start              = $this->input->post('thrs_start');
                  $thrs_end              = $this->input->post('thrs_end');
                  $friday              = $this->input->post('friday');
                 $fri_start              = $this->input->post('fri_start');
                  $fri_end              = $this->input->post('fri_end');
                  $staurday              = $this->input->post('staurday');
                 $str_start              = $this->input->post('str_start');
                  $str_end              = $this->input->post('str_end');
                  $sunday              = $this->input->post('sunday');
                 $sun_start              = $this->input->post('sun_start');
                  $sun_end              = $this->input->post('sun_end');
                  
                   $hour_labour_rate              = $this->input->post('hour_labour_rate');
                    $service_fee              = $this->input->post('service_fee');
                     $dis_genpart              = $this->input->post('dis_genpart');
                      $dis_altpart              = $this->input->post('dis_altpart');
                   
             
           
                
               $this->form_validation->set_rules('business_name', 'Business Name','trim|required');
              $this->form_validation->set_rules('email', 'Email','trim|required|valid_email|callback_isEmailExist');
             $this->form_validation->set_rules('mobile_no', 'Mobile No','trim|required|numeric');
//               $this->form_validation->set_rules('confirm_pwd', 'confirm Password','trim|required');
		

		if ($this->form_validation->run()== FALSE)
		{
			$this->load->view('workshop-register.php');
		}
		else
		{
		 $this->load->model('FrontWorkshopModel');
                 $this->FrontWorkshopModel->add_workshop();
		}
	 }
         
         
             public function isEmailExist($email) 
              {
                $this->load->library('form_validation');
                $this->load->model('FrontWorkshopModel');
                $is_exist = $this->FrontWorkshopModel->isEmailExist($email);

                if ($is_exist) {
                    $this->form_validation->set_message(
                        'isEmailExist', 'Email address is already exist.'
                    );    
                    return false;
                } else {
                    return true;
                }
}
         
         public function Confirm()
         {
          
//              echo "<script>"
//             . "alert('Thanks For Your Registeration ,Our Manager Will Contact You Soon');"
//                      . "</script>";
   // redirect('admin/ahm/panel');
            //  $this->load->helper('url');
		//$this->load->view('index.php');
               // redirect('Front/index');
              
              //echo "<script>javascript:alert('".$data['record']."'); window.location = '".$uri."'</script>";
              
              // Display success message
//$this->session->set_flashdata('flashSuccess', 'Thanks For Your Registeration ,Our Manager Will Contact You Soon.');
//redirect('/dashboard');
             // $this->load->view('index.php');
         //redirect(base_url());
         
         
         echo "<script>alert('Thanks For Your Registeration ,Our Manager Will Contact You Soon.') ;</script>";
        // redirect('Front',refresh);
          redirect(base_url());
          
          
          //display success message
       // $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Employee details added to Database!!!</div>');
      
      
         }
	
}
