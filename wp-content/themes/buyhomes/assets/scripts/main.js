var buyHome = buyHome || {};
buyHome.common = {
    autoResizeImage: function () {
        $('.auto-size').each(function () {
            $(this).css('height', $(this).height());
            $(this).css('background-image', 'url(' + $(this).find('img').attr('src') + ')');
            $(this).find('img').hide();

        })
    }
}
$(window).on('load', function () {
    buyHome.common.autoResizeImage();
});
//init function
$(function () {

            $('.navbar-nav li.parent-menu').hover(function() {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
            }, function() {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
            });
            $('.navbar-nav li.parent-menu').on('click', function() {
                var $el = $(this);
                //if ($el.hasClass('open')) {
                    var $a = $el.children('a.dropdown-toggle');
                    if ($a.length && $a.attr('href')) {
                        location.href = $a.attr('href');
                    }
                //}
            });
    //slick top
    $('.slick-top').slick({
        infinite: false,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 5,
        settings: "unslick",
        responsive: [
          {
              breakpoint: 1024,
              settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3,
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
    //slick list house
    $('#list-house').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        arrows: false,
        settings: "unslick",
        responsive: [
          {
              breakpoint: 1024,
              settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3,
              }
          },
          {
              breakpoint: 767,
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
        ]
    });
    //call scroll
    $("#most-view").mCustomScrollbar({ theme: "dark-thick" });



})