<!DOCTYPE HTML>
<html>
<head>
<title>Get Estimate</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Learn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url('css/bootstrap-3.1.1.min.css'); ?>" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url('js/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
<!-- Custom Theme files -->
<link href="<?php echo base_url('css/style.css'); ?>" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="<?php echo base_url('css/jquery.countdown.css'); ?>" />

<!----font-Awesome----->
<link href="<?php echo base_url('css/font-awesome.css'); ?>" rel="stylesheet"> 
<!----font-Awesome----->


<!-----------------slider script-----------------------> 
</head>
<script>
     function call_change2()
     {
         alert("in the call change2");
    $(".chb").change(function() {
    $(".chb").prop('checked', false);
    $(this).prop('checked', true);
});
}    
    
   function call_change()
   {
       alert("in the on change function");
       
     //  document.getElementById('servicekm').value;
       alert(document.getElementById('servicekm').value);
       
       var maxloop=document.getElementById('maxloop').value;
       
        for(var i=1;i<=maxloop;i++)
		     {
			 // var subtot = document.getElementById('sub_total'+i).value;
			  //var discount = document.getElementById('st_dis_'+i).value;
			 // var discounttype 	= document.getElementById('hid_distype_'+i).value;
			  
			  document.getElementById('servicekm'+i).checked=false;
			  //document.getElementById('st_dis_'+i).disabled=true;
			  //document.getElementById('assign-fee').disabled=true;
//			  if(document.getElementById('stop'))
//			  {
//			    document.getElementById('stop').disabled=true;
//			  }
			
			
		}
       
   }
   
//   function ckCBox(IDS) {
//  var cBoxInfo = document.getElementById('cBoxInfo').getElementsByTagName('input');
//  for (var i=0; i<cBoxInfo.length; i++) {
//    cBoxInfo[i].checked = false;
//  }
//  document.getElementById(IDS).checked = true;
//}
     </script>
    
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
	        <a class="navbar-brand" href="index.html"><img src="<?php echo base_url(); ?>images/logo.png" alt="" class="img-responsive"></a>
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
<?php print_r($_POST);
  if(isset($_POST)){
   @$loc_name=$_POST['location_name'];
  @$year=$_POST['year'];
   @$make=$_POST['make'];
  @$model=$_POST['model'];
   @$varient=$_POST['varient'];
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
     <div class="container" style="margin-top: 25px; margin-bottom:25px;">
         <div class="row">
                 <div class="col-lg-3" style="background: #253993;">
                 <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree" aria-expanded="true">
                                        <div class="panel-body bodypa1">
                                            <div class="list-group">
                                                <div class="col-sm-12 divslide"><a href="#home" data-toggle="tab" class="list-group itemdesign"> <span aria-hidden="true"></span> SERVICING <i class="fa fa-caret-right"></i></a></div>
                                                <div class="col-sm-12 divslide"><a href="#menu1" data-toggle="tab" class="list-group itemdesign"> <span aria-hidden="true"></span> TOP OFFERS <i class="fa fa-caret-right"></i></a></div>
                                                <div class="col-sm-12 divslide"><a href="#menu2" data-toggle="tab" class="list-group itemdesign"> <span aria-hidden="true"></span>REPAIR <i class="fa fa-caret-right"></i> </a></div>
                                                <div class="col-sm-12 divslide"><a href="#menu3" data-toggle="tab" class="list-group itemdesign"> <span aria-hidden="true"></span> DIAGNOSTIC  <i class="fa fa-caret-right"></i></a></div>
                                               <div class="col-sm-12 divslide"> <a href="#menu4" data-toggle="tab" class="list-group itemdesign"> <span aria-hidden="true"></span>CHANGE TYRE <i class="fa fa-caret-right"></i></a></div>
                                               <div class="col-sm-12 divslide"> <a href="#menu5" data-toggle="tab" class="list-group itemdesign"> <span aria-hidden="true"></span>CHANGE BATTERY <i class="fa fa-caret-right"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                 </div>
             <?php $i=1;?>
                 <div class="col-lg-6">
                 <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">
                                                <div class="panel-group" id="accordion">
                                                    <?php 
                                                       $query = $this->db->query('SELECT * FROM add_interval');

                                foreach ($query->result() as $row){
                       ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title color">
          <span class="check"> 
<!--              <div id="cBoxInfo">-->
<input type="checkbox" class="big-checkbox"  name="servicekm[]" id="servieckm<?php echo $i;?>" class="chb" onclick="call_change2();"/><span style="margin-top:1px;">
<!--                  10,000 KMS OR 4 MONTHS-->
                  <?php echo $row->interval_name; ?>
              </span></span><span> <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i;?>" style="float: right;
   " >More Info</a> </span>
<!--</div>-->
        </h4>
      </div>
      <div id="collapse<?php echo $i;?>" class="panel-collapse collapse">
          <div class="panel-body">
             <?php echo $row->more_info; ?> 
             
          </div>
      </div>
    </div>
                                <?php 
                                
                                $i=$i+1;
                                
                                }?>
                                                    <input type="hidden" name="max_loop" id="max_loop" value="<?php echo $i;?>">
<!--    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title color">
         <span class="check"> <input type="checkbox" class="big-checkbox" name="servicekm" /><span style="margin-top:1px;"> 20,000 KMS OR 8 MONTHS</span></span><span><a data-toggle="collapse" data-parent="#accordion" href="#collapse2"  style="float: right;
   " >More Info</a></span>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>-->
<!--    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title color">
        <span class="check"> <input type="checkbox" class="big-checkbox" name="servicekm" /><span style="margin-top:1px;"> 30,000 KMS OR 12 MONTHS</span></span><span><a data-toggle="collapse" data-parent="#accordion" href="#collapse3" style="float: right;
   ">More Info</a></span>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>-->
<!--    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title color">
        <span class="check"> <input type="checkbox" class="big-checkbox" name="servicekm" /><span style="margin-top:1px;"> 40,000 KMS OR 02 YEARS</span></span><span><a data-toggle="collapse" data-parent="#accordion" href="#collapse4" style="float: right;
   ">More Info</a></span>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>-->
<!--    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title color">
        <span class="check"> <input type="checkbox" class="big-checkbox" name="servicekm" /><span style="margin-top:1px;"> 50,000 KMS OR 03 YEARS</span></span><span><a data-toggle="collapse" data-parent="#accordion" href="#collapse5" style="float: right;
   ">More Info</a></span>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>-->
<!--    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title color">
        <span class="check"> <input type="checkbox" class="big-checkbox" name="servicekm" /><span style="margin-top:1px;"> 60,000 KMS OR 04 YEARS</span></span><span><a data-toggle="collapse" data-parent="#accordion" href="#collapse6" style="float: right;
   ">More Info</a></span>
        </h4>
      </div>
      <div id="collapse6" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>-->
<!--    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title color">
        <span class="check"> <input type="checkbox" class="big-checkbox" name="servicekm" /><span style="margin-top:1px;"> 70,000 KMS OR 05 YEARS</span></span><span><a data-toggle="collapse" data-parent="#accordion" href="#collapse7" style="float: right;
   ">More Info</a></span>
        </h4>
      </div>
      <div id="collapse7" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>-->
<!--    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title color">
        <span class="check"> <input type="checkbox" class="big-checkbox" name="servicekm" /><span style="margin-top:1px;"> 80,000 KMS OR 06 YEARS</span></span><span><a data-toggle="collapse" data-parent="#accordion" href="#collapse8" style="float: right;
   ">More Info</a></span>
        </h4>
      </div>
      <div id="collapse8" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>-->
<!--    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title color">
        <span class="check"> <input type="checkbox" class="big-checkbox" name="servicekm" /><span style="margin-top:1px;"> 90,000 KMS OR 07 YEARS</span></span><span><a data-toggle="collapse" data-parent="#accordion" href="#collapse9" style="float: right;
   ">More Info</a></span>
        </h4>
      </div>
      <div id="collapse9" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>-->
<!--    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title color">
        <span class="check"> <input type="checkbox" class="big-checkbox" name="servicekm" /><span style="margin-top:1px;"> 100,000 KMS OR 08 YEARS</span></span><span><a data-toggle="collapse" data-parent="#accordion" href="#collapse10" style="float: right;
   ">More Info</a></span>
        </h4>
      </div>
      <div id="collapse10" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>-->
  </div> 
  </div>
                                            
             <div id="menu1" class="tab-pane fade">
                br/>
                 <p>Sales Executive</p>
                 <p>Job Description</p>
                 <p>Key areas of responsibility</p>
                 <ul>
                 <li>Achieving Individual Sales Targets.</li>
                 <li>Plans, organizes, directs, controls and coordinates the sales and marketing activities within an organization.</li>
                 <li>Responsible for developing a business plan covering sales, revenue, and expense controls, meeting agreed targets.</li>
                 <li>Improves product marketability and profitability by researching, identifying, and capitalizing on market opportunities.</li>
                 <li>Provides information by collecting, analyzing, and summarizing data and trends.</li>
                 <li>Accomplishes marketing and sales objectives by planning, developing, implementing, and evaluating; developing field sales action plans.</li>
                 <li>Maintaining detailed knowledge of the company’s products or services and keeping abreast of what competitors are doing</li>
                 <li>Give presentation and demonstrations to the prospective client.</li>
                 <li>Maintains relationships with clients by providing support, information, and guidance</li>
                 </ul>
                 <p>Desired Skills & Experience</p>
                 <p>Qualifications</p>
                 <ul>
                 <li>Sales experience required 0 to 5yrs (Fresher can also Apply)</li>
                 <li>Good communication and people skills</li>
                 <li>High energy, motivating, and team building skills</li>
                 <li>Self-reliant, works with minimum supervision</li>
                 </ul>
                 <p>Location :</p>
                 <p>The Candidate should be a local resident in the above mentioned locations.</p>
                 <hr/>
                 <p><strong>For All Positions:</strong></p>
                 </div>
                                
                 <div id="menu2" class="tab-pane fade">
                 <p>Pre Sales Executive</p>
                 <p>Job Description</p>
                 <ul>
                 <li>Good communication skills</li>
                 <li>Having experience in Telesales and outbound calling</li>
                 <li>Generating Leads</li>
                 </ul>
                 <p>Experience – 1-2yrs</p>
                 <p>Qualification – Graduation (any field)</p>
                 <p>Location – Noida</p>
                 <p>Languages – English and any of the south Indian language.</p>
                 <hr/>
                 <p><strong>For All Positions:</strong></p>
                 <ul>
                 <li>No walk-ins would be entertained.</li>
                 <li>Salary commensurate with qualification and experience.</li>
                 <li>High level of computer literacy.</li>
                 </ul>
                  </div>
                                
                 <div id="menu3" class="tab-pane fade">
                    <br/>
                      <ul>
                      <li>Back End Account Administration. – activation/ closures / maintaining expiry dates etc </li>
                      <li>Database Management</li>
                      <li>Handling incoming calls - enquiry/ complaint / password/ renewal any other issue etc </li>
                       <li>Handling online live chat.</li>
                       <li>Provide online assistance to training requests </li>
                       <li>Handling incoming calls.</li>
                       <li>Filing order form and give order form report to Senior.</li>
                       <li>Feedback / Courtesy calls to New / Renewal Clients.</li>
                       <li>Calling to dropped clients for revival.</li>
                       <li>Filing Papers and maintaining different files.</li>
                       <li>Sending mails to New / Renewal/ Dropped clients.</li>
                       <li>Making Reports </li>
                       <li>Filling MIS / CRM</li>
                      </ul>
                     </div>
                        
                                <div id="menu4" class="tab-pane fade">
                                <br/>
                                          <ul>
                                          <li>Back End Account Administration. – activation/ closures / maintaining expiry dates etc </li>
                                          <li>Database Management</li>
                                          <li>Handling incoming calls - enquiry/ complaint / password/ renewal any other issue etc </li>
                                          <li>Handling online live chat.</li>
                                          <li>Provide online assistance to training requests </li>
                                          <li>Handling incoming calls.</li>
                                          <li>Filing order form and give order form report to Senior.</li>
                                          <li>Feedback / Courtesy calls to New / Renewal Clients.</li>
                                          <li>Calling to dropped clients for revival.</li>
                                          <li>Filing Papers and maintaining different files.</li>
                                          <li>Sending mails to New / Renewal/ Dropped clients.</li>
                                          <li>Making Reports </li>
                                          <li>Filling MIS / CRM</li>
                                          </ul>
                                      
                                </div>
                        
                                <div id="menu4" class="tab-pane fade">
                                <br/>
                                          <ul>
                                          <li>Back End Account Administration. – activation/ closures / maintaining expiry dates etc </li>
                                          <li>Database Management</li>
                                          <li>Handling incoming calls - enquiry/ complaint / password/ renewal any other issue etc </li>
                                          <li>Handling online live chat.</li>
                                          <li>Provide online assistance to training requests </li>
                                          <li>Handling incoming calls.</li>
                                          <li>Filing order form and give order form report to Senior.</li>
                                          <li>Feedback / Courtesy calls to New / Renewal Clients.</li>
                                          <li>Calling to dropped clients for revival.</li>
                                          <li>Filing Papers and maintaining different files.</li>
                                          <li>Sending mails to New / Renewal/ Dropped clients.</li>
                                          <li>Making Reports </li>
                                          <li>Filling MIS / CRM</li>
                                          </ul>
                                        
                                </div>
                        
                                <div id="menu5" class="tab-pane fade">
                                <br/>
                               			<h2>Assignment</h2>
                                        <hr>
                                        <ol type="i">
                                        <li><p>1. Which is true about a method-local inner class?</p>
                                        	<ol>
                                            <li><input type="radio" name="ans" value="1" id="ans"> It must be marked final.</li>
                                            <li><input type="radio" name="ans" value="2" id="ans"> It can be marked abstract.</li>
                                            <li><input type="radio" name="ans" value="3" id="ans"> It can be marked public.</li>
                                            <li><input type="radio" name="ans" value="4" id="ans"> It can be marked static.</li>
                                            </ol>
                                        </li>
                                        </ol>
                                            <div align="right">
                                            <a href="#"><input class="btn btn-primary" id="Submit" name="Submit" value="Submit" type="submit"></a>
                                          </div>
                                </div>
                        
                            </div>
                 </div>
                 <div class="col-lg-3">
                  <div class="panel panel-primary">
                  <div class="panel-heading">CAR AND LOCATION DETAIL</div>
                  <div class="panel-body">
                  <div class="col-sm-4"><img src="images/icon-car.png" alt="" class="img-responsive"></div>
                  <div class="col-sm-8"> <p>
                           <?php
                                
                                $this->db->select('*');
                                $this->db->from('make');
                                $this->db->where('make_id',$make); 
                                $query2 = $this->db->get();
                                foreach ($query2->result() as $row2){ 
                                echo $row2->make_name; 
                                   echo "<br>";      
                                }
                                       
                                $this->db->select('*');
                                $this->db->from('model');
                                $this->db->where('model_id',$model); 
                                $query3 = $this->db->get();
                                foreach ($query3->result() as $row3){ 
                                echo $row3->model_name; 
                                }
                                echo "<br>";
                                 $this->db->select('*');
                                $this->db->from('varient');
                                $this->db->where('varient_id',$varient); 
                                $query4 = $this->db->get();
                                foreach ($query4->result() as $row4){ 
                                echo $row4->varient_name; 
                                }
                                ?>
                          
<!--                          MAHINDRA SCORPIO VLX AT  -->
</p></div>
                  <div class="col-sm-4"><i class="fa fa-flag-o fa-2x"></i></div>
                  <div class="col-sm-8"> <p>
                      
                           <?php
                                
                                $this->db->select('*');
                                $this->db->from('add_location');
                                $this->db->where('loc_id',$loc_name); 
                                $query5 = $this->db->get();
                                foreach ($query5->result() as $row5){ 
                                echo $row5->location_name; 
                                   echo "<br>";      
                                }
                                
                                ?>
<!--                          DELHI BYE PASS ROHTAK, HARYANA 124001-->
                      
                      </p></div>
                </div>
                </div>
                  <div class="col-sm-12 submit_button"> 
                        <input type="submit" value="Search">
		   		  </div>
                  <br>
                  <br><br>
                  <div class="panel panel-primary">
                  <div class="panel-heading">SELECTED SERVICES</div>
                  <div class="panel-body">
                  <div class="row" style="    border-bottom: 1px solid #DEDEDE;">
                  <div class="col-sm-4"><img src="images/icon-trash.png" alt="" class="img-responsive"></div>
                  <div class="col-sm-8"> <p>10000 KMS SERVICE</p></div>
                  </div>
                  <div class="row" style="    border-bottom: 1px solid #DEDEDE;">
                  <div class="col-sm-4"><img src="images/icon-trash.png" alt="" class="img-responsive"></div>
                  <div class="col-sm-8"> <p>BRAKE PAD CHANGE</p></div>
                  </div>
                  <div class="row" style="    border-bottom: 1px solid #DEDEDE;">
                  <div class="col-sm-4"><img src="images/icon-trash.png" alt="" class="img-responsive"></div>
                  <div class="col-sm-8"> <p>ENGINE BELT CHANGE</p></div>
                  </div>
                  <div class="row" style="    border-bottom: 1px solid #DEDEDE;">
                   <div class="col-sm-4"><img src="images/icon-trash.png" alt="" class="img-responsive"></div>
                  <div class="col-sm-8"> <p>GEAR LEVER VIBRATION</p></div>
                  </div>
                
                </div>
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
     
   		
  <?php include_once('footer.php'); ?> 
<!--<script src="js/jquery.countdown.js"></script>
<script src="js/script.js"></script>-->
</body>
</html>	