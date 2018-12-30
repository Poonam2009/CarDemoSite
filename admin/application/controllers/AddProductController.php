<?php 
 class AddProductController extends CI_Controller{
	 
	 public function index(){
		$this->load->view('addproduct');
	 }
	 
	 public function addProduct(){
               @$product=$_POST['prod_name'];
             
           $this->form_validation->set_rules('prod_name','Prod_name','trim|required');
             
             if($this->form_validation->run() == FALSE)
                {
                 $this->index();
                }
                else
                {
                 $this->load->model('AddProductModel');
                 $this->AddProductModel->add_product($product);
                }
          	
	  }
	  public function editProduct(){
	
                $eprod_id=$_POST['eprod_id'];
                $eprod_name=$_POST['eprod_name'];
           $this->form_validation->set_rules('eprod_name','Eprod_name','trim|required');
             
             if($this->form_validation->run() == FALSE)
                {
                 $this->index();
                }
                else
                {
                 $this->load->model('AddProductModel');
                 $this->AddProductModel->edit_product($eprod_id);
                }
          	
	  }
	
         public function viewModel(){
	$this->load->view('model');	 
	 }
         
         public function AddProductList(){
            
              $this->load->model('AddProductModel');
          $data['results'] = $this->AddProductModel->show_all_ProductList();
        //print_r($data);
        $this->load->view('addproduct',$data);
        //$this->load->view('make/index', $data);
       
    }
 }

?>
