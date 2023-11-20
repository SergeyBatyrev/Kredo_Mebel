window.onscroll = () => {
    let a = window.scrollX;
    let b = document.querySelector(".menu");
    if (a > 0) {
        b.style.marginLeft = -(a * 2 + 1) + "px";
    } else {
        b.style.marginLeft = "auto";
    }
};

All_Img = document.querySelectorAll("img");
All_Img.forEach((All_Img) => {
    All_Img.setAttribute("draggable", "false");
});

let span = document.querySelector('.slider>span').onclick = function () {
    window.location.assign(
        "https://www.testsitesergey.ru/our_works/");
};
let linkOurWorks = document.querySelectorAll('.slider-bottom');

linkOurWorks.forEach((item) => item.addEventListener('click', function () {
    window.location.assign(
        "https://www.testsitesergey.ru/our_works/");
})
);

// let Search = document.querySelector('.form_search');
// Search.addEventListener("submit", formSearch);
// async function formSearch(event) {
//     event.preventDefault();
//     let elem = Search.elements.search;
//     window.location.assign(
//         `https://www.testsitesergey.ru/Search/SearchPage.php?search=${elem.value.toLowerCase()}`
//     );
//     return false;
//     // event.currentTarget.submit();
//     // elem.value='';
// };






let catBurger = document.querySelector('.catalog_burger');
let buritem = document.querySelectorAll('.burger_item');
let subcat = document.querySelector('.sub_catalog');
let bur_arrow=document.querySelector('.burger_arrow');
let punctCat=document.querySelector('.punct_cat');


function getComputedTranslateX(obj)
{
    if(!window.getComputedStyle) return;
    var style = getComputedStyle(obj),
        transform = style.transform || style.webkitTransform || style.mozTransform;
    var mat = transform.match(/^matrix3d\((.+)\)$/);
    if(mat) return parseFloat(mat[1].split(', ')[13]);
    mat = transform.match(/^matrix\((.+)\)$/);
    return mat ? parseFloat(mat[1].split(', ')[4]) : 0;
}



catBurger.addEventListener("click", () => {

bur_arrow.classList.toggle('bur_arrow2');
    for (let index = 0; index < buritem.length; index++) {
      if(getComputedTranslateX(buritem[index]) === 0){
            buritem[index].style.transform = "translateX(800px)";
        }
        else{
            buritem[index].style.transform = "translateX(0px)";
          
        }
    }
    if (getComputedStyle(subcat).marginLeft === '-800px') {
        subcat.style.marginLeft = '-20px';
        punctCat.innerHTML='назад';
    }
    else {
        subcat.style.marginLeft = '-800px';
        punctCat.innerHTML='Каталог';
    }
});




let burger_lines = document.querySelectorAll('.burger_img_line');
let burger_img = document.querySelector('.burger_img');
let bmi = document.querySelector('.burger_menu_item');
function BurgerShow() {

    burger_lines[0].classList.toggle('burger_img_line_left');
    burger_lines[1].classList.toggle('burger_img_line_right');
    burger_lines[2].classList.toggle('burger_img_line_none');
    burger_img.classList.toggle('burger_img_down');
    // bmi.classList.toggle('block');
    if (bur_arrow.classList.contains('bur_arrow2')) {
        bur_arrow.classList.remove('bur_arrow2');
        punctCat.innerHTML='Каталог';
    }
    if (getComputedStyle(bmi).marginLeft === '-800px') {
        bmi.style.marginLeft = '0px';
    }
    else {
        bmi.style.marginLeft = '-800px';
        subcat.style.marginLeft = '-800px';
        for (let index = 0; index < buritem.length; index++) {
            buritem[index].style.transform = "translateX(0px)";
        }
    }

    if (document.body.style.overflow != 'hidden') {
        ScrollController.disabledScroll();
    }
    else if (document.body.style.overflow == 'hidden') {
        ScrollController.enebledScroll();
    }
    if (subcat.classList.contains('burger_item_sub_translate')) {
        subcat.classList.remove('burger_item_sub_translate');
        for (let index = 0; index < buritem.length; index++) {
            buritem[index].classList.remove('burger_item_translate');

        }
    }
}
burger_img.addEventListener("click", BurgerShow);


let ScrollController = {
    disabledScroll() {
        document.body.style.overflow = `hidden`;
    },
    enebledScroll() {
        document.body.style.overflow = `auto`;
    }
}


let show_button = document.querySelector('.show_button');
let show_info = document.querySelector('.show_info');
let show_img = document.querySelector('.swing');

function as() {
    
    show_info.classList.toggle('show');
    show_img.classList.toggle('shows');

}

show_button.addEventListener("click", as);