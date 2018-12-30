<?php 
 class EstimateController extends CI_Controller
{
	 
	  public function index()
         {
	  
//                if($this->session->userdata('logged_in'))
//               {
//                $this->load->view('get_estimate');
//               }
//               else
//               {
//                 //If no session, redirect to login page
//                 redirect('LoginController', 'location',301);
//               }
              
                $this->load->view('get_estimate');

        }
        
        
        public function SelectService()
        {
            
            $this->load->view('select_service'); 
        }
	 
       public function addLocationName()
       {
	  
               $location_name=$_POST['location_name'];
             
               
               $form_data = array(
                       'location_name' => $this->input->post('location_name')
                         );

               $this->form_validation->set_rules('location_name','Location Name','trim|required');
             
                 if($this->form_validation->run() == FALSE)
                    {
                     $this->index();
                    }
                    else
                    {
                     $this->load->model('LocIntModel');
                     $this->LocIntModel->add_location_name($form_data);
                    }
          	
	  }
           public function addYear()
       {
	  
               $year=$_POST['year'];
             
               
               $form_data = array(
                       'year' => $this->input->post('year')
                         );

               $this->form_validation->set_rules('year','year','trim|required|numeric|max_length[4]');
             
                 if($this->form_validation->run() == FALSE)
                    {
                     $this->yearList();
                    }
                    else
                    {
                     $this->load->model('LocIntModel');
                     $this->LocIntModel->add_year($form_data);
                    }
          	
	  }
	  public function editLocationName()
         {
		
                  $elocation_name=$_POST['elocation_name'];
                   $loc_name_id=$_POST['loc_name_id'];

                  $this->form_validation->set_rules('elocation_name','Location Name','trim|required');

                     if($this->form_validation->run() == FALSE)
                        {
                         $this->index();
                        }
                        else
                        {
                         $this->load->model('LocIntModel');
                         $this->LocIntModel->edit_location_name($loc_name_id);
                        }
          	
	   }
            public function editYear()
         {
		
                  $eyear=$_POST['eyear'];
                   $year_id=$_POST['year_id'];

                  $this->form_validation->set_rules('eyear','Year','trim|required|numeric|max_length[4]');

                     if($this->form_validation->run() == FALSE)
                        {
                        $this->yearList();
                        }
                        else
                        {
                         $this->load->model('LocIntModel');
                         $this->LocIntModel->edit_year($year_id);
                        }
          	
	   }
           
             function alpha_dash_space($str_in)
           {
            if (! preg_match("/^([-a-z0-9&_.,/- ])+$/i", $str_in)) {
            $this->form_validation->set_message('alpha_dash_space', 'The %s field may only contain alpha-numeric characters, spaces, underscores, and dashes.');
            return FALSE;
            } else {
            return TRUE;
            }
            }
	
          public function viewModel()
         {
                  $this->load->view('model');	 
	 }
        public function locationNameList()
        {
            
                  $this->load->model('LocIntModel');
                  $data['results'] = $this->LocIntModel->show_all_location_namelist();
                  $this->load->view('location',$data);

         }
         
         public function yearList()
         {
            $this->load->model('LocIntModel');
                  $data['results'] = $this->LocIntModel->show_all_yearlist();
                  $this->load->view('add_year',$data);
  
         }
 }

?>
