// This file is meant to add functionality for the post slider carousel

$(document).ready(function()
 {
    $('.menu-toggle').on('click', function() 
    {
        $('.nav').toggleClass('showing');
        $('.nav ul').toggleClass('showing');
    });
     $('.post-wrapper').slick({    //   This is meant enact autoplay for the carousel
        slidesToShow: 3,      
        slidesToScroll:1,           
        autoplay: true,
        autoplaySpeed:2000,
        nextArrow:$('.next'),
        prevArrow:$('.prev'),
        responsive: [   //makes the carousel responsive
            {
              breakpoint: 1024,  //screen sizes. only the slider is responsive
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
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
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            
          ]
        });
        
});
