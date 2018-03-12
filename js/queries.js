var $body = document.body;
var $open_menu = document.getElementById('toggle');
var $page = document.getElementById('page');
var $logo = document.getElementById('logo');
var $menu_ul = document.getElementById('menu_ul');
var $menu_ul_clone = $($menu_ul).clone();
var $mobile = document.getElementById('mobile');

//var $colabora = document.getElementsByClassName('icon'); 

$($menu_ul_clone).appendTo($mobile);
$($mobile).find('#menu_ul').attr('id', 'menu_ul_clone');

$($open_menu).click(function (e) {
  $($body).toggleClass('toggle');
  e.stopPropagation();
  e.preventDefault();
});

$('.toggle #toggle').click(function (e) {
  $($body).removeClass('toggle');
});
$($page).click(function (e) {
  $($body).removeClass('toggle');
});
$($logo).click(function (e) {
  $($body).removeClass('toggle');
});
$($mobile).find('a').click(function (e) {
  $($body).removeClass('toggle');
});

// scroll

var $scroller = document.getElementsByClassName('skr');

$($scroller).bind('click', function(event) {
  var $anchor = jQuery(this);
  $('html, body').stop().animate({
     scrollTop: jQuery($anchor.attr('href')).offset().top + 1
  }, 1500);
  event.preventDefault();
});

//active

$(window).scroll(function() {
var scrollDistance = $(window).scrollTop();

$('.aw').each(function(i) {
  if ($(this).offset().top <= scrollDistance) {
    $('.menu').find('.active').removeClass('active');
    $('.menu').find('a').eq(i).addClass('active'); 
  }
}); 

}).scroll();

//sticky

$(document).ready(function() {sticker();});
$(document).scroll(function() {sticker();});

function sticker() {

var bodyEl = $("body");

if (!$('.ltie9').length) {
  var scrollTops = $(document).scrollTop();
} 
else {
  var scrollTops = $('html, body').scrollTop();
}

$(".go").each(function() {
  var el = $(this),
      className = el.attr("id") + '-go';
  if (el.offset().top < scrollTops) {
    bodyEl.addClass(className);  
  } else {
    bodyEl.removeClass(className);
  }
});

};

$('.arrow').prepend('<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 6.1 80.9" xml:space="preserve"><g><line class="st" x1="3.1" y1="36" x2="3.1" y2="80.2"></line><polyline class="st" points="0.3,78.2 3.1,80.3 5.9,78.2"></polyline></g></svg>')

//tilt

//tilt-js
"use strict";
!function(t){t.fn.tilt=function(s){var i=function(){this.ticking||(requestAnimationFrame(g.bind(this)),this.ticking=!0)},e=function(){var s=this;t(this).on("mousemove",h),t(this).on("mouseenter",n),this.settings.reset&&t(this).on("mouseleave",l),this.settings.glare&&t(window).on("resize",d.bind(s))},a=function(){var s=this;void 0!==this.timeout&&clearTimeout(this.timeout),t(this).css({transition:this.settings.speed+"ms "+this.settings.easing}),this.settings.glare&&this.glareElement.css({transition:"opacity "+this.settings.speed+"ms "+this.settings.easing}),this.timeout=setTimeout(function(){t(s).css({transition:""}),s.settings.glare&&s.glareElement.css({transition:""})},this.settings.speed)},n=function(s){this.ticking=!1,t(this).css({"will-change":"transform"}),a.call(this),t(this).trigger("tilt.mouseEnter")},r=function(s){return void 0===s&&(s={pageX:t(this).offset().left+t(this).outerWidth()/2,pageY:t(this).offset().top+t(this).outerHeight()/2}),{x:s.pageX,y:s.pageY}},h=function(t){this.mousePositions=r(t),i.call(this)},l=function(){a.call(this),this.reset=!0,i.call(this),t(this).trigger("tilt.mouseLeave")},o=function(){var s=t(this).outerWidth(),i=t(this).outerHeight(),e=t(this).offset().left,a=t(this).offset().top,n=(this.mousePositions.x-e)/s,r=(this.mousePositions.y-a)/i;return{tiltX:(this.settings.maxTilt/2-n*this.settings.maxTilt).toFixed(2),tiltY:(r*this.settings.maxTilt-this.settings.maxTilt/2).toFixed(2),percentageX:100*n,percentageY:100*r,angle:Math.atan2(this.mousePositions.x-(e+s/2),-(this.mousePositions.y-(a+i/2)))*(180/Math.PI)}},g=function(){if(this.transforms=o.call(this),this.reset)return this.reset=!1,t(this).css("transform","perspective("+this.settings.perspective+"px) rotateX(0deg) rotateY(0deg)"),void(this.settings.glare&&(this.glareElement.css("transform","rotate(180deg) translate(-50%, -50%)"),this.glareElement.css("opacity","0")));t(this).css("transform","perspective("+this.settings.perspective+"px) rotateX("+("x"===this.settings.axis?0:this.transforms.tiltY)+"deg) rotateY("+("y"===this.settings.axis?0:this.transforms.tiltX)+"deg) scale3d("+this.settings.scale+","+this.settings.scale+","+this.settings.scale+")"),this.settings.glare&&(this.glareElement.css("transform","rotate("+this.transforms.angle+"deg) translate(-50%, -50%)"),this.glareElement.css("opacity",""+this.transforms.percentageY*this.settings.maxGlare/100)),t(this).trigger("change",[this.transforms]),this.ticking=!1},c=function(){var s=this.settings.glarePrerender;if(s||t(this).append('<div class="js-tilt-glare"><div class="js-tilt-glare-inner"></div></div>'),this.glareElementWrapper=t(this).find(".js-tilt-glare"),this.glareElement=t(this).find(".js-tilt-glare-inner"),!s){var i={position:"absolute",top:"0",left:"0",width:"100%",height:"100%"};this.glareElementWrapper.css(i).css({overflow:"hidden"}),this.glareElement.css({position:"absolute",top:"50%",left:"50%","pointer-events":"none","background-image":"linear-gradient(0deg, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%)",width:""+2*t(this).outerWidth(),height:""+2*t(this).outerWidth(),transform:"rotate(180deg) translate(-50%, -50%)","transform-origin":"0% 0%",opacity:"0"})}},d=function(){this.glareElement.css({width:""+2*t(this).outerWidth(),height:""+2*t(this).outerWidth()})};return t.fn.tilt.destroy=function(){t(this).each(function(){t(this).find(".js-tilt-glare").remove(),t(this).css({"will-change":"",transform:""}),t(this).off("mousemove mouseenter mouseleave")})},t.fn.tilt.getValues=function(){var s=[];return t(this).each(function(){this.mousePositions=r.call(this),s.push(o.call(this))}),s},t.fn.tilt.reset=function(){t(this).each(function(){var s=this;this.mousePositions=r.call(this),this.settings=t(this).data("settings"),l.call(this),setTimeout(function(){s.reset=!1},this.settings.transition)})},this.each(function(){var i=this;this.settings=t.extend({maxTilt:t(this).is("[data-tilt-max]")?t(this).data("tilt-max"):20,perspective:t(this).is("[data-tilt-perspective]")?t(this).data("tilt-perspective"):300,easing:t(this).is("[data-tilt-easing]")?t(this).data("tilt-easing"):"cubic-bezier(.03,.98,.52,.99)",scale:t(this).is("[data-tilt-scale]")?t(this).data("tilt-scale"):"1",speed:t(this).is("[data-tilt-speed]")?t(this).data("tilt-speed"):"400",transition:!t(this).is("[data-tilt-transition]")||t(this).data("tilt-transition"),axis:t(this).is("[data-tilt-axis]")?t(this).data("tilt-axis"):null,reset:!t(this).is("[data-tilt-reset]")||t(this).data("tilt-reset"),glare:!!t(this).is("[data-tilt-glare]")&&t(this).data("tilt-glare"),maxGlare:t(this).is("[data-tilt-maxglare]")?t(this).data("tilt-maxglare"):1},s),this.init=function(){t(i).data("settings",i.settings),i.settings.glare&&c.call(i),e.call(i)},this.init()})},t("[data-tilt]").tilt()}(jQuery);

( function( $ ) {

	"use strict";

  $(".tilt").tilt({
    maxTilt: 15,
    perspective: 1400,
    easing: "cubic-bezier(.03,.98,.52,.99)",
    speed: 1200,
    glare: true,
    maxGlare: 0.2,
    scale: 1.04
  });
  
}( jQuery ) );