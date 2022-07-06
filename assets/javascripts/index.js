$('.carousel').carousel({
    interval: 2000
})

$(document).ready(function(){


  $("#slider1").sliderResponsive({
        // Using default everything
          // slidePause: 5000,
          // fadeSpeed: 800,
          // autoPlay: "on",
          // showArrows: "off", 
          // hideDots: "off", 
          // hoverZoom: "on", 
          // titleBarTop: "off"
        });
        
        
    $('.items').slick({
    dots: true,
    infinite: true,
    speed: 800,
    autoplay: true,
    autoplaySpeed: 2000,
    slidesToShow: 8,
    slidesToScroll: 8,
    responsive: [
    {
    breakpoint: 1024,
    settings: {
    slidesToShow: 6,
    slidesToScroll: 6,
    infinite: true,
    dots: true
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
    slidesToShow: 2,
    slidesToScroll: 2
    }
    }

    ]
    });
});