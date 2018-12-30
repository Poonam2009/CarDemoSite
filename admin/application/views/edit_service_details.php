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
                                 Services Edit Page
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
            <h3>Services Details</h3>
                                           <table class="table table-striped table-bordered table-hover" style="width: 96% !important;">
                                              
                                                    <tbody>
                                                        <?php
  
        
        $sr=0;
        $query = $this->db->query('SELECT * FROM add_service where aservice_id='.$message.'');

                           foreach ($query->result() as $row){
                               
                               
                               $year=$row->year;
                               $make=$row->make;
                                $model=$row->model;
                                 $varient=$row->varient;
                                  $service_catg=$row->service_catg;
                                   $service_pcatg=$row->service_pcatg;
                                    $service_name=$row->service_name;
                                     $no_of_labour=$row->no_of_labour;
                                      $labour_hour=$row->labour_hour;
                                       $labour_fxdprice=$row->labour_fxdprice;
                                        $service_desc=$row->service_desc;
                                       $do_in_service=$row->do_in_service;
                                       $when_necessary=$row->when_necessary;
                                       $notes=$row->notes;
                                       $gen_parts=$row->gen_parts;
                                       $alt_parts=$row->alt_parts;
                                       $relopt_services=$row->relopt_services;
                                       $check_point=$row->check_point;
                                       $related_blog=$row->related_blog;
                                      
                           }
                          
                        
                       ?>
                                                        
                                                        
                                                        
                                                        <div id="tabs-2">
        <?php
	echo validation_errors();

		$form_att = array('class' => 'box login', 'method' => 'post'); 

		echo form_open('ServiceAdd/addService', $form_att);

	?>
        <!-- <form role="form" action=""  method="post" enctype="multipart/form-data">-->
                     
              <div class="col-lg-12">
                  <div class="col-lg-3"> 
                      <div class="section_1" style="margin-bottom: 10px;">
                           <label>Select Year*</label><br />
				 <select id="year" name="year"  class="form-control">
					<option value="">YEAR</option>

                                         <?php
                                 $query = $this->db->query('SELECT * FROM add_year');
                                foreach ($query->result() as $row){
                                     ?>  
                                     <option  value="<?php echo $row->year_id; ?>"><?php echo $row->year; ?></option>
                              
                               <?php // echo "<option value='".$row->year_id."'>".$row->year."</option>";
                                }
                                ?>
				 </select>
			  </div>
                      </div>
                   <div class="col-lg-3"> 
                      <div class="section_1" style="margin-bottom: 10px;">
                           <label>Select Make*</label><br />
				<select name="make" id="make" class="form-control">
                                <option value="">Select Make</option>
                                <?php
                                 $query = $this->db->query('SELECT * FROM make');
                                foreach ($query->result() as $row){
                                   ?>
                                 
                                     <option  value="<?php echo $row->make_id; ?>"><?php echo $row->make_name; ?></option>
                              
                              <?php // echo "<option value='".$row->make_id."'>".$row->make_name."</option>";
                                }
                                ?>
                            </select>
			  </div>
                      
                      </div>
                  <div class="col-lg-3"> 
                      <div class="section_1" style="margin-bottom: 10px;">
                           <label>Select Model*</label><br />
				 <select name="model" id="model" class="form-control">
                                  <option value="">Select Model</option>
                                  <?php
                                   $query = $this->db->query('SELECT * FROM model');
                                  foreach ($query->result() as $row){
                                      ?>
                                 
                                     <option  value="<?php echo $row->model_id; ?>"><?php echo $row->model_name; ?></option>
                              <?php
                                  //echo "<option if($model==$row->model_id){ echo 'selected=selected';}value='".$row->model_id."'>".$row->model_name."</option>";
                                  }
                                  ?>
                              </select>     
			 </div>
                      </div>
                  <div class="col-lg-3"> 
                      <div class="section_1" style="margin-bottom: 10px;">
                           <label>Select Varient*</label><br />
			 <select id="varient" name="varient" class="form-control">
					<option value="">VARIENT</option>
                    <?php
                                   $query = $this->db->query('SELECT * FROM varient');
                                  foreach ($query->result() as $row){
                                      ?>
                                 
                                     <option value="<?php echo $row->varient_id; ?>"><?php echo $row->varient_name; ?></option>
                              <?php
                                  //echo "<option if($model==$row->model_id){ echo 'selected=selected';}value='".$row->model_id."'>".$row->model_name."</option>";
                                  }
                                  ?>
				 </select>
			 </div>
                      </div>
              </div>
        
        
                 <div class="col-lg-12">
                  <div class="col-lg-6"> 
                   <div class="form-group">
                            <label>Main category*</label><br />
			      <select name="service_catg" id="service_catg" class="form-control" style="width: 75%;">
                                <option value="">Select Service Category</option>
                                <?php
                                 $query = $this->db->query('SELECT * FROM service_catg');
                                foreach ($query->result() as $row){
                                echo "<option value='".$row->scatg_id."'>".$row->service_catg."</option>";
                                }
                                ?>
                            </select>
                          </div>    
                <div class="form-group">
                  <label>Enter Parent Category*</label><br />
                  <input type="text" class="form-control" style="width: 75%;" name="service_pcatg" id="service_pcatg" placeholder="Enter Parent Category" value="" maxlength="100" required/>
                </div> 
                      
                      <div class="form-group">
                  <label>Service Name*</label><br />
                  <input type="text" class="form-control" style="width: 75%;" name="service_name" id="service_name" placeholder="Enter Service Name" value="<?php echo $service_name;?>" maxlength="100" required/>
                </div> 
                      
                      <div class="form-group">
                  <label>Labour Applicable*</label><br />
                  <input type="text" class="form-control" style="width: 75%;" name="no_of_labour" id="no_of_labour" placeholder="Enter Service Name" value="" maxlength="100" required/>
                </div> 
                        <div class="form-group">
                  <label>Labour Hours*</label><br />
                  <input type="text" class="form-control" style="width: 75%;" name="labour_hour" id="labour_hour" placeholder="Enter Service Name" value="" maxlength="100" required/>
                </div> 
                      
                       <div class="form-group">
                  <label>Labour Fixed Price*</label><br />
                  <input type="text" class="form-control" style="width: 75%;" name="labour_fxdprice" id="labour_fxdprice" placeholder="Enter Service Name" value="" maxlength="100" required/>
                </div> 
                      
                    <div class="form-group">
                  <label>Service Description*</label><br />
                   <?php echo $this->ckeditor->editor("service_desc","$service_desc;");?>   
<!--                  <input type="text" class="form-control" style="width: 75%;" name="service_name" id="service_name" placeholder="Enter Service Name" value="" maxlength="100" required/>-->
                </div>    
                      
                    <div class="form-group">
                  <label>What We Do In Service*</label><br />
                     <?php echo $this->ckeditor->editor("do_in_service","default textarea value");?>                   </div>  
                  
                   <div class="form-group">
                  <label>When This Service Is Necessary Service*</label><br />
              <?php echo $this->ckeditor->editor("when_necessary","default textarea value");?>        
                   </div>      
                   
                       <div class="form-group">
                  <label>Notes*</label><br />
  <?php echo $this->ckeditor->editor("notes","default textarea value");?>                    
                       </div> 
                      
                         <div class="form-group">
                  <label>Add Genuine Parts*</label><br />
                           <input type="text" class="form-control" style="width: 75%;" name="gen_parts" id="gen_parts" placeholder="Enter Genuine Parts" value="" maxlength="100" required/>
  
                   </div>  
                      
                        <div class="form-group">
                  <label>Add Alternate Parts*</label><br />
                           <input type="text" class="form-control" style="width: 75%;" name="alt_parts" id="alt_parts" placeholder="Enter Alternate Parts" value="" maxlength="100" required/>
  
                   </div>  
                      
                      <div class="form-group">
                  <label>Related Optional Services*</label><br />
                           <input type="text" class="form-control" style="width: 75%;" name="relopt_services" id="relopt_services" placeholder="Enter Alternate Parts" value="" maxlength="100" required/>
  
                   </div>  
                    
                          <div class="form-group">
                  <label>Check Points*</label><br />
                           <input type="text" class="form-control" style="width: 75%;" name="check_point" id="check_point" placeholder="Enter Alternate Parts" value="" maxlength="100" required/>
  
                   </div> 
                      
                      
                          <div class="form-group">
                  <label>Related Blog*</label><br />
                           <input type="text" class="form-control" style="width: 75%;" name="related_blog" id="related_blog" placeholder="Enter Alternate Parts" value="" maxlength="100" required/>
  
                   </div> 
                      
                   
                <br>
                
                <button type="submit" id="addService" name="addService" class="btn btn-default">Add Service</button>
                </div>
              
               </div>
            <!--</form>-->
            <?php echo form_close(); ?>
        
    </div>
                                                        
                                                        
                            
                                                    
       
          
          <div class="table-responsive">
           
                                           <table class="table table-striped table-bordered table-hover" style="width: 96% !important;">
                                              
                                                    <tbody>
                                                   
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


 