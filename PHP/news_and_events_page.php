<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<!--Link to accompanying CSS document-->
<link type="text/css" rel="stylesheet" href="../CSS/news_and_events_page_stylesheet.css" />
<link type="text/css" rel="stylesheet" href="../CSS/rwd_framework.css" media="screen and (max width: 900px)" />

<!--Enable jQuery functionality on website - will load jQuery library into PHP page-->
<script src="../JavaScript/jquery-1.10.2.min.js" type="text/javascript"></script>

<!--Load jQuery UI plug-in and features into website-->
<script src="../JavaScript/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="../JavaScript/jquery-ui-1.10.3.custom.js" type="text/javascript"></script>

<!--Link to accompanying JavaScript file-->
<script src="../JavaScript/news_and_events_javascript_jquery.js" type="text/javascript"></script>

<title>News and Events | Cowan Photographic</title>
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
        <!--<a id="your_account_page_link" align="center" valign="top" href="your_account_page.php"><strong>Your Account</strong></a>-->
    </div>

	<div class="user_account">
    	<p align="right" valign="top">Currently not signed-in.</p>
    	<p align="right" valign="top"><a id="sign_in_page_link" href="user_sign_in_page.php">Sign In</a> | <a id="register_page_link" href="user_register_page.php">Create Account</a>
        </p>
    </div>    
    <div class="content_intro">
    	<h3 id="news_and_events_title" align="center"><strong>News and Events</strong></h3>
    </div>
      <!--Events Content-->
      <div align="center" class="events">
      <h4 align="center">Events</h4>
      <table>
      	<tr align="center">
          <td align="left"><p><strong><a href="http://www.uhfocus.co.uk/">UH Focus 2012</a></strong></p>
            <p align="left"><img id="uh_focus" src="../gallery/events_photos/img002.jpg" width="140" height="305" /><br />
            Double-click to enlarge.</p>
          </td>
          <td align="center"><p align="right"><strong><a href="http://www.herts.ac.uk/home-page.cfm">
            University of Hertfordshire - 13 Degrees of Separation<br /> - 1st-2nd June and 6th-7th June 2012</a></strong></p>
            <img id="13_d_s_1" src="../gallery/events_photos/font .jpg" width="195" height="113" /> <a href="http://www.herts.ac.uk/home-page.cfm"><br />
            <img id="13_d_s_2" src="../gallery/events_photos/back.jpg" width="195" height="113" /></a><br />
            <p>Double-click each image to enlarge.</p>
          </td>
        </tr>
      </table>
      </div>
      
      <!--Tweets Content-->
	 <div align="center" class="social_media">
     <table>
     	<tr>
        	<td align="center"><h4 align="center">Tweets</h4>
            <p><strong><a id="tweets" href="https://twitter.com/Nat3006">See all of Nat3006's tweets</a></strong></p>
            <!-- BEGIN: Twitter website widget (http://twitterforweb.com)-->
            <div class="widget" style="width:236px;font-size:8px;text-align:right;"><script type="text/javascript">
            document.write(unescape("%3Cscript src='http://twitterforweb.com/twitterbox.js?username=Nat3006&settings=1,1,3,225,450,f4f4f4,0,c4c4c4,101010,1,1,336699'type='text/javascript'%3E%3C/script%3E"));</script>
    </div>
    		</td>
    	</tr>
     </table>
	<!-- END: Twitter website widget (http://twitterforweb.com) -->
	</div>
	<br/>
     <div class="footer">
		<p id="copyright"><strong>Copyright &copy; <?php echo date("Y"); // insert current calendar year ?>
		NCOWAN<br/> All Rights Reserved.</strong></p>
		<p id="credits" align="right"><strong>Website designed and developed by Benjamin Silveston.<br />
		All Rights Reserved.</strong></p>
	</div>
</body>
</html>