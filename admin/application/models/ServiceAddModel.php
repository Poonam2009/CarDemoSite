<?php 
 
 class ServiceAddModel extends CI_Model
{
     public function add_services($form_data)
    {
            //Turn on output buffering  
           ob_start();  
           //Get the ipconfig details using system commond  
           system('ipconfig /all');  
           // Capture the output into a variable  
           $mycomsys=ob_get_contents();  
           // Clean (erase) the output buffer  
           ob_clean();  
           $find_mac = "Physical"; //find the "Physical" & Find the position of Physical text  
           $pmac = strpos($mycomsys, $find_mac);  
           // Get Physical Address  
           $macaddress=substr($mycomsys,($pmac+36),17);  
           //Display Mac Address  
          // echo $macaddress; 

            date_default_timezone_set('Asia/Kolkata');   
            //$time_now=mktime(date('h')+5,date('i')+30,date('s'));
            $date                  = date('Y-m-d H:i:s');
            $macaddress            =substr($mycomsys,($pmac+36),17);
            $ip_address            =    $_SERVER['REMOTE_ADDR'];
            $created_on	           =	$date;


             $date = date('Y-m-d h:i:s');
              $created_by    = $this->session->userdata['username'];
              
                 //$make = (isset($_POST['make']) ? $_POST['make'] :0);
                  // $make_list = implode("|", $make);
   
              $data=array(
                  'year'=>$this->input->post('year'),
                'make' => $this->input->post('make'),
                  'model' => $this->input->post('make'),
                  'varient' => $this->input->post('varient'),
                  'service_catg' => $this->input->post('service_catg'),
                  'service_pcatg' => $this->input->post('service_pcatg'),
                  'service_name' => $this->input->post('service_name'),
                  'no_of_labour' => $this->input->post('no_of_labour'),
                  'labour_hour' => $this->input->post('labour_hour'),
                  'labour_fxdprice' => $this->input->post('labour_fxdprice'),
                  'service_desc' => $this->input->post('service_desc'),
                  'do_in_service' => $this->input->post('do_in_service'),
                  'when_necessary' => $this->input->post('when_necessary'),
                  'notes' => $this->input->post('notes'),
                  'gen_parts' => $this->input->post('gen_parts'),
                  'alt_parts' => $this->input->post('alt_parts'),
                   'relopt_services' => $this->input->post('relopt_services'),
                   'check_point' => $this->input->post('check_point'),
                   'related_blog' => $this->input->post('related_blog'),
                  
               'created_on' => $date,
               'created_by' => $created_by,
                 'ip_address' => $this->input->ip_address(),
                'mac_address' => $macaddress

              );
              $this->db->insert('add_service',$data);

              redirect('ServiceAdd/servicesList','location',301); 
	 }
	
         public function show_all_services_list()
        {
              $this->db->select('*');
              $this->db->from('add_service');
              $query = $this->db->get();
              $result = $query->result();
              return $result;

         }
         public function edit_service_name($service_name_id)
        {
          
            // Turn on output buffering  
               ob_start();  
               //Get the ipconfig details using system commond  
               system('ipconfig /all');  
               // Capture the output into a variable  
               $mycomsys=ob_get_contents();  
               // Clean (erase) the output buffer  
               ob_clean();  
               $find_mac = "Physical"; //find the "Physical" & Find the position of Physical text  
               $pmac = strpos($mycomsys, $find_mac);  
               // Get Physical Address  
               $macaddress=substr($mycomsys,($pmac+36),17);  
               //Display Mac Address  
              // echo $macaddress; 

                    date_default_timezone_set('Asia/Kolkata');   
                    //$time_now=mktime(date('h')+5,date('i')+30,date('s'));
                    $date                  = date('Y-m-d H:i:s');
                    $macaddress            =substr($mycomsys,($pmac+36),17);
                    $ip_address            =    $_SERVER['REMOTE_ADDR'];
                    $created_on			   =	$date;
        
                     $date = date('Y-m-d h:i:s');
                     $created_by    = $this->session->userdata['username'];
          
                  $data=array(
                    'labour_cost' => $_POST['elabour_cost'],
                   'modified_on' => $date,
                   'modified_by' => $created_by,
                     'ip_address' => $this->input->ip_address(),
                    'mac_address' => $macaddress

                  );
    
                $this->db->where('sname_id',$service_name_id);
                $this->db->update('service_name',$data); 

           redirect('ServiceNameController/serviceNameList','location',301); 
	 }
       
}

?>