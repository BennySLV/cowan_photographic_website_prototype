<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--Link to accompanying stylesheet-->
<link type="text/css" rel="stylesheet" href="../CSS/edit_account_page_stylesheet.css" />

<!--Enable jQuery functionality on website - will load jQuery library into PHP page-->
<script src="../JavaScript/jquery-1.10.2.min.js" type="text/javascript"></script>

<!--Load jQuery UI plug-in and features into website-->
<script type="text/javascript" src="../JavaScript/jquery-ui-1.10.3.custom.min.js"></script>
<script type="text/javascript" src="../JavaScript/jquery-ui-1.10.3.custom.js"></script>

<!--Link to accompanying JavaScript/jQuery document-->
<script type="text/javascript" src="../JavaScript/your_account_page_javascript_jquery.js"></script>
<title>Edit Account | Cowan Photographic</title>
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
   <a id="your_account_page_link" align="center" valign-"top" href="your_account_page.php"><strong>Your Account</strong></a>
</div>
<div class="content">
	<h3 align="center">Edit Account</h3>
</div>
<br />
<div class="edit_account_password_form">
<form action="edit_account_page.php" method="post">
<fieldset><legend>Please enter your password to view your account details:</legend>
<input type="password" maxlength="8" name="password">
</fieldset>
</form>
</div>
<div class="results">
<?php
/* 
 * File:   edit_account_page.php
 * Author: Benjamin Silveston
 *
 * Created on 07 April 2014, 11:46
 * 
 * Edits a certain user account details based on the user's request
 */

// if the form has been submitted
// and if the password field has been filled
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	if(!empty($_POST['password'])) {
		$password = trim($_POST['password']);
		
		// Connect to the database
		require('mysqli_connect_cpa.php');
		
		// Make the query - selects the password stored in the database
		$selectQuery = "SELECT username, firstname, surname, email, area_code, telephone_number, twitter, gender 
			FROM users 
			WHERE password = SHA1('$password') LIMIT 1";
		
		// Run the query
		$selectResult = @mysqli_query($dbc, $selectQuery);
		$num = mysqli_num_rows($selectResult);
		
		// if a match was made
		if($num == 1) {
			// Table header
			echo'<table align="center" cellspacing="3" cellpadding="3" width="75%">
			<tr><td align="left"><b>Username</b></td><td align="left"><b>Firstname</b></td><td align="left"><b>Surname</b></td>
			<td align="left"><b>Email</b></td><td align="left"><b>Area Code</b></td><td align="left"><b>Telephone Number</b></td>
			<td align="left"><b>Twitter</b></td><td align="left"><b>Gender</b></td></tr>';
			
			// Fetch and print the records
			while($row = @mysqli_fetch_array($selectResult, MYSQLI_ASSOC)) {
				echo '<tr><td align="left">' . $row['username'] . '</td><td align="left">' . $row['firstname'] . '</td><td align="left">' . $row['surname'] . 
				'<td><td align="left">' . $row['email'] . '</td><td align="left">' . $row['area_code'] . '</td><td align="left">' . $row['telephone_number'] . '</td>
				<td align="left">' . $row['twitter'] . '</td><td align="left">' . $row['gender'] . '</td></tr>';
			}
		}		
		// if the query did NOT run ok
		else {
			// Public message
			echo'<p>The current users could not be retrieved. We apologise for any inconvenience caused.</p>';
	
			// Debugging message
			echo'<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $selectQuery . '</p>';	
		}
		// Close the table
		echo'</table>';

		// Free up the resources 
		mysqli_free_result($selectResult);
	}

	/* Update account form */

	echo '<br />';
	// Print the update account form
	echo '<form class="edit_account_form" action="edit_account_page.php" method="post">
		<fieldset><legend>Please enter the new details below to update your account:</legend>
		Username: <input type="text" name="username" maxlength="20"><br />
		Firstname: <input type="text" name="firstname" maxlength="40"><br/ >
		Surname: <input type="text" name="surname" maxlength="40"><br />
		Email: <input type="text" name="email" maxlength="40"><br />
		Area Code: <input type="text" name="area_code" maxlength="4"><br />
		Telephone Number: <input type="text" name="telephone_number" maxlength="20"><br />
		Twitter: <input type="text" name="twitter" maxlength="40"><br />
		<input type="submit" name="submit" value="Update Account">
		</fieldset></form>';
			
	// Check that the update account form has been submitted
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		// if all mandatory fields (i.e. username, email and gender) have been filled 
		if(!empty($_POST['username']) && (!empty($_POST['email'])) && (!empty($_POST['password']))) {
			// Variables to store the new account details
			$username = trim($_POST['username']);
			$firstName = trim($_POST['firstname']);
			$surname = trim($_POST['surname']);
			$email = trim($_POST['email']);
			$areaCode = trim($_POST['area_code']);
			$telephoneNumber = trim($_POST['telephone_number']);
			$twitter = trim($_POST['twitter']);
			$password = trim($_POST['password']);
					
			// Make the query
			$updateQuery = "UPDATE users 
			SET username = '$username'
			AND firstname = '$firstName'
			AND surname = '$surname'
			AND email = '$email'
			AND area_code = '$areaCode'
			AND telephone_number = '$telephoneNumber'
			AND twitter = '$twitter'
			WHERE password = SHA1('$password')";
			
			// Run the query
			$updateResult = @mysqli_query($dbc, $updateQuery);
					
			// If the query ran OK
			if(mysqli_affected_rows($dbc) == 1) {
				echo'<p>Thank You! Your account has been updated!</p>';
			}
			// if the query did NOT run OK
			else {
				// Personal message
				echo'<p>Your account could not be updated due to a system error. We apologise for any inconvenience caused.</p>';
						
				// Debugging message
				echo'<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $updateQuery . '</p>';
			}
		}
	}
}
// Close the database
@mysqli_close($dbc);
?>
</div>
<br />
<br />
<div class="footer">
	<p id="copyright"><strong>Copyright &copy; <?php echo date("Y"); // insert current calendar year ?>
	NCOWAN<br/> All Rights Reserved.</strong></p>
	<p id="credits" align="right"><strong>Website designed and developed by Benjamin Silveston.<br />
	All Rights Reserved.</strong></p>
</div>
</body>
</html>