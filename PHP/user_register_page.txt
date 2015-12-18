<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--Link to accompanying stylesheet-->
<link type="text/css" rel="stylesheet" href="../CSS/user_register_page_stylesheet.css" />

<!--Enable jQuery functionality on website - will load jQuery library into PHP page-->
<script src="../JavaScript/jquery-1.10.2.min.js" type="text/javascript"></script>

<!--Load jQuery UI plug-in and features into website-->
<script type="text/javascript" src="../JavaScript/jquery-ui-1.10.3.custom.min.js"></script>
<script type="text/javascript" src="../JavaScript/jquery-ui-1.10.3.custom.js"></script>

<!--Link to accompanying JavaScript/jQuery document-->
<script type="text/javascript" src="../JavaScript/user_register_page_javascript_jquery.js"></script>
<title>Register | Cowan Photographic</title>
</head>
<body>
	<!--Menu banner-->
    <div class="menu" align="center">
        <a id="home_page_link" align="center" valign="top" href="home_page.php"><strong>Home</strong></a>
        <a id="about_me_page_link" align="center" valign="top" href="about_me_page.php"><strong>About Me</strong></a>
        <a id="portfolio_page_link" align="center" valign="top" href="portfolio_page.php"><strong>Portfolio</strong></a>
        <a id="news_and_events_page_link" align="center" valign="top" href="news_and_events_page.php"><strong>News and Events</strong></a>
        <a id="shop_page_link" align="center" valign="top" href="shop_page.php"><strong>Shop</strong></a>
        <a id="forum_page_link" align="center" valign="top" href="forum_page.php"><strong>Forum</strong></a>
        <a id="contact_page_link" align="center" valign="top" href="contact_page.php"><strong>Contact</strong></a>
    </div>
	 <br />
	<div class="header">
		<h3 align="center"><strong>Register</strong></h3>
	</div>
	<br />
<div class="form_area" align="center">
<form class="register_form" action="welcome_registered_user.php" method="post">
<fieldset> <legend id="register_page_info">Please fill out the following form below to register with Cowan Photographic:</legend>
<p><span class="mandatory_fields">Fields marked "*" are mandatory.</span></p>
<p><label><b>Username:</b> <input id="username" type="text" maxlength="20" name="username" value="<?php if(isset($_POST['username'])) { echo $_POST['username']; } ?>"></label> <span id="man_username">*</span></p>
<p><label><b>Forename:</b> <input id="forename" type="text" maxlength="20" name="firstname" value="<?php if(isset($_POST['firstname'])) { echo $_POST['firstname']; } ?>"></label></p>
<p><label><b>Surname:</b> <input id="surname" type="text" maxlength="40" name="surname" value="<?php if(isset($_POST['surname'])) { echo $_POST['surname']; } ?>"></label></p>
<p><label><b>E-mail:</b> <input id="email" type="text" maxlength="40" name="email" value="<?php if(isset($_POST['email'])) { echo $_POST['email']; } ?>"></label> <span id="man_email">*</span></p>
<p><label><b>Telephone Number:</b><br /> <span>Area Code:</span> <input id="area_code" type="text" maxlength="4" name="area_code" style="width:40px;" value="+44<?php if(isset($_POST['area_code'])) { echo $_POST['area_code']; } ?>"> 
<span>Phone Number:</span> <input id="tel_number" type="text" maxlength="20" name="tel_number" value="<?php if(isset($_POST['tel_number'])) { echo $_POST['tel_number']; } ?>"></label></p>
<p><label><b>Twitter:</b> <input id="twitter" type="text" maxlength="20" name="twitter" value="<?php if(isset($_POST['twitter'])) { echo $_POST['twitter']; } ?>"></label></p>
<p><label><b>Gender:</b> <input id="gender_m" type="radio" name="gender" value="male">Male</label> 
<label><input id="gender_f" type="radio" name="gender" value="female">Female</label> <span id="man_gender">*</span></p>
<p align="center"><span>For password advice, double-click either textbox below.</span></p>
<p><label><b>Create Password:</b> <input id="create_password" type="password" maxlength="8" name="create_password"></label> <span id="man_create_password">*</span></p>
<p><label><b>Confirm Password:</b> <input id="confirm_password" type="password" maxlength="8" name="confirm_password"></label> <span id="man_confirm_password">*</span></p>
<p align="center"><input type="submit" name="submit" value="Register"></p>
</fieldset>
</form>
</div>
<div class="sign_in_page_link_area">
	<p id="sign_in_page_info">Already have an account?<br/><a id="sign_in_page_link" href="user_sign_in_page.php">Sign-in</a></p>
</div>
<br />
<div class="footer">
	<p id="copyright"><strong>Copyright &copy; <?php echo date("Y"); // insert current calendar year ?>
	NCOWAN<br/> All Rights Reserved.</strong></p>
	<p id="credits" align="right"><strong>Website designed and developed by Benjamin Silveston.<br />
	All Rights Reserved.</strong></p>
</div>
</body>
</html>