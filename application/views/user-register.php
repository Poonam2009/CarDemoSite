<!DOCTYPE HTML>
<html>
<head>
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
	        <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url('images/logo.png');?>" alt="" class="img-responsive"></a>
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
    
    <div  class="myaccout"> <h1 style="float:left">Sign Up</h1>
    <ol class="breadcrumb myac">
    <li><a href="<?php echo base_url();?>">Home</a></li>
    <li class="active">Sign Up</li>        
  	</ol>
  	</div>
	<!-- //banner -->
    <div class="container">
    <div class="col-lg-12"><br>
    <h1>Register your details</h1>
    <p>Creating a My Account profile is easy. Simply enter your details below to receive great benefits including vehicle maintenance reminders and our quick booking tool that will make caring for your vehicle a breeze.</p>
    <p>Please note, all fields are required.</p>
    <br>
    <h3>Register Details</h3>
    <hr>
    
      <?php
	echo validation_errors();

		$form_att = array('class' =>'form-horizontal','method' => 'post'); 

		echo form_open('Front/addUser', $form_att);
              

	?>
<!--    <form class="form-horizontal" role="form">-->
        
    <div class="form-group">
      <label class="col-sm-2 control-label">Name</label>
      <div class="col-sm-10">
        <input class="form-control" id="forename" name="username" maxlength="15" type="text" placeholder="Enter Name...">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Email</label>
      <div class="col-sm-10">
        <input class="form-control" id="email" name="email" maxlength="50" type="text" placeholder="Enter Email...">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Password</label>
      <div class="col-sm-10">
          <input class="form-control" id="Password" name="password" type="password" maxlength="12" placeholder="Enter Password...">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Confirm</label>
      <div class="col-sm-10">
        <input class="form-control" id="confirm_pwd" name="confirm_pwd" type="password" maxlength="12" placeholder="Confirm your password...">
      </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12" align="center">
        <input type="checkbox"> To receive information on future offers and promotions, please check the box alongside.
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12" align="center">
         	<input type="submit" name="register " value="Register" class="regbtn">
        </div>
    </div>
    
<!--  </form>-->
    <?php echo form_close(); ?>
    </div>
    </div>
    
       
         <?php include_once('footer.php');?>
</body>
</html>	
