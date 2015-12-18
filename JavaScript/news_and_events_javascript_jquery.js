/* 
 * File:   news_and_events_javascript_jquery.js
 * Author: Benjamin Silveston
 *
 * Created on 02 December 2013, 13:13
 * 
 * JavaScript/jQuery document for the news_and_events_page.html/news_and_events_page.php file
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
	/* Altering the news_and_events_page link background colour */
	$('#portfolio_page_link').mouseenter(function() {
		$(this).css("color", "#009900");
	});
	$('#portfolio_page_link').mouseleave(function() {
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
	/* Altering the image sizes */
	$('#uh_focus').dblclick(function() {
		$(this).effect("size", {to:{width: 280, height: 610}}, 1000); // increases image size to twice the original dimensions
	});
	$('#uh_focus').mousedown(function() {
		$(this).effect("size", {to:{width: 140, height: 305}}, 1000); // reverts back to original size
	});
	$('#13_d_s_1').dblclick(function() {
		$(this).effect("size", {to:{width: 390, height: 226}}, 1000);
	});
	$('#13_d_s_1').mousedown(function() {
		$(this).effect("size", {to:{width: 195, height: 113}}, 1000);
	});
	$('#13_d_s_2').dblclick(function() {
		$(this).effect("size", {to:{width: 390, height: 226}}, 1000);
	});
	$('#13_d_s_2').mousedown(function() {
		$(this).effect("size", {to:{width: 195, height: 113}}, 1000);
	});
});

/* Real-time clock that loads on webpage at runtime 

function startTime() {
	var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
	var s = today.getSeconds();

	/* Add a zero in front of numbers < 10
	m = checkTime(m);
	s = checkTime(s);
	document.getElementById('txt').innerHTML=h+ ":"+m+":"+s;
	t = setTimeout(function(){startTime()}, 500);						
}
function checkTime(i) {
	if(i < 10) {
		i = "0" + i;            		
	}
		return i;
} */