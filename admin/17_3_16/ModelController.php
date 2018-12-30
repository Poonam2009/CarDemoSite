<?php 
 class ModelController extends CI_Controller{
	 
	 public function index()
	 {
		 
		if($this->session->userdata('logged_in'))
       {
      $this->load->view('model');
       }
       else
       {
         //If no session, redirect to login page
         redirect('LoginController', 'location',301);
       }
	
        
        
	 }
	 
	 public function addModel(){
		
            
               $model=$_POST['model_name'];
             
           $this->form_validation->set_rules('model_name','Model_name','trim|required');
             
             if($this->form_validation->run() == FALSE)
                {
                 $this->index();
                }
                else
                {
                 $this->load->model('ModelNameModel');
                 $this->ModelNameModel->add_model($model);
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
         
         public function modelList(){
            
              $this->load->model('ModelNameModel');
          $data['results'] = $this->ModelNameModel->show_all_modellist();
        //print_r($data);
        $this->load->view('model',$data);
        //$this->load->view('make/index', $data);
       
    }
 }

?>
