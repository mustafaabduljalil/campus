;(function($){
  $.fn.BlenderTabs = function(options){
    return this.each(function(index, value){
      var obj = $(this),
      objFirst = obj.eq(index),
      objNotFirst = obj.not(objFirst);

      $("#" +  objNotFirst.attr("data-tab")).hide();
      $(this).eq(index).addClass("active");

      obj.click(function(evt){

        toggler = "#" + obj.attr("data-tab");
        togglerRest = $(toggler).parent().find("div.tabContent");

        togglerRest.hide().removeClass("active");
        $(toggler).show().addClass("active");

        //toggle Active Class on tab buttons
        $(this).parent().find("li").removeClass("active");
        $(this).addClass("active");

        return false;
      });
    });
  };
}(jQuery));

$(function() {
  var INDEX = 0; 
  $("#chat-submit").click(function(e) {
    e.preventDefault();
    var msg = $("#chat-input").val(); 
    if(msg.trim() == ''){
      return false;
    }
    generate_message(msg, 'self');
    var buttons = [
        {
          name: 'Existing User',
          value: 'existing'
        },
        {
          name: 'New User',
          value: 'new'
        }
      ];
    setTimeout(function() {      
      generate_message(msg, 'user');  
    }, 1000)
    
  })
  
  function generate_message(msg, type) {
    INDEX++;
    var str="";
    str += "<div id='cm-msg-"+INDEX+"' class=\"chat-msg "+type+"\">";
    str += "          <span class=\"msg-avatar\">";
    str += "            <img src=\"https:\/\/image.crisp.im\/avatar\/operator\/196af8cc-f6ad-4ef7-afd1-c45d5231387c\/240\/?1483361727745\">";
    str += "          <\/span>";
    str += "          <div class=\"cm-msg-text\">";
    str += msg;
    str += "          <\/div>";
    str += "        <\/div>";
    $(".chat-logs").append(str);
    $("#cm-msg-"+INDEX).hide().fadeIn(300);
    if(type == 'self'){
     $("#chat-input").val(''); 
    }    
    $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight}, 1000);    
  }  
  
  function generate_button_message(msg, buttons){    
    /* Buttons should be object array 
      [
        {
          name: 'Existing User',
          value: 'existing'
        },
        {
          name: 'New User',
          value: 'new'
        }
      ]
    */
    INDEX++;
    var btn_obj = buttons.map(function(button) {
       return  "              <li class=\"button\"><a href=\"javascript:;\" class=\"btn btn-primary chat-btn\" chat-value=\""+button.value+"\">"+button.name+"<\/a><\/li>";
    }).join('');
    var str="";
    str += "<div id='cm-msg-"+INDEX+"' class=\"chat-msg user\">";
    str += "          <span class=\"msg-avatar\">";
    str += "            <img src=\"https:\/\/image.crisp.im\/avatar\/operator\/196af8cc-f6ad-4ef7-afd1-c45d5231387c\/240\/?1483361727745\">";
    str += "          <\/span>";
    str += "          <div class=\"cm-msg-text\">";
    str += msg;
    str += "          <\/div>";
    str += "          <div class=\"cm-msg-button\">";
    str += "            <ul>";   
    str += btn_obj;
    str += "            <\/ul>";
    str += "          <\/div>";
    str += "        <\/div>";
    $(".chat-logs").append(str);
    $("#cm-msg-"+INDEX).hide().fadeIn(300);   
    $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight}, 1000);
    $("#chat-input").attr("disabled", true);
  }
  
  $(document).delegate(".chat-btn", "click", function() {
    var value = $(this).attr("chat-value");
    var name = $(this).html();
    $("#chat-input").attr("disabled", false);
    generate_message(name, 'self');
  })
  
  $("#chat-circle").click(function() {    
    $("#chat-circle").toggle('scale');
    $(".chat-box").toggle('scale');
  })
  
  $(".chat-box-toggle").click(function() {
    $("#chat-circle").toggle('scale');
    $(".chat-box").toggle('scale');
  })
  
})

var rangeSlider = function(){
  var slider = $('.range-slider'),
      range = $('.range-slider__range'),
      value = $('.range-slider__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $(this).next(value).html(this.value);
    });
  });
};

rangeSlider();

/*Initiate Tabs*/
$('.blenderTabs li').BlenderTabs();

jQuery(document).ready(function($) {

	'use strict';
    //***************************
    // Sticky Header Function
    //***************************
	  jQuery(window).scroll(function() {
	      if (jQuery(this).scrollTop() > 170){  
	          jQuery('body').addClass("wm-sticky");
	      }
	      else{
	          jQuery('body').removeClass("wm-sticky");
	      }
    });
    

  


function city(e, city) {
    var i;
    for (i = 0; i < button.length; i++) {
        tabContent[i].style.display = 'none';
        button[i].classList.remove('active');
    }
    document.getElementById(city).style.display = 'block';
    e.currentTarget.classList.add('active');
}


    //***************************
    // BannerOne Functions
    //***************************
    jQuery('.wm-banner-one-for').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          fade: true,
          asNavFor: '.wm-banner-one-nav'
        });
        jQuery('.wm-banner-one-nav').slick({
          slidesToShow: 3,
          slidesToScroll: 1,
          asNavFor: '.wm-banner-one-for',
          dots: false,
          vertical: true,
          prevArrow: "<span class='slick-arrow-left'><i class='wmicon-arrows'></i></span>",
          nextArrow: "<span class='slick-arrow-right'><i class='wmicon-arrows'></i></span>",
          centerMode: false,
          focusOnSelect: true,
          responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    vertical: true,
                  }
                },
                {
                  breakpoint: 800,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    vertical: true,
                  }
                },
                {
                  breakpoint: 1400,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    vertical: true,
                  }
                },
                {
                  breakpoint: 1920,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    vertical: true,
                  }
                },
                {
                  breakpoint: 400,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    vertical: true,
                  }
                }
              ],
        });
    //***************************
    // LatestEvent Functions
    //***************************
      jQuery('.wm-banner-three').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          infinite: true,
          dots: true,
          arrows: false,
          fade: true,
          responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                  }
                },
                {
                  breakpoint: 800,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 400,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
              ]
        });

    //***************************
    // LatestEvent Functions
    //***************************
      jQuery('.wm-event-latest-slider').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          infinite: true,
          prevArrow: "<span class='slick-arrow slick-arrow-left'><i class='wmicon-arrows4'></i></span>",
          nextArrow: "<span class='slick-arrow slick-arrow-right'><i class='wmicon-arrows4'></i></span>",
          responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                  }
                },
                {
                  breakpoint: 800,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 400,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
              ]
        });
    //***************************
    // Testimonial Functions
    //***************************
      jQuery('.wm-testimonial-slider').slick({
          slidesToShow: 2,
          slidesToScroll: 2,
          autoplay: true,
          autoplaySpeed: 5000,
          infinite: true,
          prevArrow: "<span class='slick-arrow slick-arrow-left'><i class='wmicon-arrows4'></i></span>",
          nextArrow: "<span class='slick-arrow slick-arrow-right'><i class='wmicon-arrows4'></i></span>",
          responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                  }
                },
                {
                  breakpoint: 800,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                  }
                },
                {
                  breakpoint: 400,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
              ]
        });
    //***************************
    // Partner Functions
    //***************************
      jQuery('.wm-partners-slider').slick({
          slidesToShow: 6,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 3000,
          infinite: true,
          prevArrow: "<span class='slick-arrow slick-arrow-left'><i class='wmicon-arrows4'></i></span>",
          nextArrow: "<span class='slick-arrow slick-arrow-right'><i class='wmicon-arrows4'></i></span>",
          responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                  }
                },
                {
                  breakpoint: 800,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 400,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
              ]
        });
    //***************************
    // BannerSlider Functions
    //***************************
      jQuery('.wm-banner-two').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          infinite: true,
          arrows: false,
          fade: true,
          responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                  }
                },
                {
                  breakpoint: 800,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 400,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
              ]
        });
      jQuery('.wm-banner-four').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          infinite: true,
          arrows: false,
          fade: true,
          responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                  }
                },
                {
                  breakpoint: 800,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 400,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
              ]
        });
    //***************************
    // ServiceSlider Functions
    //***************************
      jQuery('.wm-service-slider').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          infinite: true,
          prevArrow: "<span class='slick-arrow slick-arrow-left'><i class='wmicon-arrows3'></i></span>",
          nextArrow: "<span class='slick-arrow slick-arrow-right'><i class='wmicon-arrows3'></i></span>",
          fade: true,
          responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                  }
                },
                {
                  breakpoint: 800,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 400,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
              ]
        });
    //***************************
    // UpcomingEvent Functions
    //***************************
      jQuery('.wm-upcoming-event-slider').slick({
          slidesToShow: 2,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          infinite: true,
          prevArrow: "<span class='slick-arrow slick-arrow-left'><i class='wmicon-arrows3'></i></span>",
          nextArrow: "<span class='slick-arrow slick-arrow-right'><i class='wmicon-arrows3'></i></span>",
          responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                  }
                },
                {
                  breakpoint: 800,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 400,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                  }
                }
              ]
        });
    //***************************
    // Testimonial Functions
    //***************************
      jQuery('.wm-thumb-testimonial').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          infinite: true,
          prevArrow: "<span class='slick-arrow slick-arrow-left'><i class='wmicon-arrows3'></i></span>",
          nextArrow: "<span class='slick-arrow slick-arrow-right'><i class='wmicon-arrows3'></i></span>",
          responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                  }
                },
                {
                  breakpoint: 800,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 400,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
              ]
        });
    //***************************
    // RecentList Functions
    //***************************
      jQuery('.wm-recent-list-slider').slick({
          slidesToShow: 3,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          infinite: true,
          vertical: true,
          centerMode: true,
          prevArrow: "<span class='slick-arrow slick-arrow-left'><i class='wmicon-arrows2'></i></span>",
          nextArrow: "<span class='slick-arrow slick-arrow-right'><i class='wmicon-arrows2'></i></span>",
          responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                  }
                },
                {
                  breakpoint: 800,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 400,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                  }
                }
              ]
        });
    //***************************
    // Testimonial Functions
    //***************************
      jQuery('.wm-testimonial-navslider').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          infinite: true,
          prevArrow: "<span class='slick-arrow slick-arrow-left'><i class='wmicon-arrows2'></i></span>",
          nextArrow: "<span class='slick-arrow slick-arrow-right'><i class='wmicon-arrows2'></i></span>",
          responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                  }
                },
                {
                  breakpoint: 800,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                  }
                },
                {
                  breakpoint: 400,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                  }
                }
              ]
        });
    //***************************
    // Partner Two Functions
    //***************************
      jQuery('.wm-partners-slider-two').slick({
          slidesToShow: 6,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          infinite: true,
          prevArrow: "<span class='slick-arrow slick-arrow-left'><i class='wmicon-arrows2'></i></span>",
          nextArrow: "<span class='slick-arrow slick-arrow-right'><i class='wmicon-arrows2'></i></span>",
          responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                  }
                },
                {
                  breakpoint: 800,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 400,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
              ]
        });
      jQuery('.wm-partners-slider-classic').slick({
          slidesToShow: 6,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          infinite: true,
          prevArrow: "<span class='slick-arrow slick-arrow-left'><i class='wmicon-arrows'></i></span>",
          nextArrow: "<span class='slick-arrow slick-arrow-right'><i class='wmicon-arrows'></i></span>",
          responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                  }
                },
                {
                  breakpoint: 800,
                  settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 400,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
              ]
        });
    //***************************
    // Partner Two Functions
    //***************************
      jQuery('.wm-ourprofessors-slider').slick({
          slidesToShow: 3,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          infinite: true,
          prevArrow: "<span class='slick-arrow slick-arrow-left'><i class='wmicon-arrows'></i></span>",
          nextArrow: "<span class='slick-arrow slick-arrow-right'><i class='wmicon-arrows'></i></span>",
          responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                  }
                },
                {
                  breakpoint: 800,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 400,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
              ]
        });
    //********************************
    // TestimonialModren Functions
    //********************************
      jQuery('.wm-modren-testimonial-slider').slick({
          slidesToShow: 2,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          infinite: true,
          prevArrow: "<span class='slick-arrow slick-arrow-left'><i class='wmicon-arrows'></i></span>",
          nextArrow: "<span class='slick-arrow slick-arrow-right'><i class='wmicon-arrows'></i></span>",
          responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                  }
                },
                {
                  breakpoint: 800,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 400,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
              ]
        });

    //***************************
    // Click to Top Button
    //***************************
    jQuery('.backtop-btn').on("click", function() {
        jQuery('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });

    //***************************
    // Countdown Function
    //***************************
    jQuery(function() {
        var austDay = new Date();
        austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
        jQuery('#wm-countdown').countdown({
            until: austDay
        });
        jQuery('#year').text(austDay.getFullYear());
    });

    //***************************
    // WordCounter Function
    //***************************
    jQuery(".word-count").counterUp({
        delay: 10,
        time: 1000
    });
    //***************************
    // Inc-Dec Function
    //***************************
    jQuery(function(){
      jQuery("#wm-inc").click(function(){
        jQuery(":text[name='qty']").val( Number($(":text[name='qty']").val()) + 1 );
      });
      jQuery("#wm-dec").click(function(){
        jQuery(":text[name='qty']").val( Number($(":text[name='qty']").val()) - 1 );
      });
    });
    jQuery(function(){
      jQuery("#wm-incs").click(function(){
        jQuery(":text[name='qtys']").val( Number($(":text[name='qtys']").val()) + 1 );
      });
      jQuery("#wm-decs").click(function(){
        jQuery(":text[name='qtys']").val( Number($(":text[name='qtys']").val()) - 1 );
      });
    });
    jQuery(function(){
      jQuery("#wm-incd").click(function(){
        jQuery(":text[name='qtyd']").val( Number($(":text[name='qtyd']").val()) + 1 );
      });
      jQuery("#wm-decd").click(function(){
        jQuery(":text[name='qtyd']").val( Number($(":text[name='qtyd']").val()) - 1 );
      });
    });

    //***************************
    // PrettyPhoto Function
    //***************************
    jQuery("area[data-rel^='prettyPhoto']").prettyPhoto();

    jQuery(".gallery:first a[data-rel^='prettyPhoto']").prettyPhoto({
        animation_speed: 'normal',
        theme: 'facebook',
        social_tools: '',
        slideshow: 3000,
        autoplay_slideshow: false
    });
    jQuery(".gallery:gt(0) a[data-rel^='prettyPhoto']").prettyPhoto({
        animation_speed: 'fast',
        slideshow: 10000,
        hideflash: true
    });

    jQuery("#custom_content a[data-rel^='prettyPhoto']:first").prettyPhoto({
        custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
        changepicturecallback: function() {
            initialize();
        }
    });

    jQuery("#custom_content a[data-rel^='prettyPhoto']:last").prettyPhoto({
        custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
        changepicturecallback: function() {
            _bsap.exec();
        }
    });

    //***************************
    // Responsive Video Function
    //***************************
    jQuery(".wm-main-section").fitVids();

    //***************************
	// Skills Function
	//***************************
	jQuery('.skillbar').each(function() {
	    jQuery(this).appear(function() {
	        jQuery(this).find('.count-bar').animate({
	            width:jQuery(this).attr('data-percent')
	        },3000);
	        var percent = jQuery(this).attr('data-percent');
	        jQuery(this).find('.count').html('<span>' + percent + '</span>');
	    });
	});

	jQuery('[data-toggle="tooltip"]').tooltip();

	//***************************
	// CartToggle Function
	//***************************
	jQuery('a.wm-cartbtn').on("click", function(){
        jQuery('.wm-cart-box').slideToggle('slow');
        return false;
    });
    jQuery('html').on("click", function() { jQuery(".wm-cart-box").fadeOut(); });
	jQuery('.wm-navicons,.wm-cartsection').on("click", function(event){ event.stopPropagation(); });

    //***************************
    // LoginToggleClass Function
    //***************************
    jQuery('.wm-modallogin-form p a').on("click", function(){
        jQuery('.modal-body').toggleClass('wm-login-toggle');
        return false;
    });

	//********************************
    // Mediaelementplayer Function
    //********************************
    jQuery('video').mediaelementplayer({
		success: function(player, node) {
			jQuery('#' + node.id + '-mode').html('mode: ' + player.pluginType);
		}
	});

  //***************************
  // NiceScroll Function
  //***************************
    jQuery(".wm-history-list").niceScroll("",{
      cursorcolor:"#a6abc1",
      cursoropacitymax:1,
      boxzoom:true,
      autohidemode: false,
          background: '#5a617d',
          cursorborderradius: '20px 20px 0px 0px',
          cursorminheight: 60,
          cursorwidth: 8,
          cursorborder: 0,
          touchbehavior:true,
          railoffset:   {top: 0, left: -450, },
          railpadding:  { top: 0, right: 0, left: 0, bottom: 0, },
    });
    jQuery(".wm_widget_navlist ul").niceScroll("",{
      cursorcolor:"#3498db",
      cursoropacitymax:1,
      boxzoom:true,
      autohidemode: false,
          background: '#e3e3e3',
          cursorborderradius: '20px 20px 0px 0px',
          cursorminheight: 60,
          cursorwidth: 8,
          cursorborder: 0,
          touchbehavior:true,
          railoffset:   {top: 23, left: -332, right: 0, },
          railpadding:  { top: 0, right: 0, left: 0, bottom: 44, },
    });
    jQuery(".wm-history-list-color").niceScroll("",{
      cursorcolor:"#6b6b6b",
      cursoropacitymax:1,
      boxzoom:true,
      autohidemode: false,
          background: '#494949',
          cursorborderradius: '20px 20px 0px 0px',
          cursorminheight: 60,
          cursorwidth: 8,
          cursorborder: 0,
          touchbehavior:true,
          railoffset:   {top: 0, left: -450, },
          railpadding:  { top: 0, right: 0, left: 0, bottom: 0, },
    });
    jQuery(".widget_categories ul,.widget_scroll-box ul").niceScroll("",{
      cursorcolor:"#dbdbdb",
      cursoropacitymax:1,
      boxzoom:true,
      autohidemode: false,
          background: '#f5f5f5',
          cursorborderradius: '20px 20px 0px 0px',
          cursorminheight: 60,
          cursorwidth: 8,
          cursorborder: 0,
          touchbehavior:true,
          railoffset:   {top: 0, left: 0, },
          railpadding:  { top: 0, right: 0, left: 0, bottom: 0, },
    });
    jQuery(".wm-sidebar ul").niceScroll("",{
      cursorcolor:"#b99663",
      cursoropacitymax:1,
      boxzoom:true,
      autohidemode: false,
          background: '#e3e3e3',
          cursorborderradius: '20px 20px 0px 0px',
          cursorminheight: 60,
          cursorwidth: 8,
          cursorborder: 0,
          touchbehavior:true,
          railoffset:   {top: -10, left: -215, },
          railpadding:  { top: 0, right: 0, left: 0, bottom: 0, },
    });

});

//***************************
// News FilterAble Function
//***************************
jQuery(function($) {
    $('.wm-filterable li,.wm-filterable-link li').on("click", function(event) {
        event.preventDefault();
        var target = $(this).find('>a').prop('hash');
        $('html, body').animate({
            scrollTop: $(target).offset().top
        }, 500);
    });
    $("a.preview").prettyPhoto({
        social_tools: false
    });
    $(window).load(function() {
        $portfolio = $('.wm-gallery,.wm-our-professors,.wm-filter-event');
        $portfolio.isotope({
            itemSelector: 'li',
            layoutMode: 'fitRows',
        });
        $portfolio_selectors = $('.wm-filterable li a,.wm-filterable-link li a');
        $portfolio_selectors.on('click', function() {
            $portfolio_selectors.removeClass('active');
            $(this).addClass('active');
            var selector = $(this).attr('data-filter');
            $portfolio.isotope({
                filter: selector
            });
            return false;
        });
    });
});


//***************************
// GoogleMap Function
//***************************
google.maps.event.addDomListener(window, 'load', init);

function init() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
        // How zoomed in you want the map to start at (always required)
        zoom: 11,

        // The latitude and longitude to center the map (always required)
        center: new google.maps.LatLng(40.6700, -73.9400), // New York

        // How you would like to style the map. 
        // This is where you would paste any style found on Snazzy Maps.
        styles: [{"featureType":"administrative","elementType":"labels","stylers":[{"visibility":"simplified"},{"color":"#4e5256"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#4e5256"},{"visibility":"simplified"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#ffffff"},{"visibility":"off"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"simplified"}]},{"featureType":"landscape","elementType":"geometry.stroke","stylers":[{"visibility":"simplified"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45},{"visibility":"simplified"},{"hue":"#ff0000"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"visibility":"simplified"},{"color":"#007ec8"},{"saturation":"-29"},{"lightness":"56"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"},{"saturation":"82"},{"lightness":"-6"},{"gamma":"1"},{"hue":"#006dff"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#007ec8"},{"lightness":"56"},{"saturation":"-29"}]},{"featureType":"road.highway","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"simplified"}]},{"featureType":"road.local","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#e5e8ed"},{"visibility":"on"}]}]
    };

    // Get the HTML DOM element that will contain your map 
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('map');

    // Create the Google Map using our element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);

    // Let's also add a marker while we're at it
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(40.6700, -73.9400),
        map: map,
        title: 'Snazzy!'
    });
}

$('.to-top-btn').click( function() {
  $('html, body').animate({scrollTop: '0'}, 600);
});

//Show on Scroll
$(window).scroll(function () {
  if ($(this).scrollTop() > 400) {
    $('.to-top-btn').addClass('showme');
  } else {
    $('.to-top-btn').removeClass('showme');
  }
});

 // tabbed content
    // http://www.entheosweb.com/tutorials/css/tabs.asp
    $(".tab_content").hide();
    $(".tab_content:first").show();

  /* if in tab mode */
    $("ul.tabs li").click(function() {
		
      $(".tab_content").hide();
      var activeTab = $(this).attr("rel"); 
      $("#"+activeTab).fadeIn();		
		
      $("ul.tabs li").removeClass("active");
      $(this).addClass("active");

	  $(".tab_drawer_heading").removeClass("d_active");
	  $(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");
	  
    });
	/* if in drawer mode */
	$(".tab_drawer_heading").click(function() {
      
      $(".tab_content").hide();
      var d_activeTab = $(this).attr("rel"); 
      $("#"+d_activeTab).fadeIn();
	  
	  $(".tab_drawer_heading").removeClass("d_active");
      $(this).addClass("d_active");
	  
	  $("ul.tabs li").removeClass("active");
	  $("ul.tabs li[rel^='"+d_activeTab+"']").addClass("active");
    });
	
	
	/* Extra class "tab_last" 
	   to add border to right side
	   of last tab */
	$('ul.tabs li').last().addClass("tab_last");
  
  (function (jQuery) {
    jQuery.mark = {
      tabs: function (options) {
        var defaults = {
          selector: '.the-days'
        };
        if (typeof options == 'string') defaults.selector = options;
        var options = jQuery.extend(defaults, options);
        return jQuery(options.selector).each(function () {
          var tabobj = jQuery(this);
          var theprev = jQuery('.left');
          var thenext = jQuery('.right');
          var thepanes = tabobj.find('.navtab-content').hide();
          var d = new Date();
          var n = d.getDay();
          thepanes.eq(n).addClass('current-panel');
          thepanes.eq(n).find('h2').addClass("today");
          thepanes.eq(n).show();
  
          theprev.click(function(event){
            var curr = jQuery('.current-panel');
            if(curr.is(':first-child')) {
              curr.removeClass('current-panel').fadeOut(10);
              jQuery('.navtab-content:last').addClass('current-panel').slideDown(600);
            } else {
              curr.prev().addClass('current-panel').slideDown(600);
              curr.removeClass('current-panel').fadeOut(10);
            }
          });
  
          thenext.click(function(event){
            var curr = jQuery('.current-panel');
            if(curr.is(':last-child')) {
              jQuery('.navtab-content:first').addClass('current-panel').slideDown(600);
              curr.removeClass('current-panel').fadeOut(10);
            } else {
              curr.next().addClass('current-panel').slideDown(600);
              curr.removeClass('current-panel').fadeOut(10);
            }
          });
  
  
        })
      },
      doNotes: function (options) {
        var defaults = {
          selector: '.notes-module'
        };
        if (typeof options == 'string') defaults.selector = options;
        var options = jQuery.extend(defaults, options);
        return jQuery(options.selector).each(function () {
          var modobj = jQuery(this);
          var listobj = jQuery(this).find('ul');
          var storename = listobj.attr('id');
          var formobj = jQuery(this).find('form');
          var dataobj = formobj.find('input[type="text"]');
          if (localStorage.getItem(String(storename))) {
            listobj.html(localStorage.getItem(storename));
          }
          modobj.on("submit", "form", function(e){
            var textToAdd = '<li><i class="fa fa-trash"></i>' + dataobj.val() + '</li>';
            listobj.append(textToAdd);
            dataobj.val('').focus();
            localStorage.setItem(storename, listobj.html());
            e.preventDefault();
          });
          modobj.on("click", "li", function(){
            if (jQuery(this).hasClass('mark-me')) {
              jQuery(this).removeClass("mark-me");
              listobj.prepend(jQuery(this));
            } else {
            jQuery(this).addClass("mark-me");
            listobj.append(jQuery(this));
            }
            localStorage.setItem(storename, listobj.html());
          });
          modobj.on("click", "i.fa-trash", function(){
            jQuery(this).parent().fadeOut(500, function(){
              jQuery(this).remove();
              localStorage.setItem(storename, listobj.html());
            });
          });
        })
      } 
  
    }
  })(jQuery);
  
  jQuery(function(){	
    jQuery.mark.tabs();
    jQuery.mark.doNotes();
  });


  $(document).ready(function() {
    $(".js-example-tags").select2({
      tags: true
    });
  });

  var button = document.getElementsByClassName('but'),
  tabContent = document.getElementsByClassName('tab-content');
  button[0].classList.add('active');
  tabContent[0].style.display = 'block';