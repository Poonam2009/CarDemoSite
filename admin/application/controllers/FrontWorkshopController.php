<?php 
 class FrontWorkshopController extends CI_Controller{
	 
	 public function index(){
		
            if($this->session->userdata('logged_in'))
           {
           $this->load->view('manage_wshpfront');
           }
           else
           {
             //If no session, redirect to login page
             redirect('LoginController', 'location',301);
           }
        
	 }
          public function details(){
               $wshp_id =$this->uri->segment(3);
              // $data['wshp_ids']="hello";
               $data['message']=$wshp_id;
              // $data['id'] = $wshp_id;
//                $this->db->select('*');
//              $this->db->from('wshop_register');
//              $this->db->where('wshop_id',$wshp_id);
//              $query = $this->db->get();
//              $result3 = $query->result();
//              return $result;
		//print_r($_REQUEST);
               // exit;
            if($this->session->userdata('logged_in'))
           {
           $this->load->view('show_wshpdetails',$data);
           }
           else
           {
             //If no session, redirect to login page
             redirect('LoginController', 'location',301);
           }
        
	 }
//         public function businesstype(){
//		
//            if($this->session->userdata('logged_in'))
//           {
//           $this->load->view('businesstype');
//           }
//           else
//           {
//             //If no session, redirect to login page
//             redirect('LoginController', 'location',301);
//           }
//        
//	 }
//         public function FacilityType(){
//		
//            if($this->session->userdata('logged_in'))
//           {
//           $this->load->view('FacilityType');
//           }
//           else
//           {
//             //If no session, redirect to login page
//             redirect('LoginController', 'location',301);
//           }
//         }
//	 public function addWorkshop(){
//		
//             //echo $make=$this->input->post['make_name'];
//             
//               $wshop_name=$_POST['wshop_name'];
//             
//           $this->form_validation->set_rules('wshop_name','Workshop Name','trim|required');
//             
//             if($this->form_validation->run() == FALSE)
//                {
//                 $this->index();
//                }
//                else
//                {
//                 $this->load->model('AddWorkshopModel');
//                 $this->AddWorkshopModel->add_workshop($wshop_name);
//                }
//          	
//	  }
//	  public function editWorkshop(){
//		
//            // echo $make=$this->input->post['emake_name'];
//              // echo $make_id=$this->input->post['make_name_id'];
//               
//                $wshop_name=$_POST['ewshop_name'];
//                $ewshop_name_id=$_POST['wshop_name_id'];
//              // exit;
//             
//              // $make=$_POST['make_name'];
//             
//           $this->form_validation->set_rules('ewshop_name','Works Shop','trim|required');
//             
//             if($this->form_validation->run() == FALSE)
//                {
//                 $this->index();
//                }
//                else
//                {
//                 $this->load->model('AddWorkshopModel');
//                 $this->AddWorkshopModel->edit_workshop($ewshop_name_id);
//                }
//          	
//	  }
//	
//         public function viewMake(){
//	$this->load->view('make');	 
//	 }
//         
//         public function workshopList(){
//            
//              $this->load->model('AddWorkshopModel');
//          $data['results'] = $this->AddWorkshopModel->show_all_workshoplist();
//        //print_r($data);
//        $this->load->view('manage_workshop',$data);
//        //$this->load->view('make/index', $data);
//       
//    }
//    public function businesslist(){
//            
//              $this->load->model('AddWorkshopModel');
//          $data['results'] = $this->AddWorkshopModel->show_all_businesslist();
//        //print_r($data);
//        $this->load->view('businesstype',$data);
//        //$this->load->view('make/index', $data);
//       
//    }
//     public function addBusinessType(){
//		
//             //echo $make=$this->input->post['make_name'];
//             
//                $business_name=$_POST['businessname'];
//            
//             
//           $this->form_validation->set_rules('businessname','Business Name','trim|required');
//             
//             if($this->form_validation->run() == FALSE)
//                {
//                 $this->index();
//                }
//                else
//                {
//                 $this->load->model('AddWorkshopModel');
//                 $this->AddWorkshopModel->add_Business($business_name);
//                }
//          	
//	  }
//          public function editbusiness_name(){
//		
//            // echo $make=$this->input->post['emake_name'];
//              // echo $make_id=$this->input->post['make_name_id'];
//               
//                $business_name=$_POST['ebusiness'];
//                $ebusiness_name_id=$_POST['business_name_id'];
//              // exit;
//             
//              // $make=$_POST['make_name'];
//             
//           $this->form_validation->set_rules('ebusiness','Business Name','trim|required');
//             
//             if($this->form_validation->run() == FALSE)
//                {
//                 $this->index();
//                }
//                else
//                {
//                 $this->load->model('AddWorkshopModel');
//                 $this->AddWorkshopModel->editbusiness_name($ebusiness_name_id);
//                }
//          	
//	  }
//          
//          public function facilitylist(){
//            
//              $this->load->model('AddWorkshopModel');
//          $data['results'] = $this->AddWorkshopModel->show_all_facilitylist();
//        //print_r($data);
//        $this->load->view('FacilityType',$data);
//        //$this->load->view('make/index', $data);
//       
//    }
//    
//     public function addFacilityType(){
//		
//                $facility_name=$_POST['facilityname'];
//            
//             
//           $this->form_validation->set_rules('facilityname','Facility Name','trim|required');
//             
//             if($this->form_validation->run() == FALSE)
//                {
//                 $this->index();
//                }
//                else
//                {
//                 $this->load->model('AddWorkshopModel');
//                 $this->AddWorkshopModel->add_Facility($facility_name);
//                }
//          	
//	  }
//          public function editfacility_name(){
//		
//            // echo $make=$this->input->post['emake_name'];
//              // echo $make_id=$this->input->post['make_name_id'];
//               
//                $facility_name=$_POST['efacility'];
//                $efacility_name_id=$_POST['facility_name_id'];
//              // exit;
//             
//              // $make=$_POST['make_name'];
//             
//           $this->form_validation->set_rules('efacility','Facility Name','trim|required');
//             
//             if($this->form_validation->run() == FALSE)
//                {
//                 $this->index();
//                }
//                else
//                {
//                 $this->load->model('AddWorkshopModel');
//                 $this->AddWorkshopModel->editfacility_name($efacility_name_id);
//                }
//          	
//	  }
//          
          
          
          public function frontworkshopList(){
            
              $this->load->model('AddWorkshopModel');
          $data['results'] = $this->AddWorkshopModel->show_all_front_wshopRegList();
        //print_r($data);
        $this->load->view('manage_wshpfront');
        //$this->load->view('make/index', $data);
       
    }
 }

?>