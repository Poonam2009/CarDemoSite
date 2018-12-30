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
                            Manage Service Category
                        </div>                       
                        <div class="panel-body">
                        
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
  <script>
 
      function editServiceCatg(scatg_id,service_catg,service_pcatg,make_list)
     {
	
        var service_catg = service_catg;
        var service_pcatg = service_pcatg;
        var scatg_id     = scatg_id;
       
	
        service_catg=document.getElementById('service_catg').value=service_catg;
        service_pcatg=document.getElementById('service_pcatg').value=service_pcatg;
        
	scatg_id=document.getElementById('scatg_id').value=scatg_id;
	
	return false;
	}
      </script>
  <script type='text/javascript' language='javascript'>
function getcall(){
   // alert("in the getcall");
   // alert()
   
    var dataString=document.getElementById('stage_id').value;
   // alert(dataString);
    $.ajax({
           // url: '<?php //echo base_url().'ServiceCatg/get_all_list';?>',
             url: '<?php echo base_url('index.php/ServiceCatg/get_all_list'); ?>',
            type:'POST',
           // data: {'curr_values':dataString},
            //data:{'nameA':dataString},
           data    : {'stage':dataString},
            //data: postData ,
           // dataType: 'json',
           // success: function(output_string){
                  //  $('#result_table').append(output_string);
                    
                      success: function(res){

          $("#result_table").html(res);
                    
                    
                } // End of success function of ajax form
            }); // End of ajax call 
 
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
        <h4 class="modal-title">Edit Service Category </h4>
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
              <label>Labour Cost*</label><br />
              <input type="text" class="form-control" style="width: 85%;" name="elabour_cost" id="elabour_cost" value=""   required/>
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
                    <th>Service Category</th>
                    <th>Stage</th>
                    <th>Make List</th>
                    <th>Created On</th>
<!--                     <th>Edit</th>-->
                    </tr>
            </thead>
           <tbody>
	<?php
  
        
        $sr=0;
        $query = $this->db->query('SELECT * FROM service_catg');

                           foreach ($query->result() as $row){
                       ?>
                <tr>
                    <td>
                                <?php //echo $row->stype_id ;
                                  echo $sr=$sr + 1;     
                                        
                                        ?>
                        </td>
                        <td>
                                <?php echo $row->service_catg; 
                                       
                                  ?>
                        </td>

                       <td>
                                <?php echo $row->service_pcatg ?>
                        </td>
                        <td>
                                <?php 
                                $make_list=$row->make;
                                 $make_lists=explode('|',$make_list);
                                 
                                 foreach($make_lists as $makes)
                                  {   
                                    $this->db->select('*');
                                    $this->db->from('make');
                                    $this->db->where('make_id',$makes); 
                                    $query5 = $this->db->get();
                                    foreach ($query5->result() as $row4)
                                    { 
                                     echo $row4->make_name; 
                                    }                  
                                   echo ",";
                                 }
                            ?>
                        </td>
                        <td>
                                <?php echo $row->created_on ?>
                        </td>
<!--                        <td style="text-align:center;">

                          <button type="button" class="btn btn-info btn-small" data-toggle="modal"
                         data-target="#myModal" onClick="editServiceCatg(<?php echo $row->scatg_id;?>,<?php echo $row->service_catg;?>,'<?php echo $row->service_pcatg;?>')">Edit</button></td>
                          
                         </td>-->
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

		echo form_open('ServiceCatg/addServiceCatg', $form_att);

	?>
        <!-- <form role="form" action=""  method="post" enctype="multipart/form-data">-->
                                        
                 <div class="col-lg-12">
                  <div class="col-lg-6"> 
                      <div class="form-group">
                  <label>Enter Category  Name*</label><br />
                  <input type="text" class="form-control" style="width: 75%;" name="service_catg" id="service_catg" placeholder="Enter Service Category" value="" maxlength="50" required/>
                </div> 
                    <div class="form-group">
                            <label>Select Stage*</label><br />
                            <select name="service_pcatg" id="stage_id" class="form-control" style="width:75%;" onchange="getcall();">
                                <option value="">Select Stage</option>
                                <option value="1">Stage1</option>
                                <option value="2">Stage2</option>
                                <option value="3">Stage3</option>
                            </select>
                          </div>      
                <br>
                
                <div id='result_table'>
 
</div>
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


 