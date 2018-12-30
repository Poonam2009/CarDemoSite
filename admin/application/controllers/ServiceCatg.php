<?php 
 class ServiceCatg extends CI_Controller
{
	 
	  public function index()
         {
	  
                if($this->session->userdata('logged_in'))
               {
                $this->load->view('service_category');
               }
               else
               {
                 //If no session, redirect to login page
                 redirect('LoginController', 'location',301);
               }

        }
        
        public function addServiceCatg()
                
        {
            
            
             $service_catg=$_POST['service_catg'];
               $service_pcatg=$_POST['service_pcatg'];
               
               
                 $make = (isset($_POST['make']) ? $_POST['make'] :0);
                   $make_list = implode("|", $make);
              
              // $labour_cost =$_POST['labour_cost'];
               //$part_name =$_POST['part_name'];
               
               $form_data = array('service_catg' => $this->input->post('service_catg'),
                       'service_pcatg' => $this->input->post('service_pcatg'),
                        'make'=>$make_list
                         );

               $this->form_validation->set_rules('service_catg','Service type','trim|required');
               $this->form_validation->set_rules('service_pcatg','Service name','trim|required');
              

                 if($this->form_validation->run() == FALSE)
                    {
                     $this->index();
                    }
                    else
                    {
                     $this->load->model('ServiceCatgModel');
                     $this->ServiceCatgModel->add_service_catg($form_data);
                    }
            
            
        }
	 
       public function addServiceName()
       {
		
               $service_type=$_POST['service_type'];
               $service_name=$_POST['service_name'];
               $labour_cost =$_POST['labour_cost'];
               $part_name =$_POST['part_name'];
               
               $form_data = array('service_type' => $this->input->post('service_type'),
                       'service_name' => $this->input->post('service_name'),
                       'labour_cost' => $this->input->post('labour_cost'),
                       'part_name' => $this->input->post('part_name')
                         );

               $this->form_validation->set_rules('service_type','Service type','trim|required');
               $this->form_validation->set_rules('service_name','Service name','trim|required');
               $this->form_validation->set_rules('labour_cost','Labour cost','trim|required');
               $this->form_validation->set_rules('part_name','Part Name','trim|required');

                 if($this->form_validation->run() == FALSE)
                    {
                     $this->index();
                    }
                    else
                    {
                     $this->load->model('ServiceNameModel');
                     $this->ServiceNameModel->add_service_name($form_data);
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
	
          public function viewModel()
         {
                  $this->load->view('model');	 
	 }
        public function serviceNameList()
        {
            
                  $this->load->model('ServiceNameModel');
                  $data['results'] = $this->ServiceNameModel->show_all_service_namelist();
                  $this->load->view('servicename',$data);

         }
         
         public function serviceCatgList()
        {
            
                  $this->load->model('ServiceCatgModel');
                  $data['results'] = $this->ServiceCatgModel->show_all_service_catglist();
                  $this->load->view('service_category',$data);

         }
         
         public function findmake()
         {
            $stage=$this->input->post('service_catg');
             $data['main_content']='function call'; 
             if($this->input->post('ajax'))
             {
                 $this->load->view($data['main_content']);
                 
             }
             else
             {
                 
                $this->load->view($data['main_content']); 
             }
             
         }
         
         
         public function get_all_list()
         {
              $stage=$this->input->post('stage');
              //print_r($_POST);

              if($stage==2||$stage==3){
              $this->db->select('make_id,make_name');
            //$this->db->where('id', '3');
            $q = $this->db->get('make');
            //$data = $q->result_array();

        // $query = $this->db->query('SELECT * FROM model');
            
            
                            foreach ($q->result() as $row){?>
                                <div class="col-md-4">
                           <input type='checkbox' name='make[]' value='<?php echo $row->make_id; ?>' /><?php echo $row->make_name; ?></div>
                           <?php   }
         }
                           ?>
                        <?php 
          
            
//		if($query->num_rows > 0){
//			$header = false;
//			$output_string = '';
//			$output_string .=  "<table border='1'>\n";
//			foreach ($query->result() as $row){
//				$output_string .= '<tr>\n';
//				$output_string .= "<th>{$row['make_name']}</th>\n";	
//				$output_string .= '</tr>\n';				
//			}					
//			$output_string .= '</table>\n';
//		}
//		else{
//			$output_string = 'There are no results';
//		}
//		//print_r($_GET); 
//		echo json_encode($output_string);
	}
             
        
 }
 

?>
