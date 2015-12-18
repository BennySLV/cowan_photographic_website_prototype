/* 
 * File:   portfolio_page_javascript_jquery.js
 * Author: Benjamin Silveston
 *
 * Created on 09 December 2013, 19:23
 * 
 * JavaScript/jQuery document for the portfolio_page.html/portfolio_page.php file
 */

/* Retrieve jQuery library version 1.10.2.min from website directory */
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

/* Retrieve jQuery image re-size plug-in (custom min) */
var jQueryImgReSzCusMin = document.createElement('script');
jQueryImgReSzCusMin.src = '../JavaScript/jquery.ae.image.resize.min.js';
jQueryImgReSzCusMin.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(jQueryImgReSzCusMin);

/* Retrieve jQuery image re-size plug-in (custom) */
var jQueryImgReSzCus = document.createElement('script');
jQueryImgReSzCus.src = '../JavaScript/jquery.ae.image.resize.js';
jQueryImgReSzCus.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(jQueryImgReSzCus);

/* Photo animation */
$(document).ready(function() {
	if($('.photos').length) {
		if('#photo1') {
			$('#photo1').mouseenter(function() {
				$(this).css("border-color", "red");
				$('#link1').css("color", "red"); // hyperlink containing this particular photo will turn red when user hovers over the photo
			});
			$('#photo1').mouseleave(function() {
				$(this).css("border-color", "black");
				$('#link1').css("color", "#3300CC"); // hyperlink colour will be reverted back to dark-blue when user moves mouse arrow off the photo
			});
			$('#photo1').dblclick(function() {
				$(this).effect("size", {to:{height: 438, width: 662}},1000); // resizes the image to twice its original dimensions 
			});
			$('#photo1').mousedown(function() {
				$(this).effect("size", {to:{height: 219, width: 331}},1000); // reverts back to its original size
			});
		}
		if('#photo2') {
			$('#photo2').mouseenter(function() {
				$(this).css("border-color", "white");
				$('#link2').css("color", "white");
			});
			$('#photo2').mouseleave(function() {
				$(this).css("border-color", "black");
				$('#link2').css("color", "#3300CC");
			});
			$('#photo2').dblclick(function() {
				$(this).effect("size", {to:{height: 438, width: 662}},1000);
			});
			$('#photo2').mousedown(function() {
				$(this).effect("size", {to:{height: 219, width: 331}},1000);
			});
		} 
		if('#photo3') {
			$('#photo3').mouseenter(function() {
				$(this).css("border-color", "#33CC00");
				$('#link3').css("color", "#33CC00");
			});
			$('#photo3').mouseleave(function() {
				$(this).css("background-color","black");
				$('#link3').css("color", "#3300CC");
			});
			$('#photo3').dblclick(function() {
				$(this).effect("size", {to:{height: 438, width: 662}},1000);
			});
			$('#photo3').mousedown(function() {
				$(this).effect("size", {to:{height: 219, width: 331}},1000);
			});
		}
		if('#photo4') {
			$('#photo4').mouseenter(function() {
				$(this).css("border-color", "yellow");
				$('#link4').css("color", "yellow");
			});
			$('#photo4').mouseleave(function() {
				$(this).css("border-color", "black");
				$('#link4').css("color", "#3300CC");
			});
			$('#photo4').dblclick(function() {
				$(this).effect("size", {to:{height: 438, width: 662}},1000);			
			});
			$('#photo4').mousedown(function() {
				$(this).effect("size", {to:{height: 219, width: 331}},1000);
			});
		}
		if('#photo5') {
			$('#photo5').mouseenter(function() {
				$(this).css("border-color", "brown");
				$('#link5').css("color", "brown");
			});
			$('#photo5').mouseleave(function() {
				$(this).css("border-color", "black");
				$('#link5').css("color", "#3300CC");
			});
			$('#photo5').dblclick(function() {
				$(this).effect("size", {to:{height: 438, width: 662}},1000);			
			});
			$('#photo5').mousedown(function() {
				$(this).effect("size", {to:{height: 219, width: 331}},1000);
			});
		}
		if('#photo6') {
			$('#photo6').mouseenter(function() {
				$(this).css("border-color", "white");
				$('#link2').css("color", "white");
			});
			$('#photo6').mouseleave(function() {
				$(this).css("border-color", "black");
				$('#link2').css("color", "#3300CC");
			});
			$('#photo6').dblclick(function() {
				$(this).effect("size", {to:{height: 438, width: 662}},1000);
			});
			$('#photo6').mousedown(function() {
				$(this).effect("size", {to:{height: 219, width: 331}},1000);			
			});
		}		
	}
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

/* Real-time clock that loads on web-page at runtime 

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
}*/	