<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--Link to accompanying stylesheet-->
<link type="text/css" rel="stylesheet" href="../CSS/view_account_details_page_stylesheet.css" />

<!--Enable jQuery functionality on website - will load jQuery library into PHP page-->
<script src="../JavaScript/jquery-1.10.2.min.js" type="text/javascript"></script>

<!--Load jQuery UI plug-in and features into website-->
<script type="text/javascript" src="../JavaScript/jquery-ui-1.10.3.custom.min.js"></script>
<script type="text/javascript" src="../JavaScript/jquery-ui-1.10.3.custom.js"></script>

<!--Link to accompanying JavaScript/jQuery document-->
<script type="text/javascript" src="../JavaScript/your_account_page_javascript_jquery.js"></script>
<title>View Account Details | Cowan Photographic</title>
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
   <a id="your_account_page_link" align="center" valign="top" href="your_account_page.php"><strong>Your Account</strong></a>
</div>
<div class="content">
<h3 align="center">Account Details</h3>
</div>
<br />
<div>
<form class="view_account_form" action="view_account_details_page.php" method="post">
<fieldset><legend>Please re-enter your password:</legend>
<input type="password" maxlength="8" name="password">
</fieldset>
</form>
</div>
<br />
<div class="results">
<?php
/* 
 * File:   view_account__details_page.php
 * Author: Benjamin Silveston
 *
 * Created on 07 May 2014, 11:43
 * 
 * Allows user to view account details
 */
 
// if the form has been submitted 
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	if(!empty($_POST['password'])) { // if password has been entered in the field
		$password = trim($_POST['password']); 		
 		
		// Connect to the database
		require('mysqli_connect_cpa.php');

		// Make the query - selects the password stored in the database
		$query = "SELECT username, firstname, surname, email, registration_date FROM users WHERE password = SHA1('$password') LIMIT 1";

		// Run the query 
		$result = @mysqli_query($dbc, $query);
		$num = mysqli_num_rows($result);

		// If the query ran OK (i.e. a match was made), display the records
		if($num == 1) {
			// Table header
			echo'<table align="center" cellspacing="3" cellpadding="3" width="75%">
			<tr><td align="left"><b>Username</b></td><td align="left"><b>Firstname</b></td><td align="left"><b>Surname</b></td>
			<td align="left"><b>Email</b></td><td align="left"><b>Registration Date</b></td></tr>';
	
			// Fetch and print all the records
			while($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
				echo '<tr><td align="left">' . $row['username'] . '</td><td align="left">' . $row['firstname'] . '</td><td align="left">' . $row['surname'] . 
				'<td><td align="left">' . $row['email'] . '</td><td align="left">' . $row['registration_date'] .'</td></tr>'; 				
			}
		}
		// if the query did NOT run ok
		else {
			// Public message
			echo'<p>The current users could not be retrieved. We apologise for any inconvenience caused.</p>';
	
			// Debugging message
			// echo'<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $query . '</p>';	
		}
		// Close the table
		echo'</table>';

		// Free up the resources 
		mysqli_free_result($result);

		// Close the database
		@mysqli_close($dbc);
	}
}
?>
</div>
<div class="footer">
	<p id="copyright"><strong>Copyright &copy; <?php echo date("Y"); // insert current calendar year ?>
	NCOWAN<br/> All Rights Reserved.</strong></p>
	<p id="credits" align="right"><strong>Website designed and developed by Benjamin Silveston.<br />
	All Rights Reserved.</strong></p>
</div>
</body>
</html>