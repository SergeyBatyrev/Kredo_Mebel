var Swiper = new Swiper(".swiper", {
    watchSlidesProgress: true,
    slidesPerView: 3,
    preventInteractionOnTransition: true,
    spaceBetween: 11,
    // freeMode:true,
    loop: true,
    speed: 600,
    autoplay: {
        delay: 1000,
        enabled: true,
        stopOnLastSlide: false,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination-fraction",
        clickable: true,
        type: "fraction",
        renderFraction: function (currentClass, totalClass) {
            return (
                'фото <span style="font-size:18px;" class="' +
                currentClass +
                '"></span>' +
                " из " +
                " <span></span> " +
                '<span style="font-size:18px;" class="' +
                totalClass +
                '"></span>'
            );
        },
    },

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    grabCursor: true,

    breakpoints: {
        0: {
          slidesPerView: 1,
          spaceBetween: 20,
          autoplay: false,
        },
        320: {
          slidesPerView: 1,
          spaceBetween: 20,
          autoplay: false,
        },
        797: {
          slidesPerView: 2,
          spaceBetween: 20,
          autoplay: {
            delay: 1000,
            enabled: true,
            stopOnLastSlide: false,
            disableOnInteraction: false,
          },
        },
        1049: {
          slidesPerView: 3,
          spaceBetween: 20,
          autoplay: {
            delay: 1000,
            enabled: true,
            stopOnLastSlide: false,
            disableOnInteraction: false,
          },
        },
      },
});