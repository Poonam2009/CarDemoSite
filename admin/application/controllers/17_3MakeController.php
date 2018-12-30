<?php 
 class MakeController extends CI_Controller{
	 
	 public function index(){
		
            if($this->session->userdata('logged_in'))
           {
           $this->load->view('make');
           }
           else
           {
             //If no session, redirect to login page
             redirect('LoginController', 'location',301);
           }
        
	 }
	 
	 public function addMake(){
		
             //echo $make=$this->input->post['make_name'];
             
               $make=$_POST['make_name'];
             
           $this->form_validation->set_rules('make_name','Make_name','trim|required|is_unique[make.make_name]');
           
         
             if($this->form_validation->run() == FALSE)
                {
                 $this->index();
                }
                else
                {
                 $this->load->model('MakeModel');
                 $this->MakeModel->add_make($make);
                }
          	
	  }
	  public function editMake(){
		
            // echo $make=$this->input->post['emake_name'];
              // echo $make_id=$this->input->post['make_name_id'];
               
               $make=$_POST['emake_name'];
                $make_id=$_POST['make_name_id'];
              // exit;
             
              // $make=$_POST['make_name'];
             
           $this->form_validation->set_rules('emake_name','EMake_name','trim|required');
             
             if($this->form_validation->run() == FALSE)
                {
                 $this->index();
                }
                else
                {
                 $this->load->model('MakeModel');
                 $this->MakeModel->edit_make($make_id);
                }
          	
	  }
	
         public function viewMake(){
	$this->load->view('make');	 
	 }
         
         public function makeList(){
            
              $this->load->model('MakeModel');
          $data['results'] = $this->MakeModel->show_all_makelist();
        //print_r($data);
        $this->load->view('make',$data);
        //$this->load->view('make/index', $data);
       
    }
 }

?>