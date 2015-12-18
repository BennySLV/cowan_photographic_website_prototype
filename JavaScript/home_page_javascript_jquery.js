/* 
 * File:   home_page_javascript_jquery.js
 * Author: Benjamin Silveston
 *
 * Created on 02 December 2013, 13:13
 * 
 * JavaScript/jQuery document for the home_page.html/home_page.php file
 */

/* Retrieve jQuery library from website directory */
var jQueryScript = document.createElement('script');
jQueryScript.src = '../JavaScript/jquery-1.10.2.min.js';
jQueryScript.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(jQueryScript);

/* Retrieve jQuery UI (custom min) library from website directory */
var jQueryUiCusMin = document.createElement('script');
jQueryUiCusMin.src = '../JavaScript/jquery-ui-1.10.3.custom.min.js';
jQueryUiCusMin.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(jQueryUiCusMin);

/* Retrieve jQuery UI (custom) library from website directory */
var jQueryUiCus = document.createElement('script');
jQueryUiCus.src = '../JavaScript/jquery-ui-1.10.3.custom.js';
jQueryUiCus.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(jQueryUiCus);

$(document).ready(function() {
	$('#web_advice_link').click(function() {
		/* Message to warn users of malfunctioning jQuery UI features if using Google Chrome */
		var browserUsed = prompt("Please enter the web browser that you are using to access this website");
		if(browserUsed === "Google Chrome" || browserUsed === "google chrome" 
		   || browserUsed === "Chrome" || browserUsed === "chrome") {
			alert("You have confirmed that you are using the web browser " + browserUsed + 
				  " please be aware that some functionality may not work properly on your web browser. Please try an alternative web browser.");
		}
		// Firefox web browser users 
		else if(browserUsed === "Mozilla Firefox" || browserUsed === "mozilla firefox" 
			|| browserUsed === "Firefox" || browserUsed === "firefox") {
			alert("You have confirmed that you are using the web browser " + browserUsed + 
				  " there are not any known problems regarding functionality using this browser.");
		}
		// Safari web browser users 
		else if(browserUsed === "Safari" || browserUsed === "safari") {
			alert("You have confirmed that you are using the web browser" + browserUsed + 
				  " there are not any known problems regarding functionality using this browser.");
		}
		// Internet Explorer (IE) user 
		else if(browserUsed === "Internet Explorer" || browserUsed === "internet explorer" 
				|| browserUsed === "IE" || browserUsed === "Ie" || browserUsed === "iE" || browserUsed === "ie") {
			alert("You have confirmed that that you are using the web browser " + browserUsed + 
				  " there are not any known problems regarding functionality for this browser");
		}
		// Any other web browsers
		else {
			alert("You have entered a web browser not recognised by the website - please take care, as functionality may fail to work!");	
		}
	});
	/* Altering the about_me_page_link background colour */
	$('#about_me_page_link').mouseenter(function() {
		$(this).css("color", "#009900");
	});
	$('#about_me_page_link').mouseleave(function() {
		$(this).css("color", "#CCCCCC");
	});
	/* Altering the portfolio_page_link background colour */
	$('#portfolio_page_link').mouseenter(function() {
		$(this).css("color", "#009900");
	});
	$('#portfolio_page_link').mouseleave(function() {
		$(this).css("color", "#CCCCCC");
	});
	/* Altering the news_and_events_page link background colour */
	$('#news_and_events_page_link').mouseenter(function() {
		$(this).css("color", "#009900");
	});
	$('#news_and_events_page_link').mouseleave(function() {
		$(this).css("color", "#CCCCCC");
	});
	/* Altering the shop_page link background colour */
	$('#shop_page_link').mouseenter(function() {
		$(this).css("color", "#009900");
	});
	$('#shop_page_link').mouseleave(function() {
		$(this).css("color", "#CCCCCC");
	});
	/* Altering the forum_page link background colour */
	$('#forum_page_link').mouseenter(function() {
		$(this).css("color", "#009900");
	});
	$('#forum_page_link').mouseleave(function() {
		$(this).css("color", "#CCCCCC");
	});
	/* Altering the contact_page link background colour */
	$('#contact_page_link').mouseenter(function() {
		$(this).css("color", "#009900");
	});
	$('#contact_page_link').mouseleave(function() {
		$(this).css("color", "#CCCCCC");
	});
	/* Altering the your_account_page link background colour */
	$('#your_account_page_link').mouseenter(function() {
		$(this).css("color", "#009900");
	});
	$('#your_account_page_link').mouseleave(function() {
		$(this).css("color", "#CCCCCC");
	});
	/* Altering the sign-in link colour */
	$('#sign_in_page_link').mouseenter(function() {
		$(this).css("color", "red");
	});
	$('#sign_in_page_link').mouseleave(function() {
		$(this).css("color", "black");
	});
	/* Altering the register link colour */
	$('#register_page_link').mouseenter(function() {
		$(this).css("color", "red");
	});
	$('#register_page_link').mouseleave(function() {
		$(this).css("color", "black");
	});
});