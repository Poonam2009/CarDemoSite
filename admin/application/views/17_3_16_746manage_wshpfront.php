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
                            Manage Workshop 
                        </div>                       
                        <div class="panel-body">
                        
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
  <script>
        function editStatus(workshop_id,status)
     {
	
        var workshop_id=workshop_id;
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
       
	workshop_id=document.getElementById('wshp_register_id').value=workshop_id;
	
	return false;
	}
      
      function editWorkshopDetails(wshop_id,wshop_name,wshop_location,wshop_category,phone_no,email,login_username,login_password)
     { 
        
        var wshop_id=wshop_id;
        var wshop_name=wshop_name;
        var wshop_location=wshop_location;
        var wshop_category=wshop_category;
	var phone_no=phone_no;
        var email=email;
        var login_username=login_username;
        var login_password=login_password;
       
        
	
	wshop_id=document.getElementById('wshop_name_id').value=wshop_id;
        wshop_name=document.getElementById('ewshop_name').value=wshop_name;
         wshop_location=document.getElementById('ewshop_location').value=wshop_location;
          wshop_category=document.getElementById('ewshop_category').value=wshop_category;
           phone_no=document.getElementById('ephone_no').value=phone_no;
            email=document.getElementById('emaile').value=email;
             login_username=document.getElementById('elogin_username').value=login_username;
               login_password=document.getElementById('elogin_password').value=login_password;
       
	
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

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Service Type Name </h4>
      </div>
      <div class="modal-body" style="left-margin:30px">
       
        <!-- <form role="form" class="form1" action=""  method="post" enctype="multipart/form-data">-->
        
           <?php
	echo validation_errors();

		$form_att = array('class' => 'box login', 'method' => 'post'); 

		echo form_open('AddWorkshopController/UpdateStatus', $form_att);

	?>
                                         
               <div class="form-group">
<label>Update  Status</label><br><br />
  <input type="radio" name="status" id="status1" value="1" style=" display:inline;"    <?php //if($status == '1'){ ?> <?php //}?>>Active&nbsp;&nbsp;&nbsp;
   
      <input type="radio" name="status" id="status2" value="0" style=" display:inline;" <?php //if($status == '0'){ ?> <?php //}?>>Inactive&nbsp;&nbsp;&nbsp;  
</div>
        
            <button type="submit" id="editStatus" name="editStatus" class="btn btn-default">Update Status</button>
        <input type="hidden" name="wshp_register_id" id="wshp_register_id" value="">
<!--        </form>-->
        <?php echo form_close(); ?>
      </div>

    </div>

  </div>
</div>
 
<div id="tabs" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
  <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
    <li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="tabs-1" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true"><a href="#tabs-1" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1"><i class="glyphicon glyphicon-list"></i>Registered Workshop List</a></li>
<!--     <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-2" aria-labelledby="ui-id-2" aria-selected="false" aria-expanded="false"><a href="#tabs-2" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-2"><i class="glyphicon glyphicon-list"></i>Add Workshop Details</a></li>-->
   </ul>
    
    <div id="tabs-1">
    
         <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
            <thead>
                <tr>                                            
                    <th>S.No</th>
                    <th>Workshop</th>
                    <th>Location</th>
                   <th>Contact No</th>
                    <th>Email</th>
                 
                   <th>Status </th>
<!--                    <th>Created On</th>-->
                     <th>Edit</th>
                    </tr>
            </thead>
           <tbody>
	<?php
  
        
        $sr=0;
        $query = $this->db->query('SELECT * FROM wshop_register');

                           foreach ($query->result() as $row){
                       ?>
                <tr>
                    <td>
                                <?php 
                                  echo $sr=$sr + 1;     
                                        
                                        ?>
                        </td>
                        <td>
                                <?php 
                                    
                                        
                                  //echo $row->wshop_name 
                                     echo wordwrap($row->b_name,10,"<br>\n");     
                                        ?>
                        </td>

               <td>
                                <?php //echo wordrap()echo $row->wshop_location 
                                        
                                        echo wordwrap($row->wshop_address,5,"<br>\n");
                                        ?>
                        </td>
                        
                        <td>
                                <?php echo $row->mobile_no ?>
                        </td>
                       
                        <td>
                                <?php 
                                 echo wordwrap($row->email,10,"<br>\n");
                                //echo $row->email ?>
                        </td>
                        
                        <td>
                                <?php if($row->status==1) echo "Active"; else echo "Inactive"; ?>
                        </td>
                        <td>
                               <button type="button" class="btn btn-info btn-small" data-toggle="modal"
                         data-target="#myModal" onClick="editStatus(<?php echo $row->wshop_id;?>,<?php echo $row->status;?>)">Edit</button></td>
                        
                        </td>
                       
<!--                         <td style="text-align:center;">-->

<!--                          <button type="button" class="btn btn-info btn-small" data-toggle="modal"
                         data-target="#myModal" onClick="editWorkshopDetails(<?php echo $row->wshop_id;?>,'<?php echo $row->wshop_name;?>','<?php echo $row->wshop_location;?>','<?php echo $row->wshop_category;?>','<?php echo $row->phone_no;?>','<?php echo $row->email;?>','<?php echo $row->login_username;?>','<?php echo $row->login_password;?>')">Edit</button></td>
                          -->
<!--                         </td>-->
                </tr>
                <?php } ?>
		</tbody>
              </table>
           </div>
     </div>
<!--    <div id="tabs-2">
        <?php
	echo validation_errors();

		$form_att = array('class' => 'box login', 'method' => 'post'); 

		echo form_open('AddWorkshopController/addWorkshop', $form_att);

	?>
         <form role="form" action=""  method="post" enctype="multipart/form-data">
                                        
                 <div class="col-lg-12">
                  <div class="col-lg-6"> 
                   <div class="form-group">
                  <label>Enter Workshop  Name*</label><br />
                  <input type="text" class="form-control" style="width: 75%;" name="wshop_name" id="wshop_name" placeholder="Enter Workshop Name" value="" maxlength="100" required/>
                </div> 
                   <div class="form-group">
                  <label>Enter Location*</label><br />
                  <input type="text" class="form-control" style="width: 75%;" name="wshop_location" id="wshop_location" placeholder="Enter workshop Location" value="" maxlength="100" required/>
                </div> 
                    <div class="form-group">
                  <label>Enter Workshop  Categories*</label><br />
                      <select name="wshop_category" id="wshop_category" class="form-control" style="width: 75%;"  required>
                        <option value="">select Workshop category</option>
                        <option value="Premium">Premium</option>
                        <option value="Basic">Basic</option>
                       </select>
                    </div>   
                  <div class="form-group">
                  <label>Enter Phone No*</label><br />
                  <input type="text" class="form-control" style="width: 75%;" name="phone_no" id="phone_no" placeholder="Enter Phone No." value="" maxlength="10" required/>
                </div> 
                   <div class="form-group">
                  <label>Enter Email*</label><br />
                  <input type="text" class="form-control" style="width: 75%;" name="email" id="email" placeholder="Enter Email" value="" maxlength="100" required/>
                </div>  
                     
                 <div class="form-group">
                  <label>Username*</label><br />
                  <input type="text" class="form-control" style="width: 75%;" name="login_username" id="login_username" placeholder="Enter User Name" value="" maxlength="100" required/>
                </div>  
                <div class="form-group">
                  <label>Password*</label><br />
                  <input type="text" class="form-control" style="width: 75%;" name="login_password" id="login_password" placeholder="Enter Password " value="" maxlength="100" required/>
                </div>  
                <br>
                
                <button type="submit" id="addWorkshop" name="addWorkshop" class="btn btn-default">Add Workshop</button>
               
               </div>
               </div>
            </form>
            <?php echo form_close(); ?>
        
    </div>-->
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


 