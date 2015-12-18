<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--Link to accompanying stylesheet-->
<link type="text/css" rel="stylesheet" href="../CSS/welcome_registered_user_stylesheet.css" />

<!--Enable jQuery functionality on website - will load jQuery library into PHP page-->
<script src="../JavaScript/jquery-1.10.2.min.js" type="text/javascript"></script>

<!--Load jQuery UI plug-in and features into website-->
<script type="text/javascript" src="../JavaScript/jquery-ui-1.10.3.custom.min.js"></script>
<script type="text/javascript" src="../JavaScript/jquery-ui-1.10.3.custom.js"></script>

<!--Link to accompanying JavaScript/jQuery document-->
<script type="text/javascript" src="../JavaScript/welcome_registered_user_javascript_jquery.js"></script>
<title>Welcome Registered User | Cowan Photographic</title>
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
<br />
<div class="results">
<?php
/* 
 * File:   welcome_registered_user.php
 * Author: Benjamin Silveston
 *
 * Created on 19 December 2013, 16:48
 * 
 * Form Validation:
 * Collects and displays results from the user_register_page.php file.
 * All results will be stored in the accompanying MySQL database - in this case 'cowan_photographic_accounts'.
 */

// if the mandatory fields (i.e. username, email, gender and BOTH password fields) have all been filled.
if(!empty($_POST['username']) && (!empty($_POST['email'])) && (!empty($_POST['create_password'])) && (!empty($_POST['confirm_password']))) {
	if(!empty($_POST['gender'])) {	
		if(!empty($_POST['create_password']) && (!empty($_POST['confirm_password']))) {
			// if the created password is NOT identical to the confirmed password when entered in the form.
			if($_POST['create_password'] !== $_POST['confirm_password']) {
				echo'<p>Cannot register! Passwords do not match!</p>';
			}
			else { // if both passwords do match then the user can register
					
				/* Register the user to the database */
					
				// Connect to the database
				require('mysqli_connect_cpa.php');
				
				/* Variables - to store the different values within the text fields 
					- note: mysqli_real_escape_string prevents malicious users from entering characters to bypass registering

					- If the user decides to add additional data provided in the non-mandatory fields, this data will also be added to the database
				*/ 
				$username = trim($_POST['username']);
				$firstName = mysqli_real_escape_string($dbc, trim($_POST['firstname']));
				$surname = mysqli_real_escape_string($dbc, trim($_POST['surname']));
				$email = trim($_POST['email']);
				$areaCode = trim($_POST['area_code']);
				$telNumber = mysqli_real_escape_string($dbc, trim($_POST['tel_number']));
				$twitter = trim($_POST['twitter']);
				$gender = trim($_POST['gender']);
				$createPassword = trim($_POST['create_password']);
				$confirmPassword = trim($_POST['confirm_password']);
					
				// Check to see if the user has not already registered on the website
				$checkRegisteredUser = @mysqli_query("SELECT user_id FROM users WHERE username = '$username'");
					
				$num = @mysqli_num_rows($checkRegisteredUser);
				if($num == 0) { // if the user has not registered
					// Add the new user to the database
					$query = "INSERT INTO users (username, firstname, surname, email, area_code, telephone_number, twitter, gender, password, registration_date)
					VALUES('$username','$firstName', '$surname', '$email', '$areaCode', '$telNumber', '$twitter', '$gender', SHA1('$confirmPassword'), NOW())";
						
					// Store result of query
					$result = @mysqli_query($dbc, $query);
				}
				else { // if the user has already registered prior to this session
					echo'<p>You already have a registered account with Cowan Photographic! Please sign-in!<br />
					<a href="user_sign_in_page.php">Sign-In</a></p>';		
				}
				// if the query ran OK
				if($result) {
					// Print confirmation message to notify that the user has registered 
					echo '<h1><strong>Welcome!</strong></h1>' . '<br/>';
					echo '<p>Your username is: ' . '<i><b>' . $username . '</i></b>' . '</p>';
					echo '<p> A confirmation email will be sent to '. '<i><b>' . $email . '</i></b>' . "." . '</p>'; 
					// hyperlink to link the user to the home page of the website
					echo '<p><a id="home_page_link" href="home_page.php">Continue</a></p>';
					// hyperlink to link the user to "Your Account" page of the website
					echo'<p><a href="your_account_page.php">Your Account</a></p>';
						
					// hyperlink to link user to edit account details page
					// echo '<p><a id="edit_account_page_link href="edit_account_page.php">Edit account details</a></p>';
						
					// hyperlink to link user to delete account page
					// echo'<p><a id="delete_account_page_link href="delete_account_page.php">Deactivate account</a></p>';		
				}
				// If the query did NOT run OK and thus the user has already registered
				else {
					// Print public message
					echo'<p>You are already registered with us - please sign-in!</p>';

					// Print debugging message
					// echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $query . '</p>';
						
					// hyperlink to link the user back to the sign-in page
					echo'<p><a href="user_sign_in_page.php">Sign-in</a></p>';
				}
				// Close the database connection
				@mysqli_close($dbc);
			}
		}
		// if both password fields have NOT been filled in the form and if the username does not meet the criteria of only letters and whitespace 
		else {
			echo'<p>Cannot register! You have not provided two passwords as requested!</p>';
			// hyperlink to link the user to the register page of the website
			echo '<p><a id="register_page_link" href="user_register_page.php">Re-try</a></p>';
		}
	}	
	// if no gender was confirmed by the user
	else {
		echo'<p>Cannot register! You have not confirmed your gender!</p>';
		// hyperlink to link the user to the register page of the website
		echo '<p><a id="register_page_link" href="user_register_page.php">Re-try</a></p>';		
	}	
} 
// if the username has NOT been entered but the email and gender have been entered in the form
elseif(empty($_POST['username']) && (!empty($_POST['email']))) {
	echo'<p>Cannot register! No username has been provided!</p>'; 
	// hyperlink to link the user back to the register page of the website
	echo '<p><a href="user_register_page.php">Re-try</a></p>';
} 	
// if the email has NOT been entered but the username and gender have been entered in the form
elseif(!empty($_POST['username']) && (empty($_POST['email']))) {
	echo'<p>Cannot register! No email-address has been provided!</p>';
	// hyperlink to link the user back to the register page of the website
	echo '<p><a href="user_register_page.php">Re-try</a></p>';
}
// if ALL mandatory text fields in the form are empty
else {
	echo'<p>Cannot Register! You have not entered any details!</p>';
	// hyperlink to link the user back to the register page of the website
	echo '<p><a href="user_register_page.php">Re-try</a></p>';
}
?>
</div>
<br />
<div class="footer">
	<p id="copyright"><strong>Copyright &copy; <?php echo date("Y"); // insert current calendar year ?>
   NCOWAN<br/> All Rights Reserved.</strong></p>
</div>
</body>
</html>