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
                            Manage Year List
                        </div>                       
                        <div class="panel-body">
                        
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
  <script>
      
      function editYear(year_id,eyear)
     {
	
        var year_id=year_id;
        var eyear=eyear;
        
	
	
        eyear=document.getElementById('eyear').value=eyear;
       
	year_id=document.getElementById('year_id').value=year_id;
	
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
        <h4 class="modal-title">Edit Year </h4>
      </div>
      <div class="modal-body" style="left-margin:30px">
       
        <!-- <form role="form" class="form1" action=""  method="post" enctype="multipart/form-data">-->
        
           <?php
	echo validation_errors();

		$form_att = array('class' => 'box login', 'method' => 'post'); 

		echo form_open('LocIntController/editYear', $form_att);

	?>
           
        <div class="form-group">
              <label> Year</label><br />
              <input type="text" class="form-control" style="width: 85%;" name="eyear" id="eyear" value="" required/>
             </div> 
       
            <button type="submit" id="edityear" name="edityear" class="btn btn-default">Update</button>
        <input type="hidden" name="year_id" id="year_id" value="">
<!--        </form>-->
        <?php echo form_close(); ?>
      </div>

    </div>

  </div>
</div>
 
<div id="tabs" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
  <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
    <li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="tabs-1" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true"><a href="#tabs-1" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1"><i class="glyphicon glyphicon-list"></i>Year List</a></li>
     <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-2" aria-labelledby="ui-id-2" aria-selected="false" aria-expanded="false"><a href="#tabs-2" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-2"><i class="glyphicon glyphicon-list"></i>Add Year</a></li>
   </ul>
    
    <div id="tabs-1">
    
         <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
            <thead>
                <tr>                                            
                    <th>S.No</th>
                    <th>Year</th>
      <!--          <th>Created On</th>-->
                     <th>Edit</th>
                    </tr>
            </thead>
           <tbody>
	<?php
  
        $sr=0;
        $query = $this->db->query('SELECT * FROM add_year');

                           foreach ($query->result() as $row){
                       ?>
                <tr>
                    <td>
                                <?php //echo $row->stype_id ;
                                  echo $sr=$sr + 1;     
                                        
                                        ?>
                        </td>
                       

               <td>
                                <?php echo $row->year ?>
                        </td>
                        
                        
                       
                        
<!--                        <td>
                                <?php //echo $row->is_active ?>
                        </td>-->

<!--                        <td>
                                <?php echo $row->created_on ?>
                        </td>-->
                       
                         <td style="text-align:center;">

                          <button type="button" class="btn btn-info btn-small" data-toggle="modal"
                         data-target="#myModal" onClick="editYear(<?php echo $row->year_id;?>,'<?php echo $row->year;?>')">Edit</button></td>
                          
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

		echo form_open('LocIntController/addYear', $form_att);

	?>
        <!-- <form role="form" action=""  method="post" enctype="multipart/form-data">-->
                                        
                 <div class="col-lg-12">
                  <div class="col-lg-6"> 
                   
                <div class="form-group">
                  <label>Enter Year*</label><br />
                  <input type="text" class="form-control" style="width: 75%;" name="year" id="year" placeholder="Enter Year" value="" maxlength="20" required/>
                </div> 
                 
                <br>
                <button type="submit" id="addYear" name="addYear" class="btn btn-default">Add Year</button>
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


 