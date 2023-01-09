var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 1,
    loop: true,
    centerSlide: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        0:{
            slidesPerView: 1,
            // spaceBetween: 200,
        },
        450:{
            slidesPerView: 2,
        },
        950:{
            slidesPerView: 3,
        },
    }
  });
