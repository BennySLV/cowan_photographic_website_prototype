<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--Link to accompanying stylesheet-->
<link type="text/css" rel="stylesheet" href="../CSS/welcome_signed_in_user_stylesheet.css" />

<!--Enable jQuery functionality on website - will load jQuery library into PHP page-->
<script src="../JavaScript/jquery-1.10.2.min.js" type="text/javascript"></script>

<!--Load jQuery UI plug-in and features into website-->
<script type="text/javascript" src="../JavaScript/jquery-ui-1.10.3.custom.min.js"></script>
<script type="text/javascript" src="../JavaScript/jquery-ui-1.10.3.custom.js"></script>

<!--Link to accompanying JavaScript/jQuery document-->
<script type="text/javascript" src="../JavaScript/welcome_signed_in_user_javascript_jquery.js"></script>

<title>Signed-in user | Cowan Photographic</title>
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
<div class="results">
<?php
/* 
 * File:   welcome_signed_in_user.php
 * Author: Benjamin Silveston
 *
 * Created on 06 January 2014, 21:14
 * 
 * Collects and displays results from the user_sign_in_page.php file
 */
 	
// if the username AND password have been entered in the form
if(!empty($_POST['username']) && (!empty($_POST['password']))) {
	// Variables to store the different values within the text fields
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	
	// Connect to the database:
	require('mysqli_connect_cpa.php');

	/* Check to see if the user details entered in the form match that of the details stored in the database */
	$query = "SELECT username, password FROM users WHERE (username = '$username' AND password = SHA1('$password'))";
	$result = @mysqli_query($dbc, $query);
	$num = @mysqli_num_rows($result);
		
	// if a match was made
	if($num == 1) {
		// Print message to confirm login
		echo'<p>You are now signed-in!</p>';
		// hyperlink to link the user to the home page of the website
		echo '<p><a href="home_page.php">Continue</a></p>';
		// hyperlink to link the user to "Your Account" page of the website
		echo'<p><a href="your_account_page.php">Your Account</a></p>';
	} 
	// if no match was made 	
	else {
		// Print personal message 
		echo'<p>Cannot sign-in! Your details were not recognised on the system! Please check that you entered the correct username and/or password!</p>';
			
		// Print debugging message
		// echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $query . '</p>';
			
		// hyperlink to link the user back to the sign-in page
		echo'<p><a href="user_sign_in_page.php">Re-try</a></p>';
			
		// hyperlink to link the user back to the register page, if his/her details were not stored in the database initially
		echo'<p>If you have no account - please register here:<br /><a href="user_register_page.php">Register</a></p>';
	}
	// Close the database:
	@mysqli_close($dbc);
}	
// if the username has been entered in the form but NOT the password
elseif(!empty($_POST['username']) && (empty($_POST['password']))) {
	echo'<p>Cannot sign-in! No password had been provided!</p>';
	// hyperlink to link the user back to the sign-in page of the website
	echo '<p><a href="user_sign_in_page.php">Re-try</a></p>';
}
// if the password has been entered in the form but NOT the username
elseif(empty($_POST['username']) && (!empty($_POST['password']))) {
	echo'<p>Cannot sign-in! No username has been provided!</p>';
	// hyperlink to link the user back to the sign-in page of the website
	echo '<p><a href="user_sign_in_page.php">Re-try</a></p>';		
}
// if no details have been entered in the form at all
else {
	echo'<p>Cannot sign-in! No details were provided!</p>';
	// hyperlink to link the user back to the sign-in page of the website
	echo '<p><a href="user_sign_in_page.php">Re-try</a></p>';
}
?>
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