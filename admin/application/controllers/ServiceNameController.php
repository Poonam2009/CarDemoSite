<?php 
 class ServiceNameController extends CI_Controller
{
	 
	  public function index()
         {
	  
                if($this->session->userdata('logged_in'))
               {
                $this->load->view('servicename');
               }
               else
               {
                 //If no session, redirect to login page
                 redirect('LoginController', 'location',301);
               }

        }
	 
       public function addServiceName()
       {
		
               $service_type=$_POST['service_type'];
               $service_name=$_POST['service_name'];
               $labour_cost =$_POST['labour_cost'];
               
               $form_data = array('service_type' => $this->input->post('service_type'),
                       'service_name' => $this->input->post('service_name'),
                       'labour_cost' => $this->input->post('labour_cost')
                         );

               $this->form_validation->set_rules('service_type','Service_type','trim|required');
               $this->form_validation->set_rules('service_name','Service_name','trim|required');
               $this->form_validation->set_rules('labour_cost','Labour_cost','trim|required');

                 if($this->form_validation->run() == FALSE)
                    {
                     $this->index();
                    }
                    else
                    {
                     $this->load->model('ServiceNameModel');
                     $this->ServiceNameModel->add_service_name($form_data);
                    }
          	
	  }
	  public function editServiceName()
         {
		
                   $elabour_cost=$_POST['elabour_cost'];
                   $service_name_id=$_POST['service_name_id'];

                  $this->form_validation->set_rules('elabour_cost','Elabour_cost','trim|required|is_natural');

                     if($this->form_validation->run() == FALSE)
                        {
                         $this->index();
                        }
                        else
                        {
                         $this->load->model('ServiceNameModel');
                         $this->ServiceNameModel->edit_service_name($service_name_id);
                        }
          	
	   }
	
          public function viewModel()
         {
                  $this->load->view('model');	 
	 }
        public function serviceNameList()
        {
            
                  $this->load->model('ServiceNameModel');
                  $data['results'] = $this->ServiceNameModel->show_all_service_namelist();
                  $this->load->view('servicename',$data);

         }
 }

?>
