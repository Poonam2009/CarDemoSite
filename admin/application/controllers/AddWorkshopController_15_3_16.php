<?php 
 class AddWorkshopController extends CI_Controller{
	 
	 public function index(){
		
            if($this->session->userdata('logged_in'))
           {
           $this->load->view('manage_workshop');
           }
           else
           {
             //If no session, redirect to login page
             redirect('LoginController', 'location',301);
           }
        
	 }
	 
	 public function addWorkshop(){
		
             //echo $make=$this->input->post['make_name'];
             
               $wshop_name=$_POST['wshop_name'];
             
           $this->form_validation->set_rules('wshop_name','Workshop Name','trim|required');
             
             if($this->form_validation->run() == FALSE)
                {
                 $this->index();
                }
                else
                {
                 $this->load->model('AddWorkshopModel');
                 $this->AddWorkshopModel->add_workshop($wshop_name);
                }
          	
	  }
	  public function editWorkshop(){
		
            // echo $make=$this->input->post['emake_name'];
              // echo $make_id=$this->input->post['make_name_id'];
               
                $wshop_name=$_POST['ewshop_name'];
                $ewshop_name_id=$_POST['wshop_name_id'];
              // exit;
             
              // $make=$_POST['make_name'];
             
           $this->form_validation->set_rules('ewshop_name','Works Shop','trim|required');
             
             if($this->form_validation->run() == FALSE)
                {
                 $this->index();
                }
                else
                {
                 $this->load->model('AddWorkshopModel');
                 $this->AddWorkshopModel->edit_workshop($ewshop_name_id);
                }
          	
	  }
	
         public function viewMake(){
	$this->load->view('make');	 
	 }
         
         public function workshopList(){
            
              $this->load->model('AddWorkshopModel');
          $data['results'] = $this->AddWorkshopModel->show_all_workshoplist();
        //print_r($data);
        $this->load->view('manage_workshop',$data);
        //$this->load->view('make/index', $data);
       
    }
 }

?>