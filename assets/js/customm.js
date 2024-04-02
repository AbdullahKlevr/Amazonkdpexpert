$(document).ready(function() {
     


    $('.menu li').on('click', function () {
        $(this).addClass('active').siblings().removeClass('active');
    });


    

 //    $('.slider-for').slick({
 //  slidesToShow: 1,
 //  slidesToScroll: 1,
 //  arrows: false,
 //  fade: true,
 //  arrows:false,
 //  asNavFor: '.slider-nav'
 //});
 //$('.slider-nav').slick({
 //  slidesToShow: 1,
 //  slidesToScroll: 1,
 //  asNavFor: '.slider-for',
 //  dots: true,
 //  arrows:false,
 //  focusOnSelect: true
 //});

 //     $('.slider-for-two').slick({
 //  slidesToShow: 1,
 //  slidesToScroll: 1,
 //  arrows: false,
 //  fade: true,
 //  arrows:false,
 //  asNavFor: '.slider-nav-two'
 //});
 //$('.slider-nav-two').slick({
 //  slidesToShow: 7,
 //  slidesToScroll: 1,
 //  asNavFor: '.slider-for-two',
 //  dots: true,
 //  arrows:false,
 //  focusOnSelect: true
 //});

//$('[data-targetit]').on('click', function(e) {
//  $(this).addClass('active');
//  $(this).siblings().removeClass('active');
//  var target = $(this).data('targetit');
//  $('.' + target).siblings('[class^="box-"]').hide();
//  $('.' + target).fadeIn();
//  $('.pricing-slider').slick('setPosition');
//});

  
//});

//$(document).on("click",".popup-btn",function() { 
//$('.popupform-main-new-popup').addClass('active');
//// $('body').addClass('o-hidden');
//$('.overlay-bg').fadeIn(500);
//$('.close-btn').on('click', function(){
//$('.popupform-main-new-popup').removeClass('active');
//// $('body').removeClass('o-hidden');
//$('.overlay-bg').fadeOut(500);
//});
//$('.overlay-bg').click(function() {
//$('popupform-main-new-popup').removeClass('active');
//// $('body').removeClass('o-hidden');
//$('.overlay-bg').fadeOut(500);
//});
//});

     
//      $('.port-slider').slick({
//      dots: true,
//      arrows: false,
//      autoplay: true,
//      autoplaySpeed: 3000,
//      infinite: false,
//      slidesToShow: 4,
//      slidesToScroll: 1,
//     responsive: [
 
//    {
//      breakpoint: 767,
//      settings: {
//        slidesToShow: 1,
//        slidesToScroll: 1
//      }
//    }
 
//  ]
//});   





$('.review-slider').slick({
    autoplay: true,
    dots: true,
    arrows: false,
    infinite: true,
    speed: 500,
    fade: true,
    slidesToShow: 1,
    slidesToScroll:1,
    //responsive: [
    //    {
    //        breakpoint:1024,
    //        settings: {
    //            slidesToShow: 1,
    //            slidesToScroll: 1,
    //            infinite: true,
    //            dots: true
    //        }
    //    },
    //    {
    //        breakpoint: 600,
    //        settings: {
    //            slidesToShow: 2,
    //            slidesToScroll: 2
    //        }
    //    },
    //    {
    //        breakpoint: 480,
    //        settings: {
    //            slidesToShow: 1,
    //            slidesToScroll: 1
    //        }
    //    }
    //    // You can unslick at a given breakpoint now by adding:
    //    // settings: "unslick"
    //    // instead of a settings object
    //]
});


    $('.banner-slider').slick({
        autoplay: true,
        dots: false,
        arrows: false,
        infinite: true,
        speed: 500,
        fade: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        //responsive: [
        //    {
        //        breakpoint:1024,
        //        settings: {
        //            slidesToShow: 1,
        //            slidesToScroll: 1,
        //            infinite: true,
        //            dots: true
        //        }
        //    },
        //    {
        //        breakpoint: 600,
        //        settings: {
        //            slidesToShow: 2,
        //            slidesToScroll: 2
        //        }
        //    },
        //    {
        //        breakpoint: 480,
        //        settings: {
        //            slidesToShow: 1,
        //            slidesToScroll: 1
        //        }
        //    }
        //    // You can unslick at a given breakpoint now by adding:
        //    // settings: "unslick"
        //    // instead of a settings object
        //]
    });


    $('.publishing-slide').slick({
    autoplay: true,
    dots: false,
    infinite: true,
    speed:500,
    slidesToShow:3,
    slidesToScroll: 1,
    arrows:false,
    dots:true,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 780,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});

 

    $('.services-slider').slick({
        autoplay: true,
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 5,
        slidesToScroll: 5,
        arrows: false,
        dots: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    $('.logos-slider').slick({
        autoplay: true,
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 5,
        slidesToScroll: 5,
        arrows: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });


    $('.logos-slider2').slick({
        autoplay: true,
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 4,
        slidesToScroll: 4,
        arrows: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

});

$('.logos-slider3').slick({
    autoplay: true,
    dots: false,
    infinite: true,
    speed: 500,
    slidesToShow: 6,
    slidesToScroll: 1,
    arrows: false,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 1,
                infinite: true,
                dots: false
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});



(function () {
    tabsInit();

})()

function tabsInit() {
    $('.js-tab-link').click(function (e) {
        e.preventDefault();
        var $this = $(this);
        var targetId = $this.attr('data-tab-id');
        var tabsName = $this.attr('data-tab-name');
        $('[data-tab-name="' + tabsName + '"]').removeClass('is-active');
        // $this.addClass('is-active');
        $('[data-tab-id="' + targetId + '"]').addClass('is-active');
        $('.tab-' + targetId).addClass('is-active');
    });
}