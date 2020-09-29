AOS.init({
 	duration: 800,
 	easing: 'slide',
 	once: true
 });

jQuery(document).ready(function($) {

	"use strict";

	

	var siteMenuClone = function() {

		$('.js-clone-nav').each(function() {
			var $this = $(this);
			$this.clone().attr('class', 'site-nav-wrap').appendTo('.site-mobile-menu-body');
		});


		setTimeout(function() {
			
			var counter = 0;
      $('.site-mobile-menu .has-children').each(function(){
        var $this = $(this);
        
        $this.prepend('<span class="arrow-collapse collapsed">');

        $this.find('.arrow-collapse').attr({
          'data-toggle' : 'collapse',
          'data-target' : '#collapseItem' + counter,
        });

        $this.find('> ul').attr({
          'class' : 'collapse',
          'id' : 'collapseItem' + counter,
        });

        counter++;

      });

    }, 1000);

		$('body').on('click', '.arrow-collapse', function(e) {
      var $this = $(this);
      if ( $this.closest('li').find('.collapse').hasClass('show') ) {
        $this.removeClass('active');
      } else {
        $this.addClass('active');
      }
      e.preventDefault();  
      
    });

		$(window).resize(function() {
			var $this = $(this),
				w = $this.width();

			if ( w > 768 ) {
				if ( $('body').hasClass('offcanvas-menu') ) {
					$('body').removeClass('offcanvas-menu');
				}
			}
		})

		$('body').on('click', '.js-menu-toggle', function(e) {
			var $this = $(this);
			e.preventDefault();

			if ( $('body').hasClass('offcanvas-menu') ) {
				$('body').removeClass('offcanvas-menu');
				$this.removeClass('active');
			} else {
				$('body').addClass('offcanvas-menu');
				$this.addClass('active');
			}
		}) 

		// click outisde offcanvas
		$(document).mouseup(function(e) {
	    var container = $(".site-mobile-menu");
	    if (!container.is(e.target) && container.has(e.target).length === 0) {
	      if ( $('body').hasClass('offcanvas-menu') ) {
					$('body').removeClass('offcanvas-menu');
				}
	    }
		});
	}; 
	siteMenuClone();


	var sitePlusMinus = function() {
		$('.js-btn-minus').on('click', function(e){
			e.preventDefault();
			if ( $(this).closest('.input-group').find('.form-control').val() != 0  ) {
				$(this).closest('.input-group').find('.form-control').val(parseInt($(this).closest('.input-group').find('.form-control').val()) - 1);
			} else {
				$(this).closest('.input-group').find('.form-control').val(parseInt(0));
			}
		});
		$('.js-btn-plus').on('click', function(e){
			e.preventDefault();
			$(this).closest('.input-group').find('.form-control').val(parseInt($(this).closest('.input-group').find('.form-control').val()) + 1);
		});
	};
	// sitePlusMinus();


	var siteSliderRange = function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 75, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
	};
	// siteSliderRange();


	
	var siteCarousel = function () {
		if ( $('.nonloop-block-13').length > 0 ) {
			$('.nonloop-block-13').owlCarousel({
		    center: false,
		    items: 1,
		    loop: true,
				stagePadding: 0,
		    margin: 0,
		    autoplay: true,
		    nav: true,
				navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">'],
		    responsive:{
	        600:{
	        	margin: 0,
	        	nav: true,
	          items: 2
	        },
	        1000:{
	        	margin: 0,
	        	stagePadding: 0,
	        	nav: true,
	          items: 3
	        },
	        1200:{
	        	margin: 0,
	        	stagePadding: 0,
	        	nav: true,
	          items: 4
	        }
		    }
			});
		}

		$('.slide-one-item').owlCarousel({
	    center: false,
	    items: 1,
	    loop: true,
			stagePadding: 0,
	    margin: 0,
	    autoplay: true,
	    pauseOnHover: false,
	    nav: true,
	    navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">']
	  });
	};
	siteCarousel();

	var siteStellar = function() {
		$(window).stellar({
	    responsive: false,
	    parallaxBackgrounds: true,
	    parallaxElements: true,
	    horizontalScrolling: false,
	    hideDistantElements: false,
	    scrollProperty: 'scroll'
	  });
	};
	siteStellar();

	var siteCountDown = function() {

		$('#date-countdown').countdown('2020/10/10', function(event) {
		  var $this = $(this).html(event.strftime(''
		    + '<span class="countdown-block"><span class="label">%w</span> weeks </span>'
		    + '<span class="countdown-block"><span class="label">%d</span> days </span>'
		    + '<span class="countdown-block"><span class="label">%H</span> hr </span>'
		    + '<span class="countdown-block"><span class="label">%M</span> min </span>'
		    + '<span class="countdown-block"><span class="label">%S</span> sec</span>'));
		});
				
	};
	siteCountDown();

	var siteDatePicker = function() {

		if ( $('.datepicker').length > 0 ) {
			$('.datepicker').datepicker();
		}

	};
	siteDatePicker();

	var siteSticky = function() {
		$(".js-sticky-header").sticky({topSpacing:0});
	};
	siteSticky();

	// navigation
  var OnePageNavigation = function() {
    var navToggler = $('.site-menu-toggle');
   	$("body").on("click", ".main-menu li a[href^='#'], .smoothscroll[href^='#'], .site-mobile-menu .site-nav-wrap li a", function(e) {
      e.preventDefault();

      var hash = this.hash;
       
       if (hash.includes("#")){
            // window.location.href='index.html#'+hash[1];
                window.location.pathname="/diveintodeeplearning.portfolio/";
  //           window.location.hash=hash;
                 window.location.hash=hash;
                  $('html, body').animate({
                     'scrollTop': $(hash).offset().top
                       }, 600, 'easeInOutCirc', function(){     
                     window.location.hash = hash;
      });

       }         
      else{ 
          window.location.pathname="./blog.html"+hash;
          }

     

    });
  };
  OnePageNavigation();

  var siteScroll = function() {

  	

  	$(window).scroll(function() {

  		var st = $(this).scrollTop();

  		if (st > 100) {
  			$('.js-sticky-header').addClass('shrink');
  		} else {
  			$('.js-sticky-header').removeClass('shrink');
  		}

  	}) 

  };
  siteScroll();

/*****************+MINE **********************/


            var typed = new Typed('.typed-words', {
            strings: [" DL"," ML"," AI"], 
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });

            var typed = new Typed('.typed-words-portfolio', {
            strings: [" Convolutional Neural Network"," Natural Language Processing"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            
  
            var typed = new Typed('.typed-words-blog', {
            strings: [" Deep Learning"," Machine Learning"," Artificial Intelligence"," Convolutional Neural Network"," Natural Language Processing"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            



function loadDIDL() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("diveintodl-section").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "/diveintodl.txt", true);
  xhttp.send();
}


function loadFooter() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("newsletter-section").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "/footer.txt", true);
  xhttp.send();
}

function loadHome() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("home-section").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "/home.txt", true);
  xhttp.send();
}

function loadHeader() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("header-section").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "/header.txt", true);
  xhttp.send();
}

function loadSubscribe() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("subscribe-section").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "/subscribe.txt", true);
  xhttp.send();
}


function loadSideBar() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("sidebar-section").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "/sidebar.txt", true);
  xhttp.send();
}



function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}

$email = $("#contact-form [name='email']").val();

$(document).ready(function(){
$("#contact-form").on("submit",function(e){
e.preventDefault();


    var sendData = $( this ).serialize();

    $.ajax({
        type: "POST",
        url: "add_and_send_message.php",
        data: sendData,
        success: function(data){
            $("#contact-form").find("input[type=text], input[type=email], textarea").val("");
        }
    });

});
});


function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}

$email = $("#email-form [name='email']").val();

$(document).ready(function(){
$("#email-form").on("submit",function(e){
e.preventDefault();
if(validateEmail($("#email-form [name='email']").val()))
{
    var x = document.getElementById("subMessage");
    x.style.display = "inline-block";

     var f = document.getElementById("failMessage");
    f.style.display = "none";

    var sendData = $( this ).serialize();

    $.ajax({
        type: "POST",
        url: "addemail.php",
        data: sendData,
        success: function(data){
            $("#email-form").find("input[type=text], input[type=email]").val("");
        }
    });
}
else{
    var f = document.getElementById("failMessage");
    f.style.display = "inline-block";

     var x = document.getElementById("subMessage");
    x.style.display = "none";
}
});
});


function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}

$email = $("#email-form2 [name='email']").val();

$(document).ready(function(){
$("#email-form2").on("submit",function(e){
e.preventDefault();
if(validateEmail($("#email-form2 [name='email']").val()))
{
    var x = document.getElementById("subMessage2");
    x.style.display = "inline-block";

     var f = document.getElementById("failMessage2");
    f.style.display = "none";

    var sendData = $( this ).serialize();

    $.ajax({
        type: "POST",
        url: "addemail.php",
        data: sendData,
        success: function(data){
            $("#email-form2").find("input[type=text], input[type=email]").val("");
        }
    });
}
else{
    var f = document.getElementById("failMessage2");
    f.style.display = "inline-block";

     var x = document.getElementById("subMessage2");
    x.style.display = "none";
}
});
});




});

 
 
 
