<?php include_once('header.php');

?>

<title>Autoxpert</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Learn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('css/bootstrap-3.1.1.min.css'); ?>" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url('js/jquery.min.js'); ?>"></script>

<script src="<?php echo base_url('/js/bootstrap.min.js'); ?>"></script>
<!-- Custom Theme files -->
<link href="<?php echo base_url('css/style.css'); ?>" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="<?php echo base_url('css/jquery.countdown.css');?>" />

<!----font-Awesome----->
<link href="<?php echo base_url('css/font-awesome.css');?>" rel="stylesheet"> 
<script type="text/javascript" src="<?php echo base_url();?>/js/jquery.countdown.js" ></script>
<link href="<?php echo base_url('css/font-awesome.css'); ?>" rel="stylesheet"> 


  <?php //print_r($_POST);
  if(isset($_POST)){
  @$loc_name=$_POST['location_name'];
  @$year=$_POST['year'];
  @$make=$_POST['make'];
   @$model=$_POST['model'];
  }
  ?>
     <div class="search">
     	<div class="container">
		 <div class="col-lg-12 dropdown-buttons">
             <div class="col-sm-2 dropdown-buttons">
                 <img src="<?php echo base_url(); ?>images/getestimate.png" alt="" class="img-responsive">
             </div>
             <div class="col-sm-10 dropdown-buttons" align="center">
         	 <h2>GET SERVICE ESTIMATE, SEARCH WORKSHOP AND     <br>           BOOK YOUR APOINTMENT ONLINE</h2>
            </div> 
         </div>
		   <div class="clearfix"> </div>
	     </div>
     </div>
   
  <?php
	echo validation_errors();

		$form_att = array( 'method' => 'post'); 

		echo form_open('EstimateController/SelectService', $form_att);

	?>      
     <div class="container" style="margin-top: 25px; margin-bottom:25px;">
     <div class="row">
     	<div class="col-lg-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d14031.296349729875!2d77.07370365!3d28.4547188!3m2!1i1024!2i768!4f13.1!2m1!1sbootstrap+map!5e0!3m2!1sen!2sin!4v1458134959435" height="240px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-lg-4">
        	<div class="col-sm-12 dropdown-button">            			
    		  <div class="section_1" style="margin-bottom: 10px;">
<!--          <option <?php if($location_name==$st_religion){ echo 'selected=selected';}?> value="<?php echo $religion; ?>"><?php echo $religion; ?></option>-->
        
				  <select name="location_name" id="location_name" class="frm-field required">
                                <option value="">LOCATION</option>
                                <?php
                                 $query = $this->db->query('SELECT * FROM add_location');
                                foreach ($query->result() as $row){
                               ?>  
                                     <option <?php if($loc_name==$row->loc_id){ echo 'selected=selected';}?> value="<?php echo $row->loc_id; ?>"><?php echo $row->location_name; ?></option>
                              <?php  }
                                ?>
                            </select>
			  </div>
                      			
    		  <div class="section_1" style="margin-bottom: 10px;">
				 <select id="year" name="year"  class="frm-field required">
					<option value="">YEAR</option>

                                         <?php
                                 $query = $this->db->query('SELECT * FROM add_year');
                                foreach ($query->result() as $row){
                                     ?>  
                                     <option <?php if($loc_name==$row->year_id){ echo 'selected=selected';}?> value="<?php echo $row->year_id; ?>"><?php echo $row->year; ?></option>
                              
                               <?php // echo "<option value='".$row->year_id."'>".$row->year."</option>";
                                }
                                ?>
				 </select>
			  </div>
	  
                 			
    		  <div class="section_1" style="margin-bottom: 10px;">
				<select name="make" id="make" class="form-control">
                                <option value="">Select Make</option>
                                <?php
                                 $query = $this->db->query('SELECT * FROM make');
                                foreach ($query->result() as $row){
                                   ?>
                                 
                                     <option <?php if($make==$row->make_id){ echo 'selected=selected';}?> value="<?php echo $row->make_id; ?>"><?php echo $row->make_name; ?></option>
                              
                              <?php // echo "<option value='".$row->make_id."'>".$row->make_name."</option>";
                                }
                                ?>
                            </select>
			  </div>
		
    
			  <div class="section_1" style="margin-bottom: 10px;">
				 <select name="model" id="model" class="form-control">
                                  <option value="">Select Model</option>
                                  <?php
                                   $query = $this->db->query('SELECT * FROM model');
                                  foreach ($query->result() as $row){
                                      ?>
                                 
                                     <option <?php if($model==$row->model_id){ echo 'selected=selected';}?> value="<?php echo $row->model_id; ?>"><?php echo $row->model_name; ?></option>
                              <?php
                                  //echo "<option if($model==$row->model_id){ echo 'selected=selected';}value='".$row->model_id."'>".$row->model_name."</option>";
                                  }
                                  ?>
                              </select>     
			 </div>
                     <div class="section_1" style="margin-bottom: 10px;">
			 <select id="varient" name="varient" class="frm-field required">
					<option value="">VARIENT</option>
                    <?php
                                   $query = $this->db->query('SELECT * FROM varient');
                                  foreach ($query->result() as $row){
                                      ?>
                                 
                                     <option value="<?php echo $row->varient_id; ?>"><?php echo $row->varient_name; ?></option>
                              <?php
                                  //echo "<option if($model==$row->model_id){ echo 'selected=selected';}value='".$row->model_id."'>".$row->model_name."</option>";
                                  }
                                  ?>
				 </select>
			 </div>
            
			</div>
        
        </div>
        <div class="col-lg-4">
        <img src="<?php echo base_url(); ?>images/car.png" alt="car" class="img-responsive">
        <div class="col-sm-12 submit_button"> 
              
		   	 <!-- <form action="">-->
		   	     <input type="submit" value="NEXT">
		       <!--</form>-->
            <?php echo form_close(); ?>
		   </div>
        </div>
     </div>
     </div>
        
      
    
    <div class="container">
          <div class="row">
        <div class="col-md-12">
          <div class="carousel slide media-carousel" id="media">
            <div class="carousel-inner">
              <div class="item  active">
                <div class="row">
                  <div class="col-md-3">
                    <a class="thumbnail" href="#"><img alt="" src="<?php echo base_url(); ?>images/client.png"></a>
                  </div>          
                  <div class="col-md-3">
                    <a class="thumbnail" href="#"><img alt="" src="<?php echo base_url(); ?>images/client1.png"></a>
                  </div>
                  <div class="col-md-3">
                    <a class="thumbnail" href="#"><img alt="" src="<?php echo base_url(); ?>images/client2.png"></a>
                  </div>   
                   <div class="col-md-3">
                    <a class="thumbnail" href="#"><img alt="" src="<?php echo base_url(); ?>images/client3.png"></a>
                  </div>      
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-md-3">
                    <a class="thumbnail" href="#"><img alt="" src="images/client.png"></a>
                  </div>          
                  <div class="col-md-3">
                    <a class="thumbnail" href="#"><img alt="" src="images/client1.png"></a>
                  </div>
                  <div class="col-md-3">
                    <a class="thumbnail" href="#"><img alt="" src="images/client2.png"></a>
                  </div>  
                   <div class="col-md-3">
                    <a class="thumbnail" href="#"><img alt="" src="images/client3.png"></a>
                  </div>       
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-md-3">
                    <a class="thumbnail" href="#"><img alt="" src="images/client.png"></a>
                  </div>          
                  <div class="col-md-3">
                    <a class="thumbnail" href="#"><img alt="" src="images/client1.png"></a>
                  </div>
                  <div class="col-md-3">
                    <a class="thumbnail" href="#"><img alt="" src="images/client2.png"></a>
                  </div>  
                   <div class="col-md-3">
                    <a class="thumbnail" href="#"><img alt="" src="images/client3.png"></a>
                  </div>     
                </div>
              </div>
            </div>
            <a data-slide="prev" href="#media" class="">‹</a>
            <a data-slide="next" href="#media" class="">›</a>
          </div>                          
        </div>
      </div>
     </div>
     
<!--    <div class="footer">
       <div class="bg">
     	<div class="container">
           		<div class="row">
                <div class="col-lg-4">
                 <i class="fa fa-envelope fa-2x" style="color:#b8d3de;"> Free Appointment</i><br>
                 <h1 style="color:#FFF; margin-left: 62px;">APPOINTMENT</h1>
                </div>
                <div class="col-lg-4">
                 <i class="fa fa-phone fa-2x" style="color:#b8d3de;"> 24 HR Helpline</i><br>
                 <h1 style="color:#FFF;margin-left: 62px;">070 567 27277</h1>
                </div>
                <div class="col-lg-4">
                 <i class="fa fa-tags fa-2x" style="color:#b8d3de;">View Our</i><br>
                 <h1  style="color:#FFF; margin-left: 119px;">TOP OFFERS</h1>
                 </div>
                </div>
                <div class="row">
                 <div class="col-md-2">
                 <h3 style="color:#b8d3de; text-align: left;">Repair Guides</h3>
                 <p align="left" style="color:#FFF;">Engine</p>
                 <p align="left" style="color:#FFF;">Transmission</p>
                 
                 </div>
                 <div class="col-md-2">
                 <h3 style="color:#b8d3de;    text-align: left;">Services</h3>
                 <p align="left" style="color:#FFF;">Oil Services</p>
                 <p align="left" style="color:#FFF;">Repairing</p>
                 <p align="left" style="color:#FFF;">Diagnostic</p>
                 <p align="left" style="color:#FFF;">Body Work</p>
                 <p align="left" style="color:#FFF;">Change Tyres</p>
                 <p align="left" style="color:#FFF;">Change Battery</p>
                 <p align="left" style="color:#FFF;">Buy Accessories</p>
                 <p align="left" style="color:#FFF;">Top Offers</p>
                 </div>
                 <div class="col-md-2">
                 <h3 style="color:#b8d3de;    text-align: left;">General</h3>
                 <p align="left" style="color:#FFF;">How It Works</p>
                 <p align="left" style="color:#FFF;">About Us</p>
                 <p align="left" style="color:#FFF;">Car Warranty</p>
                 <p align="left" style="color:#FFF;">Fees and Charges</p>
                 <p align="left" style="color:#FFF;">Contact Us</p>
                 <p align="left" style="color:#FFF;">Privacy Policy</p>
                 <p align="left" style="color:#FFF;">FAQ</p>
                 </div>
                 <div class="col-md-3">
                 <h3 style="color:#b8d3de;    text-align: left;">For Car Owner</h3>
                 <p align="left" style="color:#FFF;">My Account</p>
                 <p align="left" style="color:#FFF;">Sign Up</p>
                 <p align="left" style="color:#FFF;">Terms and Conditions</p>
                 <p align="left" style="color:#FFF;">Get Estimate</p>
                 <p align="left" style="color:#FFF;">Search Workshop</p>
                 <p align="left" style="color:#FFF;">Book Appointment</p>
                 <p align="left" style="color:#FFF;">Write a Review</p>
                 </div>
                 <div class="col-md-3">
                 <h3 style="color:#b8d3de;    text-align: left;">For Workshops</h3>
                 <p align="left" style="color:#FFF;">Login</p>
                 <p align="left" style="color:#FFF;">List Your Business</p>
                 <p align="left" style="color:#FFF;">Terms and Conditions</p>
                 <p align="left" style="color:#FFF;">Pricing</p>
                 <p align="left" style="color:#FFF;">FAQ</p>
                 </div>
             	</div>
        </div>
   </div>
   </div>-->
<!--   		<div class="footer">
    		<div class="col-lg-6 copy" align="left">
		       <p>© 2016 AutoXperts India Pvt. Ltd.</p>
	        </div>
            <div class="col-lg-6 copy">
		       <p align="right">STAY CONNECTED WITH US :<i class="fa fa-facebook fa-2x"></i> &nbsp; <i class="fa fa-twitter fa-2x"></i>&nbsp; <i class="fa fa-youtube fa-2x"></i>&nbsp; <i class="fa fa-search fa-2x"></i></p>
	        </div>
   		 </div>-->
   
<!--<script src="js/jquery.countdown.js"></script>
<script src="js/script.js"></script>-->
<?php include_once('footer.php'); ?>
</body>
</html>	