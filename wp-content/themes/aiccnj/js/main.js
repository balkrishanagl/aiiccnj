
var winW = $(window).width();
var navFlg=0;
$(function(){
if(winW <=979){
$(".mobileTrigger").click(function(){
    if(navFlg==0){
        $('.mobileTrigger ul li').addClass('active')
        $('nav').addClass('active')
        navFlg=1;
    }
    else if(navFlg==1){
        $('.mobileTrigger ul li').removeClass('active')
        $('nav').removeClass('active')
        navFlg=0;
    }
});
}

  $('.homespotlight').owlCarousel({
        items:1,
        margin:30,
        smartSpeed:1000,
        slideBy:1,
        mouseDrag:true,
        nav: false,
        autoplay: true, 
        dots: true,
        loop: false,
        //responsiveRefreshRate: 2000,    
        responsive : {
          0:{
            items:1
          },
          768:{
            items:1
          },
          1500:{
            items:1
          }
        }   
    });

  $('.findfit-slide').owlCarousel({
        items:4,
        margin:30,
        slideSpeed : 300,
        slideBy:1,
        mouseDrag:true,
        nav: true,
        autoplay: false, 
        dots: false,
        loop: false,
        singleItem:true,
        //responsiveRefreshRate: 2000,    
        responsive : {
          0:{
            items:1,
            dots: true,
          },
          480:{
            items:1
          },
          767:{
            items:2,
            dots: true,
          },
          980:{
            items:3,
            margin:20,
          },
          1200:{
            items:4,
            margin:20,
          },
        }    
    });

    $('.event-slide').owlCarousel({
        margin:20,
        smartSpeed:1000,
        slideBy:1,
        mouseDrag:true,
        nav: false,
        autoplay: false, 
        dots: true,
        loop: false,
        //responsiveRefreshRate: 2000,    
        responsive : {
          0:{
            items:1.3,
          },
          480:{
            items:1.3
          },
          767:{
            items:2.3
          },
          1200:{
            items:3.5
          },
          1600:{
            items:3.5
          },
        } 
    });

       $('.serve-slide').owlCarousel({
        margin:20,
        smartSpeed:1000,
        slideBy:1,
        mouseDrag:true,
        nav: false,
        autoplay: false, 
        dots: true,
        loop: true,
        //responsiveRefreshRate: 2000,    
        responsive : {
          0:{
            items:1.3,
          },
          480:{
            items:1.3
          },
          767:{
            items:2.3
          },
          1200:{
            items:3.5
          },
          1600:{
            items:3.5
          },
        } 
    });

    $('.blog-slide').owlCarousel({
        margin:30,
        smartSpeed:1000,
        slideBy:1,
        mouseDrag:true,
        nav: false,
        autoplay: false, 
        dots: true,
        loop: false,
        //responsiveRefreshRate: 2000,    
        responsive : {
          0:{
            items:1,
            dots: true,
          },
          480:{
            items:1
          },
          767:{
            items:2
          },
          980:{
            items:3,
            margin:20,
          },
          1200:{
            items:4,
            margin:20,
          },
          1600:{
            items:4
          },
        } 
    });
});







   