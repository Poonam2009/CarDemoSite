<?php 
 class MnfMappModelController extends CI_Controller{
	 
	 public function index(){
		$this->load->view('makemappmodel');
                
                 //$this->load->model('MakeModel');
  
        //@$data['results'] = $this->MakeModel->show_all_makelist();
       // print_r($data);
       // $this->load->view('make',$data);
       // $this->load->view('make', $data);
        
         //$this->load->model("users_model"); // we load the model that we saved in the application/models folder, so that the controller will know where to get the methods from
    //$data["results"]=$this->MakeModel->show_all_makelist(); // we will load the result of the query inside the $data array having the key 'users'
 
   
    //$this->load->view('make',$data);
        
        
        
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
            $this->form_validation->set_rules('model','Model','trim|required');
             
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
        //print_r($data);
        $this->load->view('makemappmodel',$data);
        //$this->load->view('make/index', $data);
       
    }
 }

?>
