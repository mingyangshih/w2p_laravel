let standardLoopImg = document.querySelectorAll('.standardLoopImg');
let standardLoopImgLength = standardLoopImg.length;

var galleryTop = new Swiper('.gallery-top', {
  spaceBetween: 10,
  swiperPerView:1,
  loop: true,
  loopedSlides: standardLoopImgLength, //looped slides should be the same
  effect: 'fade',
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
    type: 'bullets'
  },
  updateOnWindowResize: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: true
  },
  thumbs: {
    swiper: galleryThumbs,
  },
});

var galleryThumbs = new Swiper('.gallery-thumbs', {
  spaceBetween: 10,
  touchRatio: 0.2,
  slidesPerView: 'auto',
  loop: true,
  freeMode: true,
  loopedSlides: standardLoopImgLength, //looped slides should be the same
  slideToClickedSlide: true,
  // watchSlidesVisibility: true,
  centeredSlides: true,
  // watchSlidesProgress: true,
});