!function(t,e){"use strict";function r(r,a,i,u,l){function f(){L=t.devicePixelRatio>1,i=c(i),a.delay>=0&&setTimeout(function(){s(!0)},a.delay),(a.delay<0||a.combined)&&(u.e=v(a.throttle,function(t){"resize"===t.type&&(w=B=-1),s(t.all)}),u.a=function(t){t=c(t),i.push.apply(i,t)},u.g=function(){return i=n(i).filter(function(){return!n(this).data(a.loadedName)})},u.f=function(t){for(var e=0;e<t.length;e++){var r=i.filter(function(){return this===t[e]});r.length&&s(!1,r)}},s(),n(a.appendScroll).on("scroll."+l+" resize."+l,u.e))}function c(t){var i=a.defaultImage,o=a.placeholder,u=a.imageBase,l=a.srcsetAttribute,f=a.loaderAttribute,c=a._f||{};t=n(t).filter(function(){var t=n(this),r=m(this);return!t.data(a.handledName)&&(t.attr(a.attribute)||t.attr(l)||t.attr(f)||c[r]!==e)}).data("plugin_"+a.name,r);for(var s=0,d=t.length;s<d;s++){var A=n(t[s]),g=m(t[s]),h=A.attr(a.imageBaseAttribute)||u;g===N&&h&&A.attr(l)&&A.attr(l,b(A.attr(l),h)),c[g]===e||A.attr(f)||A.attr(f,c[g]),g===N&&i&&!A.attr(E)?A.attr(E,i):g===N||!o||A.css(O)&&"none"!==A.css(O)||A.css(O,"url('"+o+"')")}return t}function s(t,e){if(!i.length)return void(a.autoDestroy&&r.destroy());for(var o=e||i,u=!1,l=a.imageBase||"",f=a.srcsetAttribute,c=a.handledName,s=0;s<o.length;s++)if(t||e||A(o[s])){var g=n(o[s]),h=m(o[s]),b=g.attr(a.attribute),v=g.attr(a.imageBaseAttribute)||l,p=g.attr(a.loaderAttribute);g.data(c)||a.visibleOnly&&!g.is(":visible")||!((b||g.attr(f))&&(h===N&&(v+b!==g.attr(E)||g.attr(f)!==g.attr(F))||h!==N&&v+b!==g.css(O))||p)||(u=!0,g.data(c,!0),d(g,h,v,p))}u&&(i=n(i).filter(function(){return!n(this).data(c)}))}function d(t,e,r,i){++z;var o=function(){y("onError",t),p(),o=n.noop};y("beforeLoad",t);var u=a.attribute,l=a.srcsetAttribute,f=a.sizesAttribute,c=a.retinaAttribute,s=a.removeAttribute,d=a.loadedName,A=t.attr(c);if(i){var g=function(){s&&t.removeAttr(a.loaderAttribute),t.data(d,!0),y(T,t),setTimeout(p,1),g=n.noop};t.off(I).one(I,o).one(D,g),y(i,t,function(e){e?(t.off(D),g()):(t.off(I),o())})||t.trigger(I)}else{var h=n(new Image);h.one(I,o).one(D,function(){t.hide(),e===N?t.attr(C,h.attr(C)).attr(F,h.attr(F)).attr(E,h.attr(E)):t.css(O,"url('"+h.attr(E)+"')"),t[a.effect](a.effectTime),s&&(t.removeAttr(u+" "+l+" "+c+" "+a.imageBaseAttribute),f!==C&&t.removeAttr(f)),t.data(d,!0),y(T,t),h.remove(),p()});var m=(L&&A?A:t.attr(u))||"";h.attr(C,t.attr(f)).attr(F,t.attr(l)).attr(E,m?r+m:null),h.complete&&h.trigger(D)}}function A(t){var e=t.getBoundingClientRect(),r=a.scrollDirection,n=a.threshold,i=h()+n>e.top&&-n<e.bottom,o=g()+n>e.left&&-n<e.right;return"vertical"===r?i:"horizontal"===r?o:i&&o}function g(){return w>=0?w:w=n(t).width()}function h(){return B>=0?B:B=n(t).height()}function m(t){return t.tagName.toLowerCase()}function b(t,e){if(e){var r=t.split(",");t="";for(var a=0,n=r.length;a<n;a++)t+=e+r[a].trim()+(a!==n-1?",":"")}return t}function v(t,e){var n,i=0;return function(o,u){function l(){i=+new Date,e.call(r,o)}var f=+new Date-i;n&&clearTimeout(n),f>t||!a.enableThrottle||u?l():n=setTimeout(l,t-f)}}function p(){--z,i.length||z||y("onFinishedAll")}function y(t,e,n){return!!(t=a[t])&&(t.apply(r,[].slice.call(arguments,1)),!0)}var z=0,w=-1,B=-1,L=!1,T="afterLoad",D="load",I="error",N="img",E="src",F="srcset",C="sizes",O="background-image";"event"===a.bind||o?f():n(t).on(D+"."+l,f)}function a(a,o){var u=this,l=n.extend({},u.config,o),f={},c=l.name+"-"+ ++i;return u.config=function(t,r){return r===e?l[t]:(l[t]=r,u)},u.addItems=function(t){return f.a&&f.a("string"===n.type(t)?n(t):t),u},u.getItems=function(){return f.g?f.g():{}},u.update=function(t){return f.e&&f.e({},!t),u},u.force=function(t){return f.f&&f.f("string"===n.type(t)?n(t):t),u},u.loadAll=function(){return f.e&&f.e({all:!0},!0),u},u.destroy=function(){return n(l.appendScroll).off("."+c,f.e),n(t).off("."+c),f={},e},r(u,l,a,f,c),l.chainable?a:u}var n=t.jQuery||t.Zepto,i=0,o=!1;n.fn.Lazy=n.fn.lazy=function(t){return new a(this,t)},n.Lazy=n.lazy=function(t,r,i){if(n.isFunction(r)&&(i=r,r=[]),n.isFunction(i)){t=n.isArray(t)?t:[t],r=n.isArray(r)?r:[r];for(var o=a.prototype.config,u=o._f||(o._f={}),l=0,f=t.length;l<f;l++)(o[t[l]]===e||n.isFunction(o[t[l]]))&&(o[t[l]]=i);for(var c=0,s=r.length;c<s;c++)u[r[c]]=t[0]}},a.prototype.config={name:"lazy",chainable:!0,autoDestroy:!0,bind:"load",threshold:500,visibleOnly:!1,appendScroll:t,scrollDirection:"both",imageBase:null,defaultImage:"data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==",placeholder:null,delay:-1,combined:!1,attribute:"data-src",srcsetAttribute:"data-srcset",sizesAttribute:"data-sizes",retinaAttribute:"data-retina",loaderAttribute:"data-loader",imageBaseAttribute:"data-imagebase",removeAttribute:!0,handledName:"handled",loadedName:"loaded",effect:"show",effectTime:0,enableThrottle:!0,throttle:250,beforeLoad:e,afterLoad:e,onError:e,onFinishedAll:e},n(t).on("load",function(){o=!0})}(window);
var objectFitImages=function(){function r(a){if(a.srcset&&!t&&window.picturefill){var b=window.picturefill._;a[b.ns]&&a[b.ns].evaled||b.fillImg(a,{reselect:!0});a[b.ns].curSrc||(a[b.ns].supported=!1,b.fillImg(a,{reselect:!0}));a.currentSrc=a[b.ns].curSrc||a.src}}function u(a){a=getComputedStyle(a).fontFamily;for(var b,c={};null!==(b=v.exec(a));)c[b[1]]=b[2];return c}function m(a,b,c){b="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='"+(b||1)+"' height='"+(c||0)+"'%3E%3C/svg%3E";h.call(a,"src")!==b&&f.call(a,"src",b)}function k(a,b){a.naturalWidth?b(a):setTimeout(k,100,a,b)}function n(a){var b=u(a),c=a["bfred-it:object-fit-images"];b["object-fit"]=b["object-fit"]||"fill";if(c.img||"fill"!==b["object-fit"]&&(c.skipTest||!p||b["object-position"])){if(!c.img){c.img=new Image(a.width,a.height);c.img.srcset=h.call(a,"data-ofi-srcset")||a.srcset;c.img.src=h.call(a,"data-ofi-src")||a.src;f.call(a,"data-ofi-src",a.src);a.srcset&&f.call(a,"data-ofi-srcset",a.srcset);m(a,a.naturalWidth||a.width,a.naturalHeight||a.height);a.srcset&&(a.srcset="");try{w(a)}catch(d){window.console&&console.warn("https://bit.ly/ofi-old-browser")}}r(c.img);a.style.backgroundImage='url("'+(c.img.currentSrc||c.img.src).replace(/"/g,'\\"')+'")';a.style.backgroundPosition=b["object-position"]||"center";a.style.backgroundRepeat="no-repeat";a.style.backgroundOrigin="content-box";/scale-down/.test(b["object-fit"])?k(c.img,function(){a.style.backgroundSize=c.img.naturalWidth>a.width||c.img.naturalHeight>a.height?"contain":"auto"}):a.style.backgroundSize=b["object-fit"].replace("none","auto").replace("fill","100% 100%");k(c.img,function(b){m(a,b.naturalWidth,b.naturalHeight)})}}function w(a){var b={get:function(b){return a["bfred-it:object-fit-images"].img[b?b:"src"]},set:function(b,d){a["bfred-it:object-fit-images"].img[d?d:"src"]=b;f.call(a,"data-ofi-"+d,b);n(a);return b}};Object.defineProperty(a,"src",b);Object.defineProperty(a,"currentSrc",{get:function(){return b.get("currentSrc")}});Object.defineProperty(a,"srcset",{get:function(){return b.get("srcset")},set:function(a){return b.set(a,"srcset")}})}function g(a,b){var c=!q&&!a;b=b||{};a=a||"img";if(l&&!b.skipTest||!x)return!1;"img"===a?a=document.getElementsByTagName("img"):"string"===typeof a?a=document.querySelectorAll(a):"length"in a||(a=[a]);for(var d=0;d<a.length;d++)a[d]["bfred-it:object-fit-images"]=a[d]["bfred-it:object-fit-images"]||{skipTest:b.skipTest},n(a[d]);c&&(document.body.addEventListener("load",function(a){"IMG"===a.target.tagName&&g(a.target,{skipTest:b.skipTest})},!0),q=!0,a="img");b.watchMQ&&window.addEventListener("resize",g.bind(null,a,{skipTest:b.skipTest}))}var v=/(object-fit|object-position)\s*:\s*([-\w\s%]+)/g,e="undefined"===typeof Image?{style:{"object-position":1}}:new Image,p="object-fit"in e.style,l="object-position"in e.style,x="background-size"in e.style,t="string"===typeof e.currentSrc,h=e.getAttribute,f=e.setAttribute,q=!1;g.supportsObjectFit=p;g.supportsObjectPosition=l;(function(){function a(a,c){return a["bfred-it:object-fit-images"]&&a["bfred-it:object-fit-images"].img&&("src"===c||"srcset"===c)?a["bfred-it:object-fit-images"].img:a}l||(HTMLImageElement.prototype.getAttribute=function(b){return h.call(a(this,b),b)},HTMLImageElement.prototype.setAttribute=function(b,c){return f.call(a(this,b),b,String(c))})})();return g}();objectFitImages();
/* GLOBAL */
// function addbgIE(element) {
// 	$(element).each(function(){
//     getsrc = $(this).find('img').attr('data-src');
//     console.log(getsrc);
//     $(this).addClass('fixagain');
//     $(this).css({'background-image': 'url("'+getsrc+'")'});
//     $(this).find('img').hide();
// 	})
// }
0 < function () {
	var a = window.navigator.userAgent,
		b = a.indexOf("MSIE");
	return 0 < b ? parseInt(a.substring(b + 5, a.indexOf(".", b))) : navigator.userAgent.match(/Trident\/7\./) ? 11 : 0
}() && ($("html").addClass("fixie"))
var viewportW = jQuery(window).width(),
		viewportH = jQuery(window).height(),
		documentH = 0,
		viewportSP = 768,
		opacity = "opacity:0";


function toASCII(chars) {
	var ascii = '';
	for(var i=0, l=chars.length; i<l; i++) {
			var c = chars[i].charCodeAt(0);

			// make sure we only convert half-full width char
			if (c >= 0xFF00 && c <= 0xFFEF) {
					c = 0xFF & (c + 0x20);
			}

			ascii += String.fromCharCode(c);
	}

	return ascii;
}

// $(window).on('load', function () {
// 	$('.btncity').removeClass('fixed');
// 	$('.btnsticking').removeClass('fixed');
// });

$(document).ready(function () {
	displaySide();
	//LIMIT TEXT
	// var maxlength = 50;
	// var total, textstr;
	// $('.textellipsis').each(function() {
	// 	textstr = String($(this).html());
	// 	total = textstr.length;
	// 	textstr = (total <= maxlength)
	// 		? textstr
	// 		: textstr.substring(0,(maxlength))+"...";
	// 	$(this).html(textstr);
	// });
	var maxnum = 4;
	var ttnum, numstr;
	$('.rating-num').each(function() {
		numstr = String($(this).html());
		ttnum = numstr.length;
		numstr = (ttnum <= maxnum)
			? numstr
			: numstr.substring(0,(maxnum));
		$(this).html(numstr);
	});
	//END LIMIT TEXT
	//DETECT
	var userAgent = window.navigator.userAgent;
	userAgent.match(/iPhone/i) && $("body").addClass("ios");
	"6" === iPhoneVersion() && $("body").addClass("iphone6");
	"X" === iPhoneVersion() && $("body").addClass("iphoneX");
	"Plus" === iPhoneVersion() && $("body").addClass("iphonePlus");
	var isChrome = !!window.chrome,
			isFirefox = userAgent.toLowerCase().indexOf('firefox') > -1;
			isSafari = !!window.safari;
			isEdge = window.navigator.userAgent.indexOf("Edge") > -1
	isChrome && !$("body").hasClass("ios") && $("body").addClass("chrome");
	isSafari && !$("body").hasClass("android") && $("body").addClass("safari");
	isFirefox && !$("body").hasClass("android") && $("body").addClass("firefox");
	if (isEdge && $("body").hasClass("chrome")) {
		$("body").removeClass("chrome");
		$("body").addClass("edge");
	}
	//END DETECT
	//LOAD FUNCTION
	pageReload();
	// navmenu();
	menuTrigger();
	jQuery(window).resize(function () {
		viewportW = jQuery(window).width();
		viewportH = jQuery(window).height()
	}).resize();
	//END LOAD FUNCTION

	//BACKTO TOP
	if ($('.page_top_cont').length) {
		var scrollTrigger = 300, // px
		hideTimeout = 0,
		backToTop = function (second) {
		var scrollTop = $(window).scrollTop();
			if (scrollTop > scrollTrigger) {
				if (second && second > 0) {
					clearTimeout(hideTimeout);
					hideTimeout = setTimeout(function(){
						$('.page_top_cont').fadeOut();
					}, second * 1000);
				}
				$('.page_top_cont').fadeIn();
			} else {
				$('.page_top_cont').fadeOut();
			}
		};
		backToTop(5);
		$(window).on('scroll', function () {
			backToTop(5);
		});
		$('.page_top_cont').on('click', function (e) {
			e.preventDefault();
			$('html,body').animate({
				scrollTop: 0
			}, 300);
		});
	}
	//END BACKTO TOP
	$(".acrtoggle").on("click", function (a) {
		a.preventDefault();
		a = $(this);
		var b = a.next(".acrcontent");
		a.toggleClass("open");
		// b.slideToggle(250)
	})

	function clickGenreSP(el) {
		$('body').on('click', el, function(){
			$('html,body').animate({scrollTop: 0}, 300);	
			$('body').removeClass('step1');
			$('body').addClass('step2');
			var getgenredata = $(this).attr('data-name');
			$('.js-sticking').each(function(){
				var stickingname = $(this).attr('data-name');
				if (getgenredata === stickingname) {
					$(this).find('input').attr('checked', true);
				}
			})
		})
	}
	
	function clickGenre(el) {
		$('body').on('click', el, function(){
			$('html,body').animate({scrollTop: 0}, 300);	
			$('body').addClass('bodygenre');
			$('body').removeClass('step1');
			if($('body').hasClass('step2')) {
				$('body').removeClass('step1 step2');
			}else {
				$('body').addClass('step2');				
			}
			var getgenredata = $(this).attr('data-name');
			$('.js-sticking').each(function(){
				var stickingname = $(this).attr('data-name');
				if (getgenredata === stickingname) {
					$(this).find('input').attr('checked', true);
				}
			})
		})
	}
	
	function clickAreaSP(el) {
		$('body').on('click', el, function() {
			$('html,body').animate({scrollTop: 0}, 300);	
			$('body').removeClass('step1 step2')
			$('body').addClass('step3');
		});
	}

	function clickArea(el) {
		$('body').on('click', el, function() {		
			$('html,body').animate({scrollTop: 0}, 300);		
			var className = $(this).closest('.buttonarr').attr('class');

			if(className.indexOf('mapHokkaido') > -1 && $('body').hasClass('bodygenre')) {
				$('body').removeClass('step1 step2 step3');
				$('body').addClass('step4');
				return;
			} else if (className.indexOf('mapHokkaido') > -1) {
				$('body').removeClass('step1 step2');
				$('body').addClass('step3');
				return;
			}

			$('body').removeClass('step1');

			if($('body').hasClass('step2')) {
				$('body').removeClass('step1 step2');
				$('body').addClass('step3');
				return;
			}else{
				$('body').addClass('step2');
				if($('body').hasClass('step3')) {
					$('body').removeClass('step1 step2 step3');
					$('body').addClass('step4');
					return;
				}else{
					if(!$('body').hasClass('step2')) {
						$('body').addClass('step3');
					}
				}
			}			
		});
	}

	if (viewportW > 768){
		$('.block__column').each(function(){
			$(this).find('.tile2line').tile(2);
		})

		$('#area .buttonarr').each(function(){
			$($(this)).click(function () {
				$('.block__search--body').addClass('nopadding');
				var getName = $(this)[0].classList[1];
				$('.block__search--map').removeClass('hasGenre').hide();
				$('#'+getName).show().addClass('hasGenre');				
			})
		});

		clickArea('#area .js-btnArea');
		clickGenre('#genre .js-btnGenre');
	} else {
		accordion2();
		accordion();
		clickGenreSP('.block__btnsearch .js-btnArea, .js-btnGenre');
		clickAreaSP('#areaSP .js-btnArea');
	}

	$('body').on('click', '.js-btnAddcondition', function(){
		$('html,body').animate({scrollTop: 0}, 300);	
		$('body').removeClass('step1 step2 step3')
		$('body').addClass('step4');
		$('.btncity').removeClass('fixed').hide();
		$('.btnsticking').removeClass('fixed');
		$('footer').css('padding-bottom','0');
		//genre case
		if($('body').hasClass('bodygenre step4')) {
			$('body').removeClass('step1 step2 step3 step4');
			$('body').addClass('step5');
		}
	})

	$('body').on('change','.block__search--city .block__city--input', function () {
		var btncity = $('.block__search--city .block__city--btn').html();
		$('.btncity').html(btncity).addClass('fixed');
		$('footer').css('padding-bottom','92px');
		if (viewportW < 768){
			$('footer').css('padding-bottom','77px');
		}
	})
	$('body').on('click','.block__search--condition .js-sticking, .ajax_sticking_point', function () {
		var btnstick = $('.block__search--condition .block__city--btn').html();
		$('.btnsticking').html(btnstick).addClass('fixed');
		$('footer').css('padding-bottom','92px');
		if (viewportW < 768){
			$('footer').css('padding-bottom','77px');
		}
	})

	$('.togglearc button').click(function (e) {
		var getarea = $(this).attr('data-area');
		if (getarea != 'areaHokkaido') {
			var a = $(this).closest('body').find('.'+getarea+' .acr_title')
			$(this).closest('body').find('.'+getarea+' .acr_title').addClass('open');
			$(this).closest('body').find('.'+getarea+' .acr_con').show();
			setTimeout(function(){
				var getOfset = a.offset().top;
				$('html,body').animate({
					scrollTop: getOfset - 27
				}, 300);
			}, 400);
		}
	})
});
//CREAT FUNCTION ------------------------------------------------
//RELOAD PAGE WHEN CHANGE VIEWPORT PC <=> SP
function pageReload() {
	var a;
	var b = viewportW > viewportSP ? "is_pc" : "is_smp";
	jQuery(window).resize(function () {
		viewportW = jQuery(window).width();
		a = viewportW > viewportSP ? "is_pc" : "is_smp";
		b != a && (window.location.href = window.location.href)
	}).resize()
}
//END RELOAD PAGE WHEN CHANGE VIEWPORT PC <=> SP

function accordion() {
	$(".acr_title").on("click", function (a) {
		a.preventDefault();
		a = $(this);
		var b = a.next(".acr_con");
		$(".acr_title").not($(this)).removeClass("open");
		$(".acr_con").not($(this).next()).slideUp("fast");
		a.toggleClass("open");
		b.slideToggle(250)
		if (viewportW < 768){
			setTimeout(function(){
				var getOfset = a.offset().top;
				$('html,body').animate({
					scrollTop: getOfset - 27
				}, 300);
			}, 400);
		}
	})
}

//END ACCORDION BOX
//MENU CLICK
function menuTrigger() {
	//ICON NAV MENU
	$(".hamburger").click(function (a) {
		a.stopPropagation()
		$("body").toggleClass("GloNav--open");
		$(this).toggleClass("active");
		$(".GloNav").toggleClass("show")
	});
}
//END MENU CLICK
//FIX HEIGHT ELEMENT
//use element.tile(columns)
(function (a) {
	a.fn.tile = function (b) {
		var c, e, f, g, h = this.length - 1, d;
		b || (b = this.length);
		this.each(function () {
			d = this.style;
			d.removeProperty && d.removeProperty("height");
			d.removeAttribute && d.removeAttribute("height")
		});
		return this.each(function (d) {
			f = d % b;
			0 == f && (c = []);
			c[f] = a(this);
			g = c[f].height();
			if (0 == f || g > e) e = g;
			d != h && f != b - 1 || a.each(c, function () {
				this.height(e)
			})
		})
	}
})(jQuery);
//END FIX HEIGHT ELEMENT

//DETECT IHONE VERSION
function iPhoneVersion() {
	var a = window.screen.height,
			b = window.screen.width;
	return 320 === b && 480 === a ? "4" : 320 === b && 568 === a ? "5" : 375 === b && 667 === a ? "6" : 414 === b && 736 === a ? "Plus" : 375 === b && 812 === a ? "X" : "none"
};
//END DETECT IHONE VERSION
$(document).on('click','a[href^="#"]', function (event) {
	event.preventDefault();
	var offsets =  $($.attr(this, 'href')).offset().top;
	if(viewportW > 769){
		offset = offsets;
	} else {
		offset = offsets - 40;
	}
	$('html,body').animate({
		scrollTop: offset
	}, 300);
});
// function removeel(el) {
// 	$(el).each(function () {
// 		$(this).remove();
// 	})
// }
function autoHeight(el, time){
	var curHeight = el.height(),
			autoHeight = el.css('height', 'auto').height();
	el.height(curHeight);
	el.stop().animate({ height: autoHeight }, time);
}
if (viewportW <= 768){
	$(window).scroll(function() {  
		fixheader();
	});
}
function fixheader() {
	var scrollTop = $(window).scrollTop();
	if (scrollTop > 0) {
		$('body').addClass('Header--fixed');
	} else {
		$('body').removeClass('Header--fixed');
	}
}

isiPad = navigator.userAgent.match(/iPad/i)!=null;
if(isiPad){$('body').addClass('iPad')}

$("a").each(function(){"noopener noreferrer"===this.rel&&(this.rel="noopener")});$("a").each(function(){"noopener nofollow noreferrer"===this.rel&&(this.rel="noopener nofollow")});

function accordion2() {
	$(".titleacr").on("click", function (a) {
		a.preventDefault();
		a = $(this);
		var b = a.next(".nav_sub");
		$(".titleacr").not($(this)).removeClass("open");
		$(".nav_sub").not($(this).next()).slideUp("fast");
		a.toggleClass("open");
		b.slideToggle(250)
	})
}

//form validation
$(document).ready(function () {
	var buildingval = false;
	$('.needs-validation').each(function () {
		var $this = $(this);
		var isValid = false;
		var separateValidate = false;

		//if($("body").hasClass("catalog_mansion_form")){
		//	$this.find('.formrow_e').removeClass('disabled');
		//	$this.find('.formrow_e').addClass('blinkinput');
		//}else{


// ?????????????????????????????????
			/*var buildingarea = $this.find('input[name="building_area"]');		
			if($this.find('input[name="building_area"]').length > 0){
				$this.find('input[name="building_area"]').autocomplete({
					source: function(request, response) {
						$.ajax({
							url:ajaxurl,
							type: 'post',
							dataType: "json",
							data: {
									_token: CSRF_TOKEN,
									search: request.term
							},
							success: function(data) {                      
								if(data.length > 0) {
									response(data);
									buildingval = true;
									// $('#building_area').valid();
								}else{						
									buildingval = false;
								}
							},
							error: function(XMLHttpRequest, textStatus, errorThrown) { 
								alert("Status: " + textStatus); alert("Error: " + errorThrown); 
							}
						});
					},		
					select: function (event, ui) {
						$('#building_area').val(ui.item.label);
						$('#building_area_id').val(ui.item.value);
						$('#building_area').addClass('valid-inner').removeClass('invalid-inner');				
						$('#building_area').closest('.formrow').removeClass('invalid-inner').addClass('valid-inner');
						$('#building_area').next('.feedback').remove();
						$.validator.addMethod("validateCity", function (value, element) {						
							return true;					
						});
		
						return false;
					}
				});
			}*/
		//}
		
		$this.find('input, textarea, select').on('blur keyup change', function () {
			var submit = $this.find('.buttonsubmit button[type="submit"]');
			isValid = $this.validate().checkForm();
			
			if($('.step2').is(":visible")){
				setInterval( function () {
					if($('.step2').hasClass('valid-inner')){
						$('.step3').show();
					}			
					if($('.step2').hasClass('valid-inner')){
						clearInterval();
					}		
				}, 500);
			}

			var separateValidate = $(this).closest('.formrow').hasClass('valid-inner');
			if (separateValidate) {
				var nextformrowe = $(this).closest('.formrow').next('.formrow');
				if (nextformrowe.length > 0) {
					nextformrowe.find('.formrow_e').removeClass('disabled');
					nextformrowe.find('.formrow_e').addClass('blinkinput');
				} else {
					nextformrowe = $(this).closest('.formrow').next('.catelogform_hide');
					nextformrowe.find('.formrow').first().find('.formrow_e').removeClass('disabled');
					nextformrowe.find('.formrow').first().find('.formrow_e').addClass('blinkinput');
				}
			}
			if (isValid) {
				submit.prop('disabled', false);
			} else {
				submit.prop('disabled', true);
			}
		});

		$this.find('select').on('blur keyup change', function () {
			var separateValidate = $(this).valid();
			if (separateValidate) {
				var nextformrowe = $(this).closest('.formrow').next('.formrow');
				if (nextformrowe.length > 0) {
					nextformrowe.find('.formrow_e').removeClass('disabled');
					nextformrowe.find('.formrow_e').addClass('blinkinput');
				} else {
					nextformrowe = $(this).closest('.formrow').next('.catelogform_hide');
					nextformrowe.find('.formrow').first().find('.formrow_e').removeClass('disabled');
					nextformrowe.find('.formrow').first().find('.formrow_e').addClass('blinkinput');
				}
			}
		});

		$(this).validate({
			rules: {
				issue: {
					required: true,
				},
				tel: {
					required: true,
					minlength: 10,
					maxlength: function () {
						var valueTel = $('input[name="tel"]').val();
						var numberTel = valueTel.replace(/\D/g, '');
						$('input[name="tel"]').val(numberTel);
						var firstChar = valueTel.substring(0, 3);
						if (firstChar == '080' || firstChar == '090' || firstChar == '070') {
							return 11
						} else {
							return 10
						}
					}
				},
				name: {
					required: true,
				},
				posted_at: {
					required: true,
				},
				nickname: {
					required: true,
				},
				building_area: {
					required: true,
					//validateCity: true,
					onclick: false
				},
				building_area2: {
					required: true					
				},
				age: {
					required: true,
				},
				fullname: {
					required: true,
				},
				howbigland: {
					required: true,
				},
				budget: {
					required: true,
					onkeyup: false,
					onclick: false
				},
				email: {
					required: {
						depends: function () {
							$(this).val($.trim($(this).val()));
							return true;
						}
					},
					email: true,
					
				},
				phone: {
					required: false,
					minlength: 10,
					maxlength: function () {
						var valueTel = $('input[name="phone"]').val();
						var numberTel = valueTel.replace(/\D/g, '');
						$('input[name="phone"]').val(numberTel);
						var firstChar = valueTel.substring(0, 3);
						if (firstChar == '080' || firstChar == '090' || firstChar == '070') {
							return 11
						} else {
							return 10
						}
					}
				},
				message: {
					required: true,
				}
			},
			messages: {
				name: {
					required: "????????????????????????????????????"
				},
				nickname: {
					required: "????????????????????????????????????"
				},
				posted_at: {
					required: "????????????????????????????????????"
				},
				howbigland: {
					required: '????????????????????????????????????',
				},
				budget: '????????????????????????????????????',
				age: {
					required: "????????????????????????????????????"
				},
				issue: "????????????????????????????????????",
				building_area: {
					required: "????????????????????????????????????",
					//validateCity: "?????????1?????????????????????"
				},
				building_area2: {
					required: "????????????????????????????????????",					
				},
				fullname: "????????????????????????????????????",
				email: {
					required: "????????????????????????????????????",
					email: "????????????????????????????????????"
				},
				// phone: {
				// 	minlength: '????????????????????????????????????????????????',
				// 	maxlength: '????????????????????????????????????????????????'
				// },
				phone: {
					minlength: '????????????????????????????????????',
					maxlength: '????????????????????????????????????'
				},
				message: {
					required: "????????????????????????????????????",
				},
				// tel: {
				// 	required: "????????????????????????????????????",
				// 	minlength: '????????????????????????????????????????????????',
				// 	maxlength: '????????????????????????????????????????????????'
				// }
				tel: {
					required: "????????????????????????????????????",
					minlength: '????????????????????????????????????',
					maxlength: '????????????????????????????????????'
				}
			},
			validClass: "valid-inner",
			errorClass: "invalid-inner",
			errorPlacement: function (label, element) {
				label.addClass('invalid-feedback feedback');
				label.insertAfter(element);
			},
			wrapper: 'div',
			highlight: function (element, errorClass, validClass) {
				$(element).closest('.formrow').addClass(errorClass).removeClass(validClass);
				$(element).addClass(errorClass).removeClass(validClass);
				$(element).prev('span.selecttext').addClass(errorClass).removeClass(validClass);
				$(element.form).find("label[for=" + element.id + "]").parent().removeClass(errorClass);
				// $(".invalid-feedback").show();
				$('ul').removeClass('.ultoggle');
			},
			unhighlight: function (element, errorClass, validClass) {
				$(element).closest('.formrow').removeClass(errorClass).addClass(validClass);
				$(element).removeClass(errorClass).addClass(validClass);
				$(element).prev('span.selecttext').removeClass(errorClass).addClass(validClass);
				$(element.form).find("label[for=" + element.id + "]").removeClass(errorClass);
				// $(".invalid-feedback").hide();
				$('ul').removeClass('.ultoggle');
			},
			onclick: function (element) {
				
			},
			onkeyup: function (element, event) {

				//$.validator.defaults.onfocusout.apply(this, arguments);

				var currentVal = $(element).attr('value');


				if ($(element).attr('name') == 'email') {					
					$(element).val(toASCII(currentVal))
				}			

				if ($(element).attr('data-type') == 'customselect1') {
					var currentInput = $(element).attr('value');
					var isNum = /^(?:-?\d+|-?\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$/.test(currentInput);
					if (isNum) {
						$(element).closest('.customselect1').find('.p1').show();
						$(element).closest('.customselect1').find('.small1').text(currentInput);
						$(element).closest('.customselect1').find('.small2').text((currentInput * 3.30579).toFixed(2));
						$('input[name="howbigland_value"]').val($(element).closest('.customselect1').find('.p1').text());
					} else {
						$(element).closest('.customselect1').find('.small1').text(0);
						$(element).closest('.customselect1').find('.small2').text(0);
						$(element).closest('.customselect1').find('.p1').hide();
					}
					if ($(element).attr('value').length == 0) {
						$(element).closest('.customselect1').find('.small1').text(0);
						$(element).closest('.customselect1').find('.small2').text(0);
						// $(element).closest('.customselect1').addClass('showcustomselect');
					} else {
						// $(element).closest('.customselect1').removeClass('showcustomselect');
					}
				}
				// $(element).valid();
			},
			onfocusin: function (element) {
				var element_id = $(element).attr('id');
				if ($(element).attr('data-type') == 'customselect1') {
					// $(element).closest('.customselect1').addClass('showcustomselect');
				}
				// $(element).valid();
			},
			onfocusout: function (element) {
				$.validator.defaults.onfocusout.apply(this, arguments);
				$(this).closest('.customselect1').addClass('showcustomselect');
				if ($(element).attr('data-type') == 'customselect1') {
					$('body').on('click', '.customselect1 ul li', function (e) {
						$(this).closest('.customselect1').removeClass('showcustomselect');
						$(this).closest('.formrow').find('input').val($(this).text().trim());
						$(this).closest('.formrow').next('.formrow').find('.formrow_e').addClass('blinkinput');
						$(element).valid();
					});
          setTimeout(function () { $('.customselect1').removeClass('showcustomselect') }, 500);
				} else {
					$('.customselect1').removeClass('showcustomselect');
				}
			},
			invalidHandler: function (event, validator) {
				validator.focusInvalid();
				var errors = validator.invalid;
				if (errors) {
					var message = errors == 1
				}
			}
		});
		$(this).validate().settings.ignore = [];
	});

	$.validator.addMethod("validateCity", function (value, element) {
		return buildingval;
	});
});




//radio to green check
$("body").on('click', '.checkcontainer', function(e){	
	var datatype = $(this).attr('data-type');
	if(datatype == 'checkbox'){
		var datatype = $(this).attr('data-type');
		$(this).toggleClass('checked');		
		var checkBoxes = $(this).find('input');
    checkBoxes.prop("checked", !checkBoxes.prop("checked"));
		// console.log('checked');
	}else{
		$(this).parent().find('.checkcontainer').removeClass('checked');
		$(this).addClass('checked');
		// console.log($(this).find('input[name="isthereland"]').val());
		if($(this).find('input[name="isthereland"]').val() !== '1') {			
			$('.formrow.step2').hide();
			$('.formrow.step3').show();
			$('.formrow.step3').find('.customselect').addClass('blinkinput');
			$("form").validate().settings.ignore = ".howbigland";
		}else {			
			$('.formrow.step2').show();
			$('.formrow.step3').hide();
			$("form").validate().settings.ignore = ".none";
		}
	}
});

$('#catalogform .formrow_island input').click(function(){
	$(this).closest('form').find('.catelogform_hide').show();
});

$('.formrow_housetype .checkcontainer').click(function(){
	$(this).closest('.formrow').next('.formrow').find('.formrow_e').removeClass('disabled').addClass('blinkinput');		
});

$('.formpo .icon').click(function(){
	$('.formpo').next('.formrow').slideToggle();
	$('.formpo').toggleClass('show');
});

$('.customselect2 select').on('change', function(){
	var dttext = $(this).find('option:selected').attr('datatext');
	$(this).prev('span').html(dttext);
});

function displaySide(){
	$.getJSON(homeurl+"/side.json", function(d) {
		var sortedData =d.sort(function(a,b){
			return new Date(b.date) - new Date(a.date);
		});
		$.each(sortedData, function( index, value ) {
			$(".date"+(index+1)).text(value.date )
			$(".msg"+(index+1)).text(value.message )
		}); 
	});
}

$('body').on('click', '.customselect1', function() {
	$(this).find('ul').toggleClass('ultoggle');
	$('.ultoggle li').click(function(){
		$('.customselect1 .p1').hide();
	});
})

$(document).ready(function () {
})
.on('click', '.js-btnGenre', function (e) {
  e.preventDefault();
  //pc
  $('.titstep1 .genre_click').html('?????????'+$(this).children('span').text()+'?????????')
  //sp
  $('.search_head_sp .titstep2 .genre_click').html('?????????'+$(this).children('span').text()+'?????????')
  if (viewportW < 769) {
		$('.titstep').hide();
  }
})
.on('click', '.block__search--area .js-btnArea', function (e) {
  e.preventDefault();
  $('.search_head_pc .titstep').hide();
  if($('.search_head_pc .titstep1 .genre_click').text()==""){
	$('.search_head_pc .titstep2 .area_click').html('??????????????????????????????????????????')
  }else{
	var genre_click = $('.search_head_pc .titstep1 .genre_click').text()
	$('.search_head_pc .titstep2 .area_click').html($(this).children('span').text()+'???')
	$('.search_head_pc .titstep2 .genre_click').html(genre_click.slice(3,-3)+'?????????')
  }
  if($('.search_head_pc .titstep2 .genre_click').text()==""){
	$('.search_head_pc .titstep3 .area_click').html($(this).children('span').text()+'????????????????????????????????????')
  }else{
	var genre_click = $('.search_head_pc .titstep2 .genre_click').text()
	$('.search_head_pc .titstep3 .area_click').html($(this).children('span').text()+'???')
	$('.search_head_pc .titstep3 .genre_click').html(genre_click)
  }
})
//sp
.on('click', '.block__area--btn .js-btnArea', function (e) {
	$('.wrap_search').show();
  var genre_sp = $('.search_head_sp .titstep2 .genre_click').text()
  $('.search_head_sp .titstep3 .area_click').html($(this).children('span').text()+'???');
  $('.search_head_sp .titstep3 .genre_click').html(genre_sp.slice(3,-3)+'?????????');
});

$.fn.extend({
  toggleText: function (a, b) {
    return this.text(this.text() == b ? a : b);
  }
});


if (viewportW < 769 && $('.tablist').length > 0) {
	var fixmeTop = $('.tablist').offset().top - 27;
	$(window).scroll(function() {
		var currentScroll = $(window).scrollTop();
		if (currentScroll >= fixmeTop) {
			$('.tablist').css({                      
				position: 'fixed',
				top: '28px',
				left: '0'
			});
			$('.page-company .block__company').css('margin-top', '80px');
		} else {
			$('.tablist').css({                      
				position: 'static'
			});
			$('.page-company .block__company').css('margin-top', '0');
		}
	});
}

$('.tablist li').click(function(){
	$('.tablist li').removeClass('active');
	$(this).addClass('active');
});

if($(window).width() < 768) {
	$('button[data-area="areaHokkaido"]').click(function(){
		$('div[data-url="hokkaido"]').trigger('click');
		setTimeout(function(){
			$('.homepage').removeClass('step2');
		}, 600)
	})
}