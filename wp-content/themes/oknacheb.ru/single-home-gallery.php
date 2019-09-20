<?php get_header(); ?>

<div class="wrapper">
   <div class="col_1">
     <section class="blog">
      <?php 
      while(have_posts()) {
       the_post(); ?>

         <div class="blog__article blog__article--full">
            <h1 class="blog__heading"><?php the_title(); ?></h1>

            <div class="blog__img">
               <?php the_post_thumbnail(); ?>
            </div>

            <div class="blog__metabox">
               <a href="<?php echo get_post_type_archive_link("home-gallery"); ?>" class="home_link">
                 <i class="fas fa-arrow-left"></i><span>К галерее</span>
               </a>

               <div class="meta_container">
                  <?php the_title(); ?>
               </div>
            </div>
         </div>

      <?php }
      echo paginate_links();
      ?>
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
   </div>
</div>

<?php get_footer(); ?>