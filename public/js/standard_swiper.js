let standardLoopImg = document.querySelectorAll('.standardLoopImg');
let standardLoopImgLength = standardLoopImg.length;
let galleryThumbs = new Swiper('.gallery-thumbs', {
  spaceBetween: 10,
  touchRatio: 0.2,
  slidesPerView: 'auto',
  loop: true,
  loopedSlides: standardLoopImgLength, //looped slides should be the same
  slideToClickedSlide: true,
  centeredSlides: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: true
  },
});
let galleryTop = new Swiper('.gallery-top', {
  spaceBetween: 10,
  slidesPerView: 1,
  effect: 'fade',
  loop: false,
  loopedSlides: standardLoopImgLength, //looped slides should be the same
  thumbs: {
    swiper: galleryThumbs,
  },
  autoplay: {
    delay: 3000,
    disableOnInteraction: true
  },
  updateOnWindowResize: true,
});
