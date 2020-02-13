/*Hamburger Menu*/
$( document ).ready(function() {
  if( (document.documentElement.clientWidth >= 320) && (document.documentElement.clientWidth  <=480) ) {

        $( ".cross" ).hide();
        $( ".header-menu" ).hide();
        $( ".hamburger" ).click(function() {
        $( ".header-menu" ).slideToggle( "slow", function() {
        $( ".hamburger" ).hide();
        $( ".cross" ).show();
        });
        });

        $( ".cross" ).click(function() {
        $( ".header-menu" ).slideToggle( "slow", function() {
        $( ".cross" ).hide();
        $( ".hamburger" ).show();
        });
        });
  }

}); 


// SCROLL TO

$(document).ready(function() {

  $(".menu-link-about").on("click", function(e) {
    e.preventDefault(); //Отменяет действие для клика по ссылке по умолчанию

    var scrollOffset = $(".about").offset().top; //Вычисляет расстояние в пикселах от верха страницы до элемента с id = "scroll-here"

    $("html, body").animate({
      scrollTop: scrollOffset
    }, 1200); //Создает прокрутку блоков html и body на значение переменной scrollOffset за время в 1200 миллисекунд. И html, и body указаны для кроссбраузерности. Только с body работает в Хроме, но не в Файрфокс. Только с html работает в Файрфокс, но не работает в Хроме.
  });

  $(".menu-link-gallery").on("click", function(e) {
    e.preventDefault();

    var scrollOffset = $(".gallery").offset().top;

    $("html, body").animate({
      scrollTop: scrollOffset
    }, 1000);
  });

  $(".menu-link-services").on("click", function(e) {
    e.preventDefault(); //Отменяет действие для клика по ссылке по умолчанию

    var scrollOffset = $(".services").offset().top; //Вычисляет расстояние в пикселах от верха страницы до элемента с id = "scroll-here"

    $("html, body").animate({
      scrollTop: scrollOffset
    }, 1000); //Создает прокрутку блоков html и body на значение переменной scrollOffset за время в 1200 миллисекунд. И html, и body указаны для кроссбраузерности. Только с body работает в Хроме, но не в Файрфокс. Только с html работает в Файрфокс, но не работает в Хроме.
  });

  $(".menu-link-feedback").on("click", function(e) {
    e.preventDefault();

    var scrollOffset = $(".message").offset().top;

    $("html, body").animate({
      scrollTop: scrollOffset
    }, 1000);
  });

  $(".menu-link-contacts").on("click", function(e) {
    e.preventDefault();

    var scrollOffset = $(".footer").offset().top;

    $("html, body").animate({
      scrollTop: scrollOffset
    }, 1000);
  });

  $(".about-order-wrap").on("click", function(e) {
    e.preventDefault();

    var scrollOffset = $(".message").offset().top;

    $("html, body").animate({
      scrollTop: scrollOffset
    }, 1000);
  });

});










/* Slick.js http://kenwheeler.github.io/slick/
    ========================*/

    $('#js-services-slider').slick({// Указываем слайдеру, в каком элементе содержатся слайды
        infinite: true,// Прокручивать бесконечно
        slidesToShow: 4,// Показывать слайдов
        slidesToScroll: 2,// Прокручивать слайдов
        arrows: false,//Стандартные стрелки
        dots: false,// Точки
        autoplay: true,// Автоплей
        autoplaySpeed: 4000,
        fade: false,


        responsive: [
            
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
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



    // Создать стрелки в ручном режиме
    $(".gallery-right").on("click", function() {
        $('#js-services-slider').slick("slickPrev");
    });

    $(".gallery-left").on("click", function() {
        $('#js-services-slider').slick("slickNext");
    });




















    // When the window has finished loading create our google map below
google.maps.event.addDomListener(window, 'load', init);

function init() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
        // How zoomed in you want the map to start at (always required)
        zoom: 10,// Начальный зум карты
        zoomControl: true,// Кнопки + и - для контроля зума
        scrollwheel: false,// Убрать скролл колесиком мышки, чтобы не мешать прокрутке всего документа
        scaleControl: false,
        rotateControl: false,
        panControl: false,
        mapMaker: false,
        disableDefaultUI: true,
        streetViewControl: false, // Иконка человечка для просмотра "Улиц"
        signInControl: false,
        mapTypeControl: false,// Контроль типа карты (спутник, дорожная и т.д.)

        // The latitude and longitude to center the map (always required)
        center: new google.maps.LatLng(40.705311, -74.258188),// Начальная точка центрирования карты( долгота и широта)

        // How you would like to style the map.
        // This is where you would paste any style found on Snazzy Maps.
        styles: [{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"color":"#f7f1df"}]},{"featureType":"landscape.natural","elementType":"geometry","stylers":[{"color":"#d0e3b4"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.medical","elementType":"geometry","stylers":[{"color":"#fbd3da"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#bde6ab"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffe15f"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#efd151"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"black"}]},{"featureType":"transit.station.airport","elementType":"geometry.fill","stylers":[{"color":"#cfb2db"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#a2daf2"}]}]// Стили карты взятые с Snazzy Maps
    };

    // Get the HTML DOM element that will contain your map
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('map');

    // Create the Google Map using our element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);// Инициализация карты с используемым элементом, содержащим карту, и настройками


    var neighborhoods = [
        // Main
        {lat: 40.8618056, lng: -74.397577, title: 'Здесь'},
        
    ];// Параметры для создания кастомных маркеров и контента, всплывающего при клике по маркеру

    /* Info windows
    =========================*/
    infoWindow = new google.maps.InfoWindow();

    function displayMarkers() {

       // this variable sets the map bounds and zoom level according to markers position
       var bounds = new google.maps.LatLngBounds();

       // For loop that runs through the info on markersData making it possible to createMarker function to create the markers
       for (var i = 0; i < neighborhoods.length; i++){

          var latlng = new google.maps.LatLng(neighborhoods[i].lat, neighborhoods[i].lng);
          var name = neighborhoods[i].title;
          var icon = neighborhoods[i].icon;
          var content = neighborhoods[i].content;

          createMarker(latlng, name, content, icon, i * 250);

          // Marker’s Lat. and Lng. values are added to bounds variable
          bounds.extend(latlng);
       }

    }


    function createMarker(latlng, title, content, icon, timeout) {

        window.setTimeout(function() {
           var marker = new google.maps.Marker({
              map: map,
              position: latlng,
              clickable: true,
              icon: {
                url: "i/" + icon
              },
              animation: google.maps.Animation.DROP
           });

           google.maps.event.addListener(marker, 'click', function() {
              var infoContent = '<div id="info_container">' +
              '<h3 class="info_title">' + title + '</h3><div>' + content + '</div></div>';

              infoWindow.setContent(infoContent);
              infoWindow.open(map, marker);

           });

        }, timeout);

    }

    displayMarkers();





    // Enable scroll zoom after click on map
    map.addListener('click', function() {
       map.setOptions({
           scrollwheel: true
       });
    });


    // Enable scroll zoom after drag on map
    map.addListener('drag', function() {
       map.setOptions({
           scrollwheel: true
       });
    });


    // Disable scroll zoom when mouse leave map
    map.addListener('mouseout', function() {
       map.setOptions({
           scrollwheel: false
       });
    });


    /* Map center on resize
    =========================*/
    var getCen = map.getCenter();

    google.maps.event.addDomListener(window, 'resize', function() {
        map.setCenter(getCen);
    });



}