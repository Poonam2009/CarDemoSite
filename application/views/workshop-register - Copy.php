<!DOCTYPE HTML>
<html><head>
<title>Auto Potal</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Learn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> 
addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('css/bootstrap-3.1.1.min.css'); ?>" rel="stylesheet" type="text/css" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url('js/jquery.min.js'); ?>"></script>

<script src="<?php echo base_url('/js/bootstrap.min.js'); ?>"></script>
<!-- Custom Theme files -->
<link href="<?php echo base_url('css/style.css'); ?>" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="<?php echo base_url('css/jquery.countdown.css');?>" />

<!----font-Awesome----->
<link href="<?php echo base_url('css/font-awesome.css');?>" rel="stylesheet"> 
<script type="text/javascript" src="<?php echo base_url();?>/js/jquery.countdown.js" ></script>
<!----font-Awesome----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>

<script type="text/javascript">
    function checkAll(checkname, bx) {
        alert('poonam');
        for (i = 0; i < checkname.length; i++){
            alert(checkname.length);
            checkname[i].checked = bx.checked? true:false;
        }
    }
    function checkPage(bx){

        var bxs = document.getElementsByTagName ( "link" ); 

        for(i = 0; i < bxs.length; i++){
            bxs[i].checked = bx.checked? true:false;
        }
    }
</script>



<!-----------------slider script----------------------->
<?php //echo base_url(); ?>
<script src="<?php echo base_url('js/responsiveslides.min.js');?>"></script>
					 <script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: true,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
					  </script>
 
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="index.html"><img src="../../images/logo.png" alt="" class="img-responsive"></a>
	    </div>
	    <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav nav_1">
            <li><a href="#">Guides</a></li>
            <li><a href="#">Troubleshooting</a></li>
			<li><a href="#">Ask CarXperts</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Get Estimate<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Terms of use</a></li>
                <li><a href="#">Shortcodes</a></li>
                <li><a href="#">Faq</a></li>
              </ul>
            </li>
            <li><a href="#">Find Workshop</a></li>
            <li><a href="#">Auto News</a></li>
            <li><a href="#">eStore</a></li>
           </ul>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
</nav>
<!-- banner -->
	
    
    </div>
    <div class="userbanner">
	</div>
    
    <div  class="myaccout"> <h1 style="float:left">My Account</h1>
    <ol class="breadcrumb myac">
    <li><a href="#">Home</a></li>
    <li class="active">My Account</li>        
  	</ol>
  	</div>
	<!-- //banner -->
    <div style="    margin-bottom: 20px;">
        <div class="workshopreg">
            
<!--    <form class="form-horizontal reg" role="form">-->
        <?php
	echo validation_errors();

		$form_att = array('class' => 'form-horizontal reg', 'method' => 'post'); 

		echo form_open('Workshop/addWorkshop', $form_att);

	?>  
    <div class="container" style="background:#FFF">
            <h1>Workshop Details</h1>
            <hr>
                <div class="col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">Business Type</label>
                  <div class="col-sm-8">
                 
                      <select name="business_type" id="business_type" class="form-control">
                                <option value="">Select Business Type</option>
                                <?php
                                 $query = $this->db->query('SELECT * FROM business_type');
                                foreach ($query->result() as $row){
                                echo "<option value='".$row->business_id."'>".$row->business_name."</option>";
                                }
                                ?>
                            </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-9 control-label">Are You A Mobile Mechanic</label>
                  <div class="col-sm-3">
                    <input type="checkbox" id="mob_mechanic" name="mob_mechanic"   value="yes" style="margin-top: 12px;">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Business Name</label>
                  <div class="col-sm-8">
                    <input id="business_name" class="form-control" name="business_name" type="text" placeholder="Business Name...">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">TIN</label>
                  <div class="col-sm-8">
                    <input id="tin_no" name="tin_no" class="form-control" type="text" placeholder="TIN...">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Service Tax</label>
                  <div class="col-sm-8">
                    <input id="service_tax" name="service_tax" class="form-control" value="" type="text" placeholder="Service Tax...">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Address</label>
                  <div class="col-sm-8">
                    <label>(select from the options provided)</label>
                    <input id="address" name="address" class="form-control" type="text" placeholder="Address...">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Owner/Manager Name</label>
                  <div class="col-sm-8">
                    <input id="owner" name="owner" class="form-control" type="text" placeholder="Owner/Manager Name...">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Phone</label>
                  <div class="col-sm-8">
                    <input id="phone_no" name="phone_no" class="form-control" value="" type="text" placeholder="Phone...">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Mobile</label>
                  <div class="col-sm-8">
                    <input id="mobile_no"  name="mobile_no" class="form-control" type="text" placeholder="Mobile...">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Website</label>
                  <div class="col-sm-8">
                    <input id="website_name" name="website_name" class="form-control" type="text" placeholder="Website...">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Email</label>
                  <div class="col-sm-8">
                    <input id="email" name="email" class="form-control" type="text" placeholder="Email...">
                  </div>
                </div>
                
                </div>
                <div class="col-lg-6">
                    <div class="col-sm-12 divcheck">
                        
                          <h2>Makes Serviced</h2>
                             <div class="form-group">
                                  <div class="col-sm-2">
                                    <input id="selected_all" name="selected_all" type="checkbox" onClick="checkAll(document.link, this)" >
                                  </div>
                                  <label class="col-sm-10" style="color:#000; font-size:18px">Select Makes (Select All)</label>
                              </div>
                             <div class="form-group">
                                  <div class="col-sm-2">
                                    <input id="selected_makes" name="selected_makes" type="checkbox">
                                  </div>
                                  <label class="col-sm-10" style="color:#000; font-size:18px">Selected Makes</label>
                            </div>
                            <h2>Select Makes (Select All)</h2>
                            <div class="col-sm-12">
                            <?php
                            $query = $this->db->query('SELECT * FROM make');
                            foreach ($query->result() as $row){?>
                                <div class="col-md-4"><input type='checkbox' name='make[]' value='<?php echo $row->make_id; ?>' /><?php echo $row->make_name; ?></div>
                            <?php }
                            ?>
                            </div>
                            
<!--                            <div class="col-sm-4">
                                   <label class="col-sm-10" style="color:#000; font-size:18px">Audi</label> <input id="Website" type="checkbox"> 
                           </div>
                           	<div class="col-sm-4">
                                    <label class="col-sm-10" style="color:#000; font-size:18px">BMW</label> <input id="Website" type="checkbox">
                           </div>
                            <div class="col-sm-4">
                                   <label class="col-sm-10" style="color:#000; font-size:18px">Mahindra</label> <input id="Website" type="checkbox">
                           </div>
                            <div class="col-sm-4">
                                   <label class="col-sm-10" style="color:#000; font-size:18px">Ford</label> <input id="Website" type="checkbox"> 
                           </div>
                            <div class="col-sm-4">
                                  <label class="col-sm-10" style="color:#000; font-size:18px">FIAT</label> <input id="Website" type="checkbox">
                           </div>
                            <div class="col-sm-4">
                                   <label class="col-sm-10" style="color:#000; font-size:18px">Maruti</label> <input id="Website" type="checkbox">
                           </div>-->
                    </div>
                </div>
                <div class="col-lg-6" style="margin-top: 12px;">
                    <div class="col-sm-12 divcheck">
                      <h2>Service Offered(Select All)</h2>
                            <?php    
                            $count=0;
                            $query = $this->db->query('SELECT * FROM service_type');
                            foreach ($query->result() as $row)
                            {?>

                               <div class="col-sm-6">
                               <?php
                                  echo "<input type='checkbox' name='service_type[]' value='".$row->stype_id."'>".$row->stype_name."";
                                ?>
                                  </div>

                                <?php
                              $count=$count+1;


                            }
                            ?>
                    </div>
                    
                          
                          <div class="col-sm-12 divcheck">
                            <h2>Facilities(Select All)</h2>
                                <?php    
                                $count=0;
                                $query = $this->db->query('SELECT * FROM facility_type');
                                foreach ($query->result() as $row)
                                {?>

                                   <div class="col-sm-6">
                                   <?php
                                      echo "<input type='checkbox' name='facility_nametype[]' value='".$row->facility_id."'>".$row->facility_name."";
                                    ?>
                                      </div>

                                    <?php
                                  $count=$count+1;


                                }
                                ?>
                          </div>
                    </div>
                </div>
           
           
    </div>
    <div class="container" style="background:#FFF;margin-top: 10px;">
    <h2>Working Days</h2>
    <div class="col-lg-6">
        <div class="dayntime">
        <div class="col-sm-3">
        <input id="monday" name="monday" type="checkbox" class="check">
        <label style="color:#000; font-size:16px">Monday</label> 
        </div>
        <div class="col-sm-3">
        <div class="form-group"><input type="time" name="mon_start"></div>
        </div>
        <div class="col-sm-3">
        <label>To</label>
        </div>
        <div class="col-sm-3">
        <div class="form-group"><input type="time" name="mon_end"></div>
        </div>
       </div>
               <div class="dayntime">
        <div class="col-sm-3">
        <input id="tuesday" type="checkbox" name="tuesday" class="check">
        <label style="color:#000; font-size:16px">Tuesday</label> 
        </div>
        <div class="col-sm-3">
        <div class="form-group"><input type="time" name="tues_start"></div>
        </div>
        <div class="col-sm-3">
        <label>To</label>
        </div>
        <div class="col-sm-3">
        <div class="form-group"><input type="time" name="tues_end"></div>
        </div>
       </div>

        <div class="dayntime">
        <div class="col-sm-3">
        <input id="wednesday" name="wednesday" type="checkbox" class="check">
        <label style="color:#000; font-size:16px">Wednesday</label> 
        </div>
        <div class="col-sm-3">
        <div class="form-group"><input type="time" name="wed_start"></div>
        </div>
        <div class="col-sm-3">
        <label>To</label>
        </div>
        <div class="col-sm-3">
        <div class="form-group"><input type="time" name="wed_end"></div>
        </div>
       </div>

        <div class="dayntime">
        <div class="col-sm-3">
        <input id="thrusday" name="thrusday" type="checkbox" class="check">
        <label style="color:#000; font-size:16px">Thrusday</label> 
        </div>
        <div class="col-sm-3">
        <div class="form-group"><input type="time" name="thrs_start"></div>
        </div>
        <div class="col-sm-3">
        <label>To</label>
        </div>
        <div class="col-sm-3">
        <div class="form-group"><input type="time" name="thrs_end"></div>
        </div>
       </div>

        <div class="dayntime">
        <div class="col-sm-3">
        <input id="friday" name="friday" type="checkbox" class="check">
        <label style="color:#000; font-size:16px">Friday</label> 
        </div>
        <div class="col-sm-3">
        <div class="form-group"><input type="time" name="fri_start"></div>
        </div>
        <div class="col-sm-3">
        <label>To</label>
        </div>
        <div class="col-sm-3">
        <div class="form-group"><input type="time" name="fri_end"></div>
        </div>
       </div>

        <div class="dayntime">
        <div class="col-sm-3">
        <input id="staurday" name="staurday" type="checkbox" class="check">
        <label style="color:#000; font-size:16px">Saturday</label> 
        </div>
        <div class="col-sm-3">
        <div class="form-group"><input type="time" name="str_start"></div>
        </div>
        <div class="col-sm-3">
        <label>To</label>
        </div>
        <div class="col-sm-3">
        <div class="form-group"><input type="time" name="str_end"></div>
        </div>
       </div>

        <div class="dayntime">
        <div class="col-sm-3">
        <input id="sunday" name="sunday" type="checkbox" class="check">
        <label style="color:#000; font-size:16px">Sunday</label> 
        </div>
        <div class="col-sm-3">
        <div class="form-group"><input type="time" name="sun_start"></div>
        </div>
        <div class="col-sm-3">
        <label>To</label>
        </div>
        <div class="col-sm-3">
        <div class="form-group"><input type="time" name="sun_end"></div>
        </div>
       </div>

   </div>
   
    <div class="col-lg-6">
    <h2>Pricing</h2>
    <p>Prices can be changed at any time once business becomes active. </p>
 	 <div class="form-group">
            <label class="col-sm-6 control-label">  Standard Labour Rate</label>
             <div class="col-sm-6">
             <p>(Per Hour including Service Tax)</p>
             <input id="hour_labour_rate" name="hour_labour_rate" class="form-control" type="text">
             </div>
     </div>
     <div class="form-group">
            <label class="col-sm-6 control-label">Services Fee</label>
             <div class="col-sm-6">
             <p>(For Minor / Major Service)</p>
             <input id="service_fee" name="service_fee" class="form-control" type="text">
             </div>
     </div>
     <div class="form-group">
            <label class="col-sm-6 control-label">Discount on Geniune Parts </label>
             <div class="col-sm-6">
             <p>(All Values in %)</p>
             <input id="dis_genpart" name="dis_genpart" class="form-control" type="text">
             </div>
     </div>
     <div class="form-group">
            <label class="col-sm-6 control-label">Discount on Alternate Parts </label>
             <div class="col-sm-6">
             <p>(All Values in %)</p>
             <input id="dis_altpart" name="dis_altpart" class="form-control" type="text">
             </div>
     </div>
     </div>
     <div class="form-group">
                    <div class="col-sm-12" align="center">
                        <input type="submit" name="register " value="REGISTER WORKSHOP" class="regbtn">
                    </div>
                </div>
    </div>
<!--     </form>-->
       <?php echo form_close(); ?>
     </div>
    </div>
    <?php include_once('footer.php');?>
	
