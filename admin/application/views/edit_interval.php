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
                                 Edit Intervals Page
                             </div>
                           <div class="col-md-3" align="right">
                            
                           <button type="button" class="btn btn-info btn-small" onclick="location.href='<?php echo base_url();?>index.php/LocIntController/intervalList'" >Back</button>
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
          // echo $message;
             //echo message;
     ?>
            <h3>Interval Details</h3>
                                           <table class="table table-striped table-bordered table-hover" style="width: 96% !important;">
                                              
                                                    <tbody>
                                                        <?php
  
        
        $sr=0;
        $query = $this->db->query('SELECT * FROM add_interval where interval_id='.$message.'');

                           foreach ($query->result() as $row){
                               
                               $interval_name=$row->interval_name;
                               $more_info=$row->more_info;
                                     
                           }
                          
                        
                       ?>
                                                        
                                                        
                                                        
                                                        <div id="tabs-2">
        <?php
	echo validation_errors();

		$form_att = array('class' => 'box login', 'method' => 'post'); 

		echo form_open('LocIntController/editInterval_details', $form_att);

	?>
        <!-- <form role="form" action=""  method="post" enctype="multipart/form-data">-->
                   
                 <div class="col-lg-12">
                  <div class="col-lg-6"> 
                  <div class="form-group">
                  <label>Interval Name*</label><br />
                  <input type="text" class="form-control" style="width: 75%;" name="einterval_name" id="einterval_name" placeholder="Enter Interval Name" value="<?php echo $interval_name;?>" maxlength="100" required/>
                </div> 
                      
                    <div class="form-group">
                  <label>More Info*</label><br />
                   <?php echo $this->ckeditor->editor("emore_info","$more_info;");?>   
<!--                  <input type="text" class="form-control" style="width: 75%;" name="service_name" id="service_name" placeholder="Enter Service Name" value="" maxlength="100" required/>-->
                </div>    
                   <input type="hidden" name="interval_id" id="interval_id" value="<?php echo $row->interval_id; ?>">
                <br>
                
                <button type="submit" id="updateInterval" name="updateInterval" class="btn btn-default">Update Intervals</button>
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


 