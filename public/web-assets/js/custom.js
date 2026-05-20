$(document).ready(function () {
    $('.navbar-toggler').on('click', function () {
        $('.vs-site').toggleClass('menu-open');
    });

    $('.vs-menu-close-icon').on('click', function () {
        $('.navbar-collapse').collapse('hide');
    });

    $('.nav-item.vs-has-submenu').on('click', function () {
        $(this).toggleClass('vs-submenu-show');
    });

    $('.vs-portfolio-slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true,
        responsive: [{
            breakpoint: 1199,
            settings: {
                adaptiveHeight: true
            }
        }]
    });

    // $('button[data-bs-toggle="pill"]').on('click', function (e) {
    //     $('.vs-portfolio-slider').slick('refresh');
    // });

    $('button[data-bs-toggle="pill"]').on('shown.bs.tab', function (e) {
        $('.vs-portfolio-slider').slick('setPosition');
    })

    // $('.vs-mega-menu-link').on('click', function (e) {
    //     $('.vs-testimonial-slider2').slick('refresh');
    // });


    // $( ".vs-mega-menu-link" ).each(function(index) {
    //     // $(this).on("click", function(){
    //     //     // For the boolean value
    //     //     var boolKey = $(this).data('selected');
    //     //     // For the mammal value
    //     //     var mammalKey = $(this).attr('id');
    //     // });
    // });


    $('.modal').on('shown.bs.modal', function (e) {

        setTimeout(function () {

            $('.vs-testimonial-slider2').slick('setPosition');
            $('.vs-request-modal-testimonial-content').addClass('active');
        }, 500)
    });

    $('.vs-stories-portfolio-slider').slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.stories-slider-tabs'
    });

    $('.stories-slider-tabs').slick({
        infinite: false,
        slidesToShow: 5,
        slidesToScroll: 5,
        asNavFor: '.vs-stories-portfolio-slider',
        dots: false,
        arrows: false,
        centerMode: false,
        pauseOnHover: false,
        autoplay: false,
        autoplaySpeed: 2000,
        focusOnSelect: true,
        responsive: [{
            breakpoint: 767,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
            }
        }]
    });

    $('.vs-testimonial-slider').slick({
        dots: true,
        arrows: true,
        infinite: false,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplaySpeed: 2000,
        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerPadding: '150px',
            }
        },
        {
            breakpoint: 767,
            settings: {
                arrows: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                centerPadding: '40px',
                adaptiveHeight: true
            }
        },
        ]
    });

    $('.vs-related-service-slider').slick({
        dots: true,
        arrows: false,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplaySpeed: 2000,
        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 767,
            settings: {
                arrows: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                centerPadding: '40px',
                adaptiveHeight: true
            }
        },
        ]
    });

    $('.vs-testimonial-slider2').slick({
        dots: true,
        arrows: false,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplaySpeed: 2000,
        // adaptiveHeight: true,
    });

    // header Language Start
    // function formatState(state) {
    //     if (!state.id) {
    //         return state.text;
    // }
    // var baseUrl = "assets/images/flags/";
    // var $state = $(
    //     '<span><img class="img-flag" /> <span></span></span>'
    //     );
    //     $state.find("span").text(state.text);
    //     $state.find("img").attr("src", baseUrl + state.element.value + ".png");
    //     return $state;
    // };

    function formatStateDisplay(state) {

        if (!state.id) {
            return state.text;
        }
        var baseUrl = "web-assets/images/flags";
        var $state = $(
            '<span><img class="img-flag" /> <span></span></span>'
        );

        $state.find("span").text($(state.element).data('code'));
        $state.find("img").attr("src", baseUrl + "/" + $(state.element).data('flag').toLowerCase() + ".png");

        return $state;
    };

    function formatStateList(state) {
        if (!state.id) {
            return state.text;
        }
        var baseUrl = "web-assets/images/flags";
        var $state = $(
            '<span><img src="' + baseUrl + '/' + $(state.element).data('flag').toLowerCase() + '.png" class="img-flag" /> ' + state.text + '</span>'
        );



        return $state;
    };

    $("#countries").select2({
        width: '300 !important',
        templateResult: formatStateList,
        templateSelection: formatStateDisplay
    });


    // $("#countries2").select2({
    //     templateResult: formatState
    // });

    // $("#countries").select2({
    //     templateResult: formatState, // aa add karvan
    //     templateSelection: formatState,
    //     minimumResultsForSearch: -1
    // });


    // function formatState2(state2) {
    //     if (!state2.id) {
    //         return state2.text;
    // }
    // var baseUrl2 = "assets/images/flags/";
    // var $state2 = $(
    //     '<span><img class="img-flag" /> <span></span></span>'
    //     );
    //     $state2.find("span").text(state2.text);
    //     $state2.find("img").attr("src", baseUrl2 + state2.element.value + ".png");
    //     return $state2;
    // };

    $("#countries2").select2({
        width: 'resolve',
        templateResult: formatStateList,
        templateSelection: formatStateDisplay
    });

    // $("#countries2").select2({
    //     width: 'resolve',
    //     templateResult: formatState2, // aa add karvan
    //     // templateSelection: formatState2,
    //     // minimumResultsForSearch: -1
    // });


    // function formatState3(state3) {
    //     if (!state3.id) {
    //         return state3.text;
    // }
    // var baseUrl3 = "assets/images/flags/";
    // var $state3 = $(
    //     '<span><img class="img-flag" /> <span></span></span>'
    //     );
    //     $state3.find("span").text(state3.text);
    //     $state3.find("img").attr("src", baseUrl3 + state3.element.value + ".png");
    //     return $state3;
    // };

    // $("#modalcountries").select2({
    //     templateResult: formatState3, // aa add karvan
    //     templateSelection: formatState3,
    //     minimumResultsForSearch: -1
    // });
    // $("#modalcountries").select2({
    //     width: 'resolve',
    //     templateResult: formatStateList,
    //     templateSelection: formatStateDisplay
    // });

    $(".js-selectCountryDialCode").select2({
        width: 'resolve',
        templateResult: formatStateList,
        templateSelection: formatStateDisplay
    });

    // header Language End


    Scrollbar.initAll();
});
$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $('.vs-site-header').addClass('vs-sticky-header');
    } else {
        $('.vs-site-header').removeClass('vs-sticky-header');
    }
});

