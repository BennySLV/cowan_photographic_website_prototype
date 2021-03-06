/* 
 * File:   user_sign_in_page_javascript_jquery.js
 * Author: Benjamin Silveston
 *
 * Created on 06 January 2014, 11:04
 * 
 * JavaScript/jQuery document for the user_sign_in_page.php and user_sign_in_page.html files
 */
 
/* Retrieve jQuery library version 1.10.2.min from website directory */
var jQueryScript = document.createElement('script');
jQueryScript.src = '../JavaScript/jquery-1.10.2.min.js';
jQueryScript.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(jQueryScript);

/* Retrieve jQuery UI (custom min) library from website directory - note that this version only supports IE, Firefox and Safari web browsers and NOT Google Chrome */
var jQueryUiCusMin = document.createElement('script');
jQueryUiCusMin.src = '../JavaScript/jquery-ui-1.10.3.custom.min.js';
jQueryUiCusMin.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(jQueryUiCusMin);

/* Retrieve jQuery UI (custom) library from website directory - note that this version only supports IE, Firefox and Safari web browsers and NOT Google Chrome */
var jQueryUiCus = document.createElement('script');
jQueryUiCus.src = '../JavaScript/jquery-ui-1.10.3.custom.js';
jQueryUiCus.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(jQueryUiCus);

/* text-field highlighting */
$(document).ready(function() {
	/* Altering the home_page_link background colour */
	$('#home_page_link').mouseenter(function() {
		$(this).css("color", "#009900");
	});
	$('#home_page_link').mouseleave(function() {
		$(this).css("color", "#CCCCCC");
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
	/* Altering the register page link colour */
	$('#register_page_link').mouseenter(function() {
		$(this).css("color", "red");
	});
	$('#register_page_link').mouseleave(function() {
		$(this).css("color", "black");
	});
	/* Text-box highlighting - username text-field */
	$('#username').mousedown(function() {
		$(this).css({background: "#3399CC", border: "1.25px red solid"});
		$('#password').css({background: "white", border: "1.25px black solid"});
	});
	/* Password text-field */
	$('#password').mousedown(function() {
		$(this).css({background: "#3399CC", border: "1.25px red solid"});
		$('#username').css({background: "white", border: "1.25px black solid"});	
	}); 
});