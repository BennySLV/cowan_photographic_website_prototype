<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--Link to accompanying stylesheet-->
<link type="text/css" rel="stylesheet" href="../CSS/delete_account_stylesheet.css" />

<!--Enable jQuery functionality on website - will load jQuery library into PHP page-->
<script src="../JavaScript/jquery-1.10.2.min.js" type="text/javascript"></script>

<!--Load jQuery UI plug-in and features into website-->
<script type="text/javascript" src="../JavaScript/jquery-ui-1.10.3.custom.min.js"></script>
<script type="text/javascript" src="../JavaScript/jquery-ui-1.10.3.custom.js"></script>

<!--Link to accompanying JavaScript/jQuery document-->
<script type="text/javascript" src="../JavaScript/delete_account_javascript_jquery.js"></script>

<title>Delete Account | Cowan Photographic</title>
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
<?php
/* 
 * File:   delete_account_page.php
 * Author: Benjamin Silveston
 *
 * Created on 29 April 2014, 13:01
 * 
 * Deletes a certain user account based on the user's request
 */
 
// Ensure that the user has logged in - if the user is logged in, then the details can be deleted from the system
// require('welcome_signed_in_user.php');

// Connect to the database
require('mysqli_connect_cpa.php');
 
// Query to delete a record based on the username entered in the form
$query = "DELETE FROM users WHERE username = '$username'";
$result = @mysqli_query($dbc, $query);
 
// if the query ran ok
if($result) {
	echo'<p>Thank you for your request. Your account has been successfully deactivated!</p>';
	
	// hyperlink to link user back to home page
	echo'<p><a href="home_page.php">Back to Home</a></p>'; 
}
// if the query did NOT run ok 
else {
	// print personal message
	echo'<p>Your account could not be deactivated due to a system error. We apologise for any inconvenience caused.</p>';
	
	// print debugging message
	echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $query . '</p>';
}
 
 // Close the database
 @mysqli_close($dbc); 
?>
</body>
</html>