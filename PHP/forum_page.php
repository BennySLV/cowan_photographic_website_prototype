<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--Link to accompanying stylesheet-->
<link type="text/css" rel="stylesheet" href="../CSS/forum_page_stylesheet.css" />

<!--Enable jQuery functionality on website - will load jQuery library into PHP page-->
<script src="../JavaScript/jquery-1.10.2.min.js" type="text/javascript"></script>

<!--Load jQuery UI plug-in and features into website-->
<script type="text/javascript" src="../JavaScript/jquery-ui-1.10.3.custom.min.js"></script>
<script type="text/javascript" src="../JavaScript/jquery-ui-1.10.3.custom.js"></script>

<!--Link to accompanying JavaScript/jQuery document-->
<script type="text/javascript" src="../JavaScript/forum_page_javascript_jquery.js"></script>
<title>Forum | Cowan Photographic</title>
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
    <br  />
    <!--User account section-->
    <div class="user_account">
    	<p id="username" align="right" valign="top">Currently not signed-in.</p>
    	<p align="right" valign="top"><a id="sign_in_page_link" href="user_sign_in_page.php">Sign In</a> | <a id="register_page_link" href="user_register_page.php">Create Account</a>
        </p>
    </div>
    <br  />
    <div class="content_intro">
      	<h3 id="contact_title" align="center"><strong>Forum</strong></h3>
    </div>
    <br/>
    <div class="footer">
		<p id="copyright"><strong>Copyright &copy; <?php echo date("Y"); // insert current calendar year ?>
		NCOWAN<br/> All Rights Reserved.</strong></p>
		<p id="credits" align="right"><strong>Website designed and developed by Benjamin Silveston.<br />
		All Rights Reserved.</strong></p>
	</div>
<?php

?>
</body>
</html>