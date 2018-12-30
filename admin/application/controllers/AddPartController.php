<?php 
 class AddPartController extends CI_Controller{
	 
	 public function index(){
		 
		 	if($this->session->userdata('logged_in'))
       {
     	$this->load->view('AddPart');
       }
       else
       {
         //If no session, redirect to login page
         redirect('LoginController', 'location',301);
       }
	
                
                 //$this->load->model('MakeModel');
  
        //@$data['results'] = $this->MakeModel->show_all_makelist();
       // print_r($data);
       // $this->load->view('make',$data);
       // $this->load->view('make', $data);
        
         //$this->load->model("users_model"); // we load the model that we saved in the application/models folder, so that the controller will know where to get the methods from
    //$data["results"]=$this->MakeModel->show_all_makelist(); // we will load the result of the query inside the $data array having the key 'users'
 
   
    //$this->load->view('make',$data);
        
        
        
	 }
	 
	 public function AddPart(){
		
             //echo $make=$this->input->post['make_name'];
             
               $addpart=$_POST['addpart'];
             
           $this->form_validation->set_rules('addpart','Addpart','trim|required');
             
             if($this->form_validation->run() == FALSE)
                {
                 $this->index();
                }
                else
                {
                 $this->load->model('AddPartModel');
                 $this->AddPartModel->add_part($addpart);
                }
          	
	  }
	  public function editpartname(){
		
            // echo $make=$this->input->post['emake_name'];
              // echo $make_id=$this->input->post['make_name_id'];
               
               $eaddpart=$_POST['eaddpart'];
                $partname_id=$_POST['partname_id'];
              // exit;
             
              // $make=$_POST['make_name'];
             
           $this->form_validation->set_rules('eaddpart','Eaddpart','trim|required');
             
             if($this->form_validation->run() == FALSE)
                {
                 $this->index();
                }
                else
                {
                 $this->load->model('AddPartModel');
                 $this->AddPartModel->edit_partname($partname_id);
                }
          	
	  }
	
         public function viewModel(){
	$this->load->view('model');	 
	 }
         
         public function AddPartList(){
            
              $this->load->model('AddPartModel');
          $data['results'] = $this->AddPartModel->show_all_add_partlist();
        //print_r($data);
        $this->load->view('AddPart',$data);
        //$this->load->view('make/index', $data);
       
    }
 }

?>
