$(document).ready(() => {

  function resizeTextSlider() {
    new Swiper('.swiper-text', {
      spaceBetween: 20,
      grabCursor: true,
      slidesPerView: 'auto',
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        1023: {
          grabCursor: false,
          allowTouchMove: false,
          slidesPerView: '2',
        },
      },
    });
  }
  if ($(window).width() <= 1023) {
    resizeTextSlider();
  }

  function resizeImgSlider() {
    new Swiper('.swiper-picture', {
      spaceBetween: 0,
      slideToClickedSlide: false,
      grabCursor: true,
      slidesPerView: 'auto',
      loop: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        1024: { // when window width is >= 1024px
          spaceBetween: 60,
          slideToClickedSlide: true,
          centeredSlides: true,
        },
        1400: {
          spaceBetween: 160,
          slidesOffsetBefore: 75,
          slideToClickedSlide: true,
          centeredSlides: true,
        },
        1680: {
          spaceBetween: 0,
          centeredSlides: true,
          slideToClickedSlide: true,
        },
      },
    });
  };
  resizeImgSlider();
  $(window).resize(() => {
    resizeTextSlider();
    resizeImgSlider();
  });

  let nextSlide;

  const nextButton = document.querySelector('.swiper-button-next');

  function getSliderElem() {
    nextSlide = document.querySelector('.swiper-slide-next');
  }
  function sliderHover() {
    nextSlide.onmouseenter = function () {
      nextButton.style.opacity = '0.35';
    };
    nextSlide.onmouseleave = function () {
      nextButton.style.opacity = '1';
    };
    nextButton.onmouseenter = function () {
      nextButton.style.opacity = '0.35';
    };
    nextButton.onmouseleave = function () {
      nextButton.style.opacity = '1';
    };
  }
  getSliderElem();
  sliderHover();
  nextButton.addEventListener('click', function () {
    getSliderElem();
    sliderHover();
  });
});
