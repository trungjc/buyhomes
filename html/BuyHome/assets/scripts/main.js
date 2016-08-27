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