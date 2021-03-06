


$( document ).ready(function() {

    /* Slick.js http://kenwheeler.github.io/slick/
   =======================*/

    $('.examples-slider').slick({// Указываем слайдеру, в каком элементе содержатся слайды
        infinite: true,// Прокручивать бесконечно
        slidesToShow: 1,// Показывать слайдов
        slidesToScroll: 1,// Прокручивать слайдов
        arrows: false,//Стандартные стрелки
        dots: false,// Точки
        autoplay: true,// Автоплей
        autoplaySpeed: 4000,
        fade: false,// Fade or translate


        responsive: [

            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]

    });



// Создать стрелки в ручном режиме
    $(".examples-prev-btn").on("click", function() {
        $('.examples-slider').slick("slickPrev");
    });

    $(".examples-next-btn").on("click", function() {
        $('.examples-slider').slick("slickNext");
    });




// Мобильный слайдер секции "Отзывы"

    $( document ).ready(function() {
        if( (document.documentElement.clientWidth >= 320) && (document.documentElement.clientWidth  <=480) ) {

            $('.feedback-mobile-slider').slick({// Указываем слайдеру, в каком элементе содержатся слайды
                infinite: true,// Прокручивать бесконечно
                slidesToShow: 1,// Показывать слайдов
                slidesToScroll: 1,// Прокручивать слайдов
                arrows: false,//Стандартные стрелки
                dots: true,// Точки
                autoplay: true,// Автоплей
                autoplaySpeed: 4000,
                fade: false,// Fade or translate
            });
        }
    });

// Мобильный слайдер секции "Процесс изготовления игрушки"

    $( document ).ready(function() {
        if( (document.documentElement.clientWidth >= 320) && (document.documentElement.clientWidth  <=480) ) {

            $('.process-slider-ul').slick({// Указываем слайдеру, в каком элементе содержатся слайды
                infinite: true,// Прокручивать бесконечно
                slidesToShow: 1,// Показывать слайдов
                slidesToScroll: 1,// Прокручивать слайдов
                arrows: false,//Стандартные стрелки
                dots: true,// Точки
                autoplay: true,// Автоплей
                autoplaySpeed: 4000,
                fade: false,// Fade or translate
            });
        }
    });



// Мобильный слайдер секции "Примеры работ"

    $( document ).ready(function() {
        if( (document.documentElement.clientWidth >= 320) && (document.documentElement.clientWidth  <=480) ) {

            $('.examples-mobile-slider').slick({// Указываем слайдеру, в каком элементе содержатся слайды
                infinite: true,// Прокручивать бесконечно
                slidesToShow: 1,// Показывать слайдов
                slidesToScroll: 1,// Прокручивать слайдов
                arrows: false,//Стандартные стрелки
                dots: true,// Точки
                autoplay: true,// Автоплей
                autoplaySpeed: 4000,
                fade: false,// Fade or translate
            });
        }
    });




    /*Hamburger Menu*/
    $( document ).ready(function() {
        if( (document.documentElement.clientWidth >= 320) && (document.documentElement.clientWidth  <=480) ) {

            $(".cross").hide();
            $( ".header-menu" ).hide();
            $( ".hamburger" ).click(function() {
                $( ".header-menu" ).slideToggle( "slow", function() {
                    $( ".hamburger" ).hide();
                    $( ".cross" ).show();
                });
            });

            $(".cross").click(function() {
                $( ".header-menu" ).slideToggle( "slow", function() {
                    $( ".cross" ).hide();
                    $( ".hamburger" ).show();
                });
            });
        }

    });




// SCROLL TO

    $(document).ready(function() {

        $(".header-link-toys").on("click", function(e) {
            e.preventDefault(); //Отменяет действие для клика по ссылке по умолчанию

            var scrollOffset = $(".examples").offset().top; //Вычисляет расстояние в пикселах от верха страницы до элемента с id = "scroll-here"

            $("html, body").animate({
                scrollTop: scrollOffset
            }, 1333); //Создает прокрутку блоков html и body на значение переменной scrollOffset за время в 1200 миллисекунд. И html, и body указаны для кроссбраузерности. Только с body работает в Хроме, но не в Файрфокс. Только с html работает в Файрфокс, но не работает в Хроме.
        });

        $(".header-link-feedback").on("click", function(e) {
            e.preventDefault(); //Отменяет действие для клика по ссылке по умолчанию

            var scrollOffset = $(".feedback").offset().top; //Вычисляет расстояние в пикселах от верха страницы до элемента с id = "scroll-here"

            $("html, body").animate({
                scrollTop: scrollOffset
            }, 1333); //Создает прокрутку блоков html и body на значение переменной scrollOffset за время в 1200 миллисекунд. И html, и body указаны для кроссбраузерности. Только с body работает в Хроме, но не в Файрфокс. Только с html работает в Файрфокс, но не работает в Хроме.
        });

        $(".header-link-about").on("click", function(e) {
            e.preventDefault(); //Отменяет действие для клика по ссылке по умолчанию

            var scrollOffset = $(".about").offset().top; //Вычисляет расстояние в пикселах от верха страницы до элемента с id = "scroll-here"

            $("html, body").animate({
                scrollTop: scrollOffset
            }, 1333); //Создает прокрутку блоков html и body на значение переменной scrollOffset за время в 1200 миллисекунд. И html, и body указаны для кроссбраузерности. Только с body работает в Хроме, но не в Файрфокс. Только с html работает в Файрфокс, но не работает в Хроме.
        });

        $(".header-link-faq").on("click", function(e) {
            e.preventDefault();

            var scrollOffset = $(".faq").offset().top;

            $("html, body").animate({
                scrollTop: scrollOffset
            }, 1333);
        });


    });







    // Modals logic

    $(".header-intro-contact-link, .examples-order-btn, .about-contact-btn, .feedback-order-btn").on("click", function(e) {
        e.preventDefault();
        $(".modal-1").css('display', 'block');
    });

    $('.modal-1-cancel').on("click", function(e) {
        e.preventDefault();
        $(".modal-1").css('display', 'none');
    });


    $(".modal-2-btn").on("click", function() {
        $('.modals').hide();
    });









//Forms Sending Data



    $(function() {

        // Get the form.
        var form = $('.mobile-order-form');

        // Get the messages div.
        // var formMessages = $('.mobile-form-messages');

        // Set up an event listener for the contact form.
        $(form).submit(function(e) {
            // Stop the browser from submitting the form.
            e.preventDefault();

            // Serialize the form data.
            var formData = $(form).serialize();

            // Submit the form using AJAX.
            $.ajax({
                type: 'POST',
                url: $(form).attr('action'),
                data: formData
            })
                .done(function(response) {
                    // Make sure that the formMessages div has the 'success' class.
                    // $(formMessages).removeClass('error');
                    // $(formMessages).addClass('success');

                    // Set the message text.
                    console.log(response);

                    // Clear the form.
                    $('input').val('');
                    $(".modal-2").css('display', 'block');
                })
                .fail(function(data) {
                    // Make sure that the formMessages div has the 'error' class.
                    // $(form).removeClass('success');
                    // $(form).addClass('error');

                    // Set the message text.
                    if (data.responseText !== '') {
                        console.log(data.responseText);
                    } else {
                        console.log('Oops! An error occured and your message could not be sent.');
                    }


                });

                // .fail(function(data) {
                //     // Make sure that the formMessages div has the 'error' class.
                //     // $(form).removeClass('success');
                //     // $(form).addClass('error');
                //
                //     // Set the message text.
                //     if (data.responseText !== '') {
                //         console.log(data.responseText);
                //     } else {
                //         console.log('Oops! An error occured and your message could not be sent.');
                //     }
                // });

        });

    });





    $(function() {

        // Get the form.
        var form = $('.modal-order-form');

        // Get the messages div.
        // var formMessages = $('.mobile-form-messages');

        // Set up an event listener for the contact form.
        $(form).submit(function(e) {
            // Stop the browser from submitting the form.
            e.preventDefault();

            // Serialize the form data.
            var formData = $(form).serialize();

            // Submit the form using AJAX.
            $.ajax({
                type: 'POST',
                url: $(form).attr('action'),
                data: formData
            })
                .done(function(response) {
                    // Make sure that the formMessages div has the 'success' class.
                    // $(formMessages).removeClass('error');
                    // $(formMessages).addClass('success');

                    // Set the message text.
                    console.log(response);

                    // Clear the form.
                    $('input').val('');
                    $(".modal-1").css('display', 'none');
                    $(".modal-2").css('display', 'block');
                })
                .fail(function(data) {
                    // Make sure that the formMessages div has the 'error' class.
                    // $(form).removeClass('success');
                    // $(form).addClass('error');

                    // Set the message text.
                    if (data.responseText !== '') {
                        console.log(data.responseText);
                    } else {
                        console.log('Oops! An error occured and your message could not be sent.');
                    }
                });

        });

    });







    // $(function() {
    //
    //     // Get the form.
    //     var form = $('.modal-order-form');
    //
    //     // Get the messages div.
    //     // var formMessages = $('.modal-form-messages');
    //
    //     // Set up an event listener for the contact form.
    //     $(form).submit(function(e) {
    //         // Stop the browser from submitting the form.
    //         e.preventDefault();
    //
    //         // Serialize the form data.
    //         var formData = $(form).serialize();
    //
    //         // Submit the form using AJAX.
    //         $.ajax({
    //             type: 'POST',
    //             url: $(form).attr('action'),
    //             data: formData
    //         })
    //             .done(function(response) {
    //                 // Make sure that the formMessages div has the 'success' class.
    //                 $('.modal-1').hide();
    //                 $('.modal-2').show();
    //
    //                 //$("input").val("");
    //             })
    //             .fail(function() {
    //                 console.log('error');
    //             });
    //     });
    // });
    //
    //
    //
    // $(function() {
    //
    //     // Get the form.
    //     var form = $('.mobile-order-form');
    //
    //     // Get the messages div.
    //     // var formMessages = $('.modal-form-messages');
    //
    //     // Set up an event listener for the contact form.
    //     $(form).submit(function(e) {
    //         // Stop the browser from submitting the form.
    //         e.preventDefault();
    //
    //         // Serialize the form data.
    //         var formData = $(form).serialize();
    //
    //         // Submit the form using AJAX.
    //         $.ajax({
    //             type: 'POST',
    //             url: $(form).attr('action'),
    //             data: formData
    //         })
    //             .done(function(response) {
    //                 // Make sure that the formMessages div has the 'success' class.
    //                 $('.modal-1').hide();
    //                 $('.modal-2').show();
    //
    //                 //$("input").val("");
    //             })
    //             .fail(function() {
    //                 console.log('error');
    //             })
    //     });
    // });




});

