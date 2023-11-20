


<!-- СЛАЙДЕР -->
<?php
// $post = get_post( 161 );
// the_field( 'img1', 161 );
$fields = get_fields(161);

?>

<div class="slider">
    <span>Наши работы</span>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            <?php if ($fields):
                foreach ($fields as $name => $value):
                    if (strpos($name, 'img') !== false && $value!='') {
                        ?>
                        <div class="swiper-slide">
                            <div class="swiper-zoom-container slider-bottom">
                                <img src="<?php echo $value ?>" alt="" />
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="swiper-button-next">&rarr;</div>
        <div class="swiper-button-prev">&larr;</div>
        <div class="swiper-pagination swiper-pagination-fraction"></div>
    </div>
</div>