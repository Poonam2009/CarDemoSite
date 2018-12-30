<?php
session_start();
include_once('inc/config.php');
// Turn on output buffering  
   ob_start();  
   //Get the ipconfig details using system commond  
   system('ipconfig /all');  
   // Capture the output into a variable  
   $mycomsys=ob_get_contents();  
   // Clean (erase) the output buffer  
   ob_clean();  
   $find_mac = "Physical"; //find the "Physical" & Find the position of Physical text  
   $pmac = strpos($mycomsys, $find_mac);  
   // Get Physical Address  
   $macaddress=substr($mycomsys,($pmac+36),17);  
   //Display Mac Address  
  // echo $macaddress; 
  
    
  	date_default_timezone_set('Asia/Kolkata');   
	//$time_now=mktime(date('h')+5,date('i')+30,date('s'));
	$date = date('Y-m-d H:i:s');
	$macaddress=substr($mycomsys,($pmac+36),17);
	$ip_address            =    $_SERVER['REMOTE_ADDR'];
	$created_by            =    $_SESSION['main']['user_mail'];
	$created_on			   =	$date;

if(isset($_POST['savecountry']))
{	
	$countryname	= htmlspecialchars(stripslashes(trim(strtoupper($_POST['country']))));
	
	// if its not alpha numeric, throw error
		if (!ctype_alpha(str_replace(array("'", "-"," "), "", $countryname))) { 
			echo'<p class="error">Name should be alpha characters only.Use Back of your browser to back to your page</p>';
			exit;
		}
			$sqlCheck ="SELECT * FROM country_master WHERE country='".$countryname."'";
			$result	  =	mysqli_query($con,$sqlCheck)or die("error".mysql_error());
			$row	  = mysqli_num_rows($result);
		if($row==0)
		{
			$sqlCountry		="INSERT INTO country_master(country,date_created,created_by,modified_by,ip_address,mac_address)VALUES('".$countryname."','".$created_on."','".$created_by."','NA','".$ip_address."','".$macaddress."')";
			mysqli_query($con,$sqlCountry)or die(mysqli_error($con));	
			header("Location:country-master.php");
			exit;		
		}
		else
		{
			echo'<p class="error">Country Name Already Exist.Use Back of your browser to back to your page</p>';
			exit;
		}
			
	
}
//update country
if(isset($_POST['updatecountry']))
{	
	$countryname	= htmlspecialchars(stripslashes(trim(strtoupper($_POST['country']))));
	
	// if its not alpha numeric, throw error
		if (!ctype_alpha(str_replace(array("'", "-"," "), "", $countryname))) { 
			echo'<p class="error">Name should be alpha characters only.Use Back of your browser to back to your page</p>';
			exit;
		}
			$sqlCheck ="SELECT * FROM country_master WHERE country='".$countryname."'";
			$result	  =	mysqli_query($con,$sqlCheck)or die("error".mysql_error());
			$row	  = mysqli_num_rows($result);
			if($row==0)
				{
					$cid			= $_POST['hid_cid'];
					$sqlCountry		="UPDATE country_master SET country='".$countryname."',date_modified='".$created_on."',modified_by='".$created_by."',ip_address='".$ip_address."',mac_address='".$macaddress."' WHERE country_id=".$cid."";
					mysqli_query($con,$sqlCountry)or die(mysqli_error($con));	
					header("Location:country-master.php");
					exit;
				}
			else
				{
					echo'<p class="error">Country Name Already Exist.Use Back of your browser to back to your page</p>';
					exit;
				}
}


if(isset($_POST['savestate']))
{	
	$countryid	= $_POST['countryid'];	
	//$statename	= $_POST['state'];	
	$statename	= htmlspecialchars(stripslashes(trim(strtoupper($_POST['state']))));
	// if its not alpha numeric, throw error
		if (!ctype_alpha(str_replace(array("'", "-"," "), "", $statename))) { 
			echo'<p class="error">Name should be alpha characters only.Use Back of your browser to back to your page</p>';
			exit;
		}
			$sqlCheck ="SELECT * FROM state_master WHERE statename='".$statename."'";
			$result	  =	mysqli_query($con,$sqlCheck)or die("error".mysql_error());
			$row	  = mysqli_num_rows($result);
			if($row==0)
				{	
					$sqlState	="INSERT INTO state_master(countryid,statename,date_created,created_by,modified_by,ip_address,mac_address)VALUES('".$countryid."','".$statename."','".$created_on."','".$created_by."','NA','".$ip_address."','".$macaddress."')";
					mysqli_query($con,$sqlState)or die(mysqli_error($con));	
					header("Location:state-master.php");
					exit;
				}
			else
			{
				echo'<p class="error">State Name Already Exist.Use Back of your browser to back to your page</p>';
				exit;
			}
				
}
//update state

if(isset($_POST['updatestate']))
{	
	$stateid	= $_POST['hid_sid'];
	$statename	= htmlspecialchars(stripslashes(trim(strtoupper($_POST['state']))));
	// if its not alpha numeric, throw error
		if (!ctype_alpha(str_replace(array("'", "-"," "), "", $statename))) { 
			echo'<p class="error">Name should be alpha characters only.Use Back of your browser to back to your page</p>';
			exit;
		}
			$sqlCheck ="SELECT * FROM state_master WHERE statename='".$statename."'";
			$result	  =	mysqli_query($con,$sqlCheck)or die("error".mysql_error());
			$row	  = mysqli_num_rows($result);
			if($row==0)
				{
					$sqlState	="UPDATE state_master SET statename='".$statename."',date_modified='".$created_on."',modified_by='".$created_by."',ip_address='".$ip_address."',mac_address='".$macaddress."' WHERE state_id=".$stateid."";
					mysqli_query($con,$sqlState)or die(mysqli_error($con));	
					header("Location:state-master.php");
					exit;	
				}
			else
				{
					echo'<p class="error">State Name Already Exist.Use Back of your browser to back to your page</p>';
					exit;
				}
					
}

if(isset($_POST['savecity']))
{
	//$city			= $_POST['city'];
	$city	= htmlspecialchars(stripslashes(trim(strtoupper($_POST['city']))));
	// if its not alpha numeric, throw error
		if (!ctype_alpha(str_replace(array("'", "-"," "), "", $city))) { 
			echo'<p class="error">Name should be alpha characters only.Use Back of your browser to back to your page</p>';
			exit;
		}
			$sqlCheck ="SELECT * FROM city_master WHERE city='".$city."'";
			$result	  =	mysqli_query($con,$sqlCheck)or die("error".mysql_error());
			$row	  = mysqli_num_rows($result);
			if($row==0)
				{
				  $countryCity	= $_POST['countryCity'];
				  $stateCity		= $_POST['st_state'];
				  $sqlCity		="INSERT INTO city_master(city,state_id,countryid,date_created,created_by,modified_by,ip_address,mac_address)VALUES('".$city."','".$stateCity."','".$countryCity."','".$created_on."','".$created_by."','NA','".$ip_address."','".$macaddress."')";
				  mysqli_query($con,$sqlCity)or die(mysqli_error($con));
				  header("Location:city-master.php");
				  exit;
				}
			else
				{
					echo'<p class="error">City Name Already Exist.Use Back of your browser to back to your page</p>';
					exit;
				}
}
// update city
if(isset($_POST['updatecity']))
{
	$cityid			= $_POST['hid_cityid'];	
	$Cityname	= htmlspecialchars(stripslashes(trim(strtoupper($_POST['city']))));
	// if its not alpha numeric, throw error
		if (!ctype_alpha(str_replace(array("'", "-"," "), "", $Cityname))) { 
			echo'<p class="error">Name should be alpha characters only.Use Back of your browser to back to your page</p>';
			exit;
		}
			$sqlCheck ="SELECT * FROM city_master WHERE city='".$Cityname."'";
			$result	  =	mysqli_query($con,$sqlCheck)or die("error".mysql_error());
			$row	  = mysqli_num_rows($result);
			if($row==0)
				{	
				  $sqlCity		="UPDATE city_master SET city='".$Cityname."',date_modified='".$created_on."',modified_by='".$created_by."',ip_address='".$ip_address."',mac_address='".$macaddress."' WHERE city_id=".$cityid."";
				  mysqli_query($con,$sqlCity)or die(mysqli_error($con));
				  header("Location:city-master.php");
				  exit;
				}
			else
				{
					echo'<p class="error">City Name Already Exist.Use Back of your browser to back to your page</p>';
					exit;
				}
}

if(isset($_POST['savedesignation']))
{
	//$designation	= $_POST['designation'];	
	$designation	= htmlspecialchars(stripslashes(trim(strtoupper($_POST['designation']))));
	// if its not alpha numeric, throw error
		if (!ctype_alpha(str_replace(array("'", "-"," "), "", $designation))) { 
			echo'<p class="error">Name should be alpha characters only.Use Back of your browser to back to your page</p>';
			exit;
		}		
			$sqlCheck ="SELECT * FROM designation_master WHERE designation='".$designation."'";
			$result	  =	mysqli_query($con,$sqlCheck)or die("error".mysql_error());
			$row	  = mysqli_num_rows($result);
			if($row==0)
				{	
					$sqlDesignation		="INSERT INTO designation_master(designation,date_created,created_by,modified_by,ip_address,mac_address)VALUES('".$designation."','".$created_on."','".$created_by."','NA','".$ip_address."','".$macaddress."')";
					mysqli_query($con,$sqlDesignation)or die(mysqli_error($con));	
					header("Location:designation-master.php");
					exit;
				}
			else
			{
				echo'<p class="error">Designation Already Exist.Use Back of your browser to back to your page</p>';
				exit;
			}
}
// save department

if(isset($_POST['savedepartment']))
{
	//$department	= $_POST['department'];	
	$department	= htmlspecialchars(stripslashes(trim(strtoupper($_POST['department']))));
	// if its not alpha numeric, throw error
		if (!ctype_alpha(str_replace(array("'", "-"," "), "", $department))) { 
			echo'<p class="error">Name should be alpha characters only.Use Back of your browser to back to your page</p>';
			exit;
		}		
			$sqlCheck ="SELECT * FROM department_master WHERE department='".$department."'";
			$result	  =	mysqli_query($con,$sqlCheck)or die("error".mysql_error());
			$row	  = mysqli_num_rows($result);
			if($row==0)
				{	
					$sqlDepartment		="INSERT INTO department_master(department,date_created,created_by,modified_by,ip_address,mac_address)VALUES('".$department."','".$created_on."','".$created_by."','NA','".$ip_address."','".$macaddress."')";
					mysqli_query($con,$sqlDepartment)or die(mysqli_error($con));	
					header("Location:department-master.php");
					exit;
				}
			else
			{
				echo'<p class="error">Department Already Exist.Use Back of your browser to back to your page</p>';
				exit;
			}
}
// Update Designation
if(isset($_POST['updatedesignation']))
{
	$designation_id	= $_POST['hid_desgid'];	
	//$designation	= $_POST['designation'];
	$designation	= htmlspecialchars(stripslashes(trim(strtoupper($_POST['designation']))));
	// if its not alpha numeric, throw error
		if (!ctype_alpha(str_replace(array("'", "-"," "), "", $designation))) { 
			echo'<p class="error">Name should be alpha characters only.Use Back of your browser to back to your page</p>';
			exit;
		}
			$sqlCheck ="SELECT * FROM designation_master WHERE designation='".$designation."'";
			$result	  =	mysqli_query($con,$sqlCheck)or die("error".mysql_error());
			$row	  = mysqli_num_rows($result);
			if($row==0)
				{	
				  $sqlDesignation	="UPDATE designation_master SET designation='".$designation."',date_modified='".$created_on."',modified_by='".$created_by."',ip_address='".$ip_address."',mac_address='".$macaddress."' WHERE desig_id=".$designation_id."";
				  mysqli_query($con,$sqlDesignation)or die(mysqli_error($con));	
				  header("Location:designation-master.php");
				  exit;
				}
			else
			{
				echo'<p class="error">Designation Already Exist.Use Back of your browser to back to your page</p>';
				exit;
			}
					
}
// Update Department
if(isset($_POST['updatedepartment']))
{
	$department_id	= $_POST['hid_deptid'];	
	//$department	= $_POST['department'];
	$department	= htmlspecialchars(stripslashes(trim(strtoupper($_POST['department']))));
	// if its not alpha numeric, throw error
		if (!ctype_alpha(str_replace(array("'", "-"," "), "", $department))) { 
			echo'<p class="error">Name should be alpha characters only.Use Back of your browser to back to your page</p>';
			exit;
		}
			$sqlCheck ="SELECT * FROM department_master WHERE department='".$department."'";
			$result	  =	mysqli_query($con,$sqlCheck)or die("error".mysql_error());
			$row	  = mysqli_num_rows($result);
			if($row==0)
				{	
				  $sqldepartment	="UPDATE department_master SET department='".$department."',date_modified='".$created_on."',modified_by='".$created_by."',ip_address='".$ip_address."',mac_address='".$macaddress."' WHERE depart_id=".$department_id."";
				  mysqli_query($con,$sqldepartment)or die(mysqli_error($con));	
				  header("Location:department-master.php");
				  exit;
				}
			else
			{
				echo'<p class="error">Department Already Exist.Use Back of your browser to back to your page</p>';
				exit;
			}
					
}

if(isset($_POST['savequalification']))
{
	//$qualification	= $_POST['qualification'];
	
	$qualification	= htmlspecialchars(stripslashes(trim(strtoupper($_POST['qualification']))));
	// if its not alpha numeric, throw error
		if (!ctype_alpha(str_replace(array("'", "-"," "), "", $qualification))) { 
			echo'<p class="error">Name should be alpha characters only.Use Back of your browser to back to your page</p>';
			exit;
		}
			$sqlCheck ="SELECT * FROM qualification_master WHERE qualification='".$qualification."'";
			$result	  =	mysqli_query($con,$sqlCheck)or die("error".mysql_error());
			$row	  = mysqli_num_rows($result);
			if($row==0)
				{
					$sqlQualification		="INSERT INTO qualification_master(qualification,date_created,created_by,modified_by,ip_address,mac_address)VALUES('".$qualification."','".$created_on."','".$created_by."','NA','".$ip_address."','".$macaddress."')";
					mysqli_query($con,$sqlQualification)or die(mysqli_error($con));	
					header("Location:qualification-master.php");
					exit;
				}
			else
				{
					echo'<p class="error">Qualification Already Exist.Use Back of your browser to back to your page</p>';
					exit;
				}
}
//Update Qualification
if(isset($_POST['updatequalification']))
{
	$qualification_id	= $_POST['hid_qualid'];
	//$qualification		= $_POST['qualification'];
	$qualification	= htmlspecialchars(stripslashes(trim(strtoupper($_POST['qualification']))));
	// if its not alpha numeric, throw error
		if (!ctype_alpha(str_replace(array("'", "-"," "), "", $qualification))) { 
			echo'<p class="error">Name should be alpha characters only.Use Back of your browser to back to your page</p>';
			exit;
		}
			$sqlCheck ="SELECT * FROM qualification_master WHERE qualification='".$qualification."'";
			$result	  =	mysqli_query($con,$sqlCheck)or die("error".mysql_error());
			$row	  = mysqli_num_rows($result);
			if($row==0)
				{
					$sqlQualification	="UPDATE qualification_master SET qualification='".$qualification."',date_modified='".$created_on."',modified_by='".$created_by."',ip_address='".$ip_address."',mac_address='".$macaddress."' WHERE qualific_id=".$qualification_id."";
					mysqli_query($con,$sqlQualification)or die(mysqli_error($con));	
					header("Location:qualification-master.php");
					exit;
				}
				else
				{
					echo'<p class="error">Qualification Already Exist.Use Back of your browser to back to your page</p>';
					exit;
				}
}

if(isset($_POST['saverelation']))
{
	//$relation	= $_POST['relation'];
	
	$relation	= htmlspecialchars(stripslashes(trim(strtoupper($_POST['relation']))));
	// if its not alpha numeric, throw error
		if (!ctype_alpha(str_replace(array("'", "-"," "), "", $relation))) { 
			echo'<p class="error">Name should be alpha characters only.Use Back of your browser to back to your page</p>';
			exit;
		}
			$sqlCheck ="SELECT * FROM relation_master WHERE relation='".$relation."'";
			$result	  =	mysqli_query($con,$sqlCheck)or die("error".mysql_error());
			$row	  = mysqli_num_rows($result);
			if($row==0)
				{
					$sqlRelation		="INSERT INTO relation_master(relation,date_created,created_by,modified_by,ip_address,mac_address)VALUES('".$relation."','".$created_on."','".$created_by."','NA','".$ip_address."','".$macaddress."')";
					mysqli_query($con,$sqlRelation)or die(mysqli_error($con));	
					header("Location:relation-master.php");
					exit;
				}
				else
				{
					echo'<p class="error">Relation Already Exist.Use Back of your browser to back to your page</p>';
					exit;
				}
}
//update relation
if(isset($_POST['updaterelation']))
{
	$relation_id	= $_POST['hid_relid'];
	//$relation		= $_POST['relation'];
	$relation	= htmlspecialchars(stripslashes(trim(strtoupper($_POST['relation']))));
	// if its not alpha numeric, throw error
		if (!ctype_alpha(str_replace(array("'", "-"," "), "", $relation))) { 
			echo'<p class="error">Name should be alpha characters only.Use Back of your browser to back to your page</p>';
			exit;
		}
			$sqlCheck ="SELECT * FROM relation_master WHERE relation='".$relation."'";
			$result	  =	mysqli_query($con,$sqlCheck)or die("error".mysql_error());
			$row	  = mysqli_num_rows($result);
			if($row==0)
			  {
				$sqlRelation	= "UPDATE relation_master SET relation='".$relation."',date_modified='".$created_on."',modified_by='".$created_by."',ip_address='".$ip_address."',mac_address='".$macaddress."' WHERE rel_id=".$relation_id."";
				mysqli_query($con,$sqlRelation)or die(mysqli_error($con));	
				header("Location:relation-master.php");
				exit;
			  }
			else
				{
					echo'<p class="error">Relation Already Exist.Use Back of your browser to back to your page</p>';
					exit;
				}
}
if(isset($_POST['savenationality']))
{
	//$nationality	= $_POST['nationality'];
	$nationality	= htmlspecialchars(stripslashes(trim(strtoupper($_POST['nationality']))));
	// if its not alpha numeric, throw error
		if (!ctype_alpha(str_replace(array("'", "-"," "), "", $nationality))) { 
			echo'<p class="error">Name should be alpha characters only.Use Back of your browser to back to your page</p>';
			exit;
		}
			$sqlCheck ="SELECT * FROM nationality_master WHERE nationality='".$nationality."'";
			$result	  =	mysqli_query($con,$sqlCheck)or die("error".mysql_error());
			$row	  = mysqli_num_rows($result);
			if($row==0)
			  {
				  $sqlNationality	="INSERT INTO nationality_master(nationality,date_created,created_by,modified_by,ip_address,mac_address)VALUES('".$nationality."','".$created_on."','".$created_by."','NA','".$ip_address."','".$macaddress."')";
				  mysqli_query($con,$sqlNationality)or die(mysqli_error($con));	
				  header("Location:nationality-master.php");
				  exit;
			  }
			else
				{
					echo'<p class="error">Nationality Already Exist.Use Back of your browser to back to your page</p>';
					exit;
				}
}
//update nationality
if(isset($_POST['updatenationality']))
{
	$nat_id			= $_POST['hid_natid'];
	//$nationality	= $_POST['nationality'];
	$nationality	= htmlspecialchars(stripslashes(trim(strtoupper($_POST['nationality']))));
	// if its not alpha numeric, throw error
		if (!ctype_alpha(str_replace(array("'", "-"," "), "", $nationality))) { 
			echo'<p class="error">Name should be alpha characters only.Use Back of your browser to back to your page</p>';
			exit;
		}
			$sqlCheck ="SELECT * FROM nationality_master WHERE nationality='".$nationality."'";
			$result	  =	mysqli_query($con,$sqlCheck)or die("error".mysql_error());
			$row	  = mysqli_num_rows($result);
			if($row==0)
			  {
				  $sqlNationality	="UPDATE nationality_master SET nationality='".$nationality."',date_modified='".$created_on."',modified_by='".$created_by."',ip_address='".$ip_address."',mac_address='".$macaddress."' WHERE nat_id=".$nat_id."";
				  mysqli_query($con,$sqlNationality)or die(mysqli_error($con));	
				  header("Location:nationality-master.php");
				  exit;
			  }
			  else
			  {
					echo'<p class="error">Nationality Already Exist.Use Back of your browser to back to your page</p>';
					exit;
			   }
}

if(isset($_POST['savereligion']))
{
	//$religion	= $_POST['religion'];
	$religion	= htmlspecialchars(stripslashes(trim(strtoupper($_POST['religion']))));
	// if its not alpha numeric, throw error
		if (!ctype_alpha(str_replace(array("'", "-"," "), "", $religion))) { 
			echo'<p class="error">Name should be alpha characters only.Use Back of your browser to back to your page</p>';
			exit;
		}
			$sqlCheck ="SELECT * FROM religion_master WHERE religion='".$religion."'";
			$result	  =	mysqli_query($con,$sqlCheck)or die("error".mysql_error());
			$row	  = mysqli_num_rows($result);
			if($row==0)
			  {
				$sqlReligion="INSERT INTO religion_master(religion,date_created,created_by,modified_by,ip_address,mac_address)VALUES('".$religion."','".$created_on."','".$created_by."','NA','".$ip_address."','".$macaddress."')";
				mysqli_query($con,$sqlReligion)or die(mysqli_error($con));	
				header("Location:religion-master.php");
				exit;
			  }
			  else
			  {
					echo'<p class="error">Religion Already Exist.Use Back of your browser to back to your page</p>';
					exit;
			  }
}
//update religion
if(isset($_POST['updatereligion']))
{
	$regid		= $_POST['hid_regid'];
	//$religion	= $_POST['religion'];
	$religion	= htmlspecialchars(stripslashes(trim(strtoupper($_POST['religion']))));
	// if its not alpha numeric, throw error
		if (!ctype_alpha(str_replace(array("'", "-"," "), "", $religion))) { 
			echo'<p class="error">Name should be alpha characters only.Use Back of your browser to back to your page</p>';
			exit;
		}
			$sqlCheck ="SELECT * FROM religion_master WHERE religion='".$religion."'";
			$result	  =	mysqli_query($con,$sqlCheck)or die("error".mysql_error());
			$row	  = mysqli_num_rows($result);
			if($row==0)
			  {
				  $sqlReligion="UPDATE religion_master SET religion='".$religion."',date_modified='".$created_on."',modified_by='".$created_by."',ip_address='".$ip_address."',mac_address='".$macaddress."' WHERE religion_id=".$regid."";
				  mysqli_query($con,$sqlReligion)or die(mysqli_error($con));	
				  header("Location:religion-master.php");
				  exit;
			  }
			  else
			  {
					echo'<p class="error">Religion Already Exist.Use Back of your browser to back to your page</p>';
					exit;
			  }
}

if(isset($_POST['savecategory']))
{
	//$category	= $_POST['category'];
	$category	= htmlspecialchars(stripslashes(trim(strtoupper($_POST['category']))));
	// if its not alpha numeric, throw error
		if (!ctype_alpha(str_replace(array("'", "-"," "), "", $category))) { 
			echo'<p class="error">Name should be alpha characters only.Use Back of your browser to back to your page</p>';
			exit;
		}
			$sqlCheck ="SELECT * FROM category_master WHERE category='".$category."'";
			$result	  =	mysqli_query($con,$sqlCheck)or die("error".mysql_error());
			$row	  = mysqli_num_rows($result);
			if($row==0)
			  {
				  $sqlCategory="INSERT INTO category_master(category,date_created,created_by,modified_by,ip_address,mac_address)VALUES('".$category."','".$created_on."','".$created_by."','NA','".$ip_address."','".$macaddress."')";
				  mysqli_query($con,$sqlCategory)or die(mysqli_error($con));	
				  header("Location:category-master.php");
				  exit;
			  }
			  else
			  {
				  echo'<p class="error">Category Already Exist.Use Back of your browser to back to your page</p>';
					exit;
			  }
}
// Update Category
if(isset($_POST['updatecategory']))
{
	$cat_id		= $_POST['hid_categ'];
	//$category	= $_POST['category'];
	$category	= htmlspecialchars(stripslashes(trim(strtoupper($_POST['category']))));
	// if its not alpha numeric, throw error
		if (!ctype_alpha(str_replace(array("'", "-"," "), "", $category))) { 
			echo'<p class="error">Name should be alpha characters only.Use Back of your browser to back to your page</p>';
			exit;
		}
			$sqlCheck ="SELECT * FROM category_master WHERE category='".$category."'";
			$result	  =	mysqli_query($con,$sqlCheck)or die("error".mysql_error());
			$row	  = mysqli_num_rows($result);
			if($row==0)
			  {
				$sqlCategory="UPDATE category_master SET category='".$category."',date_modified='".$created_on."',modified_by='".$created_by."',ip_address='".$ip_address."',mac_address='".$macaddress."' WHERE category_id=".$cat_id."";
				mysqli_query($con,$sqlCategory)or die(mysqli_error($con));	
				header("Location:category-master.php");
				exit;
			  }
			else
			  {
				  echo'<p class="error">Category Already Exist.Use Back of your browser to back to your page</p>';
				  exit;
			  }  
}
if(isset($_POST['saveoccupation']))
{
	//$occupation	= $_POST['occupation'];
	$occupation	= htmlspecialchars(stripslashes(trim(strtoupper($_POST['occupation']))));
	// if its not alpha numeric, throw error
		if (!ctype_alpha(str_replace(array("'", "-"," "), "", $occupation))) { 
			echo'<p class="error">Name should be alpha characters only.Use Back of your browser to back to your page</p>';
			exit;
		}
			$sqlCheck ="SELECT * FROM occupation_master WHERE occupation='".$occupation."'";
			$result	  =	mysqli_query($con,$sqlCheck)or die("error".mysql_error());
			$row	  = mysqli_num_rows($result);
			if($row==0)
			  {
				$sqlOccupation="INSERT INTO occupation_master(occupation,date_created,created_by,modified_by,ip_address,mac_address)VALUES('".$occupation."','".$created_on."','".$created_by."','NA','".$ip_address."','".$macaddress."')";
				mysqli_query($con,$sqlOccupation)or die(mysqli_error($con));	
				header("Location:occupation-master.php");
				exit;
			  }
			 else
			  {
				  echo'<p class="error">Occupation Already Exist.Use Back of your browser to back to your page</p>';
				  exit;
			  } 
}
//update Occupation
if(isset($_POST['updateoccupation']))
{
	$occupation_id	= $_POST['hid_occupid'];
	//$occupation		= $_POST['occupation'];
	$occupation	= htmlspecialchars(stripslashes(trim(strtoupper($_POST['occupation']))));
	// if its not alpha numeric, throw error
		if (!ctype_alpha(str_replace(array("'", "-"," "), "", $occupation))) { 
			echo'<p class="error">Name should be alpha characters only.Use Back of your browser to back to your page</p>';
			exit;
		}
			$sqlCheck ="SELECT * FROM occupation_master WHERE occupation='".$occupation."'";
			$result	  =	mysqli_query($con,$sqlCheck)or die("error".mysql_error());
			$row	  = mysqli_num_rows($result);
			if($row==0)
			  {
				$sqlOccupation="UPDATE occupation_master SET occupation='".$occupation."',date_modified='".$created_on."',modified_by='".$created_by."',ip_address='".$ip_address."',mac_address='".$macaddress."' WHERE occupation_id=".$occupation_id."";
				mysqli_query($con,$sqlOccupation)or die(mysqli_error($con));	
				header("Location:occupation-master.php");
				exit;
				}
			 else
			  {
				  echo'<p class="error">Occupation Already Exist.Use Back of your browser to back to your page</p>';
				  exit;
			  } 
}
?>