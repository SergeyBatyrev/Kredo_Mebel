


let Index1 = 5;

let CatalogContainer = document.querySelector('.swiper-wrapper');



var swiper2 = new Swiper(".swiper1", {
    watchSlidesProgress: true,
    slidesPerView: 1,
    // initialSlide: Index1,
    preventInteractionOnTransition: true,
    spaceBetween: 10,
    // freeMode:true,
    // loop: true,
    speed: 600,
    pagination: {
        el: ".swiper-pagination-fraction",
        clickable: true,
        type: "fraction",
        renderFraction: function (currentClass, totalClass) {
            return (
                'фото <span style="font-size:22px;" class="' +
                currentClass +
                '"></span>' +
                " из " +
                '<span style="font-size:22px" class="' +
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

});




let ContainerCover = document.querySelector('.catalog_cover_slider');
let ButtonClose = document.querySelector('.ButtonClose');
ButtonClose.onclick = function close() {
    ContainerCover.style.display = 'none';
    document.body.style.overflow = "";
};

let ImgCarts = document.querySelectorAll('.catalog_card_album');
ImgCarts.forEach((item, index) => item.addEventListener('click', function () {
    ContainerCover.style.display = 'flex'; document.body.style.overflow = "hidden"; Index1 = this.id; swiper2.update();swiper2.update(); swiper2.slideTo(Index1, 10)


})
);




