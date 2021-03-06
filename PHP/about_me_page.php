<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!--Link to accompanying CSS document-->
<link type="text/css" rel="stylesheet" href="../CSS/about_me_page_stylesheet.css" />
<link type="text/css" rel="stylesheet" href="../CSS/rwd_framework.css" media="screen and (max width: 900px)" />

<!--Enable jQuery functionality on website - will load jQuery library into PHP page-->
<script src="../JavaScript/jquery-1.10.2.min.js" type="text/javascript"></script>

<!--Load jQuery UI plugin and features into website-->
<script src="../JavaScript/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="../JavaScript/jquery-ui-1.10.3.custom.js" type="text/javascript"></script>

<!--Link to accompanying JavaScript file-->
<script src="../JavaScript/about_me_page_javascript_jquery.js" type="text/javascript"></script>

<title>About Me | Cowan Photographic</title>
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
		  <<!--<a id="your_account_page_link" align="center" valign="top" href="your_account_page.php"><strong>Your Account</strong></a>-->
    </div>

	<div class="user_account">
    	<p align="right" valign="top">Currently not signed-in.</p>
    	<p align="right" valign="top"><a id="sign_in_page_link" href="user_sign_in_page.php">Sign In</a> | <a id="register_page_link" href="user_register_page.php">Create Account</a>
        </p>
    </div>

		<div class="content_intro">
      	<h3 id="about_me_title" align="center"><strong>About Me</strong></h3>
        </div>
      	<div class="content">
	        <p><strong>I was born on 30th June 1990 in Hertfordshire and have lived the majority of my life in the countryside.<br />
            <br />My interest in photography started when I was on holiday in the USA.  
            This was also when I owned my first camera.  
            Due to my disabilities, I struggled to adapt to artistic drawings and so decided to choose photography as an alternative.<br />
            <br />This initial interest led to me selecting photography as a subject for GCSE Art in 2005, 
            which was then followed by undertaking an A Level qualification for the same subject in 2007.   
            With these opportunities, I was able to extend my knowledge and proficiency in digital photography and thus further enhance my experience at university. <br />
           <br />Between 2009 and 2012 I undertook a Bachelor’s of Art Honours Degree in Photography and Digital Media at the University of Hertfordshire.  
           Here, I participated in numerous photography projects, 
           which consisted of portraits and landscape photography, as well as understanding principles of digital cameras and its accompanying equipment.  
           Additionally there were projects involving work in photography studios and darkrooms.  
           The knowledge obtained from this degree course resulted in me earning work experience as a museum photographer in St. Albans, Hertfordshire. 
           Post-degree course (2012-present), I have been undertaking numerous photography projects as well as assisting others with their own photography projects.
		   All this work can be viewed on my <a href="portfolio_page.php">portfolio</a> page.</strong></p>
           <p><strong>For more information on my work experience and projects, please refer to my CV, 
           which can be viewed <a href="../additional_resources/CV update 2013 .pdf" >here.</a></strong></p>
        </div>
        <br />  
        <!--Photos examples - contains two portraits and landscapes-->
	    <div>  
        <table class="example_photos" align="center" border="1">
        	<tr>
				<td><img src="../gallery/landscapes_other_locations/Cityweb.jpg" width="200" height="350" /></td>
            <td><img src="../gallery/portraiture_friends/IMG_0252web.jpg" width="200" height="350" /></td>
            <td><img src="../gallery/landscapes_other_locations/IMG_6593web.jpg" width="200" height="350" /></td>
            <td><img src="../gallery/landscapes_london/NC_12212013D_project_NC_London051_web.jpg" width="200" height="350" /></td>
         </tr>
        </table>
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