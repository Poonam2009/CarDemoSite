<?php 
 
 class ServiceCatgModel extends CI_Model
{
     public function add_service_catg($form_data)
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
              
                 $make = (isset($_POST['make']) ? $_POST['make'] :0);
                   $make_list = implode("|", $make);
   
              $data=array(
                  'service_catg'=>$this->input->post('service_catg'),
                'service_pcatg' => $this->input->post('service_pcatg'),
                  'make' => $make_list,
               'created_on' => $date,
               'created_by' => $created_by,
                 'ip_address' => $this->input->ip_address(),
                'mac_address' => $macaddress

              );
              $this->db->insert('service_catg',$data);

              redirect('ServiceCatg/serviceCatgList','location',301); 
	 }
	
         public function show_all_service_catglist()
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