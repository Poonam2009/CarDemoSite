<?php 
 class ProductCategoriesControllers extends CI_Controller{
	 
	 public function index(){
               if($this->session->userdata('logged_in'))
               {
                $this->load->view('ProductCategories');
               }
               else
               {
                 //If no session, redirect to login page
                 redirect('LoginController', 'location',301);
               }
		
	 }
	 
	 public function addProductCategories(){
		
                $cat_name=$_POST['cat_name'];
               
            
           $this->form_validation->set_rules('cat_name','Category Name','trim|required|callback_alpha_dash_space');
             
             if($this->form_validation->run() == FALSE)
                {
                 $this->index();
                }
                else
                {
                 $this->load->model('ProductCategoriesModel');
                 $this->ProductCategoriesModel->add_product_categories($cat_name);
                }
          	
	  }
          
        
	  public function editCategoryName(){
		
            // echo $make=$this->input->post['emake_name'];
              // echo $make_id=$this->input->post['make_name_id'];
               
             $ecat_name=$_POST['ecat_name'];
             $cat_name_id=$_POST['cat_name_id'];
            
        
             
              // $make=$_POST['make_name'];
             
           $this->form_validation->set_rules('ecat_name','Category Name','trim|required|callback_alpha_dash_space');
             
             if($this->form_validation->run() == FALSE)
                {
                 $this->index();
                }
                else
                {
                 $this->load->model('ProductCategoriesModel');
                 $this->ProductCategoriesModel->edit_product_categories($cat_name_id);
                }
          	
	  }
	
         public function viewModel(){
	$this->load->view('model');	 
	 }
         
           function alpha_dash_space($str_in)
         {
            if (! preg_match("/^([-a-z0-9&_ ])+$/i", $str_in)) {
            $this->form_validation->set_message('alpha_dash_space', 'The %s field may only contain alpha-numeric characters, spaces, underscores, and dashes.');
            return FALSE;
            } else {
            return TRUE;
            }
            }
         public function ProductCategoriesList(){
            
              $this->load->model('ProductCategoriesModel');
          $data['results'] = $this->ProductCategoriesModel->show_all_ProductCategoriesList();
        //print_r($data);
        $this->load->view('ProductCategories',$data);
        //$this->load->view('make/index', $data);
       
    }
 }

?>
