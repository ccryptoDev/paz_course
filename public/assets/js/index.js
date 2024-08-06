$( document ).ready(function() {
    $('.div3__list.owl-carousel').owlCarousel({
        dots:true,
        loop: true,
        smartSpeed:1500,
        responsive : {
            0 : {
                items:1,
                margin:10,
                nav:false
            },
            1025: {
                items:2,
                margin:0,
                nav:true
            }
        }
    });
    const owlReview = $('.div5__list.owl-carousel');
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
});
