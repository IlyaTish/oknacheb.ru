    <div class="make_an_order">
      <script type="text/javascript" data-src="https://vk.com/js/api/openapi.js?159"></script>

      <div class="wrapper">
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

        <div class="make_an_order__text">
          <span class="make_an_order__heading">оформить заказ не выходя из дома</span>
          <div class="make_an_order__text_content">
            <p>
              <b>Для оформления заказа Вам достаточно позвонить по телефону 8 (8352) 20-31-55 и записаться на замер.</b><br>
              Наш специалист оперативно выедет на адрес со всем необходимым оборудованием и документами, произведет замер,
              проконсультирует Вас и на месте рассчитает стоимость.<br>
              <b>Заключить договор можно не выходя из дома.</b>

              <span>Если у вас остались вопросы или вы хотите ознакомиться с образцами продукции, ждем Вас в нашем <a href="<?php echo site_url('/contacts') ?>" class="contacts_link">офисе.</a></span>
            </p>
          </div>
        </div>
      </div>
    </div>

    <section class="map_section">
      <div class="map_section__phone">
        <a class="map_section__icon" href="tel: +7 (8352) 20-31-55">
          <i class="fa fa-phone"></i>
        </a>

        <div class="map_section__text">
          <span class="map_section__heading">Остались вопросы?</span>
          <p>Если возникли вопросы - позвоните нам.<br>Мы ответим на все ваши вопросы!</p>
        </div>

        <div class="map_form">
          <div class="map_form__heading">Заказать звонок</div>

          <form class="form">
            <input type="hidden" name="project_name" value="oknacheb.ru">
            <input type="hidden" name="admin_email" value="dukaty1013@yandex.ru">
            <input type="hidden" name="form_subject" value="Заявка с главной страницы (на карте)">

            <input type="text" name="Имя" placeholder="имя" required>
            <input class="phone_input" type="text" name="Телефон" placeholder="+7 (___)-___-__-__" required>
            <button type="submit" class="button">ОСТАВИТЬ ЗАЯВКУ</button>
          </form>
        </div>
      </div>

      <a href="https://yandex.ru/maps/45/cheboksary/?from=api-maps&l=map&ll=47.248381%2C56.144393&mode=usermaps&source=jsapi_2_1_72&um=constructor%3A5e55af91505a8af3ff9f9ec9f998c7504a82989ab67d3f9cb813f4b4518a7af7&utm_medium=yandex.ru&utm_source=api-maps&z=16" target="_blank" class="map__link"><img data-src="<?php echo bloginfo("template_url"); ?>/img/map.png" class="map__img" alt="Карта с адресом Легос" title="Карта с адресом Легос"></a>
    </section>

    <section class="map_form2 mobile">
      <form id="form" class="form_wrapper">
        <div class="form_wrapper__container">
          <span class="form_wrapper__heading">Оставить заявку</span>

          <input type="hidden" name="project_name" value="oknacheb.ru">
          <input type="hidden" name="admin_email" value="oknacheb21@mail.ru">
          <input type="hidden" name="form_subject" value="Заявка с главной страницы (под окном)">

          <input type="text" name="Имя" placeholder="имя" required>
          <input class="phone_input" type="text" name="Телефон" placeholder="+7 (___)-___-__-__" required>
          <input type="text" name="Адрес" placeholder="адрес (необязательно)">
        </div>

        <div class="form_description">
          <p>Оставьте заявку, и наш специалист рассчитает стоимость заказа с учетом всех ваших пожеланий</p>
          <button class="button" type="submit">ОСТАВИТЬ ЗАЯВКУ</button>
        </div>
      </form>
    </section>

    <footer>
      <div class="footer__row">
        <div class="footer_phone__wrapper">
          <div class="footer_phone_section">
            <span class="footer_phone_section__text">ежедневно с 8:00 до 20:00</span>
          
            <div class="phone_container">
              <a class="footer_phone_section__icon" href="tel:+7(8352)20-31-55">
                <svg version="1.1" class="phone_icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                  <path d="M256,32c123.5,0,224,100.5,224,224S379.5,480,256,480S32,379.5,32,256S132.5,32,256,32 M256,0C114.625,0,0,114.625,0,256s114.625,256,256,256s256-114.625,256-256S397.375,0,256,0L256,0z M398.719,341.594l-1.438-4.375c-3.375-10.063-14.5-20.563-24.75-23.375L334.688,303.5c-10.25-2.781-24.875,0.969-32.406,8.5l-13.688,13.688c-49.75-13.469-88.781-52.5-102.219-102.25l13.688-13.688c7.5-7.5,11.25-22.125,8.469-32.406L198.219,139.5c-2.781-10.25-13.344-21.375-23.406-24.75l-4.313-1.438c-10.094-3.375-24.5,0.031-32,7.563l-20.5,20.5c-3.656,3.625-6,14.031-6,14.063c-0.688,65.063,24.813,127.719,70.813,173.75c45.875,45.875,108.313,71.344,173.156,70.781c0.344,0,11.063-2.281,14.719-5.938l20.5-20.5C398.688,366.063,402.063,351.656,398.719,341.594z"/>
                </svg>
              </a>

              <a href="#popup_form" class="footer__phone phone popup" data-effect="mfp-zoom-in"><span>+7 (8352) 20-31-55</span></a>
            </div>
          
            <span class="footer_phone_section__text2">заказ по телефону</span>

            <p class="footer__company_info footer__company_info--desktop">
              ЛЕГОС™ ООО "Окна Профиль"<br>
              ОГРН 1142130005808<br>
              ул. К. Воробьевых, 20,<br>
              офис 512 ДОМ МОД, 5 этаж<br><br>
              <span>E-mail: <span class="dark_blue">oknacheb21@mail.ru</span></span>
            </p>

            <p class="footer__company_info footer__company_info--mobile">
              ЛЕГОС™ ООО "Окна Профиль"<br>
              ОГРН 1142130005808<br>
              ул. К. Воробьевых, 20,<br>
              офис 512 ДОМ МОД, 5 этаж<br>
              E-mail: <span class="dark_blue">oknacheb21@mail.ru</span>
            </p>
          </div>
        </div>

        <div class="footer__description">
          <div class="footer_menu">
            <ul>
              <li>
                <a href="<?php echo site_url() ?>" title="Главная">главная</a>
              </li>

              <li>
                <a href="<?php echo site_url() ?>/okna" title="Монтаж окон">монтаж окон</a>
              </li>

              <li>
                <a href="<?php echo site_url() ?>/balkony" title="Монтаж балконов">монтаж балконов</a>
              </li>

              <li>
                <a href="<?php echo site_url() ?>/gallery" title="Галлерея">галлерея</a>
              </li>

              <li>
                <a href="<?php echo site_url() ?>/accessories" title="Аксессуары">аксессуары</a>
              </li>

              <li>
                <a href="<?php echo site_url() ?>/contacts" title="Контакты">контакты</a>
              </li>
            </ul>
          </div>

          <div class="footer_info">
            <p>
              Окна в Чебоксарах<br>
              Пластиковые окна в Чебоксарах<br>
              Балконные рамы в Чебоксарах<br>
              Пластиковые окна в Чебоксарах
            </p>

            <a href="#director_form" class="button popup" data-effect="mfp-zoom-in">ПИСЬМО ДИРЕКТОРУ</a>

            <div class="footer__payments">
              <a href="https://vk.com/okna_cheb" class="vk_icon">
                <i class="fab fa-vk"></i>
              </a>

              <img class="footer__payments_img" data-src="<?php echo bloginfo("template_url"); ?>/img/payments2.png" alt="Платежный способ" title="Платежный способ">
            </div>

            <a class="metrika" href="https://metrika.yandex.ru/stat/?id=14045314&amp;from=informer" target="_blank" rel="nofollow"><img data-src="https://informer.yandex.ru/informer/14045314/3_1_FFFFFFFF_EFEFEFFF_0_pageviews" style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="14045314" data-lang="ru"></a>
          </div>
        </div>
      </div>

      <div class="grass"></div>
    </footer>
  </div>

  <!--[if lt IE 9]>
  <script src="libs/html5shiv/es5-shim.min.js"></script>
  <script src="libs/html5shiv/html5shiv.min.js"></script>
  <script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
  <script src="libs/respond/respond.min.js"></script>
  <![endif]-->

  <!-- Yandex.Metrika counter -->
  <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(14045314, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true });
  </script>

  <noscript>
    <div>
      <img src="https://mc.yandex.ru/watch/14045314" style="position:absolute; left:-9999px;" alt="" />
    </div>
  </noscript>
  <!-- /Yandex.Metrika counter -->

  <script>
    (function(w, d, s, h, id) {
      w.roistatProjectId = id; w.roistatHost = h;
      var p = d.location.protocol == "https:" ? "https://" : "http://";
      var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/"+id+"/init";
      var js = d.createElement(s); js.charset="UTF-8"; js.async = 1; js.src = p+h+u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);
    })(window, document, 'script', 'cloud.roistat.com', 'e7df7eff0f518e3ee94c7e016134690a');
  </script>

  <!-- Pixel -->
  <script type="text/javascript">
    (function (d, w) {
      var n = d.getElementsByTagName("script")[0],
      s = d.createElement("script"),
      f = function () { n.parentNode.insertBefore(s, n); };
      s.type = "text/javascript";
      s.async = true;
      s.src = "https://qoopler.ru/index.php?ref="+d.referrer+"&cookie=" + encodeURIComponent(document.cookie);

      if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
      } else { f(); }
    })(document, window);
  </script>
  <!-- /Pixel -->

  <?php wp_footer(); ?>
</body>
</html>