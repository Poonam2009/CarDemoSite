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
                            Manage Product
                        </div>                       
                        <div class="panel-body">
                        
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
  <script>
 $("[type=file]").on("change", function(){
  // Name of file and placeholder
  var file = this.files[0].name;
  var dflt = $(this).attr("placeholder");
  if($(this).val()!=""){
    $(this).next().text(file);
  } else {
    $(this).next().text(dflt);
  }
}); 
  </script>
  <script>
      
      function editProductDetails(prod_id,cat_name,make_name,model_name,prod_name,prod_description,prod_price,prod_image)
{
        
	var prod_id=prod_id;
	var cat_name=cat_name;
        var make_name=make_name;
        var model_name=model_name;
        var prod_name=prod_name;
        var prod_description=prod_description;
        var prod_price=prod_price;
        var prod_image=prod_image;
	
         
	prod_ids=document.getElementById('eprod_id').value=prod_id;
	cat_name=document.getElementById('ecat_name').value=cat_name;
        make_name=document.getElementById('emake_name').value=make_name;
        model_name=document.getElementById('emodel_name').value=model_name;
        prod_name=document.getElementById('eprod_name').value=prod_name;
        prod_description=document.getElementById('eprod_description').value=prod_description;
        prod_price=document.getElementById('eprod_price').value=prod_price;
        prod_image=document.getElementById('eprod_image').value=prod_image;
        
	
	
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
        <h4 class="modal-title">Edit Product Details</h4>
      </div>
      <div class="modal-body" style="left-margin:30px">
       
        <!-- <form role="form" class="form1" action="exam-action.php"  method="post" enctype="multipart/form-data">-->
        
           <?php
	echo validation_errors();

		$form_att = array('class' => 'box login', 'method' => 'post'); 

		echo form_open_multipart('AddProductController/editProduct', $form_att);
              

	?>
        <div class="row">
            <div class="col-lg-6"> 
                 <div class="form-group">
                  <label>Product Category</label><br />
                  <input type="text" class="form-control" name="ecat_name" id="ecat_name" placeholder="Enter Product Categocat_namery" value="" maxlength="100" readonly />
                 </div> 
            </div>
            <div class="col-lg-6"> 
                 <div class="form-group">
                  <label>Product Make</label><br />
                  <input type="text" class="form-control" name="emake_name" id="emake_name" placeholder="Enter Product Categocat_namery" value="" maxlength="100" readonly />
                 </div> 
            </div>
            <div class="col-lg-6"> 
                 <div class="form-group">
                  <label>Product Model</label><br />
                  <input type="text" class="form-control" name="emodel_name" id="emodel_name" placeholder="Enter Product Categocat_namery" value="" maxlength="100" readonly/>
                 </div> 
            </div>
            <div class="col-lg-6"> 
                 <div class="form-group">
                  <label>Product Name</label><br />
                  <input type="text" class="form-control" name="eprod_name" id="eprod_name" placeholder="Enter Product Categocat_namery" value="" maxlength="100" required/>
                 </div> 
            </div>
            <div class="col-lg-6"> 
                 <div class="form-group">
                  <label>Product Description</label><br />
                  <input type="text" class="form-control" name="eprod_description" id="eprod_description" placeholder="Enter Product Categocat_namery" value="" maxlength="100" required/>
                 </div> 
            </div>
            <div class="col-lg-6"> 
                 <div class="form-group">
                  <label>Product Price</label><br />
                  <input type="text" class="form-control" name="eprod_price" id="eprod_price" placeholder="Enter Product Categocat_namery" value="" maxlength="100" required/>
                 </div> 
            </div>
            <div class="col-lg-6"> 
                 <div class="form-group">
                    <input id="f02" type="file" name="eprod_image" required/>
                    <label for="f02">Product Image</label>
                    </div>
            </div>
            <div class="col-lg-6"> 
                <button type="submit" id="pro_name" name="editcat_name" class="btn btn-default" style="padding: 10px;margin-top: 7px;">Update Product</button>
                    <input type="hidden" name="eprod_id" id="eprod_id" value="">
            </div>
            
            
<!--        </form>-->
        </div>
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
    <li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="tabs-1" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true"><a href="#tabs-1" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1"><i class="glyphicon glyphicon-list"></i>Product List</a></li>
     <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-2" aria-labelledby="ui-id-2" aria-selected="false" aria-expanded="false"><a href="#tabs-2" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-2"><i class="glyphicon glyphicon-list"></i>Add Product Details</a></li>
   </ul>
    
    <div id="tabs-1">
    
         <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
            <thead>
                <tr>                                            
                    <th>S.No</th>
                    <th>Product Category</th>
                    <th>Product Make</th>
                    <th>Product Model</th>
                    <th>Product Name</th>
                    <th>Product Description</th>
                    <th>Product Price</th>
                    <th>Product Image</th>
                    <th>Created On</th>
                    <th>Last Modified On</th>
                     <th>Edit</th>
                    </tr>
            </thead>
           <tbody>
	<?php
        
        
        
        $sr_no=0;
        $query = $this->db->query('SELECT * FROM product');

            foreach ($query->result() as $row){
             ?>
               
             <tr>
                <td>
                   <?php $sr_no=$sr_no+1; echo $sr_no; ?>
                </td>
                <td>
                   <?php
                                
                                
                        $this->db->select('*');
                        $this->db->from('product_categories');
                        $this->db->where('cat_id',$row->cat_id); 
                        $query2 = $this->db->get();
                        foreach ($query2->result() as $row2){ 
                        echo $row2->cat_name; 
                                        
                            }
                    ?>
                </td>
                <td>
                    <?php
                                
                                
                        $this->db->select('*');
                        $this->db->from('make');
                        $this->db->where('make_id',$row->prod_make); 
                        $query2 = $this->db->get();
                        foreach ($query2->result() as $prod){ 
                        echo $prod->make_name; 
                                        
                            }
                    ?>
                </td>
                <td>
                    <?php
                                
                                
                        $this->db->select('*');
                        $this->db->from('model');
                        $this->db->where('model_id',$row->prod_model); 
                        $query2 = $this->db->get();
                        foreach ($query2->result() as $prodmodel){ 
                        echo $prodmodel->model_name; 
                                        
                            }
                    ?>
                </td>
                <td>
                   <?php echo $row->prod_name ?>
                </td>
                <td>
                   <?php echo $row->prod_description ?>
                </td>
                <td>
                   <?php echo $row->prod_price ?>
                </td>
                <td>
                   <?php echo $row->prod_image ?>
                </td>
                <td>
                   <?php echo $row->created_on ?>
                </td>
                <td>
                   <?php echo $row->modified_on ?>
                </td>
                <td style="text-align:center;">
                         
                    <button type="button" class="btn btn-info btn-small" data-toggle="modal"
                    data-target="#myModal" onClick="editProductDetails(<?php echo $row->prod_id;?>,'<?php echo $row2->cat_name;?>','<?php echo $prod->make_name;?>','<?php echo $prodmodel->model_name;?>','<?php echo $row->prod_name; ?>','<?php echo $row->prod_description;?>','<?php echo $row->prod_price ?>','<?php echo $row->prod_image ?>')">Edit</button></td>
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
        //echo $error;

		$form_att = array('class' => 'box login', 'method' => 'post'); 

		//echo form_open('AddProductController/addProduct', $form_att);
                echo form_open_multipart('AddProductController/addProduct', $form_att)

	?>
        <!-- <form role="form" action="book-action.php"  method="post" enctype="multipart/form-data">-->
                                        
               <div class="col-lg-12">
                   <h1 align="center">Add Product</h1>
                <div class="col-lg-6"> 
                 <div class="form-group">
                  <label>Select Product Category*</label><br />
                  <select name="cat_id" id="model" class="form-control">
                            <option value="">Select Categories</option>
                            <?php
                            $query = $this->db->query('SELECT * FROM product_categories');
                            foreach ($query->result() as $row){
                            echo "<option value='".$row->cat_id."'>".$row->cat_name."</option>";
                            }
                            ?>
                   </select>
                 </div> 
                </div>
                <div class="col-lg-6"> 
                 <div class="form-group">
                  <label>Select Product Make*</label><br />
                  <select name="prod_make" id="model" class="form-control">
                            <option value="">Select Make</option>
                            <?php
                            $query = $this->db->query('SELECT * FROM make');
                            foreach ($query->result() as $row){
                            echo "<option value='".$row->make_id."'>".$row->make_name."</option>";
                            }
                            ?>
                   </select>
                 </div> 
                </div>
                <div class="col-lg-6"> 
                 <div class="form-group">
                  <label>Select Product Model*</label><br />
                  <select name="prod_model" id="model" class="form-control">
                            <option value="">Select Make</option>
                            <?php
                            $query = $this->db->query('SELECT * FROM model');
                            foreach ($query->result() as $row){
                            echo "<option value='".$row->model_id."'>".$row->model_name."</option>";
                            }
                            ?>
                   </select>
                 </div> 
                </div>
                <div class="col-lg-6"> 
                 <div class="form-group">
                  <label>Enter Product Name*</label><br />
                  <input type="text" class="form-control" name="prod_name" id="prod_name" placeholder="Enter Product Categocat_namery" value="" maxlength="100" required/>
                 </div> 
                </div>
                <div class="col-lg-6"> 
                 <div class="form-group">
                  <label>Enter Product Description *</label><br />
                  <textarea class="form-control" rows="8"  name="prod_des" id="prod_des" placeholder="Enter Product Description" required/></textarea>
                  
                 </div> 
                </div>
                <div class="col-lg-6"> 
                 <div class="form-group">
                  <label>Enter Product Price*</label><br />
                  <input type="text" class="form-control" name="prod_price" id="prod_price" placeholder="Enter Product Price" value="" maxlength="100" required/>
                 </div> 
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
<!--                    <input id="f02" type="file" name="prod_image"/>-->
                    <input type="file" name="prod_image" id="image"   >
                    <label>Product Image</label>
                    </div>
                </div>
                <div class="col-lg-6"> 
                    <button type="submit" id="addProduct" name="addProduct" class="btn btn-default" style="padding: 10px;margin-top: 7px;">Add Product</button>
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
 
              </section>
</section>

  <!-- Trigger the modal with a button -->


 