(function($){"use strict";$(document).ready(function(){$('#wrapper').addClass("active");});$("a.menu, header nav ul li a").click(function(){$("header").toggleClass("open");});$(document).on("scroll",function(){$("header").toggleClass("dock",$(document).scrollTop()>5);});$("nav ul li:not(.scroll) a, a.link").click(function(){var href=$(this).attr('href');setTimeout(function(){window.location=href;},100);return false;});$(function(){$('.scroll a, a.scroll[href*=#]:not([href=#])').click(function(){if(location.pathname.replace(/^\//,'')===this.pathname.replace(/^\//,'')&&location.hostname===this.hostname){var target=$(this.hash);target=target.length?target:$('[name='+this.hash.slice(1)+']');if(target.length){$('html,body').animate({scrollTop:target.offset().top-70},1200);return false;}}});});$('p > img').unwrap();$('p > video').unwrap();$('p > p').unwrap();$('p > ul').unwrap();$('p > li').unwrap();$('p > div').unwrap();$('p > h2').unwrap();$('p > h3').unwrap();$('p > h4').unwrap();$('p > table').unwrap();$("img[src='']").remove();$("p:empty").remove();$('p').each(function(){var $this=$(this);if($this.html().replace(/\s| /g,'').length===0){$this.remove('p');}});$(function(){$('#testimonial').bxSlider({mode:'fade',speed:1000,randomStart:true,auto:true,pager:false,controls:false,pause:6000,adaptiveHeight:true,});});$(function(){setInterval(function(){$("div, section, img").filter(":onScreen").addClass("visible");},100);});$("#banner a.next").click(function(){$("#banner").find("div.active").not("div.active:last-of-type").removeClass("active").next().addClass("active");$("a.prev").removeClass("end");if($("#banner div:last-of-type").hasClass("active")){$("a.next").addClass("end");}});$("#banner a.prev").click(function(){$("#banner").find("div.active").not("div.active:first-of-type").removeClass("active").prev().addClass("active");$("a.next").removeClass("end");if($("#banner div:first-of-type").hasClass("active")){$("a.prev").addClass("end");}});$("a#corporate").click(function(){$("#services").removeClass("Individual").addClass("Corporate");});$("a#individual").click(function(){$("#services").removeClass("Corporate").addClass("Individual");});})(jQuery);