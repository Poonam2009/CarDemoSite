<?php 

     //$ip_address=$this->input->ip_address();
 class FrontWorkshopModel extends CI_Model{
	 
	 public function add_workshop(){
             
        
            // print_r($_POST);
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
               // $ip_address            =    $_SERVER['REMOTE_ADDR'];
                //$created_by            =    $_SESSION['main']['user_mail'];
                $created_on			   =	$date;


//echo $mac;
             
             $date = date('Y-m-d h:i:s');
             
                  $mon_start             = $this->input->post('mon_start'); 
                  $mon_end              = $this->input->post('mon_end'); 
                  
                  $tues_start          = $this->input->post('tues_start'); 
                  $tues_end             = $this->input->post('tues_end'); 
                  
                    $wed_start           = $this->input->post('wed_start'); 
                   $wed_end              = $this->input->post('wed_end'); 
                  
                   $thrs_start          = $this->input->post('thrs_start'); 
                   $thrs_end             = $this->input->post('thrs_end'); 
                  
                  $fri_start            = $this->input->post('fri_start');
                  $fri_end              = $this->input->post('fri_end');
            
                  $str_start            = $this->input->post('str_start');
                  $str_end              = $this->input->post('str_end');
                 
                  $sun_start            = $this->input->post('sun_start');
                  $sun_end              = $this->input->post('sun_end');
                 
                  
                  // $make = $this->input->post('make');
                   $make = (isset($_POST['make']) ? $_POST['make'] :0);
                   $make_list = implode("|", $make);
                   
                   
                     $model = (isset($_POST['model']) ? $_POST['model'] :0);
                   $model_list = implode("|", $model);
                  
                    $service_type = (isset($_POST['service_type']) ? $_POST['service_type'] :0);
                 // $service_type = $this->input->post('service_type');
                  $stype_list = implode("|",$service_type);
                  
                    $facility_type = (isset($_POST['facility_nametype']) ? $_POST['facility_nametype'] :0);
                //  $facility_type = $this->input->post('facility_nametype');
                   $ftype_list = implode("|",$facility_type);
                  //echo "hdfjh";echo "<br>";
                  //$monday=$this->input->post('tuesday');
//                  echo $monday=$_POST['monday']."|".$_POST['mon_start']."|".$_POST['mon_start']; echo "<br>";
//                  echo $tuesday=$_POST['tuesday']."|".$_POST['tues_start']."|".$_POST['tues_end'];echo "<br>";
//                 echo  $wednesday=$_POST['wednesday']."|".$_POST['wed_start']."|".$_POST['wed_end'];echo "<br>";
//                 echo $thrusday=$_POST['thrusday']."|".$_POST['thrs_start']."|".$_POST['thrs_end'];echo "<br>";
//                 echo $friday=$_POST['friday']."|".$_POST['fri_start']."|".$_POST['fri_end'];echo "<br>";
//                  echo $staurday=$_POST['staurday']."|".$_POST['str_start']."|".$_POST['str_end'];echo "<br>";
//                 echo $sunday=$_POST['sunday']."|".$_POST['sun_start']."|".$_POST['sun_end'];echo "<br>";
                 
                   @$monday=$_POST['monday']."|".$_POST['mon_start']."|".$_POST['mon_end']; 
                  @$tuesday=$_POST['tuesday']."|".$_POST['tues_start']."|".$_POST['tues_end'];
                  @$wednesday=$_POST['wednesday']."|".$_POST['wed_start']."|".$_POST['wed_end'];
                 @$thrusday=$_POST['thrusday']."|".$_POST['thrs_start']."|".$_POST['thrs_end'];
                  @$friday=$_POST['friday']."|".$_POST['fri_start']."|".$_POST['fri_end'];
                  @$staurday=$_POST['staurday']."|".$_POST['str_start']."|".$_POST['str_end'];
                  @$sunday=$_POST['sunday']."|".$_POST['sun_start']."|".$_POST['sun_end'];
                  
                  //echo $_POST['business_type'];echo "<br>";
                  //echo $_POST['business_name'];echo "<br>";
                  
            // $created_by    = $this->session->userdata['username'];
     // $uArr = explode('@',$this->input->post('emailaddress'));
                  
                  $mob_mechanic = (isset($_POST['mob_mechanic']) ? $_POST['mob_mechanic'] : No);
                  
      $data=array(
        'b_type'     => $_POST['business_type'],
             'mob_machnic'      => $mob_mechanic,
             'b_name'     => $this->input->post('business_name'),
             'tin'            => $this->input->post('tin_no'),
             'service_tax'        => $this->input->post('service_tax'),
             'wshop_address'           => $this->input->post('address'),
             'owner_name'            => $this->input->post('owner'),
             'phn_no'         => $this->input->post('phone_no'),
           'mobile_no'         => $this->input->post('mobile_no'),
             'website'      => $this->input->post('website_name'),
             'email'             => $this->input->post('email'),
             //$selected_all      = $this->input->post('selected_all'),
             //$selected_makes    = $this->input->post('selected_makes'),
             'makes'              => $make_list,
             'models'              => $model_list,
              'services'              => $stype_list,
               'facility'             => $ftype_list,
                'mon'                 => $monday,
                 
                  'tues'              => $tuesday,
                
                  'wed'              =>$wednesday,
                
                  'thrus'            => $thrusday,
                
                  'fri'              => $friday,
                 
                  'sat'              => $staurday,
                 
                  'sun'              => $sunday,
                 
                   'std_labour_rate'              => $this->input->post('hour_labour_rate'),
                    'service_fee'              => $this->input->post('service_fee'),
                     'dis_geniune_parts'              => $this->input->post('dis_genpart'),
                      'dis_alternate_parts'              => $this->input->post('dis_altpart'),
                   
       'created_on' => $date,
      // 'created_by' => $created_by,
         'ip_address' => $this->input->ip_address(),
        'mac_address' => $macaddress
       
      );
      
     // print_r($data);
      //exit;
      $this->db->insert('wshop_register',$data);
      
      redirect('Workshop/Confirm','location',301); 
	 }
	
         public function show_all_makelist(){
          $this->db->select('*');
          $this->db->from('make');
          $query = $this->db->get();
          $result = $query->result();
          return $result;
      
         }
         public function edit_make($make_id){
           
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
        'make_name' => $_POST['emake_name'],
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
$this->db->where('make_id',$make_id);
$this->db->update('make',$data); 
      
      redirect('MakeController/makeList','location',301); 
	 }
         
         
         
         
         function isEmailExist($email) {
    $this->db->select('*');
    $this->db->where('email',$email);
    $query = $this->db->get('wshop_register');

    if ($query->num_rows() > 0) {
        return true;
    } else {
        return false;
    }
}
         
	 
}


?>