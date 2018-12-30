<?php 
include_once('header.php');
//include_once('db.php');
 
 ?>


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
                            Manage Facility Type
                        </div>                       
                        <div class="panel-body">
                        
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
  <script>
      
      function editfacility(facility_id,facility_name)
      {
	
	var facility_name=facility_name;
	var facility_ids=facility_id;
	
	facility_name=document.getElementById('efacility').value=facility_name;
	facility_ids=document.getElementById('facility_name_id').value=facility_id;
	
	
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
        <h4 class="modal-title">Edit Facility Name </h4>
      </div>
      <div class="modal-body" style="left-margin:30px">
           <?php
                echo validation_errors();

		$form_att = array('class' => 'box login', 'method' => 'post'); 

		echo form_open('AddWorkshopController/editfacility_name', $form_att);

	?>
                                         
            <div class="form-group">
              <label>Facility Name*</label><br />
              <input type="text" class="form-control" style="width: 85%;" name="efacility" id="efacility" value=""   required/>
             </div> 
          <button type="submit" id="editfacility_name" name="editfacility_name" class="btn btn-default">Update Facility Name</button>
         <input type="hidden" name="facility_name_id" id="facility_name_id" value="">
<!--        </form>-->
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>
 
<div id="tabs" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
  <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
    <li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="tabs-1" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true"><a href="#tabs-1" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1"><i class="glyphicon glyphicon-list"></i>Facility List</a></li>
     <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-2" aria-labelledby="ui-id-2" aria-selected="false" aria-expanded="false"><a href="#tabs-2" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-2"><i class="glyphicon glyphicon-list"></i>Add Facility</a></li>
   </ul>
     <div id="tabs-1">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
            <thead>
                <tr>                                            
                    <th>S.No</th>
                    <th> Name</th>
                    <th>Created On</th>
                     <th>Edit</th>
                    </tr>
            </thead>
           <tbody>
	<?php
        
        $query = $this->db->query('SELECT * FROM facility_type');

                       foreach ($query->result() as $row){
                       ?>
                <tr>
                        <td>
                                <?php echo $row->facility_id ?>
                        </td>

                        <td>
                                <?php echo $row->facility_name ?>
                        </td>

                        <td>
                                <?php echo $row->created_on ?>
                        </td>
                         <td style="text-align:center;">

                          <button type="button" class="btn btn-info btn-small" data-toggle="modal"
                         data-target="#myModal" onClick="editfacility(<?php echo $row->facility_id;?>,'<?php echo $row->facility_name;?>')">Edit</button></td>
                          
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

		echo form_open('AddWorkshopcontroller/addFacilityType', $form_att);

	?>                 
                 <div class="col-lg-12">
                  <div class="col-lg-6"> 
                <div class="form-group">
                  <label>Enter Facility Name*</label><br />
                  <input type="text" class="form-control" style="width: 75%;" name="facilityname" id="facilityname" placeholder="Enter Facility Name" value="" maxlength="100" required/>
                </div> 
               </div>
                <div class="col-lg-6"> 
                <br>
                 
                <button type="submit" id="addfacility_type" name="addfacility_type" class="btn btn-default">Add Facility Type</button>
               
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
 <footer><p>All right reserved. Designed by: <a href="http://www.invadertech.com" target="_blank" alt="Invader">Invader Technologies Pvt. Ltd.</a></p></footer>
      </div>
   <!-- /. PAGE INNER  -->
  </div>
               <!-- Modal -->
  <!-- Modal -->
  
</div>
  
              </section>
</section>

  <!-- Trigger the modal with a button -->


 