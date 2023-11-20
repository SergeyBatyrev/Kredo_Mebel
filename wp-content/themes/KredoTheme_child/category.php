<?php
get_header();
?>

<!-- CATALOG -->
<hr style="height: 1px" />
<span class="catalog_title">
    <?php single_cat_title(''); ?>
</span>
<div class="catalog">

    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>

            <a href='<?php the_permalink() ?>' style="animation: ani 1.5s forwards;"
                class="catalog_card_album visible_at_first">
                <div class="catalog_img1" style="background-image: url(<?php the_post_thumbnail_url('medium_large'); ?>);"></div>
                <div class="card_album_cover">
                    <div class="cover">
                        <div class='title_card'>
                            <?php the_title(); ?>
                        </div>
                    </div>
                    <div class="card_album_cover_detail">&ensp;Подробнее&ensp;</div>
                </div>
            </a>

            <?php
        }
    }
    ?>

</div>
<span class="catalog_title2"><button class="ShowMore">ПОКАЗАТЬ ЕЩЕ</button></span>
<div class="streak"></div>


<?php
$SliderBlock = locate_template('SliderBlock.php');
load_template($SliderBlock);
?>


<script>
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

    // function preventSubmit(e) {
    //     e.preventDefault();
    // }



</script>

<?php
get_footer();
?>