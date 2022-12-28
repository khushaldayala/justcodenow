var totalHour = 0;
var totalCost = 0;
var selectedOpt = [];
jQuery(document).ready(function () {
    
	jQuery(".img-check").click(function(){
				jQuery(this).toggleClass("check");
			});
	jQuery( ".promocodebtn" ).on( "click", function(event ) {
		event.preventDefault();
		jQuery('.promocode-block .reponsetext').remove();
		var Ele,promocodeval,pid;
		promocodeval = jQuery('.promocodeval').val();
		pid = jQuery('.promocodeval').attr('data-pid');
		Ele = jQuery(this);
		if(promocodeval != ''){ 
			Ele.attr("disabled", true);
			jQuery('.promocode-block').find('form').append('<span class="loader"></span>');
			jQuery('.promocodeval').removeClass('input-invalid');
			jQuery.ajax({
				url : ajaxUrl,
				context : this,
				type : 'post',
				data : {
					action : 'promocode',
					promocodeval : promocodeval,
					pid :pid
				},
				success : function( response ) {
				    obj = JSON.parse(response);
					if(obj.sucess){
						jQuery('.projectprice').html(obj.price);
					}else{
						jQuery('.promocodeval').after('<p class="reponsetext">Invalid code</p>')
					}
					Ele.attr("disabled", false);
					jQuery('.promocode-block form').find('.loader').remove();
				}
			});	
		}else{
			 jQuery('.promocodeval').addClass('input-invalid');
		}
	});
	jQuery('.tabs .tab-links a').on('click', function(e)  {
	var currentAttrValue = jQuery(this).attr('href');
	// Show/Hide Tabs
	jQuery('.tabs ' + currentAttrValue).show().siblings().hide();
	// Change/remove current tab to active
	jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
	e.preventDefault();
	});
	jQuery('input.techopt').on('click',function(){
		jQuery('.totalesti').slideUp();
		jQuery('.sendestimation').slideUp();
		jQuery('.totalPrice').html('');
		jQuery('.totalHours').html('');
	})
	jQuery('.getestimation').on('click',function(){
	    console.log('justcode');
		jQuery('.button-wrapper .alert-message').hide();
		selectedOpt = [];
		var optCost = 0;
		var optHour = 0;
		var activeContainer = jQuery('.tab-pane.active');
		var seleopt = activeContainer.find('input.techopt:checked');
		if(seleopt.length > 0){
			jQuery(seleopt).each(function(i,v){
				var optID = jQuery(v).attr('id');
				selectedOpt.push(optID);
				if(estimationdata[optID].cost != ''){
					optCost += parseInt(estimationdata[optID].cost);
				}
				if(estimationdata[optID].hours != ''){
					optHour += parseInt(estimationdata[optID].hours);
				}
				jQuery('.sendestimation').slideDown();
			});
			jQuery('.totalPrice').html(optCost);
			jQuery('.totalHours').html(optHour);
			jQuery('.totalesti').slideDown();
		}else{
			//alert('Please select option first!!!');
			jQuery('.button-wrapper').append('<div class="alert-message">Please select option first!!!</div>');
		}
	});	
	jQuery('[data-toggle="tooltip"]').tooltip(); 
	jQuery('.estimationemailbtn').on('click',function(){
		var Ele,emailsend,pid,EleOldText;
		emailsend = jQuery('.estimationemail').val();
		pid = jQuery('.tab-pane.active').attr('data-tid');
		Ele = jQuery(this);
		EleOldText =  Ele.html();
		if(emailsend != ''){ 
			Ele.attr("disabled", true);
			Ele.html(EleOldText +' <i class="fa fa-spinner  fa-spin" aria-hidden="true"></i>');
			jQuery.ajax({
				url : ajaxUrl,
				context : this,
				type : 'post',
				data : {
					action : 'saveestimation',
					emailsend : emailsend,
					pid :pid,
					selectedOpt : selectedOpt
				},
				success : function( response ) {
				   obj = JSON.parse(response);
					if(obj.sucess){
						
						Ele.after('<div class="alert-message-estimation">Please check mail!!!</div>');
					}else{
						jQuery('.promocode-block').after('<div class="alert-message-estimation">Action could not be completed!!</div>')
					}
					Ele.attr("disabled", false);
					Ele.html(EleOldText);
				}
			});	
		}else{
			 jQuery('.estimationemail').addClass('input-invalid');
		}
	})
    
    
    jQuery('a[href*=#]:not([href=#])').click(function() {
        var windowWidth = jQuery(window).width();
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
            var target = jQuery(this.hash);
            target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                jQuery('html,body').animate({
                    scrollTop: target.offset().top - 100
                }, 1000);
                return false;
            }
        }
    });
    
});
function ValidateEmail(mail) 
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.emailAddr.value))
  {
    return (true)
  }
    alert("You have entered an invalid email address!")
    /* return (false) */ return (true)
}
jQuery(window).on('load', function(){
    equalheightnoRow(".estimation-details-section .details-block > div");
    equalheightnoRow("#exTab1 .tab-content .row .col-border");
    equalheightnoRow(".woocommerce .col2-set .col-1 > form, .woocommerce .col2-set .col-2 > form");    
    equalheightnoRow(".equlHeight");  
    equalheight('.Testimonial_section .equal_height');  
});
jQuery(window).resize(function () {
    equalheightnoRow(".estimation-details-section .details-block > div");
    equalheightnoRow("#exTab1 .tab-content .row .col-border");
    equalheightnoRow(".woocommerce .col2-set .col-1 > form, .woocommerce .col2-set .col-2 > form");    
    equalheightnoRow(".equlHeight");
    equalheight('.Testimonial_section .equal_height');    
});
/***# Equlae height Function***/
equalheight = function (container) {
    var currentTallest = 0,
        currentRowStart = 0,
        rowDivs = new Array(),
        $el,
        topPosition = 0;
    jQuery(container).each(function () {
        $el = jQuery(this);
        jQuery($el).height('auto')
        topPostion = $el.position().top;
        if (currentRowStart != topPostion) {
            for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
                rowDivs[currentDiv].height(currentTallest);
            }
            rowDivs.length = 0; // empty the array
            currentRowStart = topPostion;
            currentTallest = $el.height();
            rowDivs.push($el);
        } else {
            rowDivs.push($el);
            currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
        }
        for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
            rowDivs[currentDiv].height(currentTallest);
        }
    });
};
equalheightnoRow = function (container) {
    var currentTallest = 0,
        currentRowStart = 0,
        rowDivs = new Array(),
        jQueryel
    jQuery(container).each(function () {
        jQueryel = jQuery(this);
        jQuery(jQueryel).innerHeight('auto')
        rowDivs.push(jQueryel);
        currentTallest = (currentTallest < jQueryel.innerHeight()) ? (jQueryel.innerHeight()) : (currentTallest);

        for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
            rowDivs[currentDiv].innerHeight(currentTallest);
        }
    });
}
/* Our Team */
let members = jQuery(".team__members");
let isHover = false;
setInterval(() => {
  if (!isHover) {
    let min = 1;
    let max = jQuery(members).length;
    let random = Math.floor(Math.random() * (max - min + 1) + min);
    jQuery(".team__members:nth-child(" + random + ")")   
      .siblings()
  }
}, 3000);
function mediaSize() { 
jQuery(members).hover(
  () => {
    if (window.matchMedia('(min-width: 480px)').matches) {
    jQuery(members).removeClass("team__members--show");
    isHover = true;
      console.log('hover');
    }
  },
  () => {
     if (window.matchMedia('(min-width: 480px)').matches) {
    isHover = false;
     }
  }
);
}
/* Call the function */
mediaSize();
/* Attach the function to the resize event listener */
window.addEventListener('resize', mediaSize, false);  
 /*Footer */
  /*AOS.init({
    easing: 'ease-in-out-sine'
  });*/
  jQuery(function() {
        jQuery('#Container').mixItUp();
    });
 // vars
if (jQuery("#testim").length > 0){
'use strict'
var testim = document.getElementById("testim"),
  testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
  testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
  testimLeftArrow = document.getElementById("left-arrow"),
  testimRightArrow = document.getElementById("right-arrow"),
  testimSpeed = 4500,
  currentSlide = 0,
  currentActive = 0,
  testimTimer,
  touchStartPos,
  touchEndPos,
  touchPosDiff,
  ignoreTouch = 30;
;
window.onload = function() {
  // Testim Script
  function playSlide(slide) {
    for (var k = 0; k < testimDots.length; k++) {
        testimContent[k].classList.remove("active");
        testimContent[k].classList.remove("inactive");
        testimDots[k].classList.remove("active");
    }
    if (slide < 0) {
        slide = currentSlide = testimContent.length-1;
    }
    if (slide > testimContent.length - 1) {
        slide = currentSlide = 0;
    }
    if (currentActive != currentSlide) {
        testimContent[currentActive].classList.add("inactive");            
    }
    testimContent[slide].classList.add("active");
    testimDots[slide].classList.add("active");
    currentActive = currentSlide;
    clearTimeout(testimTimer);
    testimTimer = setTimeout(function() {
        playSlide(currentSlide += 1);
    }, testimSpeed)
  }
  testimLeftArrow.addEventListener("click", function() {
      playSlide(currentSlide -= 1);
  })
  testimRightArrow.addEventListener("click", function() {
      playSlide(currentSlide += 1);
  })    
  for (var l = 0; l < testimDots.length; l++) {
      testimDots[l].addEventListener("click", function() {
          playSlide(currentSlide = testimDots.indexOf(this));
      })
  }
  playSlide(currentSlide);
  // keyboard shortcuts
  document.addEventListener("keyup", function(e) {
    switch (e.keyCode) {
      case 37:
        testimLeftArrow.click();
        break;
      case 39:
        testimRightArrow.click();
        break;
      case 39:
        testimRightArrow.click();
        break;
      default:
        break;
    }
  })
  testim.addEventListener("touchstart", function(e) {
    touchStartPos = e.changedTouches[0].clientX;
  })
  testim.addEventListener("touchend", function(e) {
    touchEndPos = e.changedTouches[0].clientX;
    touchPosDiff = touchStartPos - touchEndPos;
    if (touchPosDiff > 0 + ignoreTouch) {
        testimLeftArrow.click();
    } else if (touchPosDiff < 0 - ignoreTouch) {
        testimRightArrow.click();
    } else {
      return;
    }
  })
}
}

 jQuery(function() {
        jQuery(".location").popover();
    });
    var animated = jQuery('.animated-steps').css('opacity', 0);
    jQuery(window).scroll(function(event) {
        var scroll = jQuery(window).scrollTop();
        animated.each(function(index, el) {
            if ((scroll + 800) > jQuery(this).offset().top) {
                jQuery(this).animate({
                    'opacity': 1
                }, 200).addClass(jQuery(this).data('class'));
            }
        }); 
    });
      jQuery(window).scroll(function() {
        var scroll = jQuery(window).scrollTop();
        if (scroll >= 1) {
            jQuery(".get-in-touch-wrap").addClass("get-in-touch-wrap-r");
        }
        if (scroll <= 1) {
            jQuery(".get-in-touch-wrap").removeClass("get-in-touch-wrap-r");
        }
    });
     (function() {
        var calculateHeight;
        calculateHeight = function() {
            var content, contentHeight, finalHeight, windowHeight;
            content = jQuery('#overlay-content');
            contentHeight = parseInt(content.height()) + parseInt(content.css('margin-top')) + parseInt(content.css('margin-bottom'));
            windowHeight = jQuery(window).height();
            finalHeight = windowHeight > contentHeight ? windowHeight : contentHeight;
            return finalHeight;
        };
        jQuery(document).ready(function() {
            jQuery(window).resize(function() {
                if (jQuery(window).height() < 560 && jQuery(window).width() > 600) {
                    jQuery('#overlay').addClass('short');
                } else {
                    jQuery('#overlay').removeClass('short');
                }
                return jQuery('#overlay-background').height(calculateHeight());
            });
            jQuery(window).trigger('resize');
            jQuery('#popup-trigger').click(function() {
                return jQuery('#overlay').addClass('open').find('.signup-form input:first').select();
            });
            return jQuery('#overlay-background,#overlay-close').click(function() {
                return jQuery('#overlay').removeClass('open');
            });
        });
    }).call(this);
   /*   var _mfq = _mfq || [];
    (function() {
        var mf = document.createElement("script");
        mf.type = "text/javascript";
        mf.async = true;
        mf.src = "//cdn.mouseflow.com/projects/4a12e321-5152-40b3-a3ae-f0070fb1f6a6.js";
        document.getElementsByTagName("head")[0].appendChild(mf);
    })();*/
     jQuery("#services1").attr("href", "#services");