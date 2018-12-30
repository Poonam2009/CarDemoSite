<?php 
 
 class ServiceNameModel extends CI_Model
{
     public function add_service_name($form_data)
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
   
              $data=array(
                  'stype_id'=>$this->input->post('service_type'),
                'service_name' => $this->input->post('service_name'),
                'part_name' => $this->input->post('part_name'), 
                 'part_type' => $this->input->post('part_type'),  
                'labour_cost' => $this->input->post('labour_cost'),
                  'is_active' => '0',
               'created_on' => $date,
               'created_by' => $created_by,
                 'ip_address' => $this->input->ip_address(),
                'mac_address' => $macaddress

              );
              $this->db->insert('service_name',$data);

              redirect('ServiceNameController/serviceNameList','location',301); 
	 }
	
         public function show_all_service_namelist()
        {
              $this->db->select('*');
              $this->db->from('service_name');
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