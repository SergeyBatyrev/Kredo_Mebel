let ImgSumm = document.querySelectorAll('.swiper-zoom-container2').length;


let mySwiperNav = new Swiper('.image-mini-slider', {
    slidesPerView: ImgSumm,
    spaceBetween: 8,
    loopedSlides: ImgSumm,
    // freeMode: true,
    loop: true,
    speed: 20,
    // direction: 'vertical',
});




var SwiperProduct = new Swiper(".CardSlide", {
    watchSlidesProgress: true,
    slidesPerView: 1,
    preventInteractionOnTransition: true,
    autoHeight: false,
    spaceBetween: 0,
    slidesPerGroup: 1,
    centeredSlides: false,
    initialSlide: 0,
    slidesPerColomn: 1,
    // freeMode:true,
    // loop: true,
    speed: 150,
    thumbs:
    {
        swiper: mySwiperNav,
        // {
        //     el:'.image-mini-slider',
        //     slidesPerView:ImgSumm,
        // }
    },
    // autoplay: {
    //   delay: 1000,
    //   enabled: true,
    //   stopOnLastSlide: false,
    //   disableOnInteraction: false,
    // },
    // pagination: {
    //   el: ".swiper-pagination-fraction",
    //   clickable: true,
    //   type: "fraction",
    //   renderFraction: function (currentClass, totalClass) {
    //     return (
    //       'фото <span style="font-size:18px;" class="' +
    //       currentClass +
    //       '"></span>' +
    //       " из " +
    //       " <span></span> " +
    //       '<span style="font-size:18px;" class="' +
    //       totalClass +
    //       '"></span>'
    //     );
    //   },
    // },

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    grabCursor: true,

    // breakpoints: {
    //   0: {
    //     slidesPerView: 1,
    //     spaceBetween: 20,
    //   },
    //   450: {
    //     slidesPerView: 1,
    //     spaceBetween: 20,
    //   },
    //   700: {
    //     slidesPerView: 2,
    //     spaceBetween: 20,
    //   },
    //   1000: {
    //     slidesPerView: 3,
    //     spaceBetween: 20,
    //   },
    // },
    //     document.querySelector('.swiper-button-prev').onmousedown = (e) =>{

    // },

});
var thumbs2 = document.querySelectorAll('.image-mini-slider .swiper-slide');
thumbs2.forEach(el => el.addEventListener('mouseenter', function () { SwiperProduct.slideTo(el.dataset.swiperSlideIndex, 80) }));











let ImgSumm2 = document.querySelectorAll('.swiper-zoom-container_modal').length;
let mySwiperNavModal = new Swiper('.MiniSlideModal', {
    slidesPerView: ImgSumm2,
    spaceBetween: 8,
    loopedSlides: ImgSumm2,
    // freeMode: true,
    loop: true,
    speed: 20,
    // direction: 'vertical',
});

var SwiperProductModal = new Swiper(".CardSlide_modal", {
    watchSlidesProgress: true,
    slidesPerView: 1,
    preventInteractionOnTransition: true,
    autoHeight: false,
    spaceBetween: 8,
    slidesPerGroup: 1,
    centeredSlides: false,
    initialSlide: 0,
    slidesPerColomn: 1,
    // freeMode:true,
    // loop: true,
    speed: 150,
    thumbs:
    {
        swiper: mySwiperNavModal,
        // {
        //     el:'.image-mini-slider',
        //     slidesPerView:ImgSumm,
        // }
    },
    // autoplay: {
    //   delay: 1000,
    //   enabled: true,
    //   stopOnLastSlide: false,
    //   disableOnInteraction: false,
    // },
    // pagination: {
    //   el: ".swiper-pagination-fraction",
    //   clickable: true,
    //   type: "fraction",
    //   renderFraction: function (currentClass, totalClass) {
    //     return (
    //       'фото <span style="font-size:18px;" class="' +
    //       currentClass +
    //       '"></span>' +
    //       " из " +
    //       " <span></span> " +
    //       '<span style="font-size:18px;" class="' +
    //       totalClass +
    //       '"></span>'
    //     );
    //   },
    // },

    navigation: {
        nextEl: ".next",
        prevEl: ".prev",
    },
    grabCursor: true,
});
var thumbs3 = document.querySelectorAll('.image-mini-slider__slide');
thumbs3.forEach(el => el.addEventListener('mouseenter', function () { SwiperProductModal.slideTo(el.dataset.swiperSlideIndex, 80) }));






let b = document.querySelectorAll('.b');
let ContainerCover = document.querySelector('.Modal_Window');
let ButtonClose = document.querySelector('.ButtonClose');
ButtonClose.onclick = function close() {
    ContainerCover.style.visibility = 'hidden';
    document.body.style.overflow = "";
    b.forEach((item) => item.style.transition = "all 0s ease 0s");
};

let CardsSlide = document.querySelectorAll('.swiper-zoom-container2');
CardsSlide.forEach((item) => item.addEventListener('click', function () {
    ContainerCover.style.visibility = 'visible'; window.scrollTo(0, 0); document.body.style.overflow = "hidden";
    b.forEach((item) => item.style.transition = "all 0.2s ease 0s");
})
);

let CardsSlideMini = document.querySelectorAll('.image-mini-slider__image');
CardsSlideMini.forEach((item, index) => item.addEventListener('click', function () {
    ContainerCover.style.visibility = 'visible';
    window.scrollTo(0, 0); document.body.style.overflow = "hidden";
    SwiperProductModal.update(); SwiperProductModal.slideTo(index, 10);
    b.forEach((item) => item.style.transition = "all 0.2s ease 0s");
})
);