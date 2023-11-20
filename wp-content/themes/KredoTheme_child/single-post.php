<?php
get_header();
?>
<!-- КАРТОЧКА ТОВАРА -->
<hr style="height: 1px" />
<div class="catalog">
    <span class="catalog_title">
        <?php echo get_the_title() ?>
    </span>
    <div class="Product_info">
        <div class="Product_info_Slider">
            <div class=" mySwiper image-slider swiper-container CardSlide ">
                <div class="image-slider__wrapper swiper-wrapper">


                    <?php

                    $fields = get_fields(get_the_ID());
                    if ($fields):
                        foreach ($fields as $name => $value):


                            if (strpos($name, 'slide') !== false && $value != '') {
                                ?>

                                <div class='swiper-slide'>
                                    <div class='swiper-zoom-container swiper-zoom-container2'>
                                        <img src='<?php echo $value ?>' alt=''>
                                    </div>
                                </div>

                                <?php
                            }
                            ?>







                        <?php endforeach; ?>
                    <?php endif; ?>

                </div>

                <div class="swiper-button-next absolute button_card">&rarr;</div>
                <div class="swiper-button-prev absolute ">&larr;</div>
            </div>
            <div class="image-mini-slider swiper-container">
                <div class="image-mini-slider__wrapper swiper-wrapper">

                    <?php
                    if ($fields):
                        foreach ($fields as $name => $value):
                            if (strpos($name, 'slide') !== false && $value != '') {
                                ?>
                                <div class='image-mini-slider__slide swiper-slide a'>
                                    <div class='image-mini-slider__image'>
                                        <img src='<?php echo $value ?>' alt=''>
                                    </div>
                                </div>





                                <?php
                            }
                        endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="Product_info_Description ">
            <p class='Product_info_Transform'>
                <span>Механизм:</span><br>
                <?php echo $file = get_field('mechanism'); ?>
            </p>

            <p class='Product_info_Model'><span>Наполнение:
                </span><br>
                <?php echo $file = get_field('filling'); ?>
            </p>

            <p class='Product_info_Model'><span>Общие габариты дивана:
                </span> <br>
                <?php echo $file = get_field('overall_size'); ?>
            </p>

            <p class='Product_info_Size2'><span>Спальное место:
                </span> <br>
                <?php echo $file = get_field('sleeping_size'); ?>
            </p>

            <p class='Product_info_Model'><span>Подушки дивана:
                </span> <br>
                <?php echo $file = get_field('pillows'); ?>
            </p>

            <p class='Product_info_Model'><span>Бельевой ящик:
                </span> <br>
                <?php echo $file = get_field('box'); ?>
            </p>

            <p class='Product_info_Model'><span>Подлокотники:
                </span> <br>
                <?php echo $file = get_field('armrests'); ?>
            </p>


            <div class='show_button'>
                <div> <strong><span>все характеристики</span></strong></div>
                <div class='swing'>
                    <img src='<?php echo get_stylesheet_directory_uri(); ?>/img/chevron.png' width='20px'>
                </div>
            </div>

            <div class='show_info'>

                <p class='Product_info_Model'><span>Каркас:
                    </span><br>
                    <?php echo $file = get_field('skeleton'); ?>
                </p>


                <p class='Product_info_Size2'><span>Настил:
                    </span> <br>
                    <?php echo $file = get_field('flooring'); ?>
                </p>

                <p class='Product_info_Model'><span>Опоры:
                    </span> <br>
                    <?php echo $file = get_field('supports'); ?>
                </p>

                <p class='Product_info_Size1'><span>Взаимозаменяемый угол :
                    </span> <br>
                    <?php echo $file = get_field('corner'); ?>
                </p>

            </div>






        </div>
    </div>
</div>





<div class="catalog">
    <div class="Modal_Window">
        <span class="ButtonClose"></span>
        <div class="Modal_Window_Slider">
            <div class="swiper-button-next  next">&rarr;</div>
            <div class="swiper-button-prev  prev">&larr;</div>
            <div class=" image-slider swiper-container CardSlide_modal">
                <div class="image-slider__wrapper swiper-wrapper">

                        <?php 
                if ($fields):
                        foreach ($fields as $name => $value):
                            if (strpos($name, 'slide') !== false && $value != '') {
                                ?>
                                <div class='swiper-slide'>
                                            <div class='swiper-zoom-container swiper-zoom-container_modal'>
                                            <img src='<?php echo $value?>' alt=''>
                                            </div>
                                            </div>





                                <?php
                            }
                        endforeach; ?>
                    <?php endif; ?>






                </div>


                <div class="MiniSlideModal swiper-container ">
                                                <div class="image-mini-slider__wrapper swiper-wrapper">
                                                    <?php 
                                                if ($fields):
                        foreach ($fields as $name => $value):
                            if (strpos($name, 'slide') !== false && $value != '') {
                                ?>


                                <div class='image-mini-slider__slide swiper-slide b'>
                                                    <div class='image-mini-slider__image1'>
                                                        <img src='<?php echo $value?>' alt=''>
                                                    </div>
                                                </div>

                                                <?php
                            }
                        endforeach; ?>
                    <?php endif; ?>

                                                </div>
                                                </div>
            </div>
        </div>
    </div>
</div>











<!-- Слайдер -->


<div class="streak"></div>
<?php
$SliderBlock = locate_template('SliderBlock.php');
load_template($SliderBlock);
?>

<?php
get_footer()
    ?>