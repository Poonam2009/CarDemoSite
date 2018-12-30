<?php 
 class ServiceAdd extends CI_Controller
{
	 
	  public function index()
         {
	  
                if($this->session->userdata('logged_in'))
               {
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

                $this->load->view('add_service');
               }
               else
               {
                 //If no session, redirect to login page
                 redirect('LoginController', 'location',301);
               }

        }
	 
       public function addService()
       {
		
              
           //print_r($_POST);
           //exit;
           
           $year=$_POST['year'];
               $make=$_POST['make'];
               $model =$_POST['model'];
               $varients =$_POST['varient'];
               
               $form_data = array(
                       'service_name' => $this->input->post('service_name'),                       
                         );

               $this->form_validation->set_rules('year','year','trim|required');
               $this->form_validation->set_rules('make','make','trim|required');
               $this->form_validation->set_rules('model','model','trim|required');
               $this->form_validation->set_rules('varient','varient','trim|required');

                 if($this->form_validation->run() == FALSE)
                    {
                     $this->index();
                    }
                    else
                    {
                     $this->load->model('ServiceAddModel');
                     $this->ServiceAddModel->add_services($form_data);
                    }
          	
	  }
	  public function editServiceName()
         {
		
                   $elabour_cost=$_POST['elabour_cost'];
                   $service_name_id=$_POST['service_name_id'];

                  $this->form_validation->set_rules('elabour_cost','Elabour_cost','trim|required');

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
	 public function edit(){
             
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
               $aservice_id =$this->uri->segment(3);
              // $data['wshp_ids']="hello";
               $data['message']=$aservice_id;
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
          // $this->load->view('show_wshpdetails',$data);
            $this->load->view('edit_service_details',$data);
           }
           else
           {
             //If no session, redirect to login page
             redirect('LoginController', 'location',301);
           }
        
	 }
          public function viewModel()
         {
                  $this->load->view('model');	 
	 }
        public function servicesList()
        {
            
                  $this->load->model('ServiceAddModel');
                  $data['results'] = $this->ServiceAddModel->show_all_services_list();
                  $this->load->view('add_service',$data);

         }
 }

?>
