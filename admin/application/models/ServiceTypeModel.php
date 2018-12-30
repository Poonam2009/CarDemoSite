<?php 
 
 class ServiceTypeModel extends CI_Model
{
	 
     public function add_service_type($service_type)
             
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
            $created_on			   =	$date;


             $date = date('Y-m-d h:i:s');
              $created_by    = $this->session->userdata['username'];

              $data=array(
                'stype_name' => $this->input->post('service_type'),
               'created_on' => $date,
               'created_by' => $created_by,
                 'ip_address' => $this->input->ip_address(),
                'mac_address' => $macaddress

              );
             
              $this->db->insert('service_type',$data);

              redirect('ServiceTypeController/serviceTypeList','location',301); 
	 }
	
      public function show_all_service_typelist()
       {
          $this->db->select('*');
          $this->db->from('service_type');
          $query = $this->db->get();
          $result = $query->result();
          return $result;
      
        }
         public function edit_service_type($service_type_id)
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
                $created_on	       =	$date;

                 $date          = date('Y-m-d h:i:s');
                 $created_by    = $this->session->userdata['username'];
                
              $data=array(
                'stype_name' => $_POST['eservice_type'],
               'modified_on' => $date,
               'modified_by' => $created_by,
                 'ip_address' => $this->input->ip_address(),
                'mac_address' => $macaddress

              );
  
            $this->db->where('stype_id',$service_type_id);
            $this->db->update('service_type',$data); 

             redirect('ServiceTypeController/serviceTypeList','location',301); 
          }
         
	 
}


?>