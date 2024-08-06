$( document ).ready(function() {
    const owlPr = $('.pr__section1__list.owl-carousel'),
    owlOptions = {
        dots:true,
        smartSpeed:1500,
        loop: false,
        items:1,
        loop: true,
        margin:10,
        nav:false
    };
    if(owlPr){
        if ( $(window).width() < 1024 ) {
            const owlActive = owlPr.owlCarousel(owlOptions);
        } else {
            owlPr.addClass('off');
        }
    }
    const owlReview = $('.div5__list.owl-carousel');
    if(owlReview){
        owlReview.owlCarousel({
            dots:true,
            margin:0,
            loop: true,
            smartSpeed:1500,
            responsive : {
                0 : {
                    items:1,
                    nav:false,
                    slideBy: 1
                },
                1025: {
                    items:2,
                    nav:true,
                    slideBy: 2
                }
            }
        });
        $('.div5__btn .owl-prev').click(function() {
            $(".div5__list .owl-prev").trigger( "click" );
        })
        $('.div5__btn .owl-next').click(function() {
            $(".div5__list .owl-next").trigger( "click" );
        })
        $('.div5__dots__btn').click(function () {
            owlReview.trigger('to.owl.carousel', [Math.floor($(this).index()/2), 300]);
        });
    }
});
$(window).resize(function() {
    const owlPr = $('.pr__section1__list.owl-carousel'),
    owlOptions = {
        dots:true,
        smartSpeed:1500,
        loop: false,
        items:1,
        loop: true,
        margin:10,
        nav:false
    };
    if(owlPr){
        if ( $(window).width() < 1024 ) {
            if ( owlPr.hasClass('off') ) {
                const owlActive = owlPr.owlCarousel(owlOptions);
                owlPr.removeClass('off');
            }
        } else {
            if ( !owlPr.hasClass('off') ) {
                owlPr.addClass('off').trigger('destroy.owl.carousel');
                owlPr.find('.owl-stage-outer').children(':eq(0)').unwrap();
            }
        }
    }
});