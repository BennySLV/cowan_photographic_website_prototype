/* 
 * File:   user_register_page_javascript_jquery.js
 * Author: Benjamin Silveston
 *
 * Created on 02 January 2014, 13:20
 * 
 * JavaScript/jQuery document for the user_register_page.php and user_register_page.html files
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

/* jQuery code */
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
	/* Altering the sign-in link colour */
	$('#sign_in_page_link').mouseenter(function() {
		$(this).css("color", "red");
	});
	$('#sign_in_page_link').mouseleave(function() {
		$(this).css("color", "black");
	});
	/* Text-box highlighting */
	/* "Username" text field */
	$('#username').mousedown(function() {
		$(this).css({background: "#3399CC", border: "1.75px red solid"});
		$('#forename').css({background: "white", border: "1.75px black solid"});
		$('#surname').css({background: "white", border: "1.75px black solid"});
		$('#email').css({background: "white", border: "1.75px black solid"});
		$('#website').css({background: "white", border: "1.75px black solid"});
		$('#create_password').css({background: "white", border: "1.75px black solid"});
		$('#confirm_password').css({background: "white", border: "1.75px black solid"});
	});
	/* "Forename" text field */
	$('#forename').mousedown(function() {
		$(this).css({background: "#3399CC", border: "1.75px red solid"});
		$('#username').css({background: "white", border: "1.75px black solid"});		
		$('#surname').css({background: "white", border: "1.75px black solid"});
		$('#email').css({background: "white", border: "1.75px black solid"});
		$('#website').css({background: "white", border: "1.75px black solid"});
		$('#create_password').css({background: "white", border: "1.75px black solid"});
		$('#confirm_password').css({background: "white", border: "1.75px black solid"});	
	});
	/* "Surname" text-field */
	$('#surname').mousedown(function() {
		$(this).css({background: "#3399CC", border: "1.75px red solid"});
		$('#username').css({background: "white", border: "1.75px black solid"});
		$('#forename').css({background: "white", border: "1.75px black solid"});
		$('#email').css({background: "white", border: "1.75px black solid"});
		$('#website').css({background: "white", border: "1.75px black solid"});
		$('#create_password').css({background: "white", border: "1.75px black solid"});
		$('#confirm_password').css({background: "white", border: "1.75px black solid"});
	});
	/* "Email" text-field */
	$('#email').mousedown(function() {
		$(this).css({background: "#3399CC", border: "1.75px red solid"});
		$('#username').css({background: "white", border: "1.75px black solid"});
		$('#forename').css({background: "white", border: "1.75px black solid"});
		$('#surname').css({background: "white", border: "1.75px black solid"});
		$('#website').css({background: "white", border: "1.75px black solid"});	
		$('#create_password').css({background: "white", border: "1.75px black solid"});
		$('#confirm_password').css({background: "white", border: "1.75px black solid"});
	});
	/* "Website" text-field */
	$('#website').mousedown(function() {
		$(this).css({background: "#3399CC", border: "1.75px red solid"});
		$('#username').css({background: "white", border: "1.75px black solid"});
		$('#forename').css({background: "white", border: "1.75px black solid"});
		$('#surname').css({background: "white", border: "1.75px black solid"});
		$('#email').css({background: "white", border: "1.75px black solid"});
		$('#create_password').css({background: "white", border: "1.75px black solid"});
		$('#confirm_password').css({background: "white", border: "1.75px black solid"});
	});
	/* "Create Password" text-field */
	$('#create_password').mousedown(function() {
		$(this).css({background: "#3399CC", border: "1.75px red solid"});
		$('#username').css({background: "white", border: "1.75px black solid"});
		$('#forename').css({background: "white", border: "1.75px black solid"});
		$('#surname').css({background: "white", border: "1.75px black solid"});
		$('#email').css({background: "white", border: "1.75px black solid"});
		$('#website').css({background: "white", border: "1.75px black solid"});
		$('#confirm_password').css({background: "white", border: "1.75px black solid"});
	});
	// Provide instructions to notify user about password constraints for the "Create Password" text field
	$('#create_password').dblclick(function() {
		alert("Password must be 6-8 characters, start with an UPPERCASE letter and must contain at least one number and one symbol.");
	});
	/* "Confirm Password" text-field */
	$('#confirm_password').mousedown(function() {
		$(this).css({background: "#3399CC", border: "1.75px red solid"});
		$('#username').css({background: "white", border: "1.75px black solid"});
		$('#forename').css({background: "white", border: "1.75px black solid"});
		$('#surname').css({background: "white", border: "1.75px black solid"});
		$('#email').css({background: "white", border: "1.75px black solid"});
		$('#website').css({background: "white", border: "1.75px black solid"});
		$('#create_password').css({background: "white", border: "1.75px black solid"});
	});
	// Provide instructions to notify user about password constraints for the "Confirm Password" text field
	$('#confirm_password').dblclick(function() {
		alert("Please ensure that both entered passwords are exactly the same before continuing.");
	});
});