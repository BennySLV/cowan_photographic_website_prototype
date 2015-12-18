/* 
 * File:   contact_page_javascript_jquery.js
 * Author: Benjamin Silveston
 *
 * Created on 14 February 2014, 12:11
 * 
 * JavaScript/jQuery document for the contact_page.html/contact_page.php file
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

/* jQuery code */
$(document).ready(function() {
	/* Altering the home_me_page_link background colour */
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