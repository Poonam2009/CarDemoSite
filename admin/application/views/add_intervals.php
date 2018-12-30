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
 <script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor_4.5.7_basic/ckeditor/ckeditor.js"></script>

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
              <div class="row">
                  <div class="col-md-12">                          
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Interval Details
                        </div>                       
                        <div class="panel-body">
                        
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
  <script>
      
      function editIntervals(interval_id,interval_name,more_info)
     {
     
        var interval_id=interval_id;
        var interval_name=interval_name;
        var more_info=more_info;
        
       alert(interval_id);
       alert(interval_name);
       alert(more_info);
	
      interval_name=document.getElementById('einterval_name').value=interval_name;
   
      document.getElementById("emore_info").value = more_info;
      
	interval_id=document.getElementById('interval_id').value=interval_id;
	
	return false;
	}
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

<div id="myModalInterval" class="modal fade" role="dialog">
  <div class="modal-dialog" style="width:70%;">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Intervals Details </h4>
      </div>
      <div class="modal-body" style="left-margin:30px">
       
        <!-- <form role="form" class="form1" action=""  method="post" enctype="multipart/form-data">-->
        
           <?php
	echo validation_errors();

		$form_att = array('class' => 'box login', 'method' => 'post'); 

		echo form_open('LocIntController/editLocationName', $form_att);

	?>
           
        <div class="form-group">
              <label>Interval Name</label><br />
              <input type="text" class="form-control" style="width: 85%;" name="einterval_name" id="einterval_name" value="" required/>
             </div> 
        <div class="form-group">
             <label>Enter More Info*</label><br />
             <textarea cols="105" rows="5" name="emore_info" id="emore_info"></textarea>
            <?php //echo $this->ckeditor->editor("emore_info","default textarea value");?>  
          </div>   
       
            <button type="submit" id="editinterval_name" name="editinterval_name" class="btn btn-default">Update</button>
        <input type="hidden" name="interval_id" id="interval_id" value="">
<!--        </form>-->
        <?php echo form_close(); ?>
      </div>

    </div>

  </div>
</div>
 
<div id="tabs" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
  <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
    <li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="tabs-1" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true"><a href="#tabs-1" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1"><i class="glyphicon glyphicon-list"></i>Interval List</a></li>
     <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-2" aria-labelledby="ui-id-2" aria-selected="false" aria-expanded="false"><a href="#tabs-2" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-2"><i class="glyphicon glyphicon-list"></i>Add Interval Details</a></li>
   </ul>
    
    <div id="tabs-1">
    
         <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
            <thead>
                <tr>                                            
                    <th>S.No</th>
                    <th>Intervals</th>
                      <th>More Info</th>
                     <th>Edit</th>
                    </tr>
            </thead>
           <tbody>
	<?php
  
        $sr=0;
        $query = $this->db->query('SELECT * FROM add_interval');

                           foreach ($query->result() as $row){
                       ?>
                <tr>
                    <td>
                                <?php //$row->interval_id;
                                  echo $sr=$sr + 1;     
                                        
                                        ?>
                        </td>
                       
                        <td>
                                <?php echo $row->interval_name ?>
                        </td>
                        
                        <td>
                                <?php echo $row->more_info ?>
                        </td>
                         <td style="text-align:center;">
                                              <button type="button" class="btn btn-info btn-small" onclick="location.href='<?php echo base_url();?>index.php/LocIntController/EditInterval/<?php echo $row->interval_id;?>'" >Edit</button>
              
                              <?php 
//                              echo "<a target='popup'  href='<EditInterval/$row->interval_id' 
//  
//  onclick=\"window.open('EditInterval/$row->interval_id','popup','height=600,width=1200'); return false;\">
//    Change
//</a>";
                              
                              ?>
<!--                          <button type="button" class="btn btn-info btn-small" data-toggle="modal"
                         data-target="#myModalInterval" onClick="editIntervals(<?php //echo $row->interval_id;?>,'<?php //echo $row->interval_name;?>','<?php //echo $row->more_info;?>')">Edit</button>
                         -->
                         </td>
                    </tr>
                <?php } ?>
		</tbody>
              </table>
           </div>
     </div>
    <div id="tabs-2">
        <?php
	echo validation_errors();

		$form_att = array('class' => 'box login', 'method' => 'post'); 

		echo form_open('LocIntController/addIntervals', $form_att);

	?>
        <!-- <form role="form" action=""  method="post" enctype="multipart/form-data">-->
                                        
                 <div class="col-lg-12">
                  <div class="col-lg-6"> 
                   
                <div class="form-group">
                  <label>Enter Intervals  Name*</label><br />
                  <input type="text" class="form-control" style="width: 75%;" name="interval_name" id="interval_name" placeholder="Enter Intervals" value="" maxlength="200" required/>
                </div> 
                  <div class="form-group">
                  <label>Enter More Info*</label><br />
  <?php echo $this->ckeditor->editor("more_info","default textarea value");?>  
                  </div>     
                 
                <br>
                <button type="submit" id="addIntervals" name="addIntervals" class="btn btn-default">Add Intervals</button>
                </div>
              
               </div>
            <!--</form>-->
            <?php echo form_close(); ?>
        
    </div>
</div>
          
  <!--End Advanced Tables -->	
      </div>
      <!-- /.panel-body -->
  </div>
  <!-- /.panel -->

</div>
<!-- /.col-lg-12 -->
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


 