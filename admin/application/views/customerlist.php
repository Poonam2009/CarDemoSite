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
              <div class="row">
                  <div class="col-md-12">                          
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Customer 
                        </div>                       
                        <div class="panel-body">
                        
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
  <script>
      
      function editStatus(cust_register_id,status)
     {
	
        var cust_register_id=cust_register_id;
      	var status=status;
        
        if(status=='0')
        {
         //document.getElementById('status2').value=status; 
         document.getElementById('status2').checked = true;
         
        }
        else
        {
           //document.getElementById('status1').value=status;
          document.getElementById('status1').checked = true;
            
        }
       
	cust_register_id=document.getElementById('cust_register_id').value=cust_register_id;
	
	return false;
	}
      </script>
      
      <script type="text/javascript">
    $(document).on('click','.status_checks',function(){
      var status = ($(this).hasClass("btn-success")) ? '0' : '1';
	  //alert(status);
      var msg = (status=='0')? 'Deactivate' : 'Activate';
      if(confirm("Are you sure to "+ msg)){
        var current_element = $(this);
       var id = $(current_element).attr('data');
		
        url = "<?php echo base_url();?>index.php/Customer/UpdateStatus";
        $.ajax({
          type:"POST",
          url: url,
          data: {id:id,status:status},
          success: function(data)
          {   
            location.reload();
          }
        });
      }      
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

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Profile Status </h4>
      </div>
      <div class="modal-body" style="left-margin:30px">
       
        <!-- <form role="form" class="form1" action=""  method="post" enctype="multipart/form-data">-->
        
           <?php
	echo validation_errors();

		$form_att = array('class' => 'box login', 'method' => 'post'); 

		echo form_open('Customer/UpdateStatus', $form_att);

	?>
         <div class="form-group">
<label>Update  Status</label><br><br />
  <input type="radio" name="status" id="status1" value="1" style=" display:inline;"    <?php //if($status == '1'){ ?> <?php //}?>>Active&nbsp;&nbsp;&nbsp;
   
      <input type="radio" name="status" id="status2" value="0" style=" display:inline;" <?php //if($status == '0'){ ?> <?php //}?>>Inactive&nbsp;&nbsp;&nbsp;  
</div>
        
            <button type="submit" id="editStatus" name="editStatus" class="btn btn-default">Update Status</button>
        <input type="hidden" name="cust_register_id" id="cust_register_id" value="">
<!--        </form>-->
        <?php echo form_close(); ?>
      </div>

    </div>

  </div>
</div>
 
<div id="tabs" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
  <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
    <li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="tabs-1" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true"><a href="#tabs-1" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1"><i class="glyphicon glyphicon-list"></i>Customer List</a></li>
<!--     <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-2" aria-labelledby="ui-id-2" aria-selected="false" aria-expanded="false"><a href="#tabs-2" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-2"><i class="glyphicon glyphicon-list"></i>Add Service Name</a></li>-->
   </ul>
    
    <div id="tabs-1">
    
         <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
            <thead>
                <tr>                                            
                    <th>S.No</th>
                    <th>UserName</th>
                    <th>Email</th>
                    <th>Password</th>
                   <th>Status </th>
                    <th>Created On</th>
                    <th>Edit</th>
                    </tr>
            </thead>
           <tbody>
	<?php
  
        
        $sr=0;
        $query = $this->db->query('SELECT * FROM customer_register');

                           foreach ($query->result() as $row){
                       ?>
                <tr>
                    <td>
                                <?php //echo $row->stype_id ;
                                  echo $sr=$sr + 1;     
                                        
                                        ?>
                        </td>
                       

               <td>
                                <?php echo $row->username ?>
                        </td>
                        
                        <td>
                                <?php echo $row->email ?>
                        </td>
                        
                        <td>
                                <?php echo $row->password ?>
                        </td>

                       <td>
                                <?php if($row->status==1) echo "Active"; else echo "Inactive"; ?>
                        </td>
                       
                         <td>
                                <?php echo $row->created_on ?>
                        </td>
                        <td style="text-align:center;">
       <!--                 <i data="<?php echo $row->cust_register_id;?>" class="status_checks btn
  <?php echo ($row->status)?
  'btn-success': 'btn-danger'?>"><?php echo ($row->status)? 'Active' : 'Inactive'?>
 </i>-->
                         <button type="button" class="btn btn-info btn-small" data-toggle="modal"
                         data-target="#myModal" onClick="editStatus(<?php echo $row->cust_register_id;?>,<?php echo $row->status;?>)">Change Status</button></td>
                        
                         </td>
  
  
                </tr>
                <?php } ?>
		</tbody>
              </table>
           </div>
     </div>
<!--    <div id="tabs-2">
        <?php
//	echo validation_errors();
//
//		$form_att = array('class' => 'box login', 'method' => 'post'); 
//
//		echo form_open('ServiceNameController/addServiceName', $form_att);

	?>
         <form role="form" action=""  method="post" enctype="multipart/form-data">
                                        
                 <div class="col-lg-12">
                  <div class="col-lg-6"> 
                   <div class="form-group">
                            <label>Select Service Type*</label><br />
			      <select name="service_type" id="service_type" class="form-control" style="width: 75%;">
                                <option value=""></option>
                                <?php
//                                 $query = $this->db->query('SELECT * FROM service_type');
//                                foreach ($query->result() as $row){
//                                echo "<option value='".$row->stype_id."'>".$row->stype_name."</option>";
//                                }
                                ?>
                            </select>
                          </div>    
                <div class="form-group">
                  <label>Enter service  Name*</label><br />
                  <input type="text" class="form-control" style="width: 75%;" name="service_name" id="service_name" placeholder="Enter Service Name" value="" maxlength="100" required/>
                </div> 
               
                     <div class="form-group">
                  <label>Enter Labour Cost*</label><br />
                  <input type="text" class="form-control" style="width: 75%;" name="labour_cost" id="labour_cost" placeholder="Enter Labour Cost" value="" maxlength="100" required/>
                </div> 
                 </div>
                <br>
                
                <button type="submit" id="addService_name" name="addService_name" class="btn btn-default">Add Service</button>
               
              
               </div>
            </form>
            <?php //echo form_close(); ?>
        
    </div>-->
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


 