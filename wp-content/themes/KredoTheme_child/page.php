<?php
get_header();
?>


<?php
if (is_page(242)) { 
    $fields = get_fields(get_the_ID());
   

?>


    <div class="catalog_cover_slider">
        <span class="ButtonClose"></span>
        <div class="slider">
            <div class="swiper1 mySwiper">
                <div class="swiper-button-next">&rarr;</div>
                <div class="swiper-button-prev">&larr;</div>
                <div class="swiper-pagination swiper-pagination-fraction"></div>
                <div class="swiper-wrapper">


<?php 
               
                    if ($fields):
                        foreach ($fields as $name => $value):


                            if (strpos($name, 'img') !== false && $value != '') {
                                ?>

                                
                <div class="swiper-slide">
            <div class="swiper-zoom-container lengthImg">
              <img src="<?php echo $value?>" alt="" />
            </div>
          </div>

                                <?php
                            }
                            ?>



                        <?php endforeach; ?>
                    <?php endif; ?>












                </div>
            </div>
        </div>
    </div>




    <hr style="height: 1px" />
    <span class="catalog_title">ДИВАНЫ В ИНТЕРЬЕРАХ НАШИХ ПОКУПАТЕЛЕЙ</span>
    <div class="catalog ClientCatalog">




    <?php 
               
                    if ($fields):
                        $ID_IN=0;
                        foreach ($fields as $name => $value):


                            if (strpos($name, 'img') !== false && $value != '') {
                                ?>

                                
<img class="catalog_card_album" id="<?php echo $ID_IN?>"  src='<?php echo $value?>' 
        style="transition: 0.2s linear;opacity: 0; animation: ani 1.5s forwards;">
        <?php 
        $ID_IN++;
        ?>

                                <?php
                            }
                            ?>



                        <?php endforeach; ?>
                    <?php endif; ?>









    




    </div>
    <span class="catalog_title2"><button class="ShowMore">ПОКАЗАТЬ ЕЩЕ</button></span>
    <div class="streak"></div>

    <?php
}
if(is_page(244)){?>



<hr style="height: 1px" />
        <div class="catalog">
          <span class="catalog_title">Где купить</span>
          <div class="ContactAdress_block">
            <span>Адреса фирменных салонов:</span>
            <p>
              <span>Ижевск, ул. Молодежная 107Б, ТЦ «АЗБУКА РЕМОНТА» 3 этаж, отдел
                Фабрика Мягкой Мебели «КРЕДО»</span>
              (Ежедневно с 10:00 до 21:00) тел: 8 (905) 856-65-69
              <span>Ижевск, ул. Удмуртская, 302а ТЦ «Мебельград», 2 этаж. </span
              >(Ежедневно с 10:00 до 21:00) тел: 8 (905) 856-65-69
              <span>Ижевск, ул. Баранова, 23б Склад </span>(По будням с 8:00 до
              17:00) тел: 8 (905) 258-63-63
            </p>
            <ul>
              <span>Адреса салонов реализаторов:</span>
              <li>Удмуртская Республика, с. Дебесы, ул. Андронова 18В</li>
              <li>Республика Башкортостан г. Бирск, ул. Мира 143 торговый комплекс«БИРСК»</li>
              <li>Удмуртская Республика, г. Глазов, ул. Сибирская 71 тц «Атлантик» 1 этаж</li>
              <li>Кировская область, пгт. Тужа, ул. горького 14 тц «Электромир»</li>
              <li>Удмуртская республика, г. Можга, ул. Наговицина 82. ТЦ «Ермак»</li>
              <li>Республика Татарстан, г. Заинск Республика Коми г. Ухта, ул.Семяшкина д. 8, м-н «Мебель»</li>
              <li>Республика Башкортостан, г. Нефтекамск, ул. Геологическая д23</li>
              <li>Удмуртская Республика, г. Воткинск, ул. Советская 80 «МаксМебель»</li>
              <li>Удмуртская Республика, г. Сарапул, ул. Дубровская 61</li>
              <li>Пермский Край, г. Куеда, ул. Школьная д 8. магазин «УЮТ»</li>
              <li>Республика Марий Эл, г. Йошкар ола, ул. подольских курсантов 4</li>
              <li>Республика Татарстан, г.Альметьевск , проспект Изаила Зарипова 23а</li>
              <li>Республика Татарстан, г. Набережные челны, Альметьевский тракт 38, тц «Заря»</li>
              <li>Республика Татарстан, г. Набережные челны, ул.Машиностроительная 75, тц «Мегастрой»</li>
              <li>Республика Татарстан, г. Набережные челны, Сармановский тракт, 48А тц «Алтын Ай»</li>
              <li>Пермский край. г. Соликамск, ул. Всеобуча 80 ТЦ «Космос»</li>
              <li>Пермский край, г. Чайковский, ул. Советская 2/10 тц «ЦСК»</li>
              <li>Тюменская область, г. Лабытнанги, переулок Ленинский 9 м-н «Алекс мебель»</li>
            </ul>
          </div>
          <div class="ContactAdress_map">
         <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A4c369c454f032544cd85efad29f092b70c65eca89188da4ceba84af0f32d7789&amp;source=constructor"  frameborder="0"></iframe>
          </div>
        </div>
        <div class="streak"></div>
<?php
}

if(is_page(246)){?>


<hr style="height: 1px" />
        <div class="catalog">
          <span class="catalog_title">КОНТАКТНАЯ ИНФОРМАЦИЯ</span>
          <div class="Contact_block">
            <div class="contacts_block_left">
              <ul class="contact_top_items">
                <li class="header_top_link header_contact_link link2">
                  <a class="header_link_tel" href="tel:+7(996) 216-85-45"
                    ><span>Тел: +7 (996) 216-85-45</span></a
                  >
                </li>
                <li class="header_top_link header_contact_link">
                  <a class="header_link_tel" href="tel:+7(3412) 24-22-87"
                    ><span>Тел: +7 (3412) 24-22-87</span></a
                  >
                </li>
              </ul>
              <p>Адрес:</p>
              <p>Удмуртская республика,</p>
              <p>город Ижевск, Баранова 26а</p>
              <p>Время работы:</p>
              <p>Пн-Пт — 09:00-18:00</p>
              <p>Сб-Вс — выходной</p>
              <a class="header_link_mail" href="mailto:kredomebel@mail.ru">
                <span>kredomebel@list.ru</span>
              </a>
              <p>Присоединяйтесь в социальных сетях:</p>
              <div class="SocialContacts">
                <div>
                  <a
                    class="header_top_vk"
                    href="https://vk.com/kredo_mebel"
                    target="_blank"
                    ><span>kredo_mebel</span></a
                  >
                </div>
                <div>
                  <a
                    class="header_top_instagram"
                    href="https://www.instagram.com/kredo_mebel/"
                    target="_blank"
                    ><span>kredo_mebel</span></a
                  >
                </div>
              </div>
            </div>
            <div class="contacts_block_right">
              <p>Задайте вопрос:</p>
              <form
                id="form"
                class="contact_message_form"
                action=""
                method="post"
              >
                <label for="name">Имя:*</label>
                <input class="req _name" type="text" name="name" id="name" />
                <label for="email">Email адрес:*</label>
                <input
                  class="req _email"
                  type="email"
                  name="email"
                  id="email"
                />
                <label for="message">Сообщение:*</label>
                <textarea
                  class="req"
                  id="message"
                  name="message"
                  rows="10"
                  wrap="soft"
                  maxlength="280"
                ></textarea>
                <input 
                  type="submit"
                  name="submit"
                  id="submit"
                  value="отправить"
                />
              </form>
            </div>
          </div>
        </div>
        <div class="streak"></div>










<?php
}
else{




the_content();




}




// global $post;
// echo $post->ID;

// the_content();
?>




<?php
$SliderBlock = locate_template('SliderBlock.php');
load_template($SliderBlock);
?>


<?php
get_footer();
?>