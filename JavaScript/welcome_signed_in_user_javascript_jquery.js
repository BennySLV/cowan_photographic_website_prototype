/* 
 * File:   welcome_signed_in_user_javascript_jquery.js
 * Author: Benjamin Silveston
 *
 * Created on 12 January 2014, 17:23
 * 
 * JavaScript/jQuery document for the welcome_signed_in_user.php file
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
	/* Altering the sign-in link colour */
	$('#sign_in_page_link').mouseenter(function() {
		$(this).css("color", "red");
	});
	$('#sign_in_page_link').mouseleave(function() {
		$(this).css("color", "white");
	});
});