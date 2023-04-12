jQuery(document).ready(function($){    
    
    var slider_auto, slider_loop, rtl;
    
    if( fashion_lite_data.auto == '1' ){
        slider_auto = true;
    }else{
        slider_auto = false;
    }
    
    if( fashion_lite_data.loop == '1' ){
        slider_loop = true;
    }else{
        slider_loop = false;
    }

    if ( fashion_lite_data.rtl == '1' ) {
        rtl = true;
    } else {
        rtl = false;
    }

    $('.site-banner.style-two .item-wrap').owlCarousel({
        items: 1,
        autoplay: slider_auto,
        loop: slider_loop,
        nav: true,
        dots: false,
        autoplaySpeed : 800,
        autoplayTimeout: 3000,
        rtl: rtl,
    });
});
