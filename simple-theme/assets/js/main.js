(function ($) {
    $(document).ready(function () {
        "use strict";
        //header scroll------------------------------------------------------------
        var sticky = $('header'),
            scroll = $(window).scrollTop();
        if (scroll >= 40) {
            sticky.addClass('act');
        }

        $(window).scroll(function () {
            var scroll = $(this).scrollTop();
            if (scroll >= 40) {
                sticky.addClass('act');
            } else {
                sticky.removeClass('act');
            }
        });
        //header scroll end------------------------------------------------------------

        // resize textarea------------------------------------------------------------
        function onInputHeight() {
            $(this).css("height", 0);
            $(this).css("height", this.scrollHeight + "px");
        }

        function autoResizeTextarea() {
            $("textarea").each(function () {
                $(this).css("height", this.scrollHeight + "px");
                $(this).on("input", onInputHeight);
            });
        }
        autoResizeTextarea();

        document.addEventListener( 'wpcf7submit', function( event ) {
            $('textarea').css("height", 0);
        }, false );

        document.addEventListener( 'wpcf7mailsent', function( event ) {
            $('.wpcf7-response-output').show();
            select.val(null).trigger('change');
        }, false );

        // resize textarea end ------------------------------------------------------------

        /* Checking for spaces and letters in the number field------------------------------------------------------------*/
        function contactFormEmptySpace() {
            $('.wpcf7-form-control').each(function (index) {
                $(this).on("input", function () {
                    if ($(this).val().charAt(0) === ' ') {
                        $(this).val('');
                    }
                });
            });
        }
        contactFormEmptySpace();

        //Fancybox
        Fancybox.bind("[data-fancybox]", {
            touch: false,
            autoFocus: false
        });

        //name output
        $(document).on('wpcf7mailsent', function(event) {
            var inputs = event.detail.inputs;
            var name = '';
            for (var i = 0; i < inputs.length; i++) {
                if ('your-name' == inputs[i].name) {
                    name = inputs[i].value;
                    break;
                }
            }
            $('.thank-you').fadeIn();
            $('.cf').hide();
            if (name) {
                $('#name-output').text('Thank you, ' + name );
            }
        });

        // header anchor
        $('a[href^="#"]').on('click', function(event) {
            var target = $(this.getAttribute('href'));
            if( target.length ) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top - $('header').height() - 60
                }, 1000);
            }
        });

        if (/iPhone|iPod/.test(navigator.userAgent) && !window.MSStream) {
            $('.wpcf7').addClass('iphone');
        }

        checkInputs();
        $('label .wpcf7-text').on('input', function() {
            checkInputs();
        });

        $('label .wpcf7-email.wpcf7-text').on('input', function() {
            checkInputs();
        });

        function checkInputs() {
            var nameValue = $('label .wpcf7-text').val();
            var emailValue = $(' label .wpcf7-email.wpcf7-text').val();
            if (nameValue.trim() !== '' && emailValue.trim() !== '') {
                $('.submit').removeClass('in-active');
            } else {
                $('.submit').addClass('in-active');
            }
        }

// //cookie
//         $(document).on('classChange', '.cky-modal', function () {
//             if ($(this).hasClass('cky-modal-open')) {
//                 $('body').addClass('cookie-open-hide');
//             } else {
//                 $('body').removeClass('cookie-open-hide');
//             }
//         });
//         // Створення нового спостерігача за мутаціями
//         var observer = new MutationObserver(function(mutations) {
//             mutations.forEach(function(mutation) {
//                 if (mutation.attributeName === "class") {
//                     var currentClassState = $(mutation.target).prop(mutation.attributeName);
//                     // Перевірка, чи має елемент клас 'cky-modal-open'
//                     if ($(mutation.target).hasClass('cky-modal-open')) {
//                         $('body').addClass('cookie-open-hide');
//                     } else {
//                         $('body').removeClass('cookie-open-hide');
//                     }
//                 }
//             });
//         });
//
// // Конфігурація спостерігача: спостереження за змінами класів
//         var config = { attributes: true, attributeFilter: ['class'] };
//
// // Вибір цільового елемента для спостереження (замініть '.cky-modal' на ваш цільовий елемент)
//         var targetNode = $('.cky-modal')[0];
//
// // Початок спостереження
//         observer.observe(targetNode, config);
// // end cookie


    });
}(jQuery));
