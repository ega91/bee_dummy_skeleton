"use strict";

// slider dengan JS biasa
var prevButton = document.querySelector('.prev-button');
var nextButton = document.querySelector('.next-button');
var carouselImages = document.querySelector('.carousel');
var carouselImageWidth = carouselImages.clientWidth;
var currentImageIndex = 0;
prevButton.addEventListener('click', function () {
  currentImageIndex = currentImageIndex === 0 ? carouselImages.childElementCount - 1 : currentImageIndex - 1;
  carouselImages.style.transform = "translateX(-".concat(currentImageIndex * carouselImageWidth, "px)");
});
nextButton.addEventListener('click', function () {
  currentImageIndex = currentImageIndex === carouselImages.childElementCount - 1 ? 0 : currentImageIndex + 1;
  carouselImages.style.transform = "translateX(-".concat(currentImageIndex * carouselImageWidth, "px)");
}); // // Splide JS
// import Splide from '@splidejs/splide';
// import { AutoScroll } from '@splidejs/splide-extention-auto-scroll';
// // new Splide( '.splide' ).mount();
// var splide = new Splide('.splide',{
//   type: 'loop',
//   autoplay: true,
//   perPage:  5,
//   gap: '2rem',
//   breakpoints:{
//     1200:{
//       perPage: 3,
//       gap: '.7rem',
//     },
//     800:{
//       perPage: 2,
//       gap: '.7rem',
//     },
//     640:{
//       perPage: 3,
//       gap: '.7rem',
//     },
//   },
// });
// splide.mount();
//# sourceMappingURL=script.dev.js.map
