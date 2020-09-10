

jQuery(window).on('load', function () {
  jQuery('.loader_wrapper').fadeOut(100);
  jQuery('.inner_pages .sidebar .current_page_item').parent('ul').slideDown();
  jQuery('.current-menu-parent').addClass('open');




});

jQuery(document).ready(function () {

  pathFinder()
  jQuery(".hamburger_wrapper").click(function () {
    jQuery(this).toggleClass('open');
    jQuery(".mega_menu_wrapper").toggleClass('open');
    jQuery("header").toggleClass('blue_bg');
  });




  jQuery(window).scroll(function () {
    if (jQuery(document).scrollTop() > 0) {
      jQuery('header').addClass('sticky');


    } else {
      jQuery('header').removeClass('sticky');


    }
  });


  jQuery('#subscribe_link').click(function () {
    jQuery('section.newsletter').show();
    jQuery("html, body").animate({
      scrollTop: jQuery(document).height()
    }, 50);
  });

  jQuery('.arrow_filter').click(function () {
    jQuery(this).toggleClass('open');
    jQuery('.sidebar').toggleClass('open');
    jQuery('.backdrop_orange').toggleClass('open');
  });


  jQuery('.main_nav.mobile_nav .main_menu li.menu-item-has-children>a').on('click', function () {
    jQuery(this).removeAttr('href');
    var element = jQuery(this).parent('li');
    if (element.hasClass('open')) {
      element.removeClass('open');
      element.find('li').removeClass('open');
      element.find('ul').slideUp();
    } else {
      element.addClass('open');
      element.children('ul').slideDown();
      element.siblings('li').children('ul').slideUp();
      element.siblings('li').removeClass('open');
      element.siblings('li').find('li').removeClass('open');
      element.siblings('li').find('ul').slideUp();
    }
  });


  jQuery('.sidebar .menu-item-has-children>a').on('click', function () {
    jQuery(this).removeAttr('href');
    var element = jQuery(this).parent('li');
    if (element.hasClass('open')) {
      element.removeClass('open');
      element.find('li').removeClass('open');
      element.find('ul').slideUp();
    } else {
      element.addClass('open');
      element.children('ul').slideDown();
      element.siblings('li').children('ul').slideUp();
      element.siblings('li').removeClass('open');
      element.siblings('li').find('li').removeClass('open');
      element.siblings('li').find('ul').slideUp();
    }
  });



  jQuery("section.portfolio .slider").slick({

    slidesToShow: 5,
    infinite: true,
    centerMode: true,
    autoplay: true,
    arrows: true,
    pauseOnHover: false,
    rows: 0,

    // the magic
    responsive: [{

      breakpoint: 1450,
      settings: {
        slidesToShow: 3,

      }

    }, {

      breakpoint: 1024,
      settings: {
        slidesToShow: 3,

      }

    }, {

      breakpoint: 900,
      settings: {
        slidesToShow: 2,

      }

    }, {

      breakpoint: 767,
      settings: {
        slidesToShow: 1,

      }

    }]
});


  jQuery("section.testimonials .slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    autoplay: true,
    arrows: true,
    fade: true,
    pauseOnHover: false,
    asNavFor: ".slider_vertical",
  });


  jQuery("section.testimonials .slider_vertical").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    autoplay: true,
    arrows: false,
    vertical: true,
    pauseOnHover: false,
    centerMode: true,

    responsive: [{

      breakpoint: 991,
      settings: {
        slidesToShow: 3,
        vertical: false,
        centerPadding: "5px",

      }

    }]

  });

  new WOW().init();

  jQuery('.engage-archive .wrapper .sidebar .sidebar_ul li .sub-menu li a').first().addClass('active-link')
  engageScroll()
  engageMenu()


});

var canGo = true,
    delay = 800;


let engageScroll = () => {
let selector = '.engage-archive .wrapper .sidebar .sidebar_ul li .sub-menu li a'
  jQuery(selector).click(function () {


    if (canGo) {
      canGo = false;

      var navId = jQuery(this).attr('class');
      var exp = navId.split(" ")
      navId = exp[0]
      jQuery(selector).prop("disabled", true);
      setTimeout(function () {
        jQuery(selector).prop("disabled", false)
      }, 1000);
      jQuery(selector).removeClass('active-link').addClass('not-active-link');
      jQuery(".content-all").addClass('position-absolute').animate({
        "opacity": "hide",
        "bottom": "1000"
      }, 600, 'linear', function () {
        jQuery('.content-all').removeClass('position-absolute');
      });
      jQuery("#" + navId).animate({
        "opacity": "show",
        'bottom': '0'
      }, 200, 'linear')
      jQuery(this).removeClass('not-active-link').addClass('active-link');
      jQuery('.backdrop_orange, .sidebar, .arrow_filter').removeClass('open')

      jQuery(selector).addClass('op-5')
      setTimeout(function () {
        jQuery(selector).removeClass('op-5')
          canGo = true;
      }, delay)
      
  } else {
      console.log('Khamoshi')
  }




  });
}





function engageMenu(){
  let countE = 0
  jQuery('.engage-archive .wrapper .sidebar .sidebar_ul li .sub-menu li a').each(function(){
    jQuery(this).addClass(`navigation${countE}`)
    countE++
  })
}

let pathFinder = () => {
  let pathname = window.location.href;

  let sect = pathname.split('#');

  setTimeout(function () {
    jQuery(`.navigation${sect[1]}`).trigger('click');
  }, 90);
}