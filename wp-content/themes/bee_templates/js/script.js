// slider dengan JS biasa
const prevButton = document.querySelector('.prev-button');
const nextButton = document.querySelector('.next-button');
const carouselImages = document.querySelector('.carousel');
const carouselImageWidth = carouselImages.clientWidth;

let currentImageIndex = 0;

prevButton.addEventListener('click', () => {
  currentImageIndex = (currentImageIndex === 0) ? carouselImages.childElementCount - 1 : currentImageIndex - 1;
  carouselImages.style.transform = `translateX(-${currentImageIndex * carouselImageWidth}px)`;
});

nextButton.addEventListener('click', () => {
  currentImageIndex = (currentImageIndex === carouselImages.childElementCount - 1) ? 0 : currentImageIndex + 1;
  carouselImages.style.transform = `translateX(-${currentImageIndex * carouselImageWidth}px)`;
});

// // Splide JS

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