$(document).ready(function () {
    $('.header__burger').click(function (event) {
        $('.header__burger').toggleClass('active');
        $('.header').toggleClass('active');
        $('body').toggleClass('hidden');
        $('.header__menu').slideToggle();
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.header').addClass('pre-fixed');
        } else {
            $('.header').removeClass('pre-fixed');
        }
        if ($(this).scrollTop() > 500) {
            $('.header').addClass('fixed');
        } else {
            $('.header').removeClass('fixed');
        }
    });

    $("body").on("click", ".main_nav a", function (event) {
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top - 100;
        $('body,html').animate({ scrollTop: top }, 900);
    }); 

    $('.nice_place').hover(
        function () {
            $('.nice_place').addClass('active');
        }, function () {
            $('.nice_place').removeClass('active');
        }
    );

    $('.dubai_place').hover(
        function () {
            $('.dubai_place').addClass('active');
        }, function () {
            $('.dubai_place').removeClass('active');
        }
    );

    $('.hongkong_place').hover(
        function () {
            $('.hongkong_place').addClass('active');
        }, function () {
            $('.hongkong_place').removeClass('active');
        }
    );


    document.addEventListener( 'wpcf7mailsent', function( event ) {
        var id = event.detail.contactFormId;
        if ( id == 76 || id == 6 || id == 17757 ) { 
          Fancybox.close();   
          Fancybox.show([{ src: "#thank-you", type: "inline" }]); 
        }
      }, false );

});


