<?php 
 class ModelController extends CI_Controller{
	 
	 public function index(){
		$this->load->view('model');
                
                 //$this->load->model('MakeModel');
  
        //@$data['results'] = $this->MakeModel->show_all_makelist();
       // print_r($data);
       // $this->load->view('make',$data);
       // $this->load->view('make', $data);
        
         //$this->load->model("users_model"); // we load the model that we saved in the application/models folder, so that the controller will know where to get the methods from
    //$data["results"]=$this->MakeModel->show_all_makelist(); // we will load the result of the query inside the $data array having the key 'users'
 
   
    //$this->load->view('make',$data);
        
        
        
	 }
	 
	 public function addModel(){
		
             //echo $make=$this->input->post['make_name'];
             
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
