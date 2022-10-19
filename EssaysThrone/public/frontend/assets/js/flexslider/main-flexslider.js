
     $(document).ready(function() {

      $('.weekend, .long-haul, .last-minute').flexslider({
          animation: "slide",
          animationLoop: false,
          controlNav: false,
          slideshowSpeed: 50000,
          itemWidth: 250,
          itemMargin: 16,
          maxItems: 4
      });


      $('.featured__hotel').flexslider({
          animation: "slide",
          animationLoop: false,
          controlNav: true,
          mousewheel: true,
          slideshowSpeed: 50000,
          itemWidth: 360,
          itemMargin: 16
      });
    
      $('.all_hotels_city1, .all_hotels_city2').flexslider({
          animation: "slide",
          animationLoop: false,
          controlNav: false,
          slideshowSpeed: 50000,
          itemWidth: 260,
          itemMargin: 23,
          maxItems: 4,
          responsiveClass: true,
          responsive:{
              0:{
                  maxItems: 1,
              },
              600:{
                  maxItems: 4,
              },
              1000:{
                  maxItems: 4,
              }
          }
      });

  });
