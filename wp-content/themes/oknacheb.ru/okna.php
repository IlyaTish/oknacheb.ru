<?php /* Template Name: okna */ ?>

<?php get_header(); ?>

<div class="wrapper">
  <div class="col_2">
    <div class="offer">
      <h4 class="offer__heading">Окна с климат контролем</h4>
      <span class="offer__subtitle">Готовое решение проблем вентиляции</span>
      <img src="<?php echo bloginfo("template_url"); ?>/img/okna-s-klimat-kontrolem.jpg" alt="Окна с климат контролем" title="Окна с климат контролем" class="offer__img">
      <p class="offer__p">Чуть ли не главным условием здоровья является свежий воздух в помещении, где мы живем и проводим большую часть времени.</p>
      <a href="<?php echo site_url() ?>/accessories" class="blue_button">подробнее...</a>
    </div>

    <div class="offer">
      <h4 class="offer__heading">Замок-блокиратор от детей Sash Jammertm</h4>
      <span class="offer__subtitle">Надежная защита на окна для детей</span>
      <img src="<?php echo bloginfo("template_url"); ?>/img/zamok-blokirator.jpg" alt="Замок-блокиратор от детей Sash Jammertm" title="Замок-блокиратор от детей Sash Jammertm" class="offer__img">
      <p class="offer__p">Как застраховаться от случайного открывания створки, ведь любопытство детей не знает границ.</p>
      <a href="<?php echo site_url() ?>/accessories" class="blue_button">подробнее...</a>
    </div>

    <div class="about_veka">
      <h5 class="about_veka__heading">Лидер рынка:</h5>

      <div class="veka_content">
        <img src="<?php echo bloginfo("template_url"); ?>/img/veka_logo2.png" alt="Логотип компании 'VEKA'" title="Логотип компании 'VEKA'" class="veka_content__img">
        <p class="veka_content__paragraph">На сегодняшний день <span class="black">VEKA</span> является одним из <span class="black">крупнейших в мире</span> производителей пластикового профиля для изготовления оконных и дверных конструкций. В 2004 году компания VEKA стала первой экструзионной компанией в Росссии, получившей <span class="black">сертификат</span> соответсвия стандарту качества <span class="black">DIN ISO 9001:2000.</span> В 2006 году VEKA Rus стала ппервой и единственной компнией в России, чья продукция прошла сертификацию на соответствие европейскому знаку <span class="black">качества RAL</span></p>
        <a href="<?php echo site_url() ?>/okna" class="blue_button">подробнее...</a>
      </div>
    </div>

    <div class="advantages">
      <h5 class="advantages__heading dot">Преимущества:</h5>

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

    <div class="balkony_offer">
      <h5 class="balkony_offer__heading">Раздвижное остекление балконов</h5>
      <img src="<?php echo bloginfo("template_url"); ?>/img/akciya-na-okno01.png" alt="Раздвижное остекление балконов" title="Раздвижное остекление балконов" class="balkony_offer__img">
      <p class="balkony_offer__p"><span class="black">легко</span> собирается, <span class="black">быстро</span> устанавливается и очень <span class="black">эффектно</span> смотрится. Применение специально разработанных профилей делает раздвижное остекление черезвычайно <span class="black">привлекательным</span> как для массового, так и для индивидуального строительства</p>
      <a href="<?php echo site_url() ?>/balkony" class="blue_button">подробнее...</a>
    </div>

    <a href="https://www.youtube.com/watch?v=XSfxQLUNX0U" class="legos_video popup-youtube">
      <img src="<?php echo bloginfo("template_url"); ?>/img/legos-video02.jpg" alt="Видео-отзыв о окмпании 'Легос'" title="Видео-отзыв о окмпании 'Легос'" class="veka_content__img">
    </a>

    <div class="service">
      <h6 class="service__heading">сервисный центр</h6>
      <p class="service__p">Ремонт и регулировка окон в Чебоксарах. Замена стеклопакетов. Установка москитный сеток и многое др.</p>

      <div class="links">
        <ul>
          <?php
          $blogPagePosts = new WP_Query(array(
            'posts_per_page'   => 5,
            'category__not_in' => array(2, 3)
          ));

          while ($blogPagePosts->have_posts()) {
            $blogPagePosts->the_post(); ?>
            <li>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
          <?php } wp_reset_postdata();
          ?>
        </ul>
      </div>
    </div>
  </div>


  <div class="col_1">
    <section class="okna_info">
      <p>Сегодня всё большее значение имеют энергосберегающие свойства окон. Частным заказчикам мы предлагаем продукцию, выпускаемую в строгом соответствии с требованиями RAL и соответствующей классу А европейской нормы DIN EN 12 608.</p>
      <img src="<?php echo bloginfo("template_url"); ?>/img/zamer.jpg" alt="Надежные окна от компании 'Легос'" title="Надежные окна от компании 'Легос'">
    </section>

    <section class="okna_description">
      <h2 class="okna_description__heading">“ЛЕГОС” монтаж пластиковых окон в Чебоксарах</h2>
      <p>С 2005 года мы профессионально занимается установкой окон, остеклением витражей перегородок и всего, что можно назвать остеклением. Компания располагает собственным производством, складом спецтранспортом и постоянным штатом собственных профессиональных мастеров и квалифицированными инженерами. Исполнение заказа производиться в максимально сжатые сроки. На все монтажные работы действует расширенная гарантия. В случае возникновения гарантийных или иных случаев мы незамедлительно выезжаем на адрес и устраняем выявленные недостатки за наш счет.</p>
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


    <section class="okna_stages">
      <h2 class="okna_stages__h">Этапы монтажа пластиковых окон в "готовый проем". Или как мы делаем монтаж окно?</h2>
      <p class="okna_stages__p">Данное руководство в иллюстрациях в первую очередь пригодится тем, кто решил произвести монтаж самостоятельно или у кого появились вопросы в "правильности" монтажа окон.</p>

      <div class="stages">
        <div class="okna_stages__photo">
          <img src="<?php echo bloginfo("template_url"); ?>/img/podgotovka-proema.jpg" alt="Подготовка проема" title="Подготовка проема">

          <img src="<?php echo bloginfo("template_url"); ?>/img/podgotovka-novogo-okna01.jpg" alt="Подготовка нового окна" title="Подготовка нового окна">

          <img src="<?php echo bloginfo("template_url"); ?>/img/podgotovka-novogo-okna02.jpg" alt="Подготовка оконной рамы" title="Подготовка оконной рамы">

          <img src="<?php echo bloginfo("template_url"); ?>/img/podgotovka-novogo-okna03.jpg" alt="До начала монтажа окна" title="До начала монтажа окна">

          <img src="<?php echo bloginfo("template_url"); ?>/img/montazh-okna-v-proem.jpg" alt="Монтаж окна в проем" title="Монтаж окна в проем">

          <img src="<?php echo bloginfo("template_url"); ?>/img/ustanovka-podokonnika.jpg" alt="Установка подоконника" title="Установка подоконника">

          <img src="<?php echo bloginfo("template_url"); ?>/img/ustanovka-otkosov01.jpg" alt="Установка откосов" title="Установка откосов">

          <img src="<?php echo bloginfo("template_url"); ?>/img/ustanovka-otkosov02.jpg" alt="Установка откосов" title="Установка откосов">
        </div>

        <div class="okna_stages__text">
          <div class="stage__text">
            <div class="stage_photo--mobile">
              <img src="<?php echo bloginfo("template_url"); ?>/img/podgotovka-proema.jpg" alt="Подготовка проема" title="Подготовка проема">
            </div>
            <h3 class="stage__h">Подготовка проема</h3>
            <p class="stage__p">При подготовке проема удаляются все лишние элементы, такие как отлив, подоконник, старый утеплитель. Отбивается старый раствор по периметру в зоне примыкания нового окна. Отбивается все, что плохо держится и от куда может пойти в дальнейшем продувания. После установки окна в любом случае понадобиться произвести отделочные работы по восстановлению отделки проема как внутри так и снаружи для домов старого жилого фонда. Без разрушения отделки проема в старых домах произвести монтаж окна невозможно.</p>
          </div>

          <div class="stage__text">
            <div class="stage_photo--mobile">
              <img src="<?php echo bloginfo("template_url"); ?>/img/podgotovka-novogo-okna01.jpg" alt="Подготовка нового окна" title="Подготовка нового окна">
            </div>
            <h3 class="stage__h">Подготовка нового окна</h3>
            <p class="stage__p">С уличной поверхности окна удаляется вся защитная пленка, т.к. потом это сделать будет затруднительно. Кронштейны под сетку устанавливаются до монтажа рамы в проем. Кронштейны крепятся с запасом по высоте сетки для дальнейшего облегчения снятия и установки сетки на свое место. В качестве крепежа используются саморезы 10-19 мм.<br>Под анкерные болты рама просверливается примерно через каждые 70см, отступая от угла спайки на 10см. Количество крепежа зависит от размера самого окна и материала стен. При выборе пластин к качестве крепежа, отверстия сверлить не требуется. Пластины устанавливаются на окно заранее с шагом в 70 см. Вид крепежа подбирается исходя из материала стен и размера (функционала) конструкций.</p>
          </div>

          <div class="stage__text">
            <div class="stage_photo--mobile">
              <img src="<?php echo bloginfo("template_url"); ?>/img/podgotovka-novogo-okna03.jpg" alt="До начала монтажа окна" title="До начала монтажа окна">
            </div>
            <h3 class="stage__h">До начала монтажа</h3>
            <p class="stage__p">По краю рамы проклеивается защитная гидроизоляционная лента ПСУЛ. Лента ПСУЛ предназначена для защиты монтажного шва от воздействия окружающей среды, . В дальнейшем лента не требует дополнительной обработки и окраски. Если окно монтируется в проем “без четверти”, для защиты монтажного шва используется либо “гидроизоляционная лента” либо специальный нащельник.</p>
          </div>

          <div class="stage__text">
            <div class="stage_photo--mobile">
              <img src="<?php echo bloginfo("template_url"); ?>/img/montazh-okna-v-proem.jpg" alt="Монтаж окна в проем" title="Монтаж окна в проем">
            </div>
            <h3 class="stage__h">Монтаж окна в проем</h3>
            <p class="stage__p"><span class="bold red">Важно:</span> При отрицательной температуре окружающего воздуха используется “зимняя” монтажная пена. При температуре воздуха ниже 20 С, монтаж переноситься на более теплый день. Либо используется тепловой экран. Установка отлива производиться сразу после закрепления рамы. Отлив подрезается по месту с запасом по длине в 2 см с каждой стороны и загибается “лодочкой”. Пространство под отливом заполняется монтажной пеной. При монтаже окна “без отлива” (плитка, стяжка, иная отделка), проклеивается гидроизоляционная лента.</p>
          </div>

          <div class="stage__text">
            <div class="stage_photo--mobile">
              <img src="<?php echo bloginfo("template_url"); ?>/img/ustanovka-otkosov01.jpg" alt="Установка откосов" title="Установка откосов">
            </div>
            <h3 class="stage__h">Установка откосов</h3>
            <p class="stage__p">Для установки откосов используются специальные крепления, обеспечивающие надежный прижим панелей к раме. Пространство за откосом и монтажный шов заполняются пеной одновременно, это исключает образование продуваний стыка откоса. Монолитный пенный шов позволяет улучшить коэффициент теплопередачи и избежать рекламаций в будущем.</p>
          </div>

          <div class="stage__text">
            <div class="stage_photo--mobile">
              <img src="<?php echo bloginfo("template_url"); ?>/img/ustanovka-podokonnika.jpg" alt="Установка подоконника" title="Установка подоконника">
            </div>
            <h3 class="stage__h">Установка подоконника</h3>
            <p class="stage__p">Для установки подоконной доски используется специальные уголки, которые крепятся непосредственно на раму. Монтажный шов под окном и уголки запениваются целиком, после чего под раму “втыкается” подоконник. Пропенивание подоконника происходит в двух местах непосредственно под окном и у края стены. Пропенивание подоконной доски целиком не производиться, во избежание вздутия и повреждения подоконника.<br>В качестве панелей используются высококачественные парогидроизоляционные термопанели типа сэндвич. Данные панели отводят “точку росы” дальше от стены и предотвращают выпадение конденсата на откосах. Все стыки примыкания откоса к раме заливаются жидким пластиком. После обработки образуется монолитный “каменный” шов, который остается жестким и белоснежным на весь срок службы. При сухом способе отделки откосов штукатуркой, либо гипсокартоном монтажный шов с комнаты закрывается парогидроизоляционной лентой.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="akciya">
      <span class="akcia__h">Окна с энергостеклом "ТорN+" - теплее на 70%</span>

      <div class="akciya__wrapper">
        <div class="akciya__col-1">
          <a href="#popup_form" class="akciya__img akciya__img--paddings popup" data-effect="mfp-zoom-in">
            <img class="lazy" src="<?php echo bloginfo("template_url"); ?>/img/okno-dvuhstvorchatiye.png" alt="Акция на двухстворчатое окно 'Легос'" title="Акция на двухстворчатое окно 'Легос'">
          </a>
        </div>

        <div class="akciya__col-2">
          <div class="akciya__desc">
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
          </div>
        </div>
      </div>

      <div class="form-timer">
        <div class="timer">
          <span class="timer__heading">До конца акции осталось:</span>
          <div class="clock-1">
          </div>
        </div>

        <form class="form">
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
  </div>
</div>

<?php get_footer(); ?>