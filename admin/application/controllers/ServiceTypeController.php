<?php 
 class ServiceTypeController extends CI_Controller
{
	 
	 public function index()
         {
		  
                if($this->session->userdata('logged_in'))
               {
                $this->load->view('servicetype');
               }
               else
               {
                 //If no session, redirect to login page
                 redirect('LoginController', 'location',301);
               }
        
	 }
	 
	 public function addServiceType()
          {
	
                $service_type=$_POST['service_type'];

               $this->form_validation->set_rules('service_type','Service Type','trim|required');

                 if($this->form_validation->run() == FALSE)
                    {
                     $this->index();
                    }
                    else
                    {
                     $this->load->model('ServiceTypeModel');
                     $this->ServiceTypeModel->add_service_type($service_type);
                    }
          	
	   }
	  public function editServiceType()
          {
		
               
               $eservice_type=$_POST['eservice_type'];
               $service_type_id=$_POST['service_type_id'];

               $this->form_validation->set_rules('eservice_type','EService_type','trim|required');

                 if($this->form_validation->run() == FALSE)
                    {
                     $this->index();
                    }
                    else
                    {
                     $this->load->model('ServiceTypeModel');
                     $this->ServiceTypeModel->edit_service_type($service_type_id);
                    }
          	
	  }
	
         public function viewModel()
         {
	   $this->load->view('model');	 
	 }
         
         public function serviceTypeList()
         {
            
              $this->load->model('ServiceTypeModel');
              $data['results'] = $this->ServiceTypeModel->show_all_service_typelist();

            $this->load->view('servicetype',$data);
      
       
        }
 }

?>
