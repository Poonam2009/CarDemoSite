<!DOCTYPE HTML>
<html>
<head>
<title> Home Form</title>
<meta charset="UTF-8" />
<meta name="Designer" content="PremiumPixels.com">
<meta name="Author" content="$hekh@r d-Ziner, CSSJUNTION.com">
<!--link rel="stylesheet" type="text/css" href="css/reset.css">-->
<!--<link rel="stylesheet" type="text/css" href="css/structure.css">-->
<link href="<?php echo base_url('css/reset.css'); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('css/structure.css'); ?>" rel="stylesheet" type="text/css"/>
</head>

<body>
<!-- BEGIN LOGIN FORM -->

	<?php

		$form_att = array('class' => 'box login', 'method' => 'post'); 

		echo form_open('login/validateCredentials', $form_att);

	?>
<!--<form class="box login"> --->
	<fieldset class="boxBody">
	  <label>Username</label>
	  <input type="text" name="username" tabindex="1" placeholder="PremiumPixel" required>
	  <label><!--<a href="#" class="rLink" tabindex="5">Forget your password?</a>-->Password</label>
	  <input type="password" name="password" tabindex="2" required>
	</fieldset>
	<footer>
	  <label><!--<input type="checkbox" tabindex="3">Keep me logged in</label>-->
	  <input type="submit" class="btnLogin" value="Login" tabindex="4">
	</footer>
<!--</form>-->
<?php echo form_close(); ?>
<footer id="main">
   <a href="#">Developed By Admin</a>
</footer>
</body>
</html>
