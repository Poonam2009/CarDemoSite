<?php 
include_once('header.php');
//include_once('db.php');

 ?>
 <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css"/>
 <link href="<?php echo base_url('css/bootstrap-theme.css'); ?>" rel="stylesheet" type="text/css"/>
 <link href="<?php echo base_url('css/elegant-icons-style.css'); ?>" rel="stylesheet" type="text/css"/>
 <link href="<?php echo base_url('css/font-awesome.css'); ?>" rel="stylesheet" type="text/css"/>
 <link href="<?php echo base_url('css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css"/>
 <link href="<?php echo base_url('css/fullcalendar.css'); ?>" rel="stylesheet" type="text/css"/>
 <link href="<?php echo base_url('css/jquery-jvectormap-1.2.2.css'); ?>" rel="stylesheet" type="text/css"/>
 <link href="<?php echo base_url('css/jquery-ui-1.10.4.min.css'); ?>" rel="stylesheet" type="text/css"/>
 <link href="<?php echo base_url('css/line-icons.css'); ?>" rel="stylesheet" type="text/css"/>
 <link href="<?php echo base_url('css/owl.carousel.css'); ?>" rel="stylesheet" type="text/css"/>
 <link href="<?php echo base_url('css/style.css'); ?>" rel="stylesheet" type="text/css"/>
 <link href="<?php echo base_url('css/style-responsive.css'); ?>" rel="stylesheet" type="text/css"/>
 <link href="<?php echo base_url('css/widgets.css'); ?>" rel="stylesheet" type="text/css"/>
 <link href="<?php echo base_url('css/xcharts.min.css'); ?>" rel="stylesheet" type="text/css"/>

 <script>
 
 </script>
<style>
  .modal-header, h4, .close {
      background-color: #4a91e3;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }

  .modal-footer {
      background:#4a91e3;
  }
  .modalstyle{
	      padding-right: 10%;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: 1.3em;
	  }
  </style>
 <section id="main-content">
        <section class="wrapper">
        <div class="table-responsive">
             <h2></h2>
            
              </div>
              <div class="row" style="margin-left:0">
                  <div class="col-md-12">                          
                    <div class="panel panel-default">
                        <div class=" panel-heading">
                             <div class="col-md-9">
                                 Registeration Details
                             </div>
                           <div class="col-md-3" align="right">
                            
                           <button type="button" class="btn btn-info btn-small" onclick="location.href='<?php echo base_url();?>index.php/AddWorkshopController/frontworkshoplist'" >Back</button>
        </div>
                        </div>   
                        
                        <div class="panel-body">
                        
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
  
  
  <style>
 .display { display:none; }
 .eor{color:#F00;}
 </style> 

<style>
/*word-wrap:break-word;
.form1 {
    display: block;
    margin-left: 3em;
}*/
</style>


 <div class="table-responsive">
     <?php //echo wshop_id;//echo $wshp_id;
     
    // echo $data;
    //echo $data['id'];
   // print_r($data);
    
   // $wshp_id
            //$result3
          //  echo $message;
             //echo message;
     ?>
            <h3>Workshop Details</h3>
                                           <table class="table table-striped table-bordered table-hover" style="width: 96% !important;">
                                              
                                                    <tbody>
                                                        <?php
  
        
        $sr=0;
        $query = $this->db->query('SELECT * FROM wshop_register where wshop_id='.$message.'');

                           foreach ($query->result() as $row){
                               
                               $b_type=$row->b_type;
                               $b_name=$row->b_name;
                                $tin=$row->tin;
                                 $service_tax=$row->service_tax;
                                  $wshop_address=$row->wshop_address;
                                   $owner_name=$row->owner_name;
                                    $phn_no=$row->phn_no;
                                     $mobile_no=$row->mobile_no;
                                      $website=$row->website;
                                       $email=$row->email;
                                        $make_list=$row->makes;
                                       $models=$row->models;
                                       $services=$row->services;
                                       $facility=$row->facility;
                                       $monday=$row->mon;
                                       $tuesday=$row->tues;
                                       $wednesday=$row->wed;
                                       $thrusday=$row->thrus;
                                       $friday=$row->fri;
                                       $saturday=$row->	sat;
                                        $sunday=$row->sun;
                                        	$std_labour_rate=$row->std_labour_rate;
                                                $service_fee=$row->service_fee;
                                                $dis_geniune_parts=$row->dis_geniune_parts;
                                                 $dis_alternate_parts=$row->dis_alternate_parts;
                           }
                           $mon_work =	explode('|',$monday);
                           $tues_work =	explode('|',$tuesday);
                           $wed_work =	explode('|',$wednesday);
                           $thrus_work =	explode('|',$thrusday);
                           $fri_work =	explode('|',$friday);
                           $sat_work =	explode('|',$saturday);
                           $sun_work =	explode('|',$sunday);
                           
                           $make_lists=explode('|',$make_list);
                           $model_list=explode('|',$models);
                           $service_list=explode('|',$services);
                           $facility_list=explode('|',$facility);
                        
                       ?>
                                                        
                                                        <tr height="30">
                                                        <td width=""> Business Type : </td>
                                                        <td><?php //echo $b_type; ?>
                                                        <?php 
                                                   
                                                     $this->db->select('*');
                                $this->db->from('business_type');
                                $this->db->where('business_id',$b_type); 
                                $query1 = $this->db->get();
                                foreach ($query1->result() as $row1){ 
                                echo $row1->business_name; 
                                        
                                }
                                                       // echo $make;
                                                      
                                                ?>
                                                        
                                                        </td>
                                                        <td width=""> Business Name : </td>
                                                        <td><?php echo $b_name; ?></td>
                                                    </tr>
                                                    <tr height="30">
                                                        <td width=""> TIN : </td>
                                                        <td><?php echo $tin; ?></td>
                                                        <td width=""> Service Tax : </td>
                                                        <td><?php echo $service_tax; ?></td>
                                                    </tr>
                                                      <tr height="30">
                                                        <td width=""> Address : </td>
                                                        <td><?php echo $wshop_address; ?></td>
                                                        <td width=""> Owner/Manager Name: </td>
                                                        <td><?php echo $owner_name; ?></td>
                                                    </tr>
                                                   
                                                    <tr height="30">
                                                        <td width="">  Phone : </td>
                                                        <td><?php echo $phn_no; ?></td>
                                                        <td width="">  Mobile : </td>
                                                        <td><?php echo $mobile_no; ?></td>
                                                    </tr>
                                                    
                                                      <tr height="30">
                                                         <td width="">  Website: </td>
                                                        <td><?php echo $service_tax; ?></td>
                                                        <td width="">  Email : </td>
                                                        <td><?php echo $service_tax; ?></td>
                                                    </tr>
                                                    <tr>
                                                     <td width="">  Selected Make: </td>
                                                     <td>
                                                    <?php foreach($make_lists as $make)
                                                    {   
                                                     $this->db->select('*');
                                $this->db->from('make');
                                $this->db->where('make_id',$make); 
                                $query2 = $this->db->get();
                                foreach ($query2->result() as $row2){ 
                                echo $row2->make_name; 
                                        
                                }
                                                       // echo $make;
                                                        echo ",";
                                                    }
                                                        ?>
                                                     </td>
                                                     <td width="">  Selected model : </td>
                                                        <td>
                                                       <?php foreach($model_list as $model)
                                                    {   
                                                     $this->db->select('*');
                                $this->db->from('model');
                                $this->db->where('model_id',$model); 
                                $query3 = $this->db->get();
                                foreach ($query3->result() as $row2){ 
                                echo $row2->model_name; 
                                        
                                }
                                                       // echo $make;
                                                        echo ",";
                                                    }
                                                        ?>
                                                        </td>
                                                    </tr>
                                                 
                                                    <tr height="30">
                                                         <td width="">    Service Offered : </td>
                                                         <td>
                                                        <?php foreach($service_list as $service)
                                                    {   
                                                     $this->db->select('*');
                                $this->db->from('service_type');
                                $this->db->where('stype_id',$service); 
                                $query4 = $this->db->get();
                                foreach ($query4->result() as $row3){ 
                                echo $row3->stype_name; 
                                        
                                }
                                                       // echo $make;
                                                        echo ",";
                                                    }?>
                                                         </td>
                                                         <td width="">  Facilities : </td>
                                                        <td>
                                                        <?php foreach($facility_list as $facilities)
                                                    {   
                                                     $this->db->select('*');
                                $this->db->from('facility_type');
                                $this->db->where('facility_id',$facilities); 
                                $query5 = $this->db->get();
                                foreach ($query5->result() as $row4){ 
                                echo $row4->facility_name; 
                                        
                                }
                                                       // echo $make;
                                                        echo ",";
                                                    }?>
                                                        </td>
                                                     </tr> 
                                                    <tr height="30">  
                                                        
                                                    </tr>
<!--                                                    <tr height="30">
                                                         <td width="">  Website: </td>
                                                        <td><?php //echo $service_tax; ?></td>
                                                        <td width="">  Email : </td>
                                                        <td><?php //echo $service_tax; ?></td>
                                                    </tr>-->
                                                    
                                                </tbody></table>
                 </div>
          
        <div class="table-responsive">
            <h3>Working Days</h3>
                                           <table class="table table-striped table-bordered table-hover" style="width: 96% !important;">
                                               <thead>
                                               <th>Days</th>
                                               <th>Starting Time</th>
                                               <th>Closing Time</th>
                                               </thead>
                                                    <tbody><tr height="30">
                                                        <td width=""> Monday : </td>
                                                        <td><?php echo $mon_work[1]; ?></td>
                                                        <td width=""> <?php echo $mon_work[2]; ?></td>
                                                       
                                                    </tr>
                                                    <tr height="30">
                                                        <td width=""> Tuesday : </td>
                                                        <td><?php echo $tues_work[1]; ?></td>
                                                        <td width=""> <?php echo $tues_work[2]; ?> </td>
                                                     
                                                    </tr>
                                                      <tr height="30">
                                                        <td width=""> Wednesday : </td>
                                                        <td><?php echo $wed_work[1]; ?></td>
                                                        <td width=""> <?php echo $wed_work[2]; ?> </td>
                                                        
                                                    </tr>
                                                   
                                                    <tr height="30">
                                                        <td width="">  Thrusday : </td>
                                                        <td><?php echo $thrus_work[1]; ?></td>
                                                        <td width=""> <?php echo $thrus_work[2]; ?> </td>
                                                        
                                                    </tr>
                                                    
                                                      <tr height="30">
                                                         <td width="">  Friday: </td>
                                                        <td><?php echo $fri_work[1]; ?></td>
                                                        <td width="">  <?php echo $fri_work[2]; ?> </td>
                                                     
                                                    </tr>
                                                    <tr>
                                                     <td width="">  Saturday : </td>
                                                        <td><?php echo $sat_work[1]; ?></td>
                                                        <td width="">  <?php echo $sat_work[2]; ?> </td>
                                                        
                                                    </tr>
                                                    <tr height="30">
                                                         <td width="">    Sunday: </td>
                                                        <td><?php echo $sun_work[1]; ?></td>
                                                        <td width="">  <?php echo $sun_work[2]; ?></td>
                                                       
                                                    </tr>
                                                </tbody></table>
                 </div>
          
          <div class="table-responsive">
            <h3>Pricing</h3>
                                           <table class="table table-striped table-bordered table-hover" style="width: 96% !important;">
                                              
                                                    <tbody><tr height="30">
                                                        <td width="">   Standard Labour Rate(Per Hour including Service Tax) : </td>
                                                        <td><?php echo $std_labour_rate; ?></td>
                                                        <td width=""> Services Fee(For Minor / Major Service) :</td>
                                                        <td><?php echo $service_fee; ?></td>
                                                       
                                                    </tr>
                                                    <tr height="30">
                                                        <td width="">  Discount on Geniune Parts( All Values in %) : </td>
                                                        <td><?php echo $dis_geniune_parts; ?></td>
                                                        <td width="">  Discount on Alternate Parts(All Values in %)  : </td>
                                                        <td><?php echo $dis_alternate_parts; ?></td>
                                                     
                                                    </tr>
                                                </tbody></table>
                 </div>
          
          
  <!--End Advanced Tables -->	
      </div>
      <!-- /.panel-body -->
  </div>
  <!-- /.panel -->

</div>
<!-- /.col-lg-12 -->
<!-- <footer><p>All right reserved. Designed by: <a href="http://www.invadertech.com" target="_blank" alt="Invader">Invader Technologies Pvt. Ltd.</a></p></footer>-->
  <?php include_once('footer.php'); ?>
              </div>
   <!-- /. PAGE INNER  -->
  </div>
               <!-- Modal -->
  <!-- Modal -->
  
</div>
  
              </section>
</section>

  <!-- Trigger the modal with a button -->


 