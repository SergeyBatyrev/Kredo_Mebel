let catalogContainer = document.querySelector('.catalog');




let item = 12;
let showMore = document.querySelector(".ShowMore");
let productLenght = document.querySelectorAll('.catalog_card_album').length;


// если товаров на странице меньше 12 кнопка показать еще не доступна


if (productLenght < 12) {
    showMore.style.display = 'none';
};

// если товаров на странице больше 12 кнопка показать еще доступна


for (i = 0; i < 12; i++) {
    document.querySelector('.catalog').children[i].classList.add('visible');
}

const array = Array.from(document.querySelector('.catalog').children);
showMore.addEventListener('click', () => {
    item += 12;
    const visItems = array.slice(0, item);
    visItems.forEach(el => el.classList.add('visible'));

    if (visItems.length === productLenght) {
        showMore.style.display = 'none';
    }

});

function preventSubmit(e) {
    e.preventDefault();
}

