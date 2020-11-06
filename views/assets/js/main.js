jQuery(document).ready(function ($) {
    "use strict";
    /* Show/Hide button */
    jQuery(window).scroll(function(){
        if (window.pageYOffset > 100){
            jQuery(".backToTop").css("display","flex");
        } else {
            jQuery(".backToTop").css("display","none");
        }
    });
    /* Scroll to top */
    $('.backToTop').on('click', function () {
        $('html, body').animate({scrollTop: 0}, 800);
        return false;
    });

    /* Search Box */
    $(".search-box-area").on('click', '.search-button, .search-close', function (event) {
        event.preventDefault();
        if ($('.search-text').hasClass('active')) {
            $('.search-text, .search-close').removeClass('active');
        } else {
            $('.search-text, .search-close').addClass('active');
        }
        return false;
    });
});

var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
};

// ------------------------
$ob = jQuery.noConflict()
$ob(function() {
    var $ticker = $ob('#news-ticker'),
      $first = $ob('li:first-child', $ticker);
    // use break word
    $ob('a', $ticker).each(function () {
        var $this = $ob(this),
          text = $this.text();
       $this.html(text.split('').join('&#8203;'));
    });
    
    // begin the animation
    function tick($el) {
        $el.addClass('tick')
          .on('webkitAnimationEnd oanimationend msAnimationEnd animationend', function () {
              
            $el.removeClass('tick');
              var $next = $el.next('li');
              $next = $next.length > 0 ? $next : $first;
            tick($next);
        });
    }
        
    tick($first);
    
});