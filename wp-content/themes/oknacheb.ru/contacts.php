<?php /* Template Name: contacts */ ?>

<?php get_header(); ?>

    <section class="office_section">
      <h1 class="office_section__heading">офис продаж на заливе г. Чебоксары</h1>
      <span class="office_section__subtitle">Мы ждем вас по адресу ТК "Дом Мод", 5 этаж, офис 512.</span>

      <div class="office_section__location">
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A0fcb917e93d64f4cbdb80fe03dff5720389c6574b8496298739dc6abc33fcd84&amp;source=constructor"></iframe>
        <img src="<?php echo bloginfo("template_url"); ?>/img/legos-office01.jpg" class="margin" alt="Офис компании 'ЛЕГОС'" title="Офис компании 'ЛЕГОС'">
        <img src="<?php echo bloginfo("template_url"); ?>/img/legos-office02.jpg" alt="Офис компании 'ЛЕГОС'" title="Офис компании 'ЛЕГОС'">
      </div>
    </section>


    <section class="office_section">
      <h2 class="office_section__heading">наш склад в Чебоксарах</h2>
      <span class="office_section__subtitle">Кабельный пр-зд, 6</span>

      <div class="office_section__location">
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aed9329294955a8d324050b71aa8c91fb24221dd65cc35df6a7569d2c55050b6f&amp;source=constructor" class="order margin2"></iframe>
        <img src="<?php echo bloginfo("template_url"); ?>/img/legos-warehouse02.jpg" class="order" alt="Склад компании 'ЛЕГОС'" title="Склад компании 'ЛЕГОС'">
        <img src="<?php echo bloginfo("template_url"); ?>/img/legos-warehouse01.jpg" alt="Склад компании 'ЛЕГОС'" title="Склад компании 'ЛЕГОС'">
      </div>
    </section>

<?php get_footer(); ?>