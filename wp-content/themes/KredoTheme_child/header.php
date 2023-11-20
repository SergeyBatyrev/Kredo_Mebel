<!DOCTYPE html>
<html lang="ru-RU">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Фабрика Кредо — диваны от производителя! Самые низкие цены здесь! Доставка, гарантия, оплата при получении! собственное производство. Угловые диваны. Диваны офисные. Детские диваны. Диваны на заказ. Диван-софа. КРЕДО - Фабрика мягкой мебели (г. Ижевск) 2023 Наше Кредо – Ваш Комфорт!"/>
    <meta name="keywords" content="Кредо, диваны от производителя Ижевск, заказать диван, 
    купить диван Ижевск, мягкая мебель, диваны детские, диваны офисные, диваны прямые, диваны угловые, кровати, софа,крафт, респект прямой угловой, сканди прямой угловой, ленивец угловой, ленивец прямой, ленивец трансформер"/>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <?php wp_site_icon(); ?>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@700&family=Gabriela&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@300&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
    <?php
    if (is_category() || is_single() || is_page() || is_search()) {
        ?>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/styleCatalog.css" />
        <?php
    }
    if (is_single()) { ?>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/CatalogResult.css" />
        <?php
    }
    if (is_page(242)) { ?>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/OurAlbum.css" />
        <?php
    }
    ?>
    <?php
    if (is_page([239, 240])) { ?>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/aboutUS.css" />
        <?php
    }
    ?>
    <?php
    if (is_page(244)) { ?>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/WhereToBuy.css" />
        <?php
    }
    ?>
    <?php
    if (is_page(246)) { ?>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/Contacts.css" />
        <?php
    }
    ?>
    <?php
    if (is_search()) { ?>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/Search.css" />
        <?php
    }
    ?>

    <title>
        <?php echo wp_get_document_title() ?>
    </title>
    
</head>

<body>
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
    <div class="container">
        <div class="content_left">
            <menu class="menu">
                <div class="left_menu_title"><span>Меню</span></div>
                <ul class="left_menu">
                    <li class="left_menu_item">
                        <a class="left_menu_link" href="<?php echo $category_link1 ?>"><img class="left_menu_img"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/leftMenu-icons/pryamoy.png"
                                alt="" />
                            <span>прямые диваны</span></a>
                    </li>
                    <li class="left_menu_item">
                        <a class="left_menu_link" href="<?php echo $category_link2 ?>"><img class="left_menu_img"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/leftMenu-icons/ugol.png"
                                alt="" />
                            <span>угловые диваны</span></a>
                    </li>
                    <li class="left_menu_item">
                        <a class="left_menu_link" href="<?php echo $category_link5 ?>"><img class="left_menu_img"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/leftMenu-icons/citchen.png"
                                alt="" />
                            <span>кухонные уголки</span></a>
                    </li>
                    <li class="left_menu_item">
                        <a class="left_menu_link" href="<?php echo $category_link4 ?>"><img class="left_menu_img"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/leftMenu-icons/dets.png"
                                alt="" />
                            <span>детские диваны</span></a>
                    </li>
                    <li class="left_menu_item">
                        <a class="left_menu_link" href="<?php echo $category_link7 ?>"><img class="left_menu_img"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/leftMenu-icons/ofiss.png"
                                alt="" />
                            <span>диваны офисные</span></a>
                    </li>
                    <li class="left_menu_item">
                        <a class="left_menu_link" href="<?php echo $category_link8 ?>"><img class="left_menu_img"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/leftMenu-icons/nazakaz.png"
                                alt="" />
                            <span>диваны на заказ</span></a>
                    </li>
                    <li class="left_menu_item">
                        <a class="left_menu_link" href="<?php echo $category_link9 ?>"><img class="left_menu_img"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/leftMenu-icons/new.png" alt="" />
                            <span>новинки</span></a>
                    </li>
                    <li class="left_menu_item">
                        <a class="left_menu_link" href="<?php echo $category_link3 ?>"><img class="left_menu_img"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/leftMenu-icons/krovat.png"
                                alt="" />
                            <span>кровати</span></a>
                    </li>
                    <li class="left_menu_item">
                        <a class="left_menu_link" href="<?php echo $category_link6 ?>"><img class="left_menu_img"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/leftMenu-icons/taxta.png"
                                alt="" />
                            <span>тахта</span></a>
                    </li>
                </ul>
            </menu>
        </div>
        <div class="content_right">
            <header class="header">
                <a href="<?php echo get_home_url() ?>" class="header_logo">
                    <img class="logo" src=" <?php
                    // получаем ссылку на логотип
                    $custom_logo__url = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full');
                    // выводим
                    echo $custom_logo__url[0];
                    ?>" alt="логотип кредо мебель" />
                    <h1 class="title">
                        КРЕДО
                        <p class="subtitle">фабрика мягкой мебели</p>
                    </h1>
                </a>
                <hr />
                <nav class="nav_top">
                    <ul class="nav_top_links">
                        <li style="position: relative" class="nav_item">
                            <a data-title="Каталог" href="<?php echo get_home_url() ?>" class="nav_link">Каталог</a>
                            <ul class="nav_link_catalog_items">
                                <li><a href="<?php echo $category_link1 ?>">диваны прямые</a></li>
                                <li><a href="<?php echo $category_link2 ?>">диваны угловые</a></li>
                                <li><a href="<?php echo $category_link4 ?>">диваны детские</a></li>
                                <li><a href="<?php echo $category_link7 ?>">диваны офисные</a></li>
                                <li><a href="<?php echo $category_link8 ?>">диваны на заказ</a></li>
                                <li><a href="<?php echo $category_link5 ?>">кухонные уголки</a> </li>
                                <li><a href="<?php echo $category_link3 ?>">кровати</a></li>
                                <li><a href="<?php echo $category_link9 ?>">новинки</a></li>
                                <li><a href="<?php echo $category_link6 ?>">тахта</a></li>
                            </ul>
                        </li>
                        <li class="nav_item">
                            <a data-title="О нас" href="<?php echo get_page_link(239); ?>" class="nav_link">О нас</a>
                        </li>
                        <li class="nav_item">
                            <a data-title="Партнерам" href="<?php echo get_page_link(240); ?>"
                                class="nav_link">Партнерам</a>
                        </li>
                        <li class="nav_item">
                            <a data-title="Наши работы" href="<?php echo get_page_link(242); ?>" class="nav_link">Наши
                                работы</a>
                        </li>
                        <li class="nav_item">
                            <a data-title="Где купить" href="<?php echo get_page_link(244); ?>" class="nav_link">Где
                                купить</a>
                        </li>
                        <li class="nav_item">
                            <a data-title="Контакты" href="<?php echo get_page_link(246); ?>"
                                class="nav_link">Контакты</a>
                        </li>
                        <li class="nav_item">
                            <a data-title="Отзывы" href="<?php echo get_page_link(248); ?>" class="nav_link">Отзывы</a>
                        </li>
                    </ul>
                </nav>
                <hr />

                <ul class="header_contact_top">
                    <li class="header_top_link">
                        <menu class="burger_menu">
                            <nav class="burger_menu_nav">
                                <div class="burger_img">
                                    <div style="margin-top: 0" class="burger_img_line"></div>
                                    <div class="burger_img_line"></div>
                                    <div style="margin-bottom: 0" class="burger_img_line"></div>
                                </div>
                                <ul class="burger_menu_item">
                                    <li class="catalog_burger">
                                        <span class="punct_cat">Каталог</span>
                                        <img class="burger_arrow" style="
                          display: inline-block;
                          transform: rotate(-90deg);
                          padding-right: 4px;
                        " src="<?php echo get_stylesheet_directory_uri(); ?>/img/chevron.png" alt="" width="20px" />
                                        <ul class="sub_catalog">
                                            <!-- <li class="sub_catalog_item button_back">назад</li> -->
                                            <li class="sub_catalog_item">
                                                <a href="<?php echo $category_link1 ?>">диваны прямые</a>
                                            </li>
                                            <li class="sub_catalog_item">
                                                <a href="<?php echo $category_link2 ?>">диваны угловые</a>
                                            </li>
                                            <li class="sub_catalog_item"><a href="<?php echo $category_link4 ?>">диваны
                                                    детские</a></li>
                                            <li class="sub_catalog_item">
                                                <a href="<?php echo $category_link7 ?>">диваны офисные</a>
                                            </li>
                                            <li class="sub_catalog_item">
                                                <a href="<?php echo $category_link8 ?>">диваны на заказ</a>
                                            </li>
                                            <li class="sub_catalog_item"><a
                                                    href="<?php echo $category_link5 ?>">кухонные уголки</a></li>
                                            <li class="sub_catalog_item">
                                                <a href="<?php echo $category_link3 ?>">кровати</a>
                                            </li>
                                            <li class="sub_catalog_item">
                                                <a href="<?php echo $category_link9 ?>">новинки</a>
                                            </li>
                                            <li class="sub_catalog_item"><a
                                                    href="<?php echo $category_link6 ?>">тахта</a></li>
                                        </ul>
                                    </li>
                                    <li class="burger_item"><a href="<?php echo get_page_link(239); ?>">О нас</a></li>
                                    <li class="burger_item"><a href="<?php echo get_page_link(240); ?>">Партнерам</a>
                                    </li>
                                    <li class="burger_item"><a href=".<?php echo get_page_link(242); ?>">Наши работы</a>
                                    </li>
                                    <li class="burger_item"><a href="<?php echo get_page_link(244); ?>">Где купить</a>
                                    </li>
                                    <li class="burger_item"><a href="<?php echo get_page_link(246); ?>">Контакты</a>
                                    </li>
                                    <li class="burger_item"><a href="<?php echo get_page_link(248); ?>">Отзывы</a></li>
                                </ul>
                            </nav>
                        </menu>
                        <a class="header_link_mail" href="mailto:kredomebel@mail.ru">
                            <span>kredomebel@list.ru</span>
                        </a>
                    </li>
                    <li class="header_top_link">
                        <div class="header_link_Search">
                            <?php get_search_form(); ?>
                        </div>
                    </li>
                    <li class="header_top_link header_top_link_social">
                        <a class="header_top_vk" href="https://vk.com/kredo_mebel"
                            target="_blank"><span>kredo_mebel</span></a>
                        <a class="header_top_instagram" href="https://www.instagram.com/kredo_mebel/"
                            target="_blank"><span>kredo_mebel</span></a>
                    </li>
                </ul>
            </header>
            <?php

            ?>