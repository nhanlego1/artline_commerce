(function ($) {

    Drupal.behaviors.initArtline = {
        attach: function (context, settings) {
            if(screen.width <= 1024 && screen.width >= 768){
                $('.owl-carousel').owlCarousel({
                    items:2,
                    nav: true,
                    navigationText: [
                        "<i class='icon-chevron-left icon-white'><</i>",
                        "<i class='icon-chevron-right icon-white'>></i>"],
                    lazyLoad: true
                });
            }else if(screen.width < 768){
                $('.owl-carousel').owlCarousel({
                    items:1,
                    nav: true,
                    navigationText: [
                        "<i class='icon-chevron-left icon-white'><</i>",
                        "<i class='icon-chevron-right icon-white'>></i>"],
                    lazyLoad: true
                });
            }else{
                $('.owl-carousel').owlCarousel({
                    items:4,
                    nav: true,
                    navigationText: [
                        "<i class='icon-chevron-left icon-white'><</i>",
                        "<i class='icon-chevron-right icon-white'>></i>"],
                    lazyLoad: true
                });
            }


        }
    };

})(jQuery);