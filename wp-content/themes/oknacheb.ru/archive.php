<?php /* Template Name: blog */ ?>

<?php get_header(); ?>

<div class="wrapper">
  <div class="col_1">
    <section class="blog">
      <?php 
      while(have_posts()) {
        the_post(); ?>

        <div class="blog__article">
          <h2 class="blog__heading"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

          <div class="blog__img">
            <?php the_post_thumbnail(); ?>
          </div>

          <div class="blog__metabox">
           <div class="meta_container">
            <i class="fas fa-user" aria-hidden="true"></i><span class="info">Редактор: </span><span class="author"><?php the_author_posts_link(); ?></span>
          </div> 

          <div class="meta_container">
            <i class="fas fa-clock"></i> <span class="info">Дата публикации: </span><span class="date"><?php the_time('j.n.Y'); ?></span>
          </div> 

          <div class="meta_container">
            <i class="fas fa-tag" aria-hidden="true"></i><span class="info">Рубрика: </span><span class="category"><?php echo get_the_category_list(', '); ?></span>
          </div>
        </div>
        
        <div class="blog__content">
          <?php echo wp_trim_words(get_the_content(), 50); ?>
          <div class="overlay"></div>
        </div>

        <a href="<?php the_permalink(); ?>" class="blog__btn"><span>Продолжить чтение »</span></a>
      </div>
    <?php } ?>

    <div class="blog__pagination">
      <?php echo paginate_links(); ?>
    </div>
  </section>
</div>


<div class="col_2">
  <div class="offer">
    <h2 class="offer__heading">Окна с климат контролем</h2>
    <span class="offer__subtitle">Готовое решение проблем вентиляции</span>
    <img src="<?php echo bloginfo("template_url"); ?>/img/okna-s-klimat-kontrolem.jpg" class="offer__img">
    <p class="offer__p">Чуть ли не главным условием здоровья является свежий воздух в помещении, где мы живем и проводим большую часть времени.</p>
    <a href="<?php echo site_url() ?>/accessories" class="blue_button">подробнее...</a>
  </div>

  <div class="offer">
    <h2 class="offer__heading">Замок-блокиратор от детей Sash Jammertm</h2>
    <span class="offer__subtitle">Надежная защита на окна для детей</span>
    <img src="<?php echo bloginfo("template_url"); ?>/img/zamok-blokirator.jpg" class="offer__img">
    <p class="offer__p">Как застраховаться от случайного открывания створки, ведь любопытство детей не знает границ.</p>
    <a href="<?php echo site_url() ?>/accessories" class="blue_button">подробнее...</a>
  </div>

  <div class="about_veka">
    <span class="about_veka__heading">Лидер рынка:</span>

    <div class="veka_content">
      <img src="<?php echo bloginfo("template_url"); ?>/img/veka_logo2.png" class="veka_content__img">
      <p class="veka_content__paragraph">На сегодняшний день <span class="black">VEKA</span> является одним из <span class="black">крупнейших в мире</span> производителей пластикового профиля для изготовления оконных и дверных конструкций. В 2004 году компания VEKA стала первой экструзионной компанией в Росссии, получившей <span class="black">сертификат</span> соответсвия стандарту качества <span class="black">DIN ISO 9001:2000.</span> В 2006 году VEKA Rus стала ппервой и единственной компнией в России, чья продукция прошла сертификацию на соответствие европейскому знаку <span class="black">качества RAL</span></p>
      <a href="<?php echo site_url() ?>/okna" class="blue_button">подробнее...</a>
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

  <a href="https://www.youtube.com/watch?v=dsSgZUJ5vXU" class="legos_video popup-youtube">
    <img src="<?php echo bloginfo("template_url"); ?>/img/legos-video01.jpg">
  </a>

  <div class="balkony_offer">
    <h4 class="balkony_offer__heading">Раздвижное остекление балконов</h4>
    <img src="<?php echo bloginfo("template_url"); ?>/img/akciya-na-okno01.png" class="balkony_offer__img">
    <p class="balkony_offer__p"><span class="black">легко</span> собирается, <span class="black">быстро</span> устанавливается и очень <span class="black">эффектно</span> смотрится. Применение специально разработанных профилей делает раздвижное остекление черезвычайно <span class="black">привлекательным</span> как для массового, так и для индивидуального строительства</p>
    <a href="<?php echo site_url() ?>/balkony" class="blue_button">подробнее...</a>
  </div>

  <a href="https://www.youtube.com/watch?v=XSfxQLUNX0U" class="legos_video popup-youtube">
    <img src="<?php echo bloginfo("template_url"); ?>/img/legos-video02.jpg">
  </a>

  <div class="service">
    <h6 class="service__heading">сервисный центр</h6>
    <p class="service__p">Ремонт и регулировка окон в Чебоксарах. Замена стеклопакетов. Установка москитный сеток и многое др.</p>

    <div class="links">
      <ul>
        <?php
        $blogPosts = new WP_Query(array(
          'posts_per_page'   => 5,
          'category__not_in' => array(2, 3)
        ));

        while ($blogPosts->have_posts()) {
          $blogPosts->the_post(); ?>
          <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </li>
        <?php } wp_reset_postdata();
        ?>
      </ul>
    </div>
  </div>
</div>
</div>

<?php get_footer(); ?>