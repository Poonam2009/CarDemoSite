<?php 
include_once('header.php');
include_once('db.php');

 
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
 function editExam(id)
{
	
	
	var ids=id;
	//alert(ids);
	
	document.getElementById('reg_id').value=ids;
	document.getElementById('email').value=ids;
	
	
	//exam_ids=document.getElementById('exam_name_id').value=exam_id;
	
	
	return false;
	}
	
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
                            Manage Manufacturers
                        </div>                       
                        <div class="panel-body">
                        
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
   <script>
   function isInteger(s)
{
  var i;
  for (i = 0; i < s.length; i++)
  {
	  var c = s.charAt(i);
	  if (((c < "0") || (c > "9"))) return false;
  }
  // All characters are numbers.
  return true;
}
	
	///////////////////  Javascript Function TO Check Empty & Validation //////////////////////////
	
				          function validateFrme()
							{
								//alert("in the validate");
								document.getElementById('book_category_nameErr').innerHTML="";
								document.getElementById('book_nameErr').innerHTML="";
								document.getElementById('author_nameErr').innerHTML="";
								//document.getElementById('descriptionErr').innerHTML="";
								document.getElementById('priceErr').innerHTML="";
								document.getElementById('no_of_bookErr').innerHTML="";
								
								//alert('before var book_name');
								
								
								var book_category      =document.getElementById('book_category_name').value;
								var book_name      =document.getElementById('book_name').value;
								//alert("before  var author_name");
								var author_name  =document.getElementById('author_name').value; 
				               // alert("before var description");
								//var description      =document.getElementById('description').value;
								var price        =document.getElementById('price').value;
								var no_of_book        =document.getElementById('no_of_book').value;
								
								//alert('before var price');
								
								//alert("beforeletters");
								var letters       = /^[a-zA-Z](?:[a-zA-Z0-9 ]*[a-zA-Z0-9])?$/;
								var author_letters       = /^[a-zA-Z](?:[a-zA-Z0-9. ]*[a-zA-Z0-9])?$/;
								var decimal       =  /^[-]?[0-9]+\.[0-9]+$/;
								var dec           =/^[0-9]\d{0,9}(\.\d{1,3})?%?$/; 
								 var digit=/^\d[0-9]{1}$/;
								 
								//alert('before if book_category block');
								if(book_category == "")
									{
										document.getElementById('book_category_nameErr').innerHTML="* Please Select Book category";
										document.getElementById('book_category_name').value="";
										document.getElementById('book_category_name').focus();

										return false;
									}
								if(book_name == "")
									{
										document.getElementById('book_nameErr').innerHTML="* Please Enter Book Name";
										document.getElementById('book_name').value="";
										document.getElementById('book_name').focus();

										return false;
									}
								  else if (!book_name.match(letters))
									{
										document.getElementById('book_nameErr').innerHTML="*Please Enter Book Name As Alphanumeric  ";
										document.getElementById('book_name').value="";
										document.getElementById('book_name').focus();
										return false;
									}	
									
									//alert('before if author_name block');
									if(author_name == "")
									{
										document.getElementById('author_nameErr').innerHTML="* Please Enter Author Name  ";
										document.getElementById('author_name').value="";
										document.getElementById('author_name').focus();
										return false;
									}
									 else if (!author_name.match(author_letters))
									{
										document.getElementById('author_nameErr').innerHTML="*Please Enter Author Name As Alphanumeric only . special symbol is Allowed  ";
										document.getElementById('author_name').value="";
										document.getElementById('author_name').focus();
										return false;
									}	
									/* else if(!isInteger(grade_point))
								   {
									  document.getElementById('grade_pointErr').innerHTML="*Grade Point Should be only Numbers";                   
									   document.getElementById('grade_point').value="";
									   document.getElementById('grade_point').focus();
								     return false;
									}*/
									/*if(description == "")
									{
										document.getElementById('descriptionErr').innerHTML="*Please Enter Marks From ";
										document.getElementById('description').value="";
										document.getElementById('description').focus();
										return false;
									}*/
								   /* else if(!isInteger(mark_from))
								   {
									  document.getElementById('mark_fromErr').innerHTML="*Mark From Should be only Numbers";                   
									   document.getElementById('mark_from').value="";
									   document.getElementById('mark_from').focus();
								     return false;
									}*/
									if(price == "#")
									{
										document.getElementById('priceErr').innerHTML="*Please Enter Price ";
										document.getElementById('price').value="#";
										document.getElementById('price').focus();
										return false;
									}
									/* else if(!isInteger(price))
								   {
									  document.getElementById('priceErr').innerHTML="*Price Should be only Numbers";                   
									   document.getElementById('price').value="";
									   document.getElementById('price').focus();
								     return false;
									}*/
									 else if (!price.match(dec))
									{
										document.getElementById('priceErr').innerHTML="*Price Should be only Maximum 5 digits ,Allowing only . symbol ";
										document.getElementById('price').value="";
										document.getElementById('price').focus();
										return false;
									}
									
									if(no_of_book == "#")
									{
										document.getElementById('no_of_bookErr').innerHTML="*Please Enter No Of Book ";
										document.getElementById('no_of_book').value="#";
										document.getElementById('no_of_book').focus();
										return false;
									}
									 else if (!no_of_book.match(dec))
									{
										document.getElementById('no_of_bookErr').innerHTML="* Only Maximum 5 digits is allowed ";
										document.getElementById('no_of_book').value="";
										document.getElementById('no_of_book').focus();
										return false;
									}
									
								return true;
							}
							
		///////////////////  Javascript Function TO Check Empty & Validation //////////////////////////
		function validateBookCategory()
							{
								//alert("in the validate");
								document.getElementById('book_categoryErr').innerHTML="";
								
								var book_category      =document.getElementById('book_category').value;
								
							   var book_category_letters       = /^[a-zA-Z](?:[a-zA-Z ]*[a-zA-Z])?$/;
								var decimal       =  /^[-]?[0-9]+\.[0-9]+$/;
								//var dec           =/^[0-9]\d{0,9}(\.\d{1,3})?%?$/; 
								 //var digit=/^\d[0-9]{1}$/;
								 
								//alert('before if book_name block');
								if(book_category == "")
									{
										document.getElementById('book_categoryErr').innerHTML="* Please Enter Book Category Name";
										document.getElementById('book_category').value="";
										document.getElementById('book_category').focus();

										return false;
									}
								  else if (!book_category.match(book_category_letters))
									{
										document.getElementById('book_categoryErr').innerHTML="*Please Enter Book Name As Alphabets Only";
										document.getElementById('book_category').value="";
										document.getElementById('book_category').focus();
										return false;
									}	
									
									
								return true;
							}
							
		function available_book()
		{
			
			document.getElementById('no_of_avail_book').value=document.getElementById('no_of_book').value;
			
			}					
		
							
  </script>
  <style>
 .display { display:none; }
 .eor{color:#F00;}
 </style> 

<style>
word-wrap:break-word;
.form1 {
    /*display: block;*/
    margin-left: 3em;
}
</style>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h4 class="modal-title">Edit Book Category Name Details</h4>
      </div>
      <div class="modal-body" style="left-margin:30px">
        <p>
                </p><form role="form" class="form1" action="book-action.php" method="post" enctype="multipart/form-data">
                                         
                                          <div class="form-group">
                                          <label>Book Category*</label><br>
                                          <input type="text" class="form-control" style="text-transform:uppercase;width: 35%;" name="book_category" id="book_category" value="" maxlength="100" onblur="validateBookCategory();" required="">
                                        </div> 
                                        <div id="book_categoryErr" class="eor"></div> 
                                        <button type="submit" id="editBookCategory" name="editBookCategory" class="btn btn-default" onclick="validateFrme();">Update Book Category</button>
                                    <input type="hidden" name="book_category_id" id="book_category_id" value="">
                                    </form>
        
        
      </div>
      <div class="modal-footer">
       
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    </div>
    </div>

<div id="tabs" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
  <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
    <li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="tabs-1" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true"><a href="#tabs-1" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1"><i class="glyphicon glyphicon-list"></i>Book list</a></li>
     <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-2" aria-labelledby="ui-id-2" aria-selected="false" aria-expanded="false"><a href="#tabs-2" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-2"><i class="glyphicon glyphicon-list"></i>Add Book Category</a></li>
    <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-3" aria-labelledby="ui-id-3" aria-selected="false" aria-expanded="false"><a href="#tabs-3" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-3"><i class="glyphicon glyphicon-plus"></i>Add Book</a></li>
    <!--<li><a href="#tabs-3">Aenean lacinia</a></li>-->
  </ul>
  <div id="tabs-1" aria-labelledby="ui-id-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="false" style="display: block;">
    <div class="table-responsive">
              <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="dataTables-example_length"><label><select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="col-sm-6"><div id="dataTables-example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" aria-controls="dataTables-example"></label></div></div></div><table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                  <thead>
                      <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="S.No: activate to sort column ascending" style="width: 40px;">S.No</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Book Category: activate to sort column ascending" style="width: 127px;">Book Category</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Book Name: activate to sort column ascending" style="width: 101px;">Book Name</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Author: activate to sort column ascending" style="width: 146px;">Author</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 55px;">Price</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="No Of Book: activate to sort column ascending" style="width: 97px;">No Of Book</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="No Of Available book: activate to sort column ascending" style="width: 179px;">No Of Available book</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Edit: activate to sort column ascending" style="width: 44px;">Edit</th></tr>
                  </thead>
                  <tbody>
                                     
                                         
                                                                
                  <tr class="odd">
                         <td class="center sorting_1">1</td>
                        <!-- <td class="center">1</td>-->
                        <td class="center ">MATHEMATICSQ</td>
                         <td class="center ">R D SHARMA</td>
                         <td class="center ">R D BHAI</td>
                           <td class="center ">25.00</td>
                            <td class="center ">21</td>
                             <td class="center ">14</td>
                         <td class="center "><a class="btn btn-info btn-sm" href="edit-book.php?b_id=1">Edit</a>       
                      </td></tr><tr class="even">
                         <td class="center sorting_1">2</td>
                        <!-- <td class="center">2</td>-->
                        <td class="center ">SCIENCE</td>
                         <td class="center ">BIOLOGY</td>
                         <td class="center ">PROFESSOR KAPIL</td>
                           <td class="center ">500.00</td>
                            <td class="center ">25</td>
                             <td class="center ">23</td>
                         <td class="center "><a class="btn btn-info btn-sm" href="edit-book.php?b_id=2">Edit</a>       
                      </td></tr></tbody>
              </table><div class="row"><div class="col-sm-6"><div class="dataTables_info" id="dataTables-example_info" role="alert" aria-live="polite" aria-relevant="all">Showing 1 to 2 of 2 entries</div></div><div class="col-sm-6"><div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous"><a href="#">Previous</a></li><li class="paginate_button active" aria-controls="dataTables-example" tabindex="0"><a href="#">1</a></li><li class="paginate_button next disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next"><a href="#">Next</a></li></ul></div></div></div></div>
           </div>
  </div>
    <div id="tabs-2" aria-labelledby="ui-id-2" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="true" style="display: none;">
     <form role="form" action="book-action.php" method="post" enctype="multipart/form-data">
                                        
                 <div class="col-lg-12">
                  <div class="col-lg-6"> 
                <div class="form-group">
                  <label>Book Category*</label><br>
                  <input type="text" class="form-control" style="text-transform:uppercase;width: 75%;" name="book_category" id="book_category" placeholder="Enter Book Category Name" value="" maxlength="100" onblur="validateBookCategory();" required="">
                </div> 
                <div id="book_categoryErr" class="eor"></div> 
               </div>
                <div class="col-lg-6"> 
                <br>
                   
                <button type="submit" id="addBook_category" name="addBook_category" class="btn btn-default" onclick="validateFrmeCategory();">Add Category</button>
                  
               </div>
               </div>
            </form>
                                    
         <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>                                            
                    <th>S.No</th>
                    <th>Book Category Name</th>
                    <th>Edit</th>
                    </tr>
            </thead>
            <tbody>
                                    <tr>
                         <td class="center">1</td>
                        <!-- <td class="center">2</td>-->
                         <td class="center">MATHEMATICSQ</td>
                         <td class="center">
                             
                         <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" onclick="editBookCategory(1,'MATHEMATICSQ')">Edit</button>
                           
                         </td>     
                      
                      </tr> 
                                        <tr>
                         <td class="center">2</td>
                        <!-- <td class="center">2</td>-->
                         <td class="center">SCIENCE</td>
                         <td class="center">
                             
                         <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" onclick="editBookCategory(2,'SCIENCE')">Edit</button>
                           
                         </td>     
                      
                      </tr> 
                                                                
                  </tbody>
              </table>
           </div>
  </div>
  <div id="tabs-3" aria-labelledby="ui-id-3" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="true" style="display: none;">
  <form role="form" action="book-action.php" method="post" enctype="multipart/form-data">
                                        
                                         <div class="form-group">
                                          <label>Book category*</label><br>
                                          <select required="" class="form-control" style="text-transform:uppercase;width: 35%;" name="book_category_name" id="book_category_name" value="" maxlength="100">
                                          <option value="">Select Book Category</option>
                                           
                                    		<option value="1">MATHEMATICSQ</option>
                                      
                                    		<option value="2">SCIENCE</option>
                                                                                </select>
                                           
                                        </div> 
                                        <div id="book_category_nameErr" class="eor"></div> 
                                         
                                        <div class="form-group">
                                          <label>Book Name*</label><br>
                                          <input type="text" class="form-control" style="text-transform:uppercase;width: 35%;" name="book_name" id="book_name" value="" maxlength="100" placeholder="Enter Book Name" required="">
                                        </div> 
                                        <div id="book_nameErr" class="eor"></div> 
                                        <div class="form-group">
                                            <label>Author Name*</label><br>
                                            <input type="text" style="text-transform:uppercase;width: 35%;" name="author_name" id="author_name" class="form-control" maxlength="100" placeholder="Enter Author Name" required="">
                                              <div id="author_nameErr" class="eor"></div>   
                                        </div> 
                                        <div class="form-group">
                                            <label>Price*</label><br>
                                            <input type="number" style="text-transform:uppercase;width: 35%;" name="price" id="price" class="form-control" maxlength="5" min="0" max="10000" step="any" placeholder="Enter Book Price" required="">
                                              <div id="priceErr" class="eor"></div>   
                                        </div> 
                                         <div class="form-group">
                                            <label>No. Of Books</label><br>
                                           <input type="number" style="text-transform:uppercase;width: 35%;" name="no_of_book" id="no_of_book" class="form-control" maxlength="5" min="0" max="10000" step="any" onblur="available_book()" placeholder="Enter No Of Books" required="">
                                              <div id="no_of_bookErr" class="eor"></div> 
                                               
                                              <div class="form-group">
                                            <label>Available Qty</label><br>
                                           <input type="number" style="width: 35%;" name="no_of_avail_book" id="no_of_avail_book" class="form-control" maxlength="5" min="0" max="10000" step="any" readonly="">
                                            
                                        </div>
                                          
                                        <button type="submit" id="addBook" name="addBook" class="btn btn-default" onclick="validateFrme();">Add Book</button>
                                      
                                    
  </div></form>
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


 