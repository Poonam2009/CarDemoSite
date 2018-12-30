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
                            Manage Product Categories
                        </div>                       
                        <div class="panel-body">
                        
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
  <script>
      
      function editCategoryName(cat_id,cat_name)
{
	
	var cat_name=cat_name;
	var cat_id=cat_id;
	
	cat_name=document.getElementById('ecat_name').value=cat_name;
	cat_ids=document.getElementById('cat_name_id').value=cat_id;
	
	
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
        <h4 class="modal-title">Edit Product Category</h4>
      </div>
      <div class="modal-body" style="left-margin:30px">
       
        <!-- <form role="form" class="form1" action="exam-action.php"  method="post" enctype="multipart/form-data">-->
        
           <?php
	//echo validation_errors();

		$form_att = array('class' => 'box login', 'method' => 'post'); 

		echo form_open('ProductCategoriesControllers/editCategoryName', $form_att);

	?>
                                         
            <div class="form-group">
              <label>Product Category Name*</label><br />
              <input type="text" class="form-control" style="width: 85%;" name="ecat_name" id="ecat_name" value=""   required/>
             </div> 
            <div id="ecat_nameErr" class="eor"></div> 
          
            <button type="submit" id="ecat_name" name="editcat_name" class="btn btn-default">Update Product Category</button>
        <input type="hidden" name="cat_name_id" id="cat_name_id" value="">
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
    <li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="tabs-1" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true"><a href="#tabs-1" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1"><i class="glyphicon glyphicon-list"></i>Product Category List</a></li>
     <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-2" aria-labelledby="ui-id-2" aria-selected="false" aria-expanded="false"><a href="#tabs-2" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-2"><i class="glyphicon glyphicon-list"></i>Add Product Category</a></li>
   </ul>
    
    <div id="tabs-1">
    
         <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
            <thead>
                <tr>                                            
                    <th>S.No</th>
                    <th>Category Name</th>
                    <th>Created On</th>
                    <th>Last Modified On</th>
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
        
        
        
        
        
        $query = $this->db->query('SELECT * FROM product_categories');

//foreach ($query->result() as $row)
//{
//    echo $row->make_name;
//    //echo $row->name;
//    //echo $row->email;
//}


                                foreach ($query->result() as $row){
                       ?>
                <tr>
                        <td>
                                <?php echo $row->cat_id ?>
                        </td>

               <td>
                                <?php echo $row->cat_name ?>
                        </td>

                <td>
                                <?php echo $row->created_on ?>
                        </td>
                        <td>
                                <?php echo $row->modified_on ?>
                        </td>
                         <td style="text-align:center;">
                         
                          <button type="button" class="btn btn-info btn-small" data-toggle="modal"
                         data-target="#myModal" onClick="editCategoryName(<?php echo $row->cat_id;?>,'<?php echo $row->cat_name;?>')">Edit</button></td>
                          
                         
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

		echo form_open('ProductCategoriesControllers/addProductCategories', $form_att);

	?>
        <!-- <form role="form" action="book-action.php"  method="post" enctype="multipart/form-data">-->
                                        
                 <div class="col-lg-12">
                  <div class="col-lg-6"> 
                <div class="form-group">
                  <label>Enter Product Category*</label><br />
                  <input type="text" class="form-control" style="width: 75%;" name="cat_name" id="cat_name" placeholder="Enter Product Category" value="" maxlength="100" required/>
                </div> 
                <div id="cat_nameErr" class="eor"></div> 
               </div>
                <div class="col-lg-6"> 
                <br>
                 
                <button type="submit" id="addMake_name" name="addMake_name" class="btn btn-default">Add Product Category</button>
               
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
 <!--<footer><p>All right reserved. Designed by: <a href="http://www.invadertech.com" target="_blank" alt="Invader">Invader Technologies Pvt. Ltd.</a></p></footer>
 -->
 <?php include_once('footer.php'); ?>
 </div>
   <!-- /. PAGE INNER  -->
  </div>
               <!-- Modal -->
  <!-- Modal -->
 
              </section>
</section>

  <!-- Trigger the modal with a button -->


 