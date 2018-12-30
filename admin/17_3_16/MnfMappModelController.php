<?php 
 class MnfMappModelController extends CI_Controller{
	 
	 public function index()
	 {
		
	 	if($this->session->userdata('logged_in'))
       {
     	$this->load->view('makemappmodel');
       }
       else
       {
         //If no session, redirect to login page
         redirect('LoginController', 'location',301);
       }
        
	 }
	 
	 
	 public function makeMappModel(){
		
             //echo $make=$this->input->post['make_name'];
             
             $make=$_POST['make'];
             
               $model=$_POST['model'];
			   
			   
			   
               
         $data=array(
         'make_id' => $make,
         'model_id' => $model
       
      );
             
           $this->form_validation->set_rules('make','Make','trim|required');
            $this->form_validation->set_rules('model','Model','trim|required|callback_dulicate_entry');
             
             if($this->form_validation->run() == FALSE)
                {
                 $this->index();
                }
                else
                {
                 $this->load->model('MnfMappMakeModel');
                 $this->MnfMappMakeModel->map_make_model($data);
                }
          	
	  }
	  
	  function dulicate_entry($model)
     {
		  $make=$_POST['make'];
     // $this->MnfMappMakeModel->duplicate_entry($model,$make);
	  
	   $is_exist = $this->MnfMappMakeModel->duplicate_entry($model,$make);
	  
            if ($is_exist) 
              {
                $this->form_validation->set_message(
                    'duplicate_entry', 'Make Model Mapping is already exist.'
                );    
                return false;
             } 
            else 
             {
                return true;
             }
	  
	  
	  
     }
	  public function editModel(){
		
            // echo $make=$this->input->post['emake_name'];
              // echo $make_id=$this->input->post['make_name_id'];
               
               $model=$_POST['emodel_name'];
                $model_id=$_POST['model_name_id'];
              // exit;
             
              // $make=$_POST['make_name'];
             
           $this->form_validation->set_rules('emodel_name','EModel_name','trim|required');
             
             if($this->form_validation->run() == FALSE)
                {
                 $this->index();
                }
                else
                {
                 $this->load->model('ModelNameModel');
                 $this->ModelNameModel->edit_model($model_id);
                }
          	
	  }
	
         public function viewModel(){
	      $this->load->view('model');	 
	       }
         
         public function makemodelmapList(){
            
              $this->load->model('MnfMappMakeModel');
          $data['results'] = $this->MnfMappMakeModel->show_all_makemodelmaplist();
            $this->load->view('makemappmodel',$data);
        //$this->load->view('make/index', $data);
       
    }
 }

?>
