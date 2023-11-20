<?php
// $category_id=get_cat_ID('детские диваны');
$category_link1 = get_category_link(5);
$category_link2 = get_category_link(6);
$category_link3 = get_category_link(7);
$category_link4 = get_category_link(8);
$category_link5 = get_category_link(9);
$category_link6 = get_category_link(10);
$category_link7 = get_category_link(11);
$category_link8 = get_category_link(12);
$category_link9 = get_category_link(13);
?>

<div class="partners">
    <a class="partners_logo" href="https://tkani.egida.ru/" target="_blank"><img
            src="<?php echo get_stylesheet_directory_uri(); ?>/img/partners/egida.png" alt="" /></a>
    <a class="partners_logo" href="https://arben-textile.ru/" target="_blank"><img
            src="<?php echo get_stylesheet_directory_uri(); ?>/img/partners/arben.png" alt="" /></a>
    <a class="partners_logo" href="https://www.souz-m.ru/" target="_blank"><img
            src="<?php echo get_stylesheet_directory_uri(); ?>/img/partners/souz.png" alt="" /></a>
</div>

<!-- FOOTER -->

<footer class="footer">
    <div class="footer_container">
        <div class="footer_slogan footer_item">
            <p class="footer_slogan_title">КРЕДО</p>
            <p class="footer_slogan_subtitle">
                Фабрика мягкой мебели<br />Наше Кредо – Ваш Комфорт!
            </p>
            <p class="footer_slogan_year">(г. Ижевск) © 2023</p>
        </div>
        <div class="footer_left_menu_doble footer_item">
            <a href="<?php echo $category_link1 ?>">диваны прямые</a>
            <a href="<?php echo $category_link2 ?>">диваны угловые</a>
            <a href="<?php echo $category_link4 ?>">диваны детские</a>
            <a href="<?php echo $category_link7 ?>">диваны офисные</a>
            <a href="<?php echo $category_link8 ?>">диваны на заказ</a>
            <a href="<?php echo $category_link5 ?>">кухонные уголки</a>
            <a href="<?php echo $category_link9 ?>">новинки</a>
            <a href="<?php echo $category_link3 ?>">кровати</a>
            <a href="<?php echo $category_link6 ?>">тахта</a>
        </div>
        <div class="footer_top_menu_doble footer_item">
            <a href="<?php echo get_home_url() ?>">каталог</a>
            <a href="<?php echo get_page_link(239); ?>">о нас</a>
            <a href="<?php echo get_page_link(240); ?>">партнерам</a>
            <a href="<?php echo get_page_link(242); ?>">наши работы</a>
            <a href="<?php echo get_page_link(244); ?>">магазины</a>
            <a href="<?php echo get_page_link(246); ?>">контакты</a>
            <a href="<?php echo get_page_link(248); ?>">отзывы</a>
        </div>
        <div class="footer_contacts footer_item">
            <a href="tel:+73412242287">Производство:<br />+7 (3412) 242-287</a><br />
            <a href="tel:+73412365325">ТЦ.Мебельград:<br />+7(3412)365-325</a><br />
            <a href="tel:+73412365325">ТЦ.Азбука ремонта:<br />+7(3412)365-325</a><br />
            <a href="<?php echo get_home_url() ?>" class="btn">на главную</a>
        </div>
    </div>
</footer>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<?php
if (is_single() && !is_page()) { ?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/CatalogProductSlider.js"></script>
    <?php
}
?>
<?php
if (is_page(242)) { ?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/OurCatalogRender.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/RenderSlider.js"></script>
    <?php
}
?>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/Slider.js"></script>
<?php
if (is_page(246)) { ?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/Contacts.js"></script>
    <?php
}
?>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/Standart.js"></script>


</body>

</html>