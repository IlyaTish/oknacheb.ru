$(function() {
  var menu = $('.burger_menu');
  var menu_active = $('.dropping_menu');
  var nav_link = $('.dropping_menu a');
  var body_scroll = $('body');
  var popupForm = $('#popup_form form');
  var forms = $('.form');
  var calculatorForms = $('.calculator-submit');
  var magnificPopup = $.magnificPopup.instance;

  menu.click(function() {
    menu.toggleClass('menu_active');
    menu_active.toggleClass('dropping_menu_active');
    body_scroll.toggleClass('body_scroll');
  });
  
  nav_link.click(function() {
    menu.toggleClass('menu_active');
    menu_active.toggleClass('dropping_menu_active');
    body_scroll.toggleClass('body_scroll');
  });


  $(function () {
    $('.blog__img img').parent().addClass('blog__img--active');
  });


  $(window).scroll( function () {
    var ratio = $(document).scrollTop () / (($(document).height () - $(window).height ()) / 100);
    $('#progress').width (ratio + '%');
  });


  $('.veka').on('click', function() {
    $(this).parent().find($('.arrow')).css('margin-top', '-102px');

    $('.content .trigger').fadeOut(400);
    $('.content .veka__content.trigger').fadeIn(600);
  });

  $('.salamander').on('click', function() {
    $(this).parent().find($('.arrow')).css('margin-top', '-20px');

    $('.content .trigger').fadeOut(400);
    $('.content .salamander__content.trigger').fadeIn(600);
  });

  $('.kbe').on('click', function() {
    $(this).parent().find($('.arrow')).css('margin-top', '62px');

    $('.content .trigger').fadeOut(400);
    $('.content .kbe__content.trigger').fadeIn(600);
  });


  /*Calculator function*/
  var imgSrc = 'https://oknacheb.ru/wp-content/themes/oknacheb.ru/img/calculator/';
  var template = {
    '1': [
      {'src':''+imgSrc+'okno-conf-1/okno-conf-1-01.png', 'title':'Однопроёмное окно'},
      {'src':''+imgSrc+'okno-conf-1/okno-conf-1-02.png', 'title':'Одностворчатое поворотное окно с правым открыванием'},
      {'src':''+imgSrc+'okno-conf-1/okno-conf-1-03.png', 'title':'Одностворчатое поворотное окно с левым открыванием'},
      {'src':''+imgSrc+'okno-conf-1/okno-conf-1-04.png', 'title':'Одностворчатое поворотно-откидное окно с правым открыванием'},
      {'src':''+imgSrc+'okno-conf-1/okno-conf-1-05.png', 'title':'Одностворчатое поворотно-откидное окно с левым открыванием'},
      {'src':''+imgSrc+'okno-conf-1/okno-conf-1-06.png', 'title':'Одностворчатое откидное окно'}
    ],
    '2': [
      {'src':''+imgSrc+'okno-conf-2/okno-conf-2-01.png', 'title':'Высокое окно с горизонтальным импостом'},
      {'src':''+imgSrc+'okno-conf-2/okno-conf-2-02.png', 'title':'Окно с горизонтальным импостом и поворотно-откидной створкой с левым открыванием'},
      {'src':''+imgSrc+'okno-conf-2/okno-conf-2-03.png', 'title':'Окно с горизонтальным импостом, снизу створка с левым открыванием,откидная створка сверху'}
    ],
    '3': [
      {'src':''+imgSrc+'okno-conf-3/okno-conf-3-01.png', 'title':'Окно с импостом'},
      {'src':''+imgSrc+'okno-conf-3/okno-conf-3-02.png', 'title':'Окно с импостом, одна створка справа с правым открыванием'},
      {'src':''+imgSrc+'okno-conf-3/okno-conf-3-03.png', 'title':'Окно с импостом, одна поворотно-откидная створка справа с правым открыванием'},
      {'src':''+imgSrc+'okno-conf-3/okno-conf-3-04.png', 'title':'Окно с импостом, одна поворотно-откидная створка слева с левым открыванием'},
      {'src':''+imgSrc+'okno-conf-3/okno-conf-3-05.png', 'title':'Окно с импостом, створка слева с левым открыванием, створка справа с правым открыванием'},
      {'src':''+imgSrc+'okno-conf-3/okno-conf-3-06.png', 'title':'Окно с импостом, створка слева с левым открыванием, поворотно-откидная створка справа с правым открыванием'},
      {'src':''+imgSrc+'okno-conf-3/okno-conf-3-07.png', 'title':'Окно с импостом, поворотно-откидная створка слева с левым открыванием, створка справа с правым открыванием'}
    ],
    '4': [
      {'src':''+imgSrc+'okno-conf-4/okno-conf-4-01.png', 'title':'Т-окно'},
      {'src':''+imgSrc+'okno-conf-4/okno-conf-4-02.png', 'title':'Т-окно,поворотно-откидная створка слева с левым открыванием'},
      {'src':''+imgSrc+'okno-conf-4/okno-conf-4-03.png', 'title':'Т-окно,створка слева с левым открыванием,откидная створка сверху'},
      {'src':''+imgSrc+'okno-conf-4/okno-conf-4-04.png', 'title':'Т-окно,створка справа с правым открыванием'},
      {'src':''+imgSrc+'okno-conf-4/okno-conf-4-05.png', 'title':'Т-окно,створка слева с левым открыванием,створка справа с правым открыванием'},
      {'src':''+imgSrc+'okno-conf-4/okno-conf-4-06.png', 'title':'Т-окно,откидная створка сверху,створка справа с правым открыванием'},
      {'src':''+imgSrc+'okno-conf-4/okno-conf-4-07.png', 'title':'Т-окно,створка слева с левым открыванием,откидная створка сверху,створка справа с правым открыванием'},
      {'src':''+imgSrc+'okno-conf-4/okno-conf-4-08.png', 'title':'Т-окно,поворотно-откидная створка справа с правым открыванием'},
      {'src':''+imgSrc+'okno-conf-4/okno-conf-4-09.png', 'title':'Т-окно,створка слева с левым открыванием,поворотно-откидная створка справа с правым открыванием'},
      {'src':''+imgSrc+'okno-conf-4/okno-conf-4-10.png', 'title':'Т-окно,поворотно-откидная створка слева с левым открыванием,поворотно-откидная створка справа с правым открыванием'}
    ],
    '5': [
      {'src':''+imgSrc+'okno-conf-5/okno-conf-5-01.png', 'title':'Окно с двумя вертикальными импостами'},
      {'src':''+imgSrc+'okno-conf-5/okno-conf-5-02.png', 'title':'Окно с двумя вертикальными импостами,поворотно-откидная створка слева с левым открыванием'},
      {'src':''+imgSrc+'okno-conf-5/okno-conf-5-03.png', 'title':'Окно с двумя вертикальными импостами,поворотно-откидная створка в центре с правым открыванием'},
      {'src':''+imgSrc+'okno-conf-5/okno-conf-5-04.png', 'title':'Окно с двумя вертикальными импостами,створка слева с левым открыванием,поворотно-откидная створка в центре с левым открыванием,створка справа с правым открыванием'},
      {'src':''+imgSrc+'okno-conf-5/okno-conf-5-05.png', 'title':'Окно с двумя вертикальными импостами,поворотно-откидная створка справа с правым открыванием'},
      {'src':''+imgSrc+'okno-conf-5/okno-conf-5-06.png', 'title':'Окно с двумя вертикальными импостами,створка слева с левым открыванием,поворотно-откидная створка справа с правым открыванием'},
      {'src':''+imgSrc+'okno-conf-5/okno-conf-5-07.png', 'title':'Окно с двумя вертикальными импостами,створка слева с левым открыванием,створка в центре с правым открыванием,поворотно-откидная створка справа с правым открыванием'}
    ],
    '6': [
      {'src':''+imgSrc+'okno-conf-6/okno-conf-6-01.png', 'title':'Окно с двумя вертикальными и одним горизонтальным импостами'},
      {'src':''+imgSrc+'okno-conf-6/okno-conf-6-02.png', 'title':'Окно с двумя вертикальными и одним горизонтальным импостами,поворотно-откидная створка в центре с правым открыванием'},
      {'src':''+imgSrc+'okno-conf-6/okno-conf-6-03.png', 'title':'Окно с двумя вертикальными и одним горизонтальным импостами,створка слева с левым открыванием,поворотно-откидная створка справа с правым открыванием'},
      {'src':''+imgSrc+'okno-conf-6/okno-conf-6-04.png', 'title':'Окно с двумя вертикальными и одним горизонтальным импостами,створка слева с левым открыванием,створка в центре с правым открыванием,поворотно-откидная створка справа с правым открыванием'}
    ],
    '7': [
      {'src':''+imgSrc+'door-conf-1/door-conf-1-01.png', 'title':'Дверь балконная с правым открыванием'},
      {'src':''+imgSrc+'door-conf-1/door-conf-1-02.png', 'title':'Дверь балконная поворотно-откидная с правым открыванием'},
      {'src':''+imgSrc+'door-conf-1/door-conf-1-03.png', 'title':'Дверь балконная с левым открыванием'},
      {'src':''+imgSrc+'door-conf-1/door-conf-1-04.png', 'title':'Дверь балконная поворотно-откидная с левым открыванием'}
    ],
    '8': [
      {'src':''+imgSrc+'door-conf-2/door-conf-2-01.png', 'title':'Дверь балконная с левым открыванием'},
      {'src':''+imgSrc+'door-conf-2/door-conf-2-02.png', 'title':'Дверь балконная с правым открыванием'},
      {'src':''+imgSrc+'door-conf-2/door-conf-2-03.png', 'title':'Дверь балконная с левым поворотно-откидным открыванием'},
      {'src':''+imgSrc+'door-conf-2/door-conf-2-04.png', 'title':'Дверь балконная с правым поворотно-откидным открыванием'}
    ],
    '9': [
      {'src':''+imgSrc+'door-conf-3/door-conf-3-01.png', 'title':'Балконная дверь с левым открыванием для высоких проемов'},
      {'src':''+imgSrc+'door-conf-3/door-conf-3-02.png', 'title':'Балконная дверь с правым открыванием для высоких проемов'},
      {'src':''+imgSrc+'door-conf-3/door-conf-3-03.png', 'title':'Балконная дверь с левым поворотно-откидным открыванием для высоких проемов'},
      {'src':''+imgSrc+'door-conf-3/door-conf-3-04.png', 'title':'Балконная дверь с правым поворотно-откидным открыванием для высоких проемов'}
    ],
    '10': [
      {'src':''+imgSrc+'door-conf-4/door-conf-4-01.png', 'title':'Балконная дверь с левым открыванием для высоких проемов'},
      {'src':''+imgSrc+'door-conf-4/door-conf-4-02.png', 'title':'Балконная дверь с правым открыванием для высоких проемов'},
      {'src':''+imgSrc+'door-conf-4/door-conf-4-03.png', 'title':'Балконная дверь с левым поворотно-откидным открыванием для высоких проемов'},
      {'src':''+imgSrc+'door-conf-4/door-conf-4-04.png', 'title':'Балконная дверь с правым  поворотно-откидным открыванием для высоких проемов'}
    ],
    '11': [
      {'src':''+imgSrc+'door-conf-5/door-conf-5-01.png', 'title':'Распашные двери'},
      {'src':''+imgSrc+'door-conf-5/door-conf-5-02.png', 'title':'Высокая распашная дверь'},
      {'src':''+imgSrc+'door-conf-5/door-conf-5-03.png', 'title':'Распашные двери с сэндвичами'},
      {'src':''+imgSrc+'door-conf-5/door-conf-5-04.png', 'title':'Высокая распашная дверь с сэндвичами'},
      {'src':''+imgSrc+'door-conf-5/door-conf-5-05.png', 'title':'Распашная дверь с одной открывающейся частью'}
    ],
    '12': [
      {'src':''+imgSrc+'door-conf-5/door-conf-5-01.png', 'title':'Распашные двери'},
      {'src':''+imgSrc+'door-conf-5/door-conf-5-02.png', 'title':'Высокая распашная дверь'},
      {'src':''+imgSrc+'door-conf-5/door-conf-5-03.png', 'title':'Распашные двери с сэндвичами'},
      {'src':''+imgSrc+'door-conf-5/door-conf-5-04.png', 'title':'Высокая распашная дверь с сэндвичами'},
      {'src':''+imgSrc+'door-conf-5/door-conf-5-05.png', 'title':'Распашная дверь с одной открывающейся частью'}
    ],
    '13': [
      {'src':''+imgSrc+'door-conf-5/door-conf-5-01.png', 'title':'Распашные двери'},
      {'src':''+imgSrc+'door-conf-5/door-conf-5-02.png', 'title':'Высокая распашная дверь'},
      {'src':''+imgSrc+'door-conf-5/door-conf-5-03.png', 'title':'Распашные двери с сэндвичами'},
      {'src':''+imgSrc+'door-conf-5/door-conf-5-04.png', 'title':'Высокая распашная дверь с сэндвичами'},
      {'src':''+imgSrc+'door-conf-5/door-conf-5-05.png', 'title':'Распашная дверь с одной открывающейся частью'}
    ],
    '14': [
      {'src':''+imgSrc+'door-conf-5/door-conf-5-01.png', 'title':'Распашные двери'},
      {'src':''+imgSrc+'door-conf-5/door-conf-5-02.png', 'title':'Высокая распашная дверь'},
      {'src':''+imgSrc+'door-conf-5/door-conf-5-03.png', 'title':'Распашные двери с сэндвичами'},
      {'src':''+imgSrc+'door-conf-5/door-conf-5-04.png', 'title':'Высокая распашная дверь с сэндвичами'},
      {'src':''+imgSrc+'door-conf-5/door-conf-5-05.png', 'title':'Распашная дверь с одной открывающейся частью'}
    ],
    '15': [
      {'src':''+imgSrc+'razdvizhka-01.png', 'title':'Раздвижное окно 2 створки'}
    ],
    '16': [
      {'src':''+imgSrc+'razdvizhka-02.png', 'title':'Раздвижное окно 3 створки'}
    ],
    '17': [
      {'src':''+imgSrc+'razdvizhka-03.png', 'title':'Раздвижное окно 4 створки'}
    ],
    '18': [
      {'src':''+imgSrc+'razdvizhka-04.png', 'title':'Раздвижная дверь 2 створки'}
    ]
  }

  $('.calculator__options--okna').on('click', function() {
    $('.calculator-form').removeClass('doors-template');
    $('.calculator-form').removeClass('razdvizhka-template');
  });

  function calculatorForm(el) {
    var id = $(el).data('id');
    var editSrc = $('.price__img').attr('src');
    var optionSrc = $(el).attr('src');

    var imgContainer = $('.construction__img-container');
    var activeImg = 'calculator-form__img--active';

    var width = $(el).data('width');
    var height = $(el).data('height');
    var editWidth = $('.price .width').val();
    var editHeight = $('.price .height').val();
    var editAmount = $('.price .amount').val();
    var widthElem = $('.construction .width');
    var heightElem = $('.construction .height');
    var amountElem = $('.construction .amount');

    $('.calculator-form__conf').empty();
    imgContainer.empty();

    $.each(template, function(key, data) {
      if (id == key) {
        $.each(data, function(index, value) {
          $('.calculator-form__conf').append('<img class="calculator-form__img" src="'+ value['src'] +'" alt="'+ value['title'] +'" title="'+ value['title'] +'">');
        });

        widthElem.val(width);
        heightElem.val(height);

        var img = $('.calculator-form__img');
        var match = $('.calculator-form__img[src*="'+optionSrc+'"]');
        var editMatch = $('.calculator-form__img[src*="'+editSrc+'"]');
        var options = $('.construction__dop select');

        if (editMatch.length) {
          imgContainer.empty();
          img.removeClass(activeImg);
          editMatch.addClass(activeImg);

          var option = $('.price__dop .price__option').map(function() {
            return $(this).val();
          }).toArray();

          $.each(option, function(index, value) {
            $.each(options, function(index, el) {
              $(this).val(option[index])
            });
          });

          imgContainer.append('<img class="construction__img" src="' + editMatch.attr('src') + '">');
          widthElem.val(editWidth);
          heightElem.val(editHeight);
          amountElem.val(editAmount);
        }

        if (match.length) {
          imgContainer.empty();
          img.removeClass(activeImg);
          match.addClass(activeImg);

          imgContainer.append('<img class="construction__img" src="'+ match.attr('src') +'" alt="'+ match.attr('alt') +'" title="'+ match.attr('title') +'">');
          widthElem.val(width);
          heightElem.val(height);
        }

        img.on('click', function() {
          imgContainer.empty();
          img.removeClass(activeImg);
          $(this).addClass(activeImg);

          imgContainer.append('<img class="construction__img" src="'+ $(this).attr('src') +'" alt="'+ $(this).attr('alt') +'" title="'+ $(this).attr('title') +'">');
          $('.calculator__type').val($('.construction__img-container img').attr('title'));
        });

        var firstImgSrc = $('.calculator-form__img:first-of-type').attr('src');
        $('.calculator-form__img:first-of-type').append('<img class="construction__img" src="' + firstImgSrc + '">');
      }
      else {
        return;
      }
    });
    $('.calculator__type').val($('.construction__img-container img').attr('title'));
  }

  $('.calculator__option').on('click', function() {
    el = $(this);
    $('.calculator-form').removeClass('edit-data');
    $('.calculator-form').trigger('reset');
    calculatorForm(el);
  });

  $('.price__edit').on('click', function() {
    el = $(this);
    $('.calculator-form').removeClass('doors-template');
    $('.calculator-form').removeClass('razdvizhka-template');
    $('.calculator-form').addClass('edit-data');
    calculatorForm(el);
  });

  $('.calculator__options--doors').on('click', function() {
    $('.calculator-form').addClass('doors-template');
  });

  $('.calculator__options--razdvizhka').on('click', function() {
    $('.calculator-form').addClass('razdvizhka-template');
  });


  var clocks = [];

  var clock1 = $('.clock-1').FlipClock({
    countdown: true,
    autoStart: true,
    language:'ru-ru',
  });

  var clock2 = $('.clock-2').FlipClock({
    countdown: true,
    autoStart: true,
    language:'ru-ru',
  });

  clock1.setTime(86400);
  clock1.setCountdown(true);
  clock1.start();

  clock2.setTime(86400);
  clock2.setCountdown(true);
  clock2.start();

  clocks.push(clock1);
  clocks.push(clock2);


  //Telefone mask for form
  $('.phone_input').mask('+7 (999)-999-99-99');


  popupForm.submit(function() {
    var th = $(this);
    $.ajax({
      type: 'POST',
      url: 'mail.php',
      data: th.serialize()
    }).done(function() {
      $('#popup_form').css('max-height', '0');
      setTimeout(function() {
        $('#popup_form').css('max-height', '454px');
        $('#popup_form form').fadeOut(100);
      }, 500);
      $('.popup_form--active').fadeIn(800);
      setTimeout(function() {
        $('.popup_form--active').fadeOut(800);
        $('#popup_form form').fadeIn(900);
        magnificPopup.close();
        th.trigger('reset');
      }, 7000);
    });
    return false;
  });

  forms.submit(function() {
    var th = $(this);
    $.ajax({
      type: 'POST',
      url: 'mail.php',
      data: th.serialize()
    }).done(function() {
      magnificPopup.close();
      alert("Спасибо за заявку! Мы свяжемся с вами в ближайшее время");
      setTimeout(function() {
        th.trigger('reset');
      }, 1000);
    });
    return false;
  });

  calculatorForms.submit(function() {
    var th = $(this);
    $.ajax({
      type: 'POST',
      url: 'mail.php',
      data: th.serialize()
    }).done(function() {
      magnificPopup.close();
      alert("Спасибо за заявку! Мы рассчитаем стоимость вашей конфигурации и отправим ее в ближайшее время");
      setTimeout(function() {
        th.trigger('reset');
      }, 1000);
    });
    return false;
  });


  $('.loader_inner').fadeOut();
  $('.loader').delay(400).fadeOut('slow');


  var swiper1 = new Swiper ('.s1', {
    loop: 'true',
    lazy: true,
    preloadImages: false,
    direction: 'horizontal',
    autoplay: {
      delay: 4000,
      disableOnInteraction: false
    },
    slidesPerView: 1,
    breakpoints: {
      767: {
        slidesPerView: 1
      }
    }
  });

  var swiper2 = new Swiper ('.s2', {
    speed: 600,
    loop: 'true',
    loopedSlides: 3,
    direction: 'horizontal',
    grabCursor: 'true',
    autoplay: {
      delay: 2000,
      disableOnInteraction: false
    },
    spaceBetween: 5,
    slidesPerGroup: 3,
    slidesPerView: 'auto',
    breakpoints: {
      767: {
        slidesPerView: 1,
        slidesPerGroup: 1,
        loopedSlides: 1
      }
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  });

  var homeGalleryThumbs = new Swiper('.home-gallery__thumbs', {
    spaceBetween: 40,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
  });

  var homeGallery = new Swiper('.s3', {
    spaceBetween: 10,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    thumbs: {
      swiper: homeGalleryThumbs
    }
  });

  var swiper3 = new Swiper ('.s', {
    speed: 900,
    loop: 'true',
    direction: 'horizontal',
    grabCursor: 'true',
    autoplay: {
      delay: 2000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    slidesPerGroup: 5,
    spaceBetween: 5,
    breakpoints: {
      767: {
        slidesPerView: 1,
        slidesPerGroup: 1,
        loopedSlides: 1
      }
    },
    navigation: {
      nextEl: '.swiper-button-next--first',
      prevEl: '.swiper-button-prev--first',
    }
  });

  $('.s5').each(function(index, element) {
    var swiper5 = new Swiper(this, {
      direction: 'horizontal',
      grabCursor: 'true',
      slidesPerView: 'auto',
      spaceBetween: 30,
      scrollbar: {
        el: '.swiper-scrollbar',
      },
      breakpoints: {
        767: {
          slidesPerView: 1,
          slidesPerGroup: 1,
          loopedSlides: 1,
          centeredSlides: true
        }
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      }
    });
  });

  var swiper6 = new Swiper ('.s6', {
    direction: 'horizontal',
    grabCursor: true,
    autoplay: {
      delay: 6000,
      disableOnInteraction: false
    },
    centeredSlides: true,
    slidesPerView: 1,
    spaceBetween: 0,
    scrollbar: {
      el: '.swiper-scrollbar',
    }
  });

  var swiper7 = new Swiper ('.s7', {
    direction: 'horizontal',
    grabCursor: 'true',
    autoplay: {
      delay: 6000,
      disableOnInteraction: false
    },
    slidesPerView: 1,
    spaceBetween: 5,

    scrollbar: {
      el: '.swiper-scrollbar',
    }
  });

  var swiper8 = new Swiper ('.s8', {
    direction: 'horizontal',
    grabCursor: 'true',
    autoplay: {
      delay: 6000,
      disableOnInteraction: false
    },
    slidesPerView: 1,
    spaceBetween: 5,

    scrollbar: {
      el: '.swiper-scrollbar',
    }
  });


  $('.zamer_wrapper').magnificPopup({
      type: 'inline',
      midClick: true,
      removalDelay: 500,
      callbacks: {
        beforeOpen: function() {
           this.st.mainClass = this.st.el.attr('data-effect');
        }
      }
  });

  $('.popup').magnificPopup({
    type: 'inline',
    midClick: true,
    removalDelay: 500,
    fixedContentPos: false,
    fixedBgPos: true,
    callbacks: {
      beforeOpen: function() {
        this.st.mainClass = this.st.el.attr('data-effect');
      },
      beforeClose: function() {
        if ($('.edit-data').length) {
          var editDataSrc = $('.edit-data .construction__img-container .construction__img').attr('src');
          var editDataTitle = $('.edit-data .construction__img-container .construction__img').attr('title');
          var option = $('.price__dop .price__option');
          var params = $('.price__params .price__option');
          var priceImg = $('.price__img');
          var type = $('.price__type');

          var mainOptions = $('.construction__params input').map(function() {
            return $(this).val();
          }).toArray();

          var options = $('.construction__dop select').map(function() {
            return $(this).val();
          }).toArray();

          $.each(options, function(index, value) {
            option.each(function(index, el) {
              $(this).val(options[index])
            });
          });

          $.each(mainOptions, function(index, value) {
            params.each(function(index, el) {
              $(this).val(mainOptions[index])
            });
          });

          priceImg.attr({
            src: editDataSrc,
            alt: editDataTitle,
            title: editDataTitle
          });

          type.val(priceImg.attr('title'));
        }
        else {
          return;
        } 
      }
    }
  });

  $('.popup-youtube').magnificPopup({
      type: 'iframe',
      mainClass: 'mfp-fade',
      removalDelay: 160,
      preloader: 'true'
  });

  var src = $('.swiper_slider3 .swiper-slide-active img').attr('src');
  function firstImgSrc() {
    $('#popup_gallery_init').attr('href', src);
  }
  firstImgSrc();


  $('.mfp-gallery').magnificPopup({
    mainClass: 'mfp-zoom-in',
    type: 'image',
    tLoading: '',
    gallery:{
      enabled: true,
    },
    removalDelay: 300,
    callbacks: {
      beforeChange: function() {
        this.items[0].src = this.items[0].src + '?=' + Math.random(); 
      },
      open: function() {
        $.magnificPopup.instance.next = function() {
          var self = this;
          self.wrap.removeClass('mfp-image-loaded');
          setTimeout(function() { $.magnificPopup.proto.next.call(self); }, 120);
        }
        $.magnificPopup.instance.prev = function() {
          var self = this;
          self.wrap.removeClass('mfp-image-loaded');
          setTimeout(function() { $.magnificPopup.proto.prev.call(self); }, 120);
        }
      },
      imageLoadComplete: function() { 
        var self = this;
        setTimeout(function() { self.wrap.addClass('mfp-image-loaded'); }, 16);
      }
    }
  });

  $('.otziv-gallery').magnificPopup({
    mainClass: 'mfp-zoom-in',
    type: 'image',
    image: {
      verticalFit: true
    },
    tLoading: '',
    gallery:{
      enabled: true,
    },
    removalDelay: 300,
    callbacks: {
      beforeChange: function() {
        this.items[0].src = this.items[0].src + '?=' + Math.random(); 
      },
      open: function() {
        $.magnificPopup.instance.next = function() {
          var self = this;
          self.wrap.removeClass('mfp-image-loaded');
          setTimeout(function() { $.magnificPopup.proto.next.call(self); }, 120);
        }
        $.magnificPopup.instance.prev = function() {
          var self = this;
          self.wrap.removeClass('mfp-image-loaded');
          setTimeout(function() { $.magnificPopup.proto.prev.call(self); }, 120);
        }
      },
      imageLoadComplete: function() { 
        var self = this;
        setTimeout(function() { self.wrap.addClass('mfp-image-loaded'); }, 16);
      }
    }
  });
});