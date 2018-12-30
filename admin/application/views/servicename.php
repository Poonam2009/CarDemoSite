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
                            Manage Services Name
                        </div>                       
                        <div class="panel-body">
                        
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
  <script>
      
      function editServiceName(sname_id,stype_id,stype_name,service_name,part_name,labour_cost,part_type)
     {
	
        var sname_id=sname_id;
        var stype_id=stype_id;
        var stype_name=stype_name;
        var service_name=service_name;
        var part_name=part_name;
	var labour_cost=labour_cost;
        var part_type=part_type;
	
	stype_name=document.getElementById('eservice_type').value=stype_name;
        service_name=document.getElementById('eservice_name').value=service_name;
        part_name=document.getElementById('epart_name').value=part_name;
         part_type=document.getElementById('epart_type').value=part_type;
        labour_cost=document.getElementById('elabour_cost').value=labour_cost;
	sname_id=document.getElementById('service_name_id').value=sname_id;
	
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
        <h4 class="modal-title">Edit Labour Cost </h4>
      </div>
      <div class="modal-body" style="left-margin:30px">
       
        <!-- <form role="form" class="form1" action=""  method="post" enctype="multipart/form-data">-->
        
           <?php
	echo validation_errors();

		$form_att = array('class' => 'box login', 'method' => 'post'); 

		echo form_open('ServiceNameController/editServiceName', $form_att);

	?>
                                         
            <div class="form-group">
              <label>Service Type Name</label><br />
              <input type="text" class="form-control" style="width: 85%;" name="eservice_type" id="eservice_type" value=""   readonly/>
             </div> 
        <div class="form-group">
              <label>Service  Name</label><br />
              <input type="text" class="form-control" style="width: 85%;" name="eservice_name" id="eservice_name" value=""   readonly/>
             </div> 
        <div class="form-group">
              <label>Part  Name</label><br />
              <input type="text" class="form-control" style="width: 85%;" name="epart_name" id="epart_name" value=""   readonly/>
             </div> 
         <div class="form-group">
              <label>Part  Type</label><br />
              <input type="text" class="form-control" style="width: 85%;" name="epart_type" id="epart_type" value=""   readonly/>
             </div>
        <div class="form-group">
              <label>Labour Cost*</label><br />
              <input type="number" step="any" class="form-control" style="width: 85%;" name="elabour_cost" id="elabour_cost" value="" required/>
             </div> 
        
            <button type="submit" id="editservice_name" name="editservice_name" class="btn btn-default">Update Cost</button>
        <input type="hidden" name="service_name_id" id="service_name_id" value="">
<!--        </form>-->
        <?php echo form_close(); ?>
      </div>

    </div>

  </div>
</div>
 
<div id="tabs" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
  <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
    <li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="tabs-1" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true"><a href="#tabs-1" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1"><i class="glyphicon glyphicon-list"></i>Service List</a></li>
     <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-2" aria-labelledby="ui-id-2" aria-selected="false" aria-expanded="false"><a href="#tabs-2" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-2"><i class="glyphicon glyphicon-list"></i>Add Service Name</a></li>
   </ul>
    
    <div id="tabs-1">
    
         <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
            <thead>
                <tr>                                            
                    <th>S.No</th>
                    <th>Service Type</th>
                    <th>Service Name</th>
                    <th>Part Name</th>
                    <th>Part Type</th>
                    <th>Labour Cost</th>
<!--                    <th>Is Active </th>-->
<!--                    <th>Created On</th>-->
                     <th>Edit</th>
                    </tr>
            </thead>
           <tbody>
	<?php
  
        
        $sr=0;
        $query = $this->db->query('SELECT * FROM service_name');

                           foreach ($query->result() as $row){
                       ?>
                <tr>
                    <td>
                                <?php //echo $row->stype_id ;
                                  echo $sr=$sr + 1;     
                                        
                                        ?>
                        </td>
                        <td>
                                <?php //echo $row->stype_id; 
                                        
                                        
                                $this->db->select('*');
                                $this->db->from('service_type');
                                $this->db->where('stype_id',$row->stype_id); 
                                $query2 = $this->db->get();
                                foreach ($query2->result() as $row2){ 
                                echo $row2->stype_name; 
                                        
                                }
                                        
                                      
                                        ?>
                        </td>

               <td>
                                <?php echo $row->service_name ?>
                        </td>
                        <td>
                                <?php
                                $this->db->select('*');
                                $this->db->from('addpart');
                                $this->db->where('part_id',$row->part_name); 
                                $query3 = $this->db->get();
                                foreach ($query3->result() as $row3){ 
                                echo $row3->part_name; 
                                        
                                }
                                
                                
                                //echo $row->part_name ?>
                        </td>
                         <td>
                                <?php echo $row->part_type ?>
                        </td>
                        
                        <td>
                                <?php echo $row->labour_cost ?>
                        </td>
                        
<!--                        <td>
                                <?php echo $row->is_active ?>
                        </td>-->

<!--                        <td>
                                <?php echo $row->created_on ?>
                        </td>-->
                       
                         <td style="text-align:center;">

                          <button type="button" class="btn btn-info btn-small" data-toggle="modal"
                         data-target="#myModal" onClick="editServiceName(<?php echo $row->sname_id;?>,<?php echo $row->stype_id;?>,'<?php echo $row2->stype_name;?>','<?php echo $row->service_name;?>','<?php echo $row3->part_name;?>','<?php echo $row->labour_cost;?>','<?php echo $row->part_type;?>')">Edit</button></td>
                          
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

		echo form_open('ServiceNameController/addServiceName', $form_att);

	?>
        <!-- <form role="form" action=""  method="post" enctype="multipart/form-data">-->
                                        
                 <div class="col-lg-12">
                  <div class="col-lg-6"> 
                   <div class="form-group">
                            <label>Select Service Type*</label><br />
			      <select name="service_type" id="service_type" class="form-control" style="width: 75%;">
                                <option value="">Select Service Type</option>
                                <?php
                                 $query = $this->db->query('SELECT * FROM service_type');
                                foreach ($query->result() as $row){
                                echo "<option value='".$row->stype_id."'>".$row->stype_name."</option>";
                                }
                                ?>
                            </select>
                          </div>    
                <div class="form-group">
                  <label>Enter service  Name*</label><br />
                  <input type="text" class="form-control" style="width: 75%;" name="service_name" id="service_name" placeholder="Enter Service Name" value="" maxlength="100" required/>
                </div> 
                    <div class="form-group">
                            <label>Select Part Name*</label><br />
			      <select name="part_name" id="part_name" class="form-control" style="width:75%;">
                                <option value="">Select Part Name</option>
                                <?php
                                 $query = $this->db->query('SELECT * FROM addpart');
                                foreach ($query->result() as $row){
                                echo "<option value='".$row->part_id."'>".$row->part_name."</option>";
                                }
                                ?>
                            </select>
                          </div>      
                <div class="form-group">
                Genuine Part&nbsp;&nbsp;<input type="radio" name="part_type" id="genuine_part"  value="GENUINE" checked="checked" onclick="onChange()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Alternate Part
            <input type="radio" name="part_type" id="alt_part"  value="ALTERNATE" onclick="onChange()" >
                                      
                                      </div>
                      
                     <div class="form-group">
                  <label>Enter Labour Cost*</label><br />
                  <input type="number" step="any" class="form-control" style="width: 75%;" name="labour_cost" id="labour_cost" placeholder="Enter Labour Cost" value="" min="1" maxlength="100" required/>
                </div> 
                
                <br>
                
                <button type="submit" id="addService_name" name="addService_name" class="btn btn-default">Add Service</button>
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


 