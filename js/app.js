var navbar = document.querySelector('.navbar');
window.addEventListener('scroll', function(){
  navbar.classList.toggle('sticky', window.scrollY > 0);
});


$(document).ready(function () {
  // HEADER SLIDER
  $("#header-slider").owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    items: 1,
    smartSpeed: 1000,
    dots: false,
    // autoplay: true,
    // autoplayTimeout: 5000,
    // autoplayHoverPause: false,
    responsive: {
      0: {
        nav: false,
      },
      768: {
        nav: true,
      },
    },
  });
  // INTRO-BOX-IMG

  $("#box-slider").owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    dots: false,
    smartSpeed: 800,
    autoplay: false,
    autoplayTimeout: 5000,
    autoplayHoverPause: false,
    responsive: {
      0: {
        items: 1,
        nav: false,
      },
      768: {
        items: 2,
        nav: true,
        margin: 10,
      },
      1140: {
        items: 2,
        center: true,
      },
    },
  });
  // CLIENT REVIEWS

  $("#reviews").owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    items: 1,
    dots: true,
    smartSpeed: 2000,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: false,
  });
});


// $('.owl-carousel').owlCarousel({
//   loop:true,
//   margin:10,
//   nav:true,
//   responsive:{
//       0:{
//           items:1
//       },
//       600:{
//           items:3
//       },
//       1000:{
//           items:5
//       }
//   }
// })
