<?php /* Template Name: main */ ?>
<?php
  get_header();
  while(have_posts()) {
    the_post(); ?>

    <a href="#offers_popup" class="mobile-offers popup" data-effect="mfp-zoom-in">
      <img class="mobile-offers__img-top" data-src="<?php echo bloginfo("template_url"); ?>/img/akciya-heading.svg" alt="Акции ЛЕГОС" title="Акции ЛЕГОС">

      <p class="mobile-offers__title">
        Спецпредложение!<br>
        <span class="text-right">До конца сезона!</span>
      </p>

      <div class="mobile-offers__row-1">
        <img class="mobile-offers__row-1__img" data-src="<?php echo bloginfo("template_url"); ?>/img/akciya-balkony-s-kryshej.svg" alt="Акция на балкон с крышей" title="Акция на балкон с крышей">
        <img class="mobile-offers__row-1__img second-img" data-src="<?php echo bloginfo("template_url"); ?>/img/akciya-balkony-s-vynosom.svg" alt="Акция на балконы с выносом" title="Акция на балконы с выносом">
        <img class="mobile-offers__row-1__img" data-src="<?php echo bloginfo("template_url"); ?>/img/akciya-panoramnyj-balkoni.svg" alt="Акция на понорамные балконы" title="Акция на понорамные балконы">
        <img class="mobile-offers__row-1__img fourth-img" data-src="<?php echo bloginfo("template_url"); ?>/img/akciya-balkony-s-otdelkoj.svg" alt="Акция на балконы с отделлкой" title="Акция на балконы с отделлкой">
      </div>

      <div class="mobile-offers__row-2">
        <img class="mobile-offers__row-2__img" data-src="<?php echo bloginfo("template_url"); ?>/img/akciya-na-balkony.svg" alt="Акция на балконы ЛЕГОС" title="Акция на балконы ЛЕГОС">
      </div>
    </a>

    <a href="#payments_form" class="payments popup" data-effect="mfp-zoom-in"></a>

    <a href="#popup_form" class="banner popup" data-effect="mfp-zoom-in">
      <?php 
        $media = get_attached_media('image');
        $media = array_shift( $media );
        $image_url = $media->guid;
        echo '<img class="banner__img" data-src="'. $image_url .'" />';
      ?>
    </a>

    <div class="okna-price">
      <div class="calculator">
        <h2 class="calculator__h">Выберите и укажите размер окна/двери</h2>
        <div class="calculator__okna">
          <h3 class="calculator__title">Окна:</h3>
          <a href="#calculator-form" class="calculator__options calculator__options--okna popup" data-effect="mfp-zoom-in">
            <img class="calculator__option" data-src="<?php echo bloginfo("template_url"); ?>/img/calculator/okno-conf-1/okno-conf-1-01.png" alt="Одностворчатое поворотно-откидное окно с левым открыванием" title="Одностворчатое поворотно-откидное окно с левым открыванием" data-id="1" data-width="800" data-height="1400">
            <img class="calculator__option" data-src="<?php echo bloginfo("template_url"); ?>/img/calculator/okno-conf-2/okno-conf-2-01.png" alt="Окно с горизонтальным импостом и поворотно-откидной створкой с левым открыванием" title="Окно с горизонтальным импостом и поворотно-откидной створкой с левым открыванием" data-id="2" data-width="800" data-height="1400">
            <img class="calculator__option" data-src="<?php echo bloginfo("template_url"); ?>/img/calculator/okno-conf-3/okno-conf-3-01.png" alt="Окно с импостом, одна поворотно-откидная створка справа с правым открыванием" title="Окно с импостом, одна поворотно-откидная створка справа с правым открыванием" data-id="3" data-width="1400" data-height="1400">
            <img class="calculator__option" data-src="<?php echo bloginfo("template_url"); ?>/img/calculator/okno-conf-4/okno-conf-4-01.png" alt="Т - окно,створка слева с левым открыванием,поворотно-откидная створка справа с правым открыванием" title="Т - окно,створка слева с левым открыванием,поворотно-откидная створка справа с правым открыванием" data-id="4" data-width="1400" data-height="1800">
            <img class="calculator__option" data-src="<?php echo bloginfo("template_url"); ?>/img/calculator/okno-conf-5/okno-conf-5-01.png" alt="Окно с двумя вертикальными импостами,поворотно-откидная створка в центре с правым открыванием" title="Окно с двумя вертикальными импостами,поворотно-откидная створка в центре с правым открыванием" data-id="5" data-width="2000" data-height="1400">
            <img class="calculator__option" data-src="<?php echo bloginfo("template_url"); ?>/img/calculator/okno-conf-6/okno-conf-6-01.png" alt="Окно с двумя вертикальными и одним горизонтальным импостами, поворотно-откидная створка в центре с правым открыванием" title="Окно с двумя вертикальными и одним горизонтальным импостами, поворотно-откидная створка в центре с правым открыванием" data-id="6" data-width="2000" data-height="1800">
          </a>
        </div>
        <div class="calculator__doors">
          <h3 class="calculator__title">Двери:</h3>
          <a href="#calculator-form" class="calculator__options calculator__options--doors popup" data-effect="mfp-zoom-in">
            <img class="calculator__option" data-src="<?php echo bloginfo("template_url"); ?>/img/calculator/door-conf-1/door-conf-1-01.png" alt="Дверь балконная с правым открыванием" title="Дверь балконная с правым открыванием" data-id="7" data-width="700" data-height="2000">
            <img class="calculator__option" data-src="<?php echo bloginfo("template_url"); ?>/img/calculator/door-conf-2/door-conf-2-01.png" alt="Дверь балконная с левым открыванием" title="Дверь балконная с левым открыванием" data-id="8" data-width="650" data-height="200">
            <img class="calculator__option" data-src="<?php echo bloginfo("template_url"); ?>/img/calculator/door-conf-3/door-conf-3-01.png" alt="Балконная дверь с левым открыванием для высоких проемов" title="Балконная дверь с левым открыванием для высоких проемов" data-id="9" data-width="700" data-height="2600">
            <img class="calculator__option" data-src="<?php echo bloginfo("template_url"); ?>/img/calculator/door-conf-4/door-conf-4-01.png" alt="Балконная дверь с правым открыванием для высоких проемов" title="Балконная дверь с правым открыванием для высоких проемов" data-id="10" data-width="650" data-height="2600">
            <img class="calculator__option" data-src="<?php echo bloginfo("template_url"); ?>/img/calculator/door-conf-5/door-conf-5-01.png" alt="Распашные двери" title="Распашные двери" data-id="11" data-width="1400" data-height="2100">
            <img class="calculator__option" data-src="<?php echo bloginfo("template_url"); ?>/img/calculator/door-conf-5/door-conf-5-02.png" alt="Высокая распашная дверь" title="Высокая распашная дверь" data-id="12" data-width="1400" data-height="2600">
            <img class="calculator__option" data-src="<?php echo bloginfo("template_url"); ?>/img/calculator/door-conf-5/door-conf-5-03.png" alt="Распашные двери с сэндвичами" title="Распашные двери с сэндвичами" data-id="13" data-width="1400" data-height="2100">
            <img class="calculator__option" data-src="<?php echo bloginfo("template_url"); ?>/img/calculator/door-conf-5/door-conf-5-04.png" alt="Высокая распашная дверь с сэндвичами" title="Высокая распашная дверь с сэндвичами" data-id="14" data-width="1400" data-height="2600">
          </a>
        </div>
        <div class="calculator__razdvizhka">
          <h3 class="calculator__title">Раздвижка:</h3>
          <a href="#calculator-form" class="calculator__options calculator__options--razdvizhka popup" data-effect="mfp-zoom-in">
            <img class="calculator__option" data-src="<?php echo bloginfo("template_url"); ?>/img/calculator/razdvizhka-01.png" alt="Раздвижное окно 2 створки" title="Раздвижное окно 2 створки" data-id="15" data-width="1400" data-height="1400">
            <img class="calculator__option" data-src="<?php echo bloginfo("template_url"); ?>/img/calculator/razdvizhka-02.png" alt="Раздвижное окно 3 створки" title="Раздвижное окно 3 створки" data-id="16" data-width="2100" data-height="1400">
            <img class="calculator__option" data-src="<?php echo bloginfo("template_url"); ?>/img/calculator/razdvizhka-03.png" alt="Раздвижное окно 4 створки" title="Раздвижное окно 4 створки" data-id="17" data-width="2800" data-height="1400">
            <img class="calculator__option" data-src="<?php echo bloginfo("template_url"); ?>/img/calculator/razdvizhka-04.png" alt="Раздвижная дверь 2 створки" title="Раздвижная дверь 2 створки" data-id="18" data-width="1300" data-height="2100">
          </a>
        </div>
      </div>
      
      <form class="calculator-submit price" onsubmit="ym(14045314, 'reachGoal', 'calculator-form'); return true;">
        <!-- Hidden Required Fields -->
        <input type="hidden" name="project_name" value="oknacheb.ru">
        <input type="hidden" name="admin_email" value="dukaty1013@yandex.ru">
        <input type="hidden" name="form_subject" value="Заявка с главной страницы (калькулятор)">
        <!-- END Hidden Required Fields -->
        <input class="price__type" type="hidden" name="Тип изделия" value="">

        <input class="price__phone phone_input" type="text" name="Телефон" placeholder="+7 (999)-999-99-99" required>
        <button class="button" type="submit">ПОЛУЧИТЬ ЦЕНЫ</button>
        <div class="price__okno">
          <div class="price__params">
            <div class="price__props">
              <div class="input-wrapper">
                <span>Ширина: </span><input class="price__option width" name="Ширина(мм)" value="1400">
              </div>
              <div class="input-wrapper">
                <span>Высота: </span><input class="price__option height" name="Высота(мм)" value="1400">
              </div>
              <div class="input-wrapper">
                <span>Количество: </span><input class="price__option amount" name="Количество(шт)" value="1">
              </div>
            </div>
            <img class="price__img" data-src="<?php echo bloginfo("template_url"); ?>/img/calculator/okno-conf-3/okno-conf-3-01.png" alt="Окно с импостом, одна поворотно-откидная створка справа с правым открыванием" title="Окно с импостом, одна поворотно-откидная створка справа с правым открыванием">
          </div>
          <div class="price__dop">
            <span class="price__title">Дополнительные услуги:</span>
            <div class="price__dop__coontainer">
              <div class="input-wrapper">
                <span>Установка: </span><input class="price__option" name="Установка" value="нет">
              </div>
              <div class="input-wrapper">
                <span>Москитка: </span><input class="price__option" name="Москитка" value="нет">
              </div>
              <div class="input-wrapper">
                <span>Подоконник: </span><input class="price__option" name="Подоконник" value="нет">
              </div>
              <div class="input-wrapper">
                <span>Водоотлив: </span><input class="price__option" name="Водоотлив" value="нет">
              </div>
              <div class="input-wrapper">
                <span>Откосы: </span><input class="price__option" name="Откосы" value="нет">
              </div>
            </div>
          </div>
        </div>
        <a href="#calculator-form" class="price__edit popup" data-effect="mfp-zoom-in" data-id="3" data-width="1400" data-height="1400" data-src="<?php echo bloginfo("template_url"); ?>/img/calculator/okno-conf-3/okno-conf-3-01.png">Изменить параметры</a>
      </form>
    </div>

    <div class="wrapper">
      <div class="col_1">
        <div class="col_1__text">
          <span class="col_1__heading"><b>Лучшее</b> предложение месяца</span>
          <span class="col_1__info">*подробности уточняйте по тел.</span>
        </div>

        <section class="akciya">
          <span class="akcia__h">Окна с энергостеклом "ТорN+" - теплее на 70%</span>

          <div class="akciya__wrapper">
            <div class="akciya__col-1">
              <a href="#offers_popup" class="akciya__img akciya__img--paddings popup" data-effect="mfp-zoom-in">
                <img data-src="<?php echo bloginfo("template_url"); ?>/img/okno-dvuhstvorchatiye.png" alt="Акция на двухстворчатое окно 'Легос'" title="Акция на двухстворчатое окно 'Легос'">
              </a>
            </div>

            <div class="akciya__col-2">
              <a href="#offers_popup" class="akciya__desc popup" data-effect="mfp-zoom-in">
                <span class="akciya__desc__heading"><b>Окно двухстворчатое</b></span>
                <p class="akciya__desc__paragraph">Пятикамерный морозостойкий профиль 70 мм. <br>Энергосберегающий стеклопакет "ТОР N+" с <br>серебряным напылением.<br>Противовзломная фурнитура ESSE. <br>Москитная сетка в подарок! <br>Доставка спецтранспортом по Чебоксарам!</p>

                <div class="prices">
                  <span class="price1">от <span class="price1-upper">4950 </span>руб.</span>

                  <div class="price2">
                    <span class="price2__first_row">в рассрочку на 4 мес.</span>
                    <span class="price2__second_row"><span class="price2-upper">1237</span>руб./мес.</span>
                  </div>
                </div>

                <div class="akciya__desc__info">
                  <span>Стоимость зависит от размеров вашего окна</span>
                </div>
              </a>
            </div>
          </div>

          <div class="form-timer">
            <div class="timer">
              <span class="timer__heading">До конца акции осталось:</span>
              <div class="clock-1">
              </div>
            </div>

            <form class="form" onsubmit="ym(14045314, 'reachGoal', 'okno-form'); return true;">
              <div class="form__wrapper">
                <div class="form__fields">
                  <span class="form__heading">Оставить заявку<br> по акции</span>
                  <!-- Hidden Required Fields -->
                  <input type="hidden" name="project_name" value="oknacheb.ru">
                  <input type="hidden" name="admin_email" value="dukaty1013@yandex.ru">
                  <input type="hidden" name="form_subject" value="Заявка с главной страницы (под окном)">
                  <!-- END Hidden Required Fields -->

                  <input class="form__input" type="text" name="Имя" placeholder="имя" required>
                  <input class="form__input" class="phone_input" type="text" name="Телефон" placeholder="телефон" required>
                  <input class="form__input" type="text" name="Адрес" placeholder="адрес">

                  <button class="button" type="submit">ЗАКАЗАТЬ СЕЙЧАС</button>
                </div>

                <div class="form__desc">
                  <p class="form__desc__p">Оставьте заявку, и наш специалист рассчитает стоимость заказа с учетом всех ваших пожеланий</p>
                  <p class="form__desc__p form__desc__p--mobile">Наш инженер подъедет к вам на адрес, <br>снимет размеры и произведет полный <br>расчет сразу на дому.</p>
                  <span class="form__desc__phone">8 (8352) 38-22-38</span>
                </div>
              </div>
            </form>
          </div>
        </section>

        <section class="swiper_slider2">
          <div class="swiper-container s2">
            <div class="swiper-wrapper">
              <?php
                $homePageGallery = new WP_Query(array(
                  'posts_per_page' => 20,
                  'post_type' => 'home-gallery'
                ));

                while($homePageGallery->have_posts()) {
                  $homePageGallery->the_post(); ?>
                  <div class="swiper-slide">
                    <?php the_content(); ?>
                  </div>
                <?php }
              ?>
            </div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </section>

        <div class="col_1__text">
          <span class="col_1__heading"><b>энергосберегающие </b>балконы</span>
          <span class="col_1__info">*подробности уточняйте по тел.</span>
        </div>

        <section class="akciya">
          <div class="akciya__wrapper">
            <div class="akciya__col-1">
              <a href="#offers_popup" class="akciya__img akciya__img--paddings balkon-img popup" data-effect="mfp-zoom-in">
                <img data-src="<?php echo bloginfo("template_url"); ?>/img/akciya-na-balkon.png" alt="Акция на энергосберегающий балкон 'Легос'" title="Акция на энергосберегающий балкон 'Легос'">
              </a>
            </div>

            <div class="akciya__col-2">
              <a href="#offers_popup" class="akciya__desc popup" data-effect="mfp-zoom-in">
                <span class="akciya__desc__heading"><b>Балкон <span class="upper">с выносом</span></b></span>
                <p class="akciya__desc__paragraph">Утепленные и холодные Эксклюзивные балконы “под ключ”, любой сложности и любых размеров. Изготовление крыш и козырьков с гарантией. Обшив балконов с улицы сайдингом. Отделка балконов внутри.</p>

                <div class="prices">
                  <span class="price1">от <span class="price1-upper">4950 </span>руб.</span>

                  <div class="price2">
                    <span class="price2__first_row">в рассрочку на 4 мес.</span>
                    <span class="price2__second_row"><span class="price2-upper">1237</span>руб./мес.</span>
                  </div>
                </div>

                <div class="akciya__desc__info">
                  <span>Стоимость зависит от размеров вашего окна</span>
                </div>
              </a>
            </div>
          </div>

          <div class="form-timer">
            <div class="timer">
              <span class="timer__heading">До конца акции осталось:</span>
              <div class="clock-2">
              </div>
            </div>

            <form class="form">
              <div class="form__wrapper">
                <div class="form__fields">
                  <span class="form__heading">Оставить заявку<br> по акции</span>
                  <!-- Hidden Required Fields -->
                  <input type="hidden" name="project_name" value="oknacheb.ru">
                  <input type="hidden" name="admin_email" value="dukaty1013@yandex.ru">
                  <input type="hidden" name="form_subject" value="Заявка с главной страницы (под балконом)">
                  <!-- END Hidden Required Fields -->

                  <input class="form__input" type="text" name="Имя" placeholder="имя" required>
                  <input class="form__input" class="phone_input" type="text" name="Телефон" placeholder="телефон" required>
                  <input class="form__input" type="text" name="Адрес" placeholder="адрес">

                  <button id="balkon-submit" class="button" type="submit" onclick="ym(14045314, 'reachGoal', 'balkon-submit'); return true;">ЗАКАЗАТЬ СЕЙЧАС</button>
                </div>

                <div class="form__desc">
                  <p class="form__desc__p">Оставьте заявку, и наш специалист рассчитает стоимость заказа с учетом всех ваших пожеланий</p>
                  <p class="form__desc__p form__desc__p--mobile">Наш инженер подъедет к вам на адрес, <br>снимет размеры и произведет полный <br>расчет сразу на дому.</p>
                  <span class="form__desc__phone">8 (8352) 38-22-38</span>
                </div>
              </div>
            </form>
          </div>
        </section>

        <section class="work_section">
          <span class="work_section__heading">Как мы работаем</span>

          <div class="col_wrapper">
            <div class="col">
              <div class="col__heading">1. Производство</div>
              <img data-src="<?php echo bloginfo("template_url"); ?>/img/making.png" alt="Производство окон компании 'Легос'" title="Производство окон компании 'Легос'">
              <p>Мы работаем исключительно с зарекомендовавшими себя <span class="bold">европейскими</span> поставщиками высокопроизводительного оборудования для эффективного  производства пластиковых окон.</p>
            </div>

            <div class="col">
              <div class="col__heading">2. Склад</div>
              <img data-src="<?php echo bloginfo("template_url"); ?>/img/warehouse.png" alt="Склад компании 'Легос'" title="Склад компании 'Легос'">
              <p>Центральный склад <span class="bold">в центре</span> города для оперативной организации доставки по адресам. Мы работаем с широким спектром профилей, в том числе нестандартных цветов и размеров.</p>
            </div>

            <div class="col">
              <div class="col__heading">4. Доставка</div>
              <img data-src="<?php echo bloginfo("template_url"); ?>/img/deliver.png" alt="Доставка окон компании 'Легос'" title="Доставка окон компании 'Легос'">
              <p><span class="bold">Бесплатная</span> доставка спецтранспортом по городу. Мы привезем Ваши окна в целости и сохранности.</p>
            </div>
          </div>
        </section>
      </div>

      <div class="col_2">
        <div class="about_veka">
          <span class="about_veka__heading">Лидер рынка:</span>

          <div class="veka_content">
            <img data-src="<?php echo bloginfo("template_url"); ?>/img/veka_logo2.png" class="veka_content__img" alt="Логотип компании 'Veka'" title="Логотип компании 'Veka'">
            <p class="veka_content__paragraph">На сегодняшний день <span class="bold">VEKA</span> является одним из <span class="bold">крупнейших в мире</span> производителей пластикового профиля для изготовления оконных и дверных конструкций. В 2004 году компания VEKA стала первой экструзионной компанией в Росссии, получившей <span class="bold">сертификат</span> соответсвия стандарту качества <span class="bold">DIN ISO 9001:2000.</span> В 2006 году VEKA Rus стала ппервой и единственной компнией в России, чья продукция прошла сертификацию на соответствие европейскому знаку <span class="bold">качества RAL</span></p>
            <a href="<?php echo site_url() ?>/okna/" class="veka_content__button blue_button">подробнее...</a>
          </div>
        </div>

        <div class="advantages">
          <span class="advantages__heading dot">Преимущества:</span>

          <div class="advantages_content">
            <div class="advantages_content__row">
              <span class="advantages_content__heading dot"><u>Автоматическая установка энергосберегающего стекла</u></span>
              <p class="advantages_content__p">До 70% теплее. Энергосберегающий стеклопакет избавит Вас от проблем с запотеванием стекла и дополнительным обогревом помещения, сохранив прохладу летом.</p>
            </div>

            <div class="advantages_content__row">
              <span class="advantages_content__heading dot"><u>Противовзломная фурнитура MACO</u></span>
              <p class="advantages_content__p">Противовзломная фурнитура избавит Вас от заклинивания замков и проблем с провисанием петель.</p>
            </div>

            <div class="advantages_content__row">
              <span class="advantages_content__heading dot"><u>Монтаж строго по ГОСТу</u></span>
            </div>
          </div>
        </div>

        <div class="feedback">
          <p class="feedback__p">Нам важно что вы думаете. Если у вас <span class="bold">возникли вопросы,</span> пожелания или недовольства или вы хотите <span class="bold">оставить отзыв</span> пишите сюда! Нам Важны ваши чувства!</p>
          <div class="feedback__wrap">
            <img class="feedback__img" data-src="<?php echo bloginfo("template_url"); ?>/img/lion-02.png" alt="Лев ЛЕГОС" title="Задайте нам вопрос">
            <form class="feedback__form form">
              <!-- Hidden Required Fields -->
              <input type="hidden" name="project_name" value="oknacheb.ru">
              <input type="hidden" name="admin_email" value="dukaty1013@yandex.ru">
              <input type="hidden" name="form_subject" value="Заявка с главной страницы (форма обратной связи)">
              <!-- END Hidden Required Fields -->
              <div class="input-wrap">
                <span class="feedback__input-title">Ваше имя:</span>
                <input type="text" class="feedback__input" placeholder="Имя">
              </div>
              <div class="input-wrap">
                <span class="feedback__input-title">Задайте вопрос:</span>
                <textarea class="feedback__text" name="Сообщение"></textarea>
              </div>
              <button class="feedback__btn button" type="submit">ОТПРАВИТЬ</button>
            </form>
          </div>
        </div>

        <div class="balkony_offer">
          <h4 class="balkony_offer__heading">Раздвижное остекление балконов</h4>
          <img data-src="<?php echo bloginfo("template_url"); ?>/img/akciya-na-okno01.png" alt="Акция на окна 'Легос'" title="Акция на окна 'Легос'">
          <p class="balkony_offer__p"><span class="bold">легко</span> собирается, <span class="bold">быстро</span> устанавливается и очень <span class="bold">эффектно</span> смотрится. Применение специально разработанных профилей делает раздвижное остекление черезвычайно <span class="bold">привлекательным</span> как для массового, так и для индивидуального строительства</p>
          <a href="<?php echo site_url() ?>/balkony" class="blue_button">подробнее...</a>
        </div>

        <a href="https://www.youtube.com/watch?v=pJbveeKAOIY" class="legos_video popup-youtube">
          <img data-src="<?php echo bloginfo("template_url"); ?>/img/legos-video02.jpg" alt="Видео-отзыв о компании 'Легос'" title="Видео-отзыв о компании 'Легос'">
        </a>

        <div class="service">
          <h6 class="service__heading">сервисный центр</h6>
          <p class="service__p">Ремонт и регулировка окон в Чебоксарах. Замена стеклопакетов. Установка москитный сеток и многое др.</p>

          <div class="links">
            <ul>
              <?php
                $homePagePosts = new WP_Query(array(
                  'posts_per_page'   => 5,
                  'category__not_in' => array(2, 3)
                ));

                while ($homePagePosts->have_posts()) {
                $homePagePosts->the_post(); ?>
                  <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </li>
                <?php }
              ?>
            </ul>
          </div>
        </div>

        <a href="https://www.youtube.com/watch?v=koZmtnyKrsg&t" class="legos_video popup-youtube">
          <img data-src="<?php echo bloginfo("template_url"); ?>/img/legos-video01.jpg" alt="Видео-отзыв о компании 'Легос'" title="Видео-отзыв о компании 'Легос'">
        </a>
      </div>
    </div>

    <div class="home-gallery">
      <div class="swiper-container home-gallery__top"></div>
      <div class="swiper-container home-gallery__thumbs"></div>
    </div>

<!--     <section class="main_gallery_section">
      <div class="swiper_slider3">
      <a id="popup_gallery_init" class="popup_gallery mfp-gallery" href="">Работы <b>"вживую"</b></a>
        <div class="swiper-container s3">
          <div class="swiper-wrapper">
            <?php
              $secondHomePageGallery = new WP_Query(array(
                'posts_per_page' => 20,
                'order'          => 'ASC',
                'post_type'      => 'second-home-gallery'
              ));

              while($secondHomePageGallery->have_posts()) {
                $secondHomePageGallery->the_post(); ?>
                <div class="swiper-slide">
                  <?php the_content(); ?>
                </div>
              <?php }
            ?>
          </div>
        </div>
        <div class="swiper-button-prev swiper-button-prev--first"></div>
        <div class="swiper-button-next swiper-button-next--first"></div>
      </div>
    </section> -->

    <section class="about_company_section">
      <span class="about_company_section__heading"><b>Легос™</b>. Окна в Чебоксарах от надежного производителя.</span>

      <div class="about_company_section__wrapper">
        <div class="about_company_section__p">
          Компании “Легос” в 2018 г. исполняется 11 лет.
          Опыт, приобретенный компанией за долгие годы упорной работы, позволяет браться за выполнение самых сложных и нестандартных объектов по остеклению целых зданий, квартир, балконов, входных групп, зимних садов и т.д.<br><br>

          Нашими заказчиками являются обычные люди - хозяева квартир и загородных домов, а так же крупные организации и госпредприятия. Количество выполненных объектов к 2018г. достигло 10000 шт, начиная с балконов и квартир “под ключ” заканчивая школами и крупными офисными зданиями.

          Работая в основном по г. Чебоксары и г. Новочебоксарск, мы так же обслуживаем районы Чувашии: Ишлеи, Кугеси, поселки Заволжья, Лапсары, и многие др. Инженеры-замерщики компании готовы в любое время выехать на объект в любую точку Чувашии.
        </div>
        
        <div class="about_company_section__img"></div>
      </div>
    </section>

    <section class="guarantee">
      <div class="guarantee_section">
        <img class="guarantee__img" data-src="<?php echo bloginfo("template_url"); ?>/img/lion.svg" class="guarantee_section__img">
        <div class="text_wrapper">
          <h3 class="guarantee__h">БЕССРОЧНАЯ ГАРАНТИЯ ЛЕГОС</h3>
          <p class="guarantee__p"><span class="bold">*Всем</span> заказчикам Компания Легос ООО “Окна профиль” предоставляет <span class="bold">бесплатное</span> выполнение работ по устранению недостатков, возникших в процессе <span class="bold">всего</span> срока эксплуатации окон.</p>
        </div>
      </div>
      <div class="sertificat">
        <img class="sertificat__img" data-src="<?php echo bloginfo("template_url"); ?>/img/sertificat-01.jpg" alt="Гарантия качества ЛЕГОС" title="Гарантия качества ЛЕГОС">
        <img class="sertificat__img" data-src="<?php echo bloginfo("template_url"); ?>/img/sertificat-02.jpg" alt="Гарантия качества ЛЕГОС" title="Гарантия качества ЛЕГОС">
        <div class="sertificat__text">
          <h3 class="sertificat__h">Гарантия качества</h3>
          <p class="sertificat__p">Вся продукция компании <b>"Легос"</b><br> от стеклопакетов до комплектующих имеет<br> сертификаты качества как по российскому<br> стандарту ГОСТ, так и европейским стандартам<br> качества RAL, DIN ISO.</p>
        </div>
      </div>
    </section>

    <section class="main_reviews_section">
      <div class="main_reviews_wrapper">
        <div class="description_wrapper">
          <h5>КАЧЕСТВЕННАЯ РАБОТА - ВЫСОКАЯ РЕПУТАЦИЯ</h5>
          <p>С 2011 года мы учавствуем в общественных проектах и телепередачах. Выполняя разнообразные по сложности заказы, мы беремся реализовывать любые дизайнерские решения и желания прогрессивных семей Чувашии.</p>

          <div class="reviews_icon_container">
            <a class="otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review01.JPG">Отзывы о нас</a>
            <a class="mfp-hide otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review03.JPG"></a>
            <a class="mfp-hide otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review04.JPG"></a>
            <a class="mfp-hide otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review05.JPG"></a>
            <a class="mfp-hide otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review06.JPG"></a>
            <a class="mfp-hide otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review07.JPG"></a>
            <a class="mfp-hide otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review08.JPG"></a>
            <a class="mfp-hide otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review09.JPG"></a>
            <a class="mfp-hide otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review10.JPG"></a>
            <a class="mfp-hide otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review11.JPG"></a>
            <a class="mfp-hide otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review12.JPG"></a>
            <a class="mfp-hide otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review13.JPG"></a>
            <a class="mfp-hide otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review14.JPG"></a>
            <a class="mfp-hide otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review15.JPG"></a>
            <a class="mfp-hide otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review16.JPG"></a>
            <a class="mfp-hide otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review17.JPG"></a>
            <a class="mfp-hide otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review18.JPG"></a>
            <a class="mfp-hide otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review19.JPG"></a>
            <a class="mfp-hide otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review20.JPG"></a>
            <a class="mfp-hide otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review21.JPG"></a>
            <a class="mfp-hide otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review22.JPG"></a>
            <a class="mfp-hide otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review23.JPG"></a>
            <a class="mfp-hide otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review24.JPG"></a>
            <a class="mfp-hide otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review25.JPG"></a>
            <a class="mfp-hide otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review26.JPG"></a>
            <a class="mfp-hide otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review27.JPG"></a>
            <a class="mfp-hide otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review28.JPG"></a>
            <a class="mfp-hide otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review29.JPG"></a>
            <a class="mfp-hide otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review30.JPG"></a>
            <a class="mfp-hide otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review31.JPG"></a>
            <a class="mfp-hide otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review33.JPG"></a>
            <a class="mfp-hide otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review34.JPG"></a>
            <a class="mfp-hide otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review35.JPG"></a>
            <a class="mfp-hide otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review36.JPG"></a>
            <a class="mfp-hide otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review37.JPG"></a>
            <a class="mfp-hide otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review38.JPG"></a>
            <a class="mfp-hide otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review39.JPG"></a>
            <a class="mfp-hide otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review40.JPG"></a>

            <div class="star_icon_container">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>

            <div class="social_icon_container">
              <a href="https://vk.com/okna_cheb" class="vk_icon">
                <i class="fab fa-vk"></i>
              </a>

              <a href="https://www.youtube.com/channel/UCPAmpINFosUrsIokAJUkMKA" class="youtube_icon">
                <i class="fab fa-youtube"></i>
              </a>
            </div>
          </div>
        </div>
        
        <a class="reviews otziv-gallery" href="<?php echo bloginfo("template_url"); ?>/img/photo-reviews/photo-review02.JPG">
          <span>Более 1000 рукописных отзывов о нашей работе</span>
          <img data-src="<?php echo bloginfo("template_url"); ?>/img/reviews.png" alt="Отзывы о компании 'Легос'" title="Отзывы о компании 'Легос'">
        </a>
      </div>

      <div class="video_reviews">
        <h2 class="video_review__title">Отзывы о компании ОКНА ЛЕГОС Чебоксары ›</h2>
        <div class="swiper-container s5">
          <div class="swiper-wrapper">
            <?php
              $videoReviews = new WP_Query(array(
                'posts_per_page' => 6,
                'post_type'      => 'video-otzivi'
              ));

              while ($videoReviews->have_posts()) {
                $videoReviews->the_post(); ?>

                <a href="<?php the_permalink(); ?>" class="video_review__link swiper-slide">
                  <div class="video_review__img">
                    <?php the_post_thumbnail(); ?>
                  </div>
                  <div class="video_review__desc">
                    <span class="video_review__tag">видео-отзыв</span>
                    <h3 class="video_review__h"><?php the_title(); ?></h3>
                    <div class="video_review__metabox">
                      <div class="meta_container">
                        <span class="date"><?php the_time('d F Y'); ?></span>
                        <span class="views"><i class="fas fa-eye"></i> <?php do_action( 'pageviews' ); ?></span>
                      </div>
                    </div>
                  </div>
                </a>

              <?php }
            ?>
          </div>

          <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Предыдущий слайд"></div>
          <div class="swiper-button-next" tabindex="0" role="button" aria-label="Следующий слайд"></div>
        </div>
      </div>
    </section>

<!--     <section class="legos_articles">
      <h2 class="video_review__title video_review__title--second">Все вопросы об окнах. Блог ЛЕГОС ›</h2>
      <div class="swiper-container s5">
        <div class="swiper-wrapper">
          <?php
          $homePagePosts = new WP_Query(array(
            'posts_per_page' => 6
          ));

          while ($homePagePosts->have_posts()) {
            $homePagePosts->the_post(); ?>

            <a href="<?php the_permalink(); ?>" class="video_review__link swiper-slide">
              <div class="video_review__img video_review__img--article">
                <?php the_post_thumbnail(); ?>
              </div>
              <div class="video_review__desc">
                <span class="video_review__tag">статья блога</span>
                <h3 class="video_review__h"><?php the_title(); ?></h3>
                <div class="video_review__metabox">
                  <div class="meta_container">
                    <span class="date"><?php the_time('d F Y'); ?></span>
                    <span class="views"><i class="fas fa-eye"></i> <?php do_action( 'pageviews' ); ?></span>
                  </div>
                </div>
              </div>
            </a>
          <?php }
          ?>
        </div>
      </div>
    </section> -->

    <section class="about_compsany_section2">
      <h3 class="about_company_section2__heading">Спасибо за доверие!</h3>
      <div class="about_company_section2__heading black">Приветствуем Вас на официальном сайте компании ЛЕГОС ОКНА в Чебоксарах.</div>

      <div class="about_company_section2__p">
        <p>ЛЕГОС на сегодняшний день одна из крупнейших оконных компаний в Чебоксарах, производящая окна на немецкой линии. Мы реализуем окна по оптовым ценам по всей Чувашии от 1 до 5 дней.</p>

        <p>Так же компания ЛЕГОС предоставляет ремонт и обслуживание окон, установленных другими компаниями.</p>

        <p>1. Все наши пластиковые окна снабжаются энергосберегающими стеклопакетами, в основу которых входит магнетронное напыление ионов серебра, предающее эффект отражения теплового излучения. Использование новых стеклопакетов избавляет Вас от проблем с запотеванием стекол, а так же сокращает потерю тепла в зимний период до 70%, сохраняя, при этом, драгоценную прохладу в летом.</p>

        <p>2. Благодаря использованию утепленных панелей и заливке стыков жидким пластиком, при отделки внутренних откосов проема сухим способом, удалось отвести “точку росы” и краевую зону промерзания проема, от которых так страдают жильцы панельных и кирпичных домов с тонкими стенами, в периоды холодной зимы. Практически на “нет” сведена возможность появления влаги и инея на внутренних элементах отделки даже в самые холодные Русские зимы при любой влажности помещения.</p>

        <p>3. Наши цены на окна ниже на 15% среднерыночных, благодаря грамотно спланированной логистике, сервису, системе менеджмента и складирования. А главный показатель качества нашей работы - повторное обращение клиентов, более 50% от общего количества. Сегодня мы застекляем квартиру в спальном районе г. Чебоксар. Спустя 4 года владельцы данной квартиры обращаются к нам с просьбой застеклить оставшиеся окна или загородный дом, а дополнительная скидка за повторное обращение становиться для Заказчиков приятным сюрпризом.</p>

        <p>Мы гарантируем качество наших окон и произведенных нами работ. В случае возникновения, каких бы то ни было проблем, мы обязуемся незамедлительно выехать на адрес и устранить (заменить) все недостатки за наш счет.<br>Ваши отзывы и предложения вы можете оставить по форме снизу «Письмо Директору»</p>

        <p class="bold">Мы гарантируем качество наших изделий и произведенных нами работ. В случае возникновения, каких бы то ни было проблем, мы обязуемся незамедлительно выехать на адрес и устранить (заменить) все недостатки за наш счет.</p>
      </div>
    </section>

  <?php }

  get_footer();
?>