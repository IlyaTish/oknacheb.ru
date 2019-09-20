<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <?php if (is_front_page()): ?>
  <title>ОКНА ЛЕГОС. Пластиковые окна в Чебоксарах от производителя по оптовым ценам. Ваши отзывы. Балконы в Чебоксарах.</title>
  <meta name="description" content="Где заказать окна и балконы в Чебоксарах, производство окон Легос. Окна Veka, Slamander. ЛЕГОС официальный сайт.">
  <?php elseif (is_page(array(7, 'Монтаж окон'))): ?>
  <title>Монтаж и обслуживание пластиковых окон в Чебоксарах, окна Veka, Salamander</title>
  <meta name="description" content="Качественный монтаж окон по ГОСТ в Чебоксарах, окна премиум класса Veka, Salamander, KBE, Proplex по оптовым ценам.">
  <?php elseif (is_page(array(9, 'Монтаж балконов'))): ?>
  <title>Монтаж и обслуживание балконов и лоджий в Чебоксарах, балконные рамы с выносом, с отделкой, с сайдингом. Крыша на балкон.</title>
  <meta name="description" content="Монтаж, изготовление балконов и лоджий с крышей в Чебоксарах. Балконы с выносом. Балконные рамы с сайдингом. Отделка балконов и лоджий. ">
  <?php else: ?>
  <title>ОКНА ЛЕГОС. Пластиковые окна в Чебоксарах от производителя по оптовым ценам. Ваши отзывы. Балконы в Чебоксарах.</title>
  <meta name="description" content="Где заказать окна и балконы в Чебоксарах, производство окон Легос. Окна Veka, Slamander. ЛЕГОС официальный сайт.">
  <?php endif; ?>
  <meta name="keywords" content="окна, пластиковые окна, пластиковые окна в чебоксарах отзывы, где купить пластиковые окна, пластиковые окна под ключ, пластиковые окна компании, proplex окна, компания пластиковые окна, купить окна, пластиковые окна цены, установка окон, москитные окна, балкон остекление, балкон цена, балкон застеклять, балкон под ключ, балкон установка, монтаж окон, монтаж балкона, ремонт окон, окна рехау, окна в квартиру, алюминиевые окна, окна чебоксары, окна в чебоксарах, пластиковые окна в чебоксарах, пластиковые окна чебоксары, окна пластиковые чебоксары, пластиковые окна чебоксары цены, окна в чебоксарах цены, евроокна чебоксары, века окна пвх, сайдинг чебоксары, окна пвх, установка окон чебоксары, заказать окна чебоксары, производители окон чебоксары, окна века чебоксары, окна века, легос, легос окна, легос балконы, легос компания, окна в чувашии, окна в чувашии цены, где заказать пластиковые окна, заказать окна пвх,  пластиковые окна козловка">

  <link rel="shortcut icon" href="<?php echo bloginfo("template_url"); ?>/img/favicon.ico" type="image/x-icon">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="yandex-verification" content="ad45ee307f968e01" />

  <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>

  <div id="popup_form" class="mfp-hide mfp-with-anim">
    <img src="<?php echo bloginfo("template_url"); ?>/img/zamer.jpg" class="popup__img" alt="Оставить заявку" title="Оставить заявку">

    <form>
      <span class="popup_form__heading">оставить заявку</span>

      <input type="hidden" name="project_name" value="oknacheb.ru">
      <input type="hidden" name="admin_email" value="dukaty1013@yandex.ru">
      <input type="hidden" name="form_subject" value="Заявка с popup-окна (основное)">

      <div class="input_wrapper">
        <label for="name" class="input_wrapper__heading">Имя</label>
        <input id="name" type="text" name="Имя" placeholder="Имя" required>
      </div>

      <div class="input_wrapper">
        <label for="phone_input" class="input_wrapper__heading">Телефон</label>
        <input id="phone_input" class="phone_input" type="text" name="Телефон" placeholder="+7 (___)-___-__-__" required>
      </div>

      <div class="input_wrapper">
        <label for="adress" class="input_wrapper__heading">Адрес</label>
        <input id="adress" type="text" name="Адрес" placeholder="Адрес">
      </div>

      <button type="submit" class="button">ОСТАВИТЬ ЗАЯВКУ</button>
    </form>

    <div class="popup_form--active">
      <span class="popup_form__heading">спасибо!</span>
      <span class="popup_form__subtitle">Мы свяжемся с вами в ближайшее время.</span>
    </div>
  </div>

  <div id="offers_popup" class="offers_popup mfp-hide mfp-with-anim">
    <div class="offers_popup__container">
      <h2 class="offers_popup__h"><b>Лучшее</b> предложение месяца</h2>
      <div class="offers_popup__col">
        <div class="offers_popup__images">
          <img class="offers_popup__img" src="<?php echo bloginfo("template_url"); ?>/img/okno-01.png" alt="Акция на окно ЛЕГОС™" title="Акция на окно ЛЕГОС™">
          <img class="offers_popup__img" src="<?php echo bloginfo("template_url"); ?>/img/okno-02.png" alt="Акция на окно ЛЕГОС™" title="Акция на окно ЛЕГОС™">
          <img class="offers_popup__img" src="<?php echo bloginfo("template_url"); ?>/img/okno-03.png" alt="Акция на окно ЛЕГОС™" title="Акция на окно ЛЕГОС™">
        </div>

        <div class="offers_popup__offers">
          <div class="akciya__desc">
            <img class="offers_popup__img--mobile" src="<?php echo bloginfo("template_url"); ?>/img/okno-01.png" alt="Акция на окно ЛЕГОС™" title="Акция на окно ЛЕГОС™">
            <span class="akciya__desc__heading">Окно <b>Двухстворчатое</b></span>
            <p class="akciya__desc__paragraph">Пятикамерный морозостойкий профиль 70 мм. Энергосберегающий стеклопакет "ТОР N+" с серебряным напылением. Противовзломная фурнитура ESSE. Москитная сетка в подарок! Доставка спецтранспортом по Чебоксарам!</p>

            <div class="prices">
              <span class="price1">от <span class="price1-upper">5420 </span>руб.</span>

              <div class="price2">
                <span class="price2__first_row">в рассрочку на 4 мес.</span>
                <span class="price2__second_row"><span class="price2-upper">1254</span>руб./мес.</span>
              </div>
            </div>

            <div class="akciya__desc__info">
              <span>Стоимость зависит от размеров вашего окна</span>
            </div>
          </div>

          <div class="akciya__desc">
            <img class="offers_popup__img--mobile" src="<?php echo bloginfo("template_url"); ?>/img/okno-02.png" alt="Акция на окно ЛЕГОС™" title="Акция на окно ЛЕГОС™">
            <span class="akciya__desc__heading">Окно <b>Трехстворчатое</b></span>
            <p class="akciya__desc__paragraph">Пятикамерный морозостойкий профиль 70 мм. Энергосберегающий стеклопакет "ТОР N+" с серебряным напылением. Противовзломная фурнитура ESSE. Москитная сетка в подарок! Доставка спецтранспортом по Чебоксарам!</p>

            <div class="prices">
              <span class="price1">от <span class="price1-upper">6170 </span>руб.</span>

              <div class="price2">
                <span class="price2__first_row">в рассрочку на 4 мес.</span>
                <span class="price2__second_row"><span class="price2-upper">1542</span>руб./мес.</span>
              </div>
            </div>

            <div class="akciya__desc__info">
              <span>Стоимость зависит от размеров вашего окна</span>
            </div>
          </div>

          <div class="akciya__desc">
            <img class="offers_popup__img--mobile" src="<?php echo bloginfo("template_url"); ?>/img/okno-03.png" alt="Акция на окно ЛЕГОС™" title="Акция на окно ЛЕГОС™">
            <span class="akciya__desc__heading"><b>Балконный</b> блок</span>
            <p class="akciya__desc__paragraph">Трехкамерный морозостойкий профиль 60мм.<br> Противовзломная фурнитура ESSE. <br>Магнитная защепка в подарок!</p>

            <div class="prices">
              <span class="price1">от <span class="price1-upper">6170 </span>руб.</span>

              <div class="price2">
                <span class="price2__first_row">в рассрочку на 4 мес.</span>
                <span class="price2__second_row"><span class="price2-upper">1542</span>руб./мес.</span>
              </div>
            </div>

            <div class="akciya__desc__info">
              <span>Стоимость зависит от размеров вашего окна</span>
            </div>
          </div>
        </div>
      </div>

      <form class="offers_popup__form form">
        <input type="hidden" name="project_name" value="oknacheb.ru">
        <input type="hidden" name="admin_email" value="dukaty1013@yandex.ru">
        <input type="hidden" name="form_subject" value="Заявка с popup-окна (при клике на акции)">

        <div class="offers_popup__phone">
          <label for="offers_popup__phone" class="offers_popup__label">Ваш телефон</label>
          <input id="offers_popup__phone" class="phone_input" type="text" name="Телефон" placeholder="+7 (___)-___-__-__" required>
        </div>
        <div class="offers_popup__submit">
          <span class="offers_popup__submit-title">Остались вопросы?</span>
          <button type="submit" class="button">Позвонить мне<i class="fas fa-arrow-right"></i></button>
        </div>
      </form>
    </div>
  </div>

  <div id="payments_form" class="mfp-hide mfp-with-anim">
    <img src="<?php echo bloginfo("template_url"); ?>/img/payments-bg.jpg" class="popup_form__payments_bg" alt="Платежные системы" title="Платежные системы">

    <form class="form">
      <span class="popup_form__p">Мы принимаем любые виды оплат.<br> У нас вы можете расплатиться любой пластиковой картой любого банка.<br> Так же мы принимаем любые переводы, любые виды электронных денег, включая биткоины.</span>

      <input type="hidden" name="project_name" value="oknacheb.ru">
      <input type="hidden" name="admin_email" value="dukaty1013@yandex.ru">
      <input type="hidden" name="form_subject" value="Заявка с popup-окна (платежные системы)">

      <span class="popup_form__subtitle">У вас есть вопросы? Мы можем позвонить вам.</span>

      <div class="input_wrapper">
        <label for="phone_input" class="input_wrapper__heading">Телефон</label>
        <input id="phone_input" class="phone_input" type="text" name="Телефон" placeholder="+7 (___)-___-__-__" required>
      </div>

      <button type="submit" class="button">Позвонить мне<i class="fas fa-arrow-right"></i></button>
    </form>
  </div>

  <form id="calculator-form" class="calculator-form calculator-submit mfp-hide mfp-with-anim">
    <!-- Hidden Required Fields -->
    <input type="hidden" name="project_name" value="oknacheb.ru">
    <input type="hidden" name="admin_email" value="dukaty1013@yandex.ru">
    <input type="hidden" name="form_subject" value="Заявка с главной страницы (калькулятор)">
    <!-- END Hidden Required Fields -->
    <input class="calculator__type" type="hidden" name="Тип изделия">

    <h2 class="calculator-form__h">Доступные конфигурации:</h2>
    <div class="calculator-form__conf-container">
      <div class="calculator-form__conf">
      </div>
    </div>

    <h2 class="calculator-form__h">Выбранная конструкция:</h2>
    <div class="calculator-form__container">
      <div class="construction">
        <div class="construction__img-container"></div>
        <div class="construction__params">
          <div class="input-wrapper">
            <span class="input-wrapper__title">Ширина:</span>
            <input class="input-wrapper__input width" type="number" name="Ширина(мм)" placeholder="Ширина в мм.">
            <span class="unit">мм</span>
          </div>
          <div class="input-wrapper">
            <span class="input-wrapper__title">Высота:</span>
            <input class="input-wrapper__input height" type="number" name="Высота(мм)" placeholder="Высота в мм.">
            <span class="unit">мм</span>
          </div>
          <div class="input-wrapper">
            <span class="input-wrapper__title">Количество:</span>
            <input class="input-wrapper__input amount" type="number" name="Количество(шт)" placeholder="Количество" value="1">
            <span class="unit">шт</span>
          </div>
        </div>
      </div>

      <div class="construction__dop">
        <h2 class="calculator-form__h calculator-form__h--dop">Дополнительные услуги:</h2>
        <div class="construction__params">
          <div class="input-wrapper">
            <span class="input-wrapper__title">Установка:</span>
            <select class="input-wrapper__input" name="Установка" placeholder="Установка">
              <option value="нет">нет</option>
              <option value="Монтаж без демонтажа">Монтаж без демонтажа</option>
              <option value="Монтаж и демонтаж">Монтаж и демонтаж</option>
            </select>
          </div>
          <div class="input-wrapper">
            <span class="input-wrapper__title">Москитка:</span>
            <select class="input-wrapper__input" name="Москитка" placeholder="Москитная сетка">
              <option value="нет">нет</option>
              <option value="требуется">требуется</option>
            </select>
          </div>
          <div class="input-wrapper windowsill">
            <span class="input-wrapper__title">Подоконник:</span>
            <select class="input-wrapper__input" name="Подоконник" placeholder="Подоконник">
              <option value="нет">нет</option>
              <option value="20 см">20 см</option>
              <option value="30 см">30 см</option>
              <option value="40 см">40 см</option>
              <option value="50 см">50 см</option>
              <option value="60 см">60 см</option>
              <option value="70 см">70 см</option>
            </select>
          </div>
          <div class="input-wrapper pumping">
            <span class="input-wrapper__title">Водоотлив:</span>
            <select class="input-wrapper__input" name="Водоотлив" placeholder="Водоотлив">
              <option value="нет">нет</option>
              <option value="10 см">10 см</option>
              <option value="15 см">15 см</option>
              <option value="20 см">20 см</option>
              <option value="25 см">25 см</option>
              <option value="30 см">30 см</option>
              <option value="40 см">40 см</option>
            </select>
          </div>
          <div class="input-wrapper">
            <span class="input-wrapper__title">Откосы:</span>
            <select class="input-wrapper__input" name="Откосы" placeholder="Откосы">
              <option value="нет">нет</option>
              <option value="8-20 см">8-20 см</option>
              <option value="21-35 см">21-35 см</option>
              <option value="36-50 см">36-50 см</option>
              <option value="51-65 см">51-65 см</option>
            </select>
          </div>
          <div class="input-wrapper phone-input">
            <span class="input-wrapper__title">Телефон:</span>
            <input class="input-wrapper__input phone_input" class="price__option" type="text" name="Телефон" placeholder="+7 (999)-999-99-99" required>
          </div>
        </div>
        <button class="button" type="submit">Получить цены</button>
      </div>
    </div>
  </form>

  <div id="director_form" class="mfp-hide mfp-with-anim">
    <form class="form">
      <span class="popup_form__heading">Написать письмо</span>

      <input type="hidden" name="project_name" value="oknacheb.ru">
      <input type="hidden" name="admin_email" value="dukaty1013@yandex.ru">
      <input type="hidden" name="form_subject" value="Письмо директору">

      <div class="input_wrapper">
        <label for="name" class="input_wrapper__heading">Имя</label>
        <input id="name" type="text" name="Имя" placeholder="Имя" required>
      </div>

      <div class="input_wrapper">
        <label for="message" class="input_wrapper__heading">Ваше сообщение</label>
        <textarea id="message" name="Сообщение" placeholder="Ваше сообщение"></textarea>
      </div>

      <button type="submit" class="button">ОТПРАВИТЬ</button>
    </form>
  </div>

  <div class="progress_bar">
    <div id="progress"></div>
  </div>

  <div class="container">
    <header>
      <div class="top_header_section">
        <a href="<?php echo site_url() ?>" class="top_header_section__logo">
          <picture>
            <source srcset="<?php echo bloginfo("template_url"); ?>/img/mobile-logo.svg" media="(max-width: 768px)">
            <source srcset="<?php echo bloginfo("template_url"); ?>/img/logo.png">
            <img srcset="<?php echo bloginfo("template_url"); ?>/img/logo.png" alt="Логотип компании 'Легос'" title="Логотип компании 'Легос'">
          </picture>
        </a>

        <div class="menu_section">
          <div class="menu_section__heading"><h1><?php bloginfo("description"); ?>.</h1><h2>Производство, изготовление, монтаж, ремонт окон в Чебоксарах</h2></div>

          <nav class="menu_section__menu">
            <ul>
              <li <?php if (is_page('blog')) echo 'class="active_menu_item"' ?>>
                <a href="<?php echo site_url('/blog') ?>" title="Блог">блог</a>
              </li>

              <li <?php if (is_page('okna')) echo 'class="active_menu_item"' ?>>
                <a href="<?php echo site_url('/okna') ?>" title="Монтаж окон">монтаж окон</a>
              </li>

              <li <?php if (is_page('balkony')) echo 'class="active_menu_item"' ?>>
                <a href="<?php echo site_url('/balkony') ?>" title="Монтаж балконов">монтаж балконов</a>
              </li>

              <li <?php if (is_page('profil')) echo 'class="active_menu_item"' ?>>
                <a href="<?php echo site_url('/profil') ?>" title="Выбираем профиль">выбираем профиль</a>
              </li>

              <li <?php if (is_page('gallery')) echo 'class="active_menu_item"' ?>>
                <a href="<?php echo site_url('/gallery') ?>" title="Галлерея">галлерея</a>
              </li>

              <li <?php if (is_page('accessories')) echo 'class="active_menu_item"' ?>>
                <a href="<?php echo site_url('/accessories') ?>" title="Аксессуары">аксессуары</a>
              </li>

              <li <?php if (is_page('contacts')) echo 'class="active_menu_item"' ?>>
                <a href="<?php echo site_url('/contacts') ?>" title="Контакты">контакты</a>
              </li>
            </ul>
          </nav>

          <span class="menu_section__info">ЛЕГОС ООО ”Окна Профиль” ОГРН 1142130005808 ул. К. Воробьевых, 20, офис 512 (ДОМ МОД, 5 этаж)</span>

          <div class="phone_container">
            <a class="header_phone_section__icon mobile" href="tel:+7(8352)20-31-55">
              <svg version="1.1" class="phone_icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                <path d="M256,32c123.5,0,224,100.5,224,224S379.5,480,256,480S32,379.5,32,256S132.5,32,256,32 M256,0C114.625,0,0,114.625,0,256s114.625,256,256,256s256-114.625,256-256S397.375,0,256,0L256,0z M398.719,341.594l-1.438-4.375c-3.375-10.063-14.5-20.563-24.75-23.375L334.688,303.5c-10.25-2.781-24.875,0.969-32.406,8.5l-13.688,13.688c-49.75-13.469-88.781-52.5-102.219-102.25l13.688-13.688c7.5-7.5,11.25-22.125,8.469-32.406L198.219,139.5c-2.781-10.25-13.344-21.375-23.406-24.75l-4.313-1.438c-10.094-3.375-24.5,0.031-32,7.563l-20.5,20.5c-3.656,3.625-6,14.031-6,14.063c-0.688,65.063,24.813,127.719,70.813,173.75c45.875,45.875,108.313,71.344,173.156,70.781c0.344,0,11.063-2.281,14.719-5.938l20.5-20.5C398.688,366.063,402.063,351.656,398.719,341.594z"/>
              </svg>
            
              <div class="first_anim-wave phone_anim"></div>
            </a>
          </div>

          <div class="burger_menu">
            <span></span>
            <p class="burger_menu__text">меню</p>
          </div>

          <nav class="dropping_menu">
            <ul>
              <li>
                <a href="<?php echo site_url() ?>" title="Главная">главная</a>
              </li>

              <li>
                <a href="<?php echo site_url('/okna') ?>" title="Монтаж окон">монтаж окон</a>
              </li>

              <li>
                <a href="<?php echo site_url('/balkony') ?>" title="Монтаж балконов">монтаж балконов</a>
              </li>

              <li>
                <a href="<?php echo site_url('/profil') ?>" title="Выбираем профиль">выбираем профиль</a>
              </li>

              <li>
                <a href="<?php echo site_url('/gallery') ?>" title="Галлерея">галлерея</a>
              </li>

              <li>
                <a href="<?php echo site_url('/accessories') ?>" title="Аксессуары">аксессуары</a>
              </li>

              <li>
                <a href="<?php echo site_url('/contacts') ?>" title="Контакты">контакты</a>
              </li>

              <li class="phone_number phone">
                <a href="tel: +7 (8352) 20-31-55">+7 (8352) 20-31-55</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>

      <div class="header_slider_section">
        <div class="header_slider_section__bg"></div>

        <div class="header_phone_section">
          <span class="header_phone_section__text">ежедневно с <span class="white_color">8:00</span> до <span class="white_color">20:00</span></span>

          <div class="phone_container">
            <a href="#popup_form" class="header__phone phone popup" data-effect="mfp-zoom-in"><span>+7 (8352) 20-31-55</span></a>
          </div>

          <span class="header_phone_section__text2">заказ по телефону</span>
        </div>

        <div class="swiper-container s1">
          <div class="header__skidka">
            <p>Скидка <span class="bold">50%</span> только сейчас!</p>
          </div>

          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img class="swiper-lazy" data-src="<?php echo bloginfo("template_url"); ?>/img/okna-v-cheboksarah01.jpg" alt="Монтаж, установка окон в Чебоксарах" title="Монтаж, установка окон в Чебоксарах">
              <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
            </div>

            <div class="swiper-slide">
              <img class="swiper-lazy" data-src="<?php echo bloginfo("template_url"); ?>/img/okna-v-cheboksarah02.jpg" alt="Монтаж, установка окон в Чебоксарах" title="Монтаж, установка окон в Чебоксарах">
              <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
            </div>

            <div class="swiper-slide">
              <img class="swiper-lazy" data-src="<?php echo bloginfo("template_url"); ?>/img/okna-v-cheboksarah03.jpg" alt="Монтаж, установка окон в Чебоксарах" title="Монтаж, установка окон в Чебоксарах">
              <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
            </div>

            <div class="swiper-slide">
              <img class="swiper-lazy" data-src="<?php echo bloginfo("template_url"); ?>/img/okna-v-cheboksarah04.jpg" alt="Монтаж, установка окон в Чебоксарах" title="Монтаж, установка окон в Чебоксарах">
              <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
            </div>
          </div>
        </div>

        <div class="header_slider_section__text">
          <h2>Компания <b>ЛЕГОС</b><br>предлагает<br> продукт экстра-класса:<br>окна из профиля <b>VEKA</b><br>в Чебоксарах</h2>
          <p>-VEKA существует только в оригинале, в отличие от онкурентов у нее нет аналогов, подделок, клонов и имитаций</p>
          <p>-VEKA - это только профили класса А, соответствующие RAL. В отличие от конкурентов, VEKA не выпускает профилей эконом-класса</p>
        </div>

        <div class="title_wrapper">
          <div class="veka_img">
            <img data-src="<?php echo bloginfo("template_url"); ?>/img/veka.png" alt="Логотип компании 'VEKA'" title="Логотип компании 'VEKA'">
          </div>
          <h2><?php the_title(); ?></h2>
        </div>

        <a href="#popup_form" class="zamer_wrapper popup" data-effect="mfp-zoom-in"></a>
      </div>
    </header>