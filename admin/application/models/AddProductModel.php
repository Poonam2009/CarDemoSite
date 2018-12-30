<?php 
 
 class AddProductModel extends CI_Model
{
	 
	public function add_product($product)
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

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '1000';
            $config['max_width'] = '1920';
            $config['max_height'] = '1280';                     

           $this->load->library('upload',$config);        
            
             if(!$this->upload->do_upload('prod_image'))
              {

                 $error=array('error'=>$this->upload->display_errors());
                 $this->load->view('addproduct',$error);

             }
             else
             {

                 $file_data=$this->upload->data();
                // $dataphoto['img']=base_url().'/uploads/'.time().$file_data['file_name'];
                  $dataphoto['img']=base_url().'/uploads/'.$file_data['file_name'];

                 //$nm_file = time().$file_data['file_name'];
                  $nm_file = $file_data['file_name'];
                  //$nm_file = $dataphoto['img'];
                     $data = array(
                     'cat_id' => $this->input->post('cat_id'),
                     'prod_make' => $this->input->post('prod_make'),
                     'prod_model' => $this->input->post('prod_model'),
                    'prod_name' => $this->input->post('prod_name'),
                     'prod_description' => $this->input->post('prod_des'),
                    'prod_price' => $this->input->post('prod_price'),
                     'prod_image' => $nm_file,
                     'created_on' => $date,
                     'created_by' => $created_by,
                     'ip_address' => $this->input->ip_address(),
                     'mac_address' => $macaddress

                        );

                   $this->db->insert('product',$data);

             }
  
      
         redirect('AddProductController/AddProductList','location',301); 
        }
	
         public function show_all_ProductList()
         {
         
          
              $this->db->select('*');
              $this->db->from('product');
              $query = $this->db->get();
              $result = $query->result();
              return $result;
      
         }
         public function edit_product($eprod_id)
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
              $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '1000';
            $config['max_width'] = '1920';
            $config['max_height'] = '1280';                     

           $this->load->library('upload',$config);        
            
             if(!$this->upload->do_upload('eprod_image'))
              {

                 $error=array('error'=>$this->upload->display_errors());
                 $this->load->view('addproduct');

             }
             else
             {

                 $file_data=$this->upload->data();
                // $dataphoto['img']=base_url().'/uploads/'.time().$file_data['file_name'];
                  $dataphoto['img']=base_url().'/uploads/'.$file_data['file_name'];

                 //$nm_file = time().$file_data['file_name'];
                  $nm_file = $file_data['file_name'];
 		
             $data=array(
             'prod_name' => $this->input->post('eprod_name'),
             'prod_description' => $this->input->post('eprod_description'),
             'prod_price' => $this->input->post('eprod_price'),
             'prod_image' => $nm_file,
             'modified_on' => $date,
             'modified_by' => $created_by,
             'ip_address' => $this->input->ip_address(),
             'mac_address' => $macaddress
       
            );
      
        $this->db->where('prod_id',$eprod_id);
        $this->db->update('product',$data); 

              redirect('AddProductController/AddProductList','location',301); 
                 }
         
         } 
}


?>