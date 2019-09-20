<?php /* Template Name: balkony */ ?>

<?php get_header(); ?>

<div class="wrapper">
  <div class="col_2">
    <div class="offer">
      <h2 class="offer__heading">Окна с климат контролем</h2>
      <span class="offer__subtitle">Готовое решение проблем вентиляции</span>
      <img src="<?php echo bloginfo("template_url"); ?>/img/okna-s-klimat-kontrolem.jpg" alt="Окна с климат контролем" title="Окна с климат контролем" class="offer__img">
      <p class="offer__p">Чуть ли не главным условием здоровья является свежий воздух в помещении, где мы живем и проводим большую часть времени.</p>
      <a href="<?php echo site_url() ?>/accessories" class="blue_button">подробнее...</a>
    </div>

    <div class="offer">
      <h2 class="offer__heading">Ручка с ключом</h2>
      <span class="offer__subtitle">Ваша гарантия безопасности</span>
      <img src="<?php echo bloginfo("template_url"); ?>/img/zamok-blokirator.jpg" alt="Ручка с ключом" title="Ручка с ключом" class="offer__img">
      <p class="offer__p">Ручка с ключом обережет ваших детей от нежелательного открывания створки, а так же воспрепятствует проникновению в Ваш дом через окно "форточников" и "домушников".</p>
      <a href="<?php echo site_url() ?>/accessories" class="blue_button">подробнее...</a>
    </div>

    <div class="offer">
      <h2 class="offer__heading">Замок-блокиратор от детей Sash Jammertm</h2>
      <span class="offer__subtitle">Надежная защита на окна для детей</span>
      <img src="<?php echo bloginfo("template_url"); ?>/img/ruchka-s-klyuchom.jpg" alt="Ручка с ключом" title="Ручка с ключом" class="offer__img">
      <p class="offer__p">Как застраховаться от случайного открывания створки, ведь любопытство детей не знает границ.</p>
      <a href="<?php echo site_url() ?>/accessories" class="blue_button">подробнее...</a>
    </div>

    <div class="about_veka">
      <h2 class="about_veka__heading">Лидер рынка:</h2>

      <div class="veka_content">
        <img src="<?php echo bloginfo("template_url"); ?>/img/veka_logo2.png" alt="Логотип компании 'VEKA'" title="Логотип компании 'VEKA'" class="veka_content__img">
        <p class="veka_content__paragraph">На сегодняшний день <span class="black">VEKA</span> является одним из <span class="black">крупнейших в мире</span> производителей пластикового профиля для изготовления оконных и дверных конструкций. В 2004 году компания VEKA стала первой экструзионной компанией в Росссии, получившей <span class="black">сертификат</span> соответсвия стандарту качества <span class="black">DIN ISO 9001:2000.</span> В 2006 году VEKA Rus стала ппервой и единственной компнией в России, чья продукция прошла сертификацию на соответствие европейскому знаку <span class="black">качества RAL</span></p>
        <a href="<?php echo site_url() ?>/okna" class="veka_content__button blue_button">подробнее...</a>
      </div>
    </div>

    <div class="advantages">
      <h2 class="advantages__heading dot">Преимущества:</h2>

      <div class="advantages_content">
        <div class="advantages_content__row">
          <h3 class="advantages_content__heading dot"><u>Автоматическая установка энергосберегающего стекла</u></h3>
          <p class="advantages_content__p">До 70% теплее. Энергосберегающий стеклопакет избавит Вас от проблем с запотеванием стекла и дополнительным обогревом помещения, сохранив прохладу летом.</p>
        </div>

        <div class="advantages_content__row">
          <h3 class="advantages_content__heading dot"><u>Противовзломная фурнитура MACO</u></h3>
          <p class="advantages_content__p">Противовзломная фурнитура избавит Вас от заклинивания замков и проблем с провисанием петель.</p>
        </div>

        <div class="advantages_content__row">
          <h3 class="advantages_content__heading dot"><u>Монтаж строго по ГОСТу</u></h3>
        </div>
      </div>
    </div>

    <a href="https://www.youtube.com/watch?v=dsSgZUJ5vXU" class="legos_video popup-youtube">
      <img src="<?php echo bloginfo("template_url"); ?>/img/legos-video01.jpg" alt="Видео-отзыв о окмпании 'Легос'" title="Видео-отзыв о окмпании 'Легос'" class="veka_content__img">
    </a>

    <div class="balkony_offer">
      <h2 class="balkony_offer__heading">Раздвижное остекление балконов</h2>
      <img src="<?php echo bloginfo("template_url"); ?>/img/akciya-na-okno01.png" alt="Раздвижное остекление балконов" title="Раздвижное остекление балконов" class="balkony_offer__img">
      <p class="balkony_offer__p"><span class="black">легко</span> собирается, <span class="black">быстро</span> устанавливается и очень <span class="black">эффектно</span> смотрится. Применение специально разработанных профилей делает раздвижное остекление черезвычайно <span class="black">привлекательным</span> как для массового, так и для индивидуального строительства</p>
      <a href="<?php echo site_url() ?>" class="blue_button">подробнее...</a>
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
    <div class="balkony_img_offer">
      <img src="<?php echo bloginfo("template_url"); ?>/img/montage-balkonov.jpg" alt="Монтаж балконов" title="Монтаж балконов">
    </div>

    <section class="balkony_description">
      <h2 class="balkony_description__h">Остекление балконов и лоджий в Чебоксарах<br><span class="gray">Балконы "ЛЕГОС" Чебоксары</span></h2>
      <p class="balkony_description__p balkony_description__p--top">Превртите свой балкон в <span class="bold">современную,</span> светлую, многофункциональную комнату со всеми преимуществами <span class="bold">новых технологий</span></p>
      <img src="<?php echo bloginfo("template_url"); ?>/img/balkon1.jpg" class="balkony_description__img" alt="Остекление балконов и лоджий в Чебоксарах" title="Остекление балконов и лоджий в Чебоксарах">
      <p class="balkony_description__p">С <span class="bold">2005 года</span> мы профессионально занимаемся остеклением <span class="bold">любых видов</span> витражей, балконов и лоджий. Мы распологаем собственным производством, складом, спец. транспортом, постоянным штатом собственных профессиональных мастеров и квалифицированных инженеров. Исполнение заказа производится в максимально сжатые сроки. <span class="bold">На все монтажные работы действует расширенная гаранития. В случае возникновения гарантийных или иных случаев мы незамедлительно выезжаем на адрес и устраняем выявленные недостатки за наш счет.</span></p>
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

    <section class="balkony_description balkony_description--gray">
      <h2 class="balkony_description__h">Мы используем усиленные козырьки</h2>
      <p class="balkony_description__p balkony_description__p--top">Все наши балконные рамы оборудуются усиленными верхними козырьками</p>
      <img src="<?php echo bloginfo("template_url"); ?>/img/balkon2.jpg" class="balkony_description__img" alt="Балконы компании 'Легос'" title="Балконы компании 'Легос'">
      <p class="balkony_description__p">Под усиленными верхними козырьками мы подразумеваем широкий изогнутый отлив, который крепиться и к раме и к потолку и выходит одновременно на улицу и заходит в комнату от 15 до 50см. Ширина отливов будет напрямую зависеть от Вашего проема и состояния потолка на балконе.<br> Данный козырек <span class="bold">спасет вашу отделку</span> не только от сильного дождя, <span class="bold">но и продлит срок службы</span> монтажного шва, в случае, когда край верхней плиты уженачал разрушаться. <span class="bold">Важно:</span> данный козырек контактирует с улицей и естественно на нем будет образовываться конденсат в зимней период. Козырек подлежит утеплению и отделке по таким же правилам, как и монтажный шов. Заказать отделочные работы вы всегда можете у нас, просто свяжитесь с менеджерами нашей компании.</p>
    </section>

    <section class="balkony_offer">
      <div class="offer1">
        <h2 class="offer1__heading">Полная реставрация балконов от "Легос"</h2>

        <div class="offer1__content">
          <div class="offer1_img_wrapper">
            <img src="<?php echo bloginfo("template_url"); ?>/img/balkon3.jpg" alt="Балконы компании 'Легос'" title="Балконы компании 'Легос'">
            <img src="<?php echo bloginfo("template_url"); ?>/img/balkon4.jpg" alt="Балконы компании 'Легос'" title="Балконы компании 'Легос'">
          </div>
          
          <div class="offer1_text_wrapper">
            <p class="offer1__p">Мы занимаемся остеклением балконов <span class="bold">уже более 10 лет!</span> Нет объектов с которыми бы мы не смогли справиться или за которые бы мы не взялись. Производим инсталляцию, даже в тех ситуациях, когда на балкон опасно выходить. Все работы производятся непосредственно из квартиры. Производим полную реставрацию балконных экранов, восстановление половых покрытий, укрепление или полную переделку перил, обшив сайдингом или профнастилом, замена перил на цельную теплую раму с потолка до пола.</p>

            <img src="<?php echo bloginfo("template_url"); ?>/img/balkon5.jpg" class="offer1__img" alt="Балконы компании 'Легос'" title="Балконы компании 'Легос'">
          </div>
        </div>
      </div>

      <div class="offer2">
        <h2 class="offer2__heading">Эксклюзивные утепленные балконы "Легос"</h2>
        <div class="offer2__content">
          <div class="offer2_text_wrapper">
            <h3 class="offer2__subtitle">Утепленный балкон "с потолка до пола"</h3>
            <p>Уже <span class="bold">более 10 лет</span> мы делаем не просто теплые балконы, мы создаем ещё одни дополнительные светлые многофункциональные комнаты. Не важно какое время года и какая температура за окном. Инсталляция рамы и козырьков производиться в <span class="bold">любую погоду</span> и <span class="bold">на любой высоте.</span> С таким балконом Вы экономите время и деньги на внутренней отделке балконного экрана и в итоге получаете полноценную комнату с панорамным видом и приятным эстетичным видом. Все конструкции и все работы производятся с учетом ветровых, эксплуатационных нагрузок и суровых климатических условий.</p>
          </div>

          <img src="<?php echo bloginfo("template_url"); ?>/img/balkon6.jpg" alt="Эксклюзивные утепленные балконы 'Легос'" title="Эксклюзивные утепленные балконы 'Легос'">
        </div>

        <img src="<?php echo bloginfo("template_url"); ?>/img/balkon7.jpg" class="offer2__img" alt="Эксклюзивные утепленные балконы 'Легос'" title="Эксклюзивные утепленные балконы 'Легос'">
      </div>

      <div class="offer3">
        <div class="offer3__content">
          <div class="offer3_text_wrapper">
            <h3 class="offer3__subtitle">Установка крыш и козырьков</h3>
            <p>Уже более 10 лет мы делаем не просто теплые балконы, мы создаем ещё одни дополнительные светлые многофункциональные комнаты. Не важно какое время года и какая температура за окном. Инсталляция рамы и козырьков производиться в любую погоду и на любой высоте. С таким балконом Вы экономите время и деньги на внутренней отделке балконного экрана и в итоге получаете полноценную комнату с панорамным видом и приятным эстетичным видом. Все конструкции и все работы производятся с учетом ветровых, эксплуатационных нагрузок и суровых климатических условий.</p>
          </div>

          <img src="<?php echo bloginfo("template_url"); ?>/img/balkon8.jpg" alt="Установка крыш и козырьков" title="Установка крыш и козырьков">
        </div>
      </div>
    </section>

    <section class="akciya">
      <div class="akciya__wrapper">
        <div class="akciya__col-1">
          <a href="#popup_form" class="akciya__img akciya__img--paddings balkon-img popup" data-effect="mfp-zoom-in">
            <img class="lazy" src="<?php echo bloginfo("template_url"); ?>/img/akciya-na-balkon.png" alt="Акция на энергосберегающий балкон 'Легос'" title="Акция на энергосберегающий балкон 'Легос'">
          </a>
        </div>

        <div class="akciya__col-2">
          <div class="akciya__desc">
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
          </div>
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