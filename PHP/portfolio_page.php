<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<!--Link to accompanying CSS documents-->
<link type="text/css" rel="stylesheet" href="../CSS/portfolio_page_stylesheet.css" />
<link type="text/css" rel="stylesheet" href="../CSS/rwd_framework.css" media="screen and (max width: 900px)" />

<!--Enable jQuery functionality on website - will load jQuery library into PHP page-->
<script src="../JavaScript/jquery-1.10.2.min.js" type="text/javascript"></script>

<!--Load jQuery UI plug-in and features into website-->
<script type="text/javascript" src="../JavaScript/jquery-ui-1.10.3.custom.min.js"></script>
<script type="text/javascript" src="../JavaScript/jquery-ui-1.10.3.custom.js"></script>

<!--Load plug-in to dynamically resize images at runtime-->
<script src="../JavaScript/jquery.ae.image.resize.min.js" type="text/javascript"></script>
<script src="../JavaScript/jquery.ae.image.resize.js" type="text/javascript"></script>

<!--Link to accompanying JavaScript file-->
<script src="../JavaScript/portfolio_page_javascript_jquery.js" type="text/javascript"></script>

<title>Portfolio | Cowan Photographic</title>
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
      	<h3 id="portfolio_title" align="center"><strong>Portfolio</strong></h3>
        </div>
        <div class="content">
           <p><strong>Below is a selection of my photography work.  These photos were captured using both my Cannon 400D and Canon 300 analogue cameras.  
            My range of interests and ideas vary, but my main focus is both portraiture and landscape photography.  
            I also have a strong interest in keeping up with the latest trends and now therefore have acquired a recent interest in taking selfies, 
            using specific backgrounds to make them more powerful towards the human eye.   
            At the same time, I aim to generate both a new and unique style of photography within these particular above areas.  
            I partly achieve this through undertaking specific walks/hikes where I take specific photos, 
            sometimes based around unusual views or ones which are not so common when compared to other photographers’ work.  
            Along with this, I also very much enjoy still life compositions that reflect the personality of the owner’s object within the specific photo.  
            I believe that this shows the overall purpose of photography by demonstrating visually the personality of individuals 
            and the world environment surrounding them within their daily lives.</strong></p>
      </div>
        <div class="photo_section">    
        <h3 align="center"><strong>Photographic Selection</strong></h3>
        <!--Photos Table-->
        <table class="photos" align="center" border="1">
       	   <tr>
					<td id="photo1"><img align="top" src="../gallery/portraiture_family/camile 3web.jpg" width="331" height="219" /></td>
            	<td id="photo2"><img align="top" src="../gallery/portraiture_friends/Photo03_3.jpg" width="331" height="219" /></td>
            	<td id="photo3"><img align="top" src="../gallery/landscapes_london/regrents park 1 copy.jpg" width="331" height="219" /></td>
          	</tr>
            <tr>
					<td id="photo4"><img align="top" src="../gallery/landscapes_other_locations/IMG_6822.jpg" width="331" height="219" /></td>
					<td id="photo5"><img align="top" src="../gallery/a_level_art_2007_-_2009/school image 4.jpg" width="331" height="219" /></td>
					<td id="photo6"><img align="top" src="../gallery/portraiture_friends/IMG_0857.jpg" width="331" height="219" /></td>
            </tr>
        </table>
        <!--Set of instructions to tell user how to use the table and view each photo-->
        <p><strong>In the table to the right, you will see six photos that are linked to each of the external links below.<br />
        To enlarge the photo, double-click on it and the photo will automatically increase to twice its original size. 
        <br /> (please note, there could be a slight delay between clicking and the image automatically resizing).<br />
        To reset the size of the image, simply click the resized image ONCE, which will cause the image to automatically revert back to its original size.</strong></p>
        </div>
        <div class="external_links">
    	<p><strong>Please find links to further work below. <br /> All folders can be downloaded by either double-clicking the link.<br />Or right-clicking and selecting "Save Target As".	
        </strong></p>
            
        <!--(Unordered) list of zipped folders containing past projects-->  
        <p><strong>Projects and their respected categories</strong>:
            <ul>
            	 <li><strong><a id="link1" href="../gallery/portraiture_family.zip">Portraiture: Family</a></strong></li>
                <li><strong><a id="link2" href="../gallery/portraiture_friends.zip">Portraiture: Friends</a></strong></li>
                <li><strong><a id="link3" href="../gallery/landscapes_london.zip">Landscapes: London</a></strong></li>
                <li><strong><a id="link4" href="../gallery/landscapes_other_locations.zip">Landscapes: Other Locations</a></strong></li>
                <li><strong><a id="link5" href="../gallery/a_level_art_2007_-_2009.zip">A-Level Art (2007 - 2009)</a></strong></li>
                <li><strong><a id="link6" href="../gallery/events_photos/article .jpg">Hitchin Christian Centre Advert for the Westmill Housing Estate</a></strong></li>
      		</ul></p>
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