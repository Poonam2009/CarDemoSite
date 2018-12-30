<?php 
 class LocIntController extends CI_Controller
{
	 
	  public function index()
         {
	  
                if($this->session->userdata('logged_in'))
               {
                    
                $this->load->view('location');
               }
               else
               {
                 //If no session, redirect to login page
                 redirect('LoginController', 'location',301);
               }

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
              public function addIntervals()
       {
	  
               $interval_name=$_POST['interval_name'];
                $more_info=$_POST['more_info'];
             
               
               $form_data = array(
                       'interval_name' => $this->input->post('interval_name')
                         );

               $this->form_validation->set_rules('interval_name','Interval','trim|required');
             
                 if($this->form_validation->run() == FALSE)
                    {
                     $this->intervalList();
                    }
                    else
                    {
                     $this->load->model('LocIntModel');
                     $this->LocIntModel->add_intervals($form_data);
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
         
          public function intervalList()
         {
             $this->load->library('ckeditor');
                   $this->ckeditor->basePath = base_url().'assets/ckeditor_4.5.7_basic/ckeditor/';
                  
                $this->ckeditor->config['language'] = 'it';
                $this->ckeditor->config['width'] = '630px';
                $this->ckeditor->config['height'] = '250px';  
                              $this->load->model('LocIntModel');
                  $data['results'] = $this->LocIntModel->show_all_intervallist();
                  $this->load->view('add_intervals',$data);
  
         }
         
         
          public function EditInterval(){
              
              
               $this->load->library('ckeditor');
                   $this->ckeditor->basePath = base_url().'assets/ckeditor_4.5.7_basic/ckeditor/';
                   //  $this->ckeditor->basePath = base_url().'assets/ckeditor_4.5.7_standard/ckeditor/';
//                     $this->ckeditor->basePath = base_url().'assets/ckeditor_4.5.7_full/ckeditor/';
//$this->ckeditor->config['toolbar'] = array(
//                array( 'Source', '-', 'Bold', 'Italic', 'Underline', '-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo','-','NumberedList','BulletedList' )
//                                                    );
$this->ckeditor->config['language'] = 'it';
$this->ckeditor->config['width'] = '730px';
$this->ckeditor->config['height'] = '300px';  
               $intv_id =$this->uri->segment(3);
              // $data['wshp_ids']="hello";
               $data['message']=$intv_id;
              // $data['id'] = $wshp_id;
//                $this->db->select('*');
//              $this->db->from('wshop_register');
//              $this->db->where('wshop_id',$wshp_id);
//              $query = $this->db->get();
//              $result3 = $query->result();
//              return $result;
		//print_r($_REQUEST);
               // exit;
            if($this->session->userdata('logged_in'))
           {
           $this->load->view('edit_interval',$data);
           }
           else
           {
             //If no session, redirect to login page
             redirect('LoginController', 'location',301);
           }
        
	 }
         
          public function editInterval_details()
         {
		
                   $einterval_name=$_POST['einterval_name'];
                $emore_info=$_POST['emore_info'];
                   $interval_id=$_POST['interval_id'];

                  $this->form_validation->set_rules('einterval_name','Interval Name','trim|required');

                     if($this->form_validation->run() == FALSE)
                        {
                         $this->intervalList();
                        }
                        else
                        {
                         $this->load->model('LocIntModel');
                         $this->LocIntModel->edit_intervals($interval_id);
                        }
          	
	   }
         
 }

?>
