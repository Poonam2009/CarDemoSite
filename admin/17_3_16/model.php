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
              <!--<table class="table table-hover table-responsive panel-heading">
                <thead>
                  <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Date Of Birth</th>
                    <th>Sex</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Country</th>
                    <th>State</th>
                    <th>City</th>
                    <th>Religion</th>
                    <th>Landmark</th>
                    <th>Zip Code</th>
                  </tr>
                </thead>
                <tbody>
                <?php
		/*		
                $getRegistation= "SELECT * FROM registration";
                $q =$DB_con->query($getRegistation);
                 while ($r = $q->fetch()) 
                        {
                                $id=$r['id'];
                                 $user_name=$r['name'];
                                $user_email=$r['email'];
                                $user_dob=$r['user_dob'];
                                $user_gender=$r['gender'];
                                $user_contact=$r['contact'];
                                $user_address=$r['address'];

                                //country name fetch from database using country_id
                                $user_country=$r['country'];
                                 $g = $DB_con->query("SELECT country_id,country_name FROM country WHERE country_id='".$user_country."'");
                             $f = $g->fetch();
                             $result = $f['country_name'];

                                //state name fetch from database using state_id
                                $user_state=$r['state'];
                                $statename = $DB_con->query("SELECT country_id,state_name FROM state WHERE state_id='".$user_state."'");
                             $s = $statename->fetch();
                             $state = $s['state_name'];


                                //city name fetch from database using city_id
                                $user_city=$r['city'];
                                $cityname = $DB_con->query("SELECT city_id,city_name FROM city WHERE city_id='".$user_city."'");
                             $s = $cityname->fetch();
                             $city = $s['city_name'];


                                $user_religion=$r['religion'];
                                $user_landmark=$r['landmark'];
                                $user_zipcode=$r['zipcode'];
                                //$user_fileToUpload=$_POST['image'];
                                //$user_fileToUpload=$_FILES['image']['name'];
                   */
										?>
                  <tr>
                                            <td class="center">
                                           <!-- <a data-toggle="modal" data-target="#myModal" >--
                                            <a data-toggle="modal"
                         data-target="#myModal" onClick="editExam(<?php echo $id;?>)"><?php echo $user_name; ?></a>
					<?php // echo htmlspecialchars($r['name'])?></a></td>
                                            <td class="center"><?php echo $user_email; ?></td>
                                            <td class="center"><?php echo $user_dob; ?></td>
                                            <td class="center"><?php echo $user_gender; ?></td>
                                            <td class="center"><?php echo $user_contact; ?></td>
                                            <td class="center"><?php echo $user_address; ?></td>
                                            <td class="center"><?php echo $result; ?></td>
                                            <td class="center"><?php echo $state; ?></td>
                                            <td class="center"><?php echo $city; ?></td>
                                            <td class="center"><?php echo $user_religion; ?></td>
                                            <td class="center"><?php echo $user_landmark; ?></td>
                                            <td class="center"><?php echo $user_zipcode; ?></td>
                                           
                                                                   
                                        </tr>  
                                        <?php //}?>   
                  
                </tbody>
              </table>-->
              </div>
              <div class="row">
                  <div class="col-md-12">                          
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Model
                        </div>                       
                        <div class="panel-body">
                        
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
  <script>
      
      function editModel(model_id,model_name)
{
	
	var model_name=model_name;
	var model_ids=model_id;
	
	model_name=document.getElementById('emodel_name').value=model_name;
	model_ids=document.getElementById('model_name_id').value=model_id;
	
	
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
        <h4 class="modal-title">Edit Model Name </h4>
      </div>
      <div class="modal-body" style="left-margin:30px">
        <?php 
	
		  
		?>
        <!-- <form role="form" class="form1" action="exam-action.php"  method="post" enctype="multipart/form-data">-->
        
           <?php
	echo validation_errors();

		$form_att = array('class' => 'box login', 'method' => 'post'); 

		echo form_open('ModelController/editModel', $form_att);

	?>
                                         
            <div class="form-group">
              <label>Model Name*</label><br />
              <input type="text" class="form-control" style="width: 85%;" name="emodel_name" id="emodel_name" value=""   required/>
             </div> 
            <div id="emodel_nameErr" class="eor"></div> 
          
            <button type="submit" id="editModelName" name="editModelName" class="btn btn-default">Update Model Name</button>
        <input type="hidden" name="model_name_id" id="model_name_id" value="">
<!--        </form>-->
        <?php echo form_close(); ?>
      </div>
<!--      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div>

  </div>
</div>
 
<div id="tabs" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
  <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
    <li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="tabs-1" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true"><a href="#tabs-1" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1"><i class="glyphicon glyphicon-list"></i>Model List</a></li>
     <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-2" aria-labelledby="ui-id-2" aria-selected="false" aria-expanded="false"><a href="#tabs-2" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-2"><i class="glyphicon glyphicon-list"></i>Add Model</a></li>
   </ul>
    
    <div id="tabs-1">
    
         <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
            <thead>
                <tr>                                            
                    <th>S.No</th>
                    <th>Model Name</th>
                    <th>Created On</th>
                     <th>Edit</th>
                    </tr>
            </thead>
           <tbody>
	<?php
        
        
//        if($data->num_rows() > 0)
//    {
//      foreach ($data->result() as $row)
//      {
//        echo $data[] = $row;
//      }
//      return $data;
//    }
        
          $sr=0;
        
        
        
        $query = $this->db->query('SELECT * FROM model');


       // print_r($_SESSION);
        

                              //  foreach ($data as $row){
                                    foreach ($query->result() as $row){
                       ?>
                <tr>
                        <td>
                                <?php
								// echo $row->model_id 
								  echo $sr=$sr + 1;   
								 ?>
                        </td>

               <td>
                                <?php echo $row->model_name ?>
                        </td>

                <td>
                                <?php echo $row->created_on ?>
                        </td>
                         <td style="text-align:center;">
<!--                             <a href="#" id="home_<?php echo $row->make_id ?>" class="edit btn default btn-xs purple"> 
                                 <i class="fa fa-edit"></i> Edit </a>-->
                         
                          <button type="button" class="btn btn-info btn-small" data-toggle="modal"
                         data-target="#myModal" onClick="editModel(<?php echo $row->model_id;?>,'<?php echo $row->model_name;?>')">Edit</button></td>
                          
                         
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

		echo form_open('ModelController/addModel', $form_att);

	?>
        <!-- <form role="form" action="book-action.php"  method="post" enctype="multipart/form-data">-->
                                        
                 <div class="col-lg-12">
                  <div class="col-lg-6"> 
                <div class="form-group">
                  <label>Model Name*</label><br />
                  <input type="text" class="form-control" style="width: 75%;" name="model_name" id="model_name" placeholder="Enter Model Name" value="" maxlength="100" required/>
                </div> 
                <div id="model_nameErr" class="eor"></div> 
               </div>
                <div class="col-lg-6"> 
                <br>
                 
                <button type="submit" id="addModel_name" name="addModel_name" class="btn btn-default" onclick="validateFrmeCategory();">Add Model</button>
               
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
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
        <input type="hidden" name="reg_id" id="reg_id" value="" >
        <?php 
		 $check=0;
		?>
        
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <img src="img/karlene-quigley-large.png" alt="" class="img-responsive img-circle" style="float:left" />
           <h4><?php echo $user_name; ?></h4>
        </div>
        <div class="modal-body" style="padding:62px 50px;">
            <h3> Details</h3>
            <hr style="border-top: 1px solid #4a91e3;" />
              <label for="email" value="" class="modalstyle"><i class="fa fa-user"></i> <strong>Name:</strong> </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="modalstyle" id="asd"> <?php echo $user_name; ?></span><br />
               <label for="email" class="modalstyle"><i class="fa fa-envelope"></i> <strong>Email:</strong> </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="modalstyle"> <?php echo $user_email; ?></span><br />
               <label for="email" class="modalstyle"><i class="fa fa-phone"></i> <strong>Contact:</strong> </label>&nbsp;<span class="modalstyle"> <?php echo $user_contact; ?></span><br />
               <label for="email" class="modalstyle"><i class="fa fa-home"></i> <strong>Address:</strong></label><span class="modalstyle"> <?php echo $user_address;  echo "&nbsp;&nbsp;"; echo $state; echo "&nbsp;&nbsp;"; echo $city; echo "&nbsp;&nbsp;"; echo $user_zipcode; echo "&nbsp;&nbsp;"; echo $result; ?></span><br />
               <label for="email" class="modalstyle"><i class="fa fa-map-marker"></i> <strong>Landmark:</strong> </label><span class="modalstyle"> <?php echo $user_landmark	; ?></span>
             
        </div>
        <div class="modal-footer">
        
        </div>
      </div>
      
    </div>
  </div>
</div>
  
              </section>
</section>

  <!-- Trigger the modal with a button -->


 