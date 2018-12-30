<?php 
 

   
 class ProductCategoriesModel extends CI_Model{
	 
	public function add_product_categories($product_categories){
            
             
         
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
             $data=array(
             'cat_name' => $this->input->post('cat_name'),
             'created_on' => $date,
             'created_by' => $created_by,
             'ip_address' => $this->input->ip_address(),
             'mac_address' => $macaddress
       
      );
     
      $this->db->insert('product_categories',$data);
      
      redirect('ProductCategoriesControllers/ProductCategoriesList','location',301); 
	 }
	
         public function show_all_ProductCategoriesList(){
          $this->db->select('*');
          $this->db->from('product_categories');
          $query = $this->db->get();
          $result = $query->result();
          return $result;
      
         }
         public function edit_product_categories($cat_name_id){
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
            
      $data=array(
        'cat_name' => $_POST['ecat_name'],
       'modified_on' => $date,
       'modified_by' => $created_by,
         'ip_address' => $this->input->ip_address(),
        'mac_address' => $macaddress
       
      );
      
     
$this->db->where('cat_id',$cat_name_id);
$this->db->update('product_categories',$data); 
      
      redirect('ProductCategoriesControllers/ProductCategoriesList','location',301); 
	 }
         
	 
}


?>