<?php 
// Turn on output buffering  
//   ob_start();  
//   //Get the ipconfig details using system commond  
//   system('ipconfig /all');  
//   // Capture the output into a variable  
//   $mycomsys=ob_get_contents();  
//   // Clean (erase) the output buffer  
//   ob_clean();  
//   $find_mac = "Physical"; //find the "Physical" & Find the position of Physical text  
//   $pmac = strpos($mycomsys, $find_mac);  
//   // Get Physical Address  
//   $macaddress=substr($mycomsys,($pmac+36),17);  
//   //Display Mac Address  
//  // echo $macaddress; 
//    
//  	date_default_timezone_set('Asia/Kolkata');   
//	//$time_now=mktime(date('h')+5,date('i')+30,date('s'));
//	$date                  = date('Y-m-d H:i:s');
//	$macaddress            =substr($mycomsys,($pmac+36),17);
//	$ip_address            =    $_SERVER['REMOTE_ADDR'];
//	$created_by            =    $_SESSION['main']['user_mail'];
//	$created_on			   =	$date;

     //$ip_address=$this->input->ip_address();
 class ModelNameModel extends CI_Model{
	 
	 public function add_model($model){
             
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
               // $ip_address            =    $_SERVER['REMOTE_ADDR'];
                //$created_by            =    $_SESSION['main']['user_mail'];
                $created_on			   =	$date;


//echo $mac;
             
             $date = date('Y-m-d h:i:s');
             //echo $created_by    = $this->session->userdata['username'];
             
            // print_r($_POST);
             //exit;
     // $uArr = explode('@',$this->input->post('emailaddress'));
      $data=array(
        'model_name' => $this->input->post('model_name'),
       'created_on' => $date,
      // 'created_by' => $created_by,
         'ip_address' => $this->input->ip_address(),
        'mac_address' => $macaddress
       
      );
      $this->db->insert('model',$data);
      
      redirect('ModelController/modelList','location',301); 
	 }
	
         public function show_all_modellist(){
          $this->db->select('*');
          $this->db->from('model');
          $query = $this->db->get();
          $result = $query->result();
          return $result;
      
         }
         public function edit_model($model_id){
           //  echo $make_id;
             
             // echo $make=$_POST['emake_name'];
              // echo $make_id=$_POST['make_name_id'];
              // exit;
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
               // $created_by            =    $_SESSION['main']['user_mail'];
                $created_on			   =	$date;


//echo $mac;
             
             $date = date('Y-m-d h:i:s');
             $created_by    = $this->session->userdata['username'];
            // echo $emake_id=$this->input->post('make_name_id');
     // $uArr = explode('@',$this->input->post('emailaddress'));
      $data=array(
        'model_name' => $_POST['emodel_name'],
       'modified_on' => $date,
       'modified_by' => $created_by,
         'ip_address' => $this->input->ip_address(),
        'mac_address' => $macaddress
       
      );
     // $this->db->insert('make',$data);
      
//      $this->db->where('emp_no', $data['id']);
//    $this->db->update('title', $data['title']);
    
    //$this->db->where('make_id',$make_id);
    //$this->db->update('make',$data);
    
    //$this->db->where('make_id',$emake_id);
//$this->db->update('make',$data);
      
     // $this->db->update('make',$data);        
  // $this->db->where('make_id',$cmake_id);
   
   
//   $data = array(
//                'make_name' => $_POST['emake_name'],
//       'modified_on' => $date,
//       'modified_by' => $created_by,
//         'ip_address' => $this->input->ip_address(),
//        'mac_address' => $macaddress
//            );
//
$this->db->where('model_id',$model_id);
$this->db->update('model',$data); 
      
      redirect('ModelController/modelList','location',301); 
	 }
         
	 
}


?>