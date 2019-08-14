$(document).foundation();

/*$('.owl-carousel').owlCarousel({
 items: 6,
 nav: true,
 margin: 20,
 navText: ['', '']
 });*/

$('.owl-carousel').each(function () {
  var desktopItems = $(this).data('desktop-items');
  var tabletItems = $(this).data('tablet-items');
  var mobileItems = $(this).data('mobile-items');

  if (!desktopItems) {
    desktopItems = 4;
  }

  if (!tabletItems) {
    tabletItems = 2;
  }

  if (!mobileItems) {
    mobileItems = 1;
  }

  $(this).owlCarousel({
    nav: true,
    margin: 15,
    navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
    responsiveClass: true,
    responsive: {
      0: {
        items: mobileItems,
        nav: false,
      },
      640: {
        items: tabletItems
      },
      1000: {
        items: desktopItems
      }
    }
  });
});
    
  $(window).scroll(function(){

    $('.is-stuck').each(function(){
      var imagePos = $(this).offset().top;
      var topOfWindow = $(window).scrollTop();
        if (imagePos <= topOfWindow) {
          $(this).addClass("class-re");
        }
        else{
          $(this).removeClass("class-re");
        }
      });

  });

// scroll feedback
    
$('.class-logo').addClass('animated bounceInDown');
$('.reveal').addClass('animated bounceInDown');

$(window).scroll(function() {
   
    $('.ds-dichvu img , .tieude-luachon , .img-info ,.title-info , .img-service ,.title-column, .title-footer,.logo-footer').each(function(){
    var imagePos = $(this).offset().top;

    var topOfWindow = $(window).scrollTop();
      if (imagePos < topOfWindow+600) {
        $(this).addClass("animated slideInDown");
      }
    });
    

    
    
  });

/* Method for Search */
jQuery('.nttkm-title').click(function(){
    jQuery('.nttkm-content').css('display','block');
    jQuery('.nttkm').css('position','fixed');
    jQuery('.nttkm-title').css('border-radius','0');
    jQuery('.show_dkntt').css('height','27px');
    jQuery('.invi_dkntt').css('display','block');
});
jQuery('.invi_dkntt').click(function(){
    jQuery('.nttkm-content').css('display','none');
    jQuery('.nttkm').css('position','static');
    jQuery('.invi_dkntt').css('display','none');
    jQuery('.nttkm-title').css('border-radius','5px');
    jQuery('.show_dkntt').css('height','31px');
});
jQuery(document).ready(function ($) {
  $(".testimonial").owlCarousel({
  items : 1,
  autoPlay: 10000, //Set AutoPlay to 3 seconds
  slideSpeed : 600,
  lazyLoad : true,
  navigation : false,
  itemsDesktop : [1199,1],
    itemsDesktopSmall : [979,1]
  }); 
});

jQuery(document).ready(function ($) {
  $(".dich-vu").owlCarousel({
  items : 4,
  autoPlay: 3000, //Set AutoPlay to 3 seconds
  slideSpeed : 600,
  lazyLoad : true,
  pagination: false,
  navigation : true,
  itemsDesktop : [1199,4],
  itemsDesktopSmall : [979,3],
  itemsTablet : [768,2],
  itemsMobile : [480,1],
  }); 
});