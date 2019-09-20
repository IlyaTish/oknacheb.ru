<?php

function oknacheb_post_types() {
   register_post_type('home-gallery', array(
      'supports'    => array('title', 'editor', 'thumbnail'),
      'taxonomies'  => array('topics', 'category' ),
      'rewrite'     => array('slug' => 'home-gallery'),
      'has_archive' => true,
      'public'      => true,  
      'labels'      => array(
         'name'          => 'Первая галерея',
         'add_new_item'  => 'Добавить новую картинку',
         'edit_item'     => 'Редактировать картинку',
         'all_items'     => 'Все картинки',
         'view_item'     => 'Посмотреть картинку',
         'view_items'    => 'Посмотреть картинки'
      ),
      'menu_icon' => 'dashicons-images-alt'
   ));

   register_post_type('second-home-gallery', array(
      'supports'    => array('title', 'editor', 'thumbnail'),
      'taxonomies'  => array('topics', 'category' ),
      'rewrite'     => array('slug' => 'second-home-gallery'),
      'has_archive' => true,
      'public'      => true,  
      'labels'      => array(
         'name'          => 'Вторая галерея',
         'add_new_item'  => 'Добавить новую картинку',
         'edit_item'     => 'Редактировать картинку',
         'all_items'     => 'Все картинки',
         'view_item'     => 'Посмотреть картинку',
         'view_items'    => 'Посмотреть картинки'
      ),
      'menu_icon' => 'dashicons-images-alt'
   ));

   register_post_type('video-otzivi', array(
      'supports'    => array('title', 'editor'),
      'has_archive' => true,
      'public'      => true,  
      'labels'      => array(
         'name'          => 'Видео отзывы',
         'all_items'     => 'Все видео',
         'add_new'       => 'Добавить новое видео',
         'new_item'      => 'Добавить новое',
         'edit_item'     => 'Редактировать видео'
      ),
      'menu_icon' => 'dashicons-video-alt3'
   ));
}

add_action('init', 'oknacheb_post_types');