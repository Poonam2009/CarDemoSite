<?php 
 
 class LocIntModel extends CI_Model
{
     public function add_location_name($form_data)
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
                'location_name' => $this->input->post('location_name'),
               'created_on' => $date,
               'created_by' => $created_by,
                 'ip_address' => $this->input->ip_address(),
                'mac_address' => $macaddress

              );
              $this->db->insert('add_location',$data);

              redirect('LocIntController/locationNameList','location',301); 
	 }
         
           public function add_year($form_data)
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
                'year' => $this->input->post('year'),
               'created_on' => $date,
               'created_by' => $created_by,
                 'ip_address' => $this->input->ip_address(),
                'mac_address' => $macaddress

              );
              $this->db->insert('add_year',$data);

              redirect('LocIntController/yearList','location',301); 
	 }
	
         
              public function add_intervals($form_data)
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
                'interval_name' => $this->input->post('interval_name'),
                 'more_info' => $this->input->post('more_info'), 
               'created_on' => $date,
               'created_by' => $created_by,
               'ip_address' => $this->input->ip_address(),
                'mac_address' => $macaddress

              );
              $this->db->insert('add_interval',$data);

              redirect('LocIntController/intervalList','location',301); 
	 }
         public function show_all_location_namelist()
        {
              $this->db->select('*');
              $this->db->from('add_location');
              $query = $this->db->get();
              $result = $query->result();
              return $result;

         }
          public function show_all_yearlist()
        {
              $this->db->select('*');
              $this->db->from('add_year');
              $query = $this->db->get();
              $result = $query->result();
              return $result;

         }
           public function show_all_intervallist()
        {
              $this->db->select('*');
              $this->db->from('add_interval');
              $query = $this->db->get();
              $result = $query->result();
              return $result;

         }
         public function edit_location_name($loc_name_id)
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
                    'location_name' => $_POST['elocation_name'],
                   'modified_on' => $date,
                   'modified_by' => $created_by,
                     'ip_address' => $this->input->ip_address(),
                    'mac_address' => $macaddress

                  );
    
                $this->db->where('loc_id',$loc_name_id);
                $this->db->update('add_location',$data); 

           redirect('LocIntController/locationNameList','location',301); 
	 }
       
          public function edit_intervals($interval_id)
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
                    'interval_name' => $_POST['einterval_name'],
                      'more_info' => $_POST['emore_info'],
                   'modified_on' => $date,
                   'modified_by' => $created_by,
                     'ip_address' => $this->input->ip_address(),
                    'mac_address' => $macaddress

                  );
    
                $this->db->where('interval_id',$interval_id);
                $this->db->update('add_interval',$data); 

           redirect('LocIntController/intervalList','location',301); 
	 }
       
}

?>