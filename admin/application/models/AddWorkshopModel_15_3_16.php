<?php 
 
 class AddWorkshopModel extends CI_Model
{
	 
	public function add_workshop($wshop_name)
        {
        
            ob_start();  

            system('ipconfig /all');  

            $mycomsys=ob_get_contents();  

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
            //$created_by            =    $_SESSION['main']['user_mail'];
            $created_on			   =	$date;
     
             $date = date('Y-m-d h:i:s');
             $created_by    = $this->session->userdata['username'];


                     $data = array(
                     'wshop_name' => $this->input->post('wshop_name'),
                     'wshop_location' => $this->input->post('wshop_location'),
                     'wshop_category' => $this->input->post('wshop_category'),
                    'phone_no' => $this->input->post('phone_no'),
                     'email' => $this->input->post('email'),
                    'login_username' => $this->input->post('login_username'),
                     'login_password' =>  $this->input->post('login_password'),
                      'status' =>  '0',   
                     'created_on' => $date,
                     'created_by' => $created_by,
                     'ip_address' => $this->input->ip_address(),
                     'mac_address' => $macaddress

                        );

                   $this->db->insert('workshop_details',$data);

            // }
  
      
         redirect('AddWorkshopController/workshopList','location',301); 
        }
	
         public function show_all_workshoplist()
         {
        
          
              $this->db->select('*');
              $this->db->from('workshop_details');
              $query = $this->db->get();
              $result = $query->result();
              return $result;
      
         }
         public function edit_workshop($ewshop_name_id)
         {
         
           ob_start();  
            
           system('ipconfig /all');  
          
           $mycomsys=ob_get_contents();  
     
           ob_clean();  
           $find_mac = "Physical";
           $pmac = strpos($mycomsys, $find_mac);  
          
           $macaddress=substr($mycomsys,($pmac+36),17);  
          

                date_default_timezone_set('Asia/Kolkata');   
                //$time_now=mktime(date('h')+5,date('i')+30,date('s'));
                $date                  = date('Y-m-d H:i:s');
                $macaddress            =substr($mycomsys,($pmac+36),17);
                $ip_address            =    $_SERVER['REMOTE_ADDR'];
            
                $created_on			   =	$date;



             $date = date('Y-m-d h:i:s');
             $created_by    = $this->session->userdata['username'];
          
 		
              $data = array(
                     'wshop_name' => $this->input->post('ewshop_name'),
                     'wshop_location' => $this->input->post('ewshop_location'),
                     'wshop_category' => $this->input->post('ewshop_category'),
                    'phone_no' => $this->input->post('ephone_no'),
                     'email' => $this->input->post('emaile'),
                    'login_username' => $this->input->post('elogin_username'),
                     'login_password' =>  $this->input->post('elogin_password'),
                      'status' =>  '0',   
                     'modified_on' => $date,
                     'modified_by' => $created_by,
                     'ip_address' => $this->input->ip_address(),
                     'mac_address' => $macaddress

                        );
      
        $this->db->where('wshop_id',$ewshop_name_id);
        $this->db->update('workshop_details',$data); 

              redirect('AddWorkshopController/workshopList','location',301); 
                 }
         
        
}


?>
