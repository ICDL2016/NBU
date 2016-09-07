$(window).load(function () {
  var $initialOffset;
  setTimeout(function () {
    $initialOffset = $('.header').outerHeight() + 10;
    if ($('.header-container').hasClass('sticky-fix')) {
      $('.main').css('padding-top', $('.header').outerHeight() + 10 + 'px');
    } else {
      $('.main').css('padding-top', $initialOffset + 'px');
    }
  }, 50);

  $(window).scroll(function () {
    if ($('body').outerHeight() > $(window).outerHeight() + 100) {
      if ($(this).scrollTop() > 30) {
        $('.header-container').not('.sticky-fix').addClass("sticky");
        if (!$('.header-container').hasClass('sticky-fix')) {
          $('.main').css('padding-top', $initialOffset + 'px');
        }
      }
      else {
        $('.header-container').not('.sticky-fix').removeClass("sticky");
        if (!$('.header-container').hasClass('sticky-fix')) {
          $('.main').css('padding-top', $initialOffset + 'px');
        }
      }
    }
  });

})

$(function () {

  $('.fancybox').fancybox();


  //фикс панельки битрикса
  if ($('#bx-panel').length) {
    var offset;
    if ($('#bx-panel').hasClass('bx-panel-folded')) {
      offset = 39;
    } else {
      offset = 157;
    }
    $('.header__actions').css('top', offset + 15 + 'px');
    $('.header__nav').css('top', offset + 'px');
    $(window).scroll(function (e) {
      var scrollTop = $(this).scrollTop();
      if (scrollTop <= offset) {
        $('.header-container').css('margin-top', -scrollTop + 'px')
        $('.header__actions').css('margin-top', -scrollTop + 'px')
        $('.header__nav').css('margin-top', -scrollTop + 'px')
      }
      if (scrollTop > offset) {
        $('.header-container').css('margin-top', -offset + 'px')
        $('.header__actions').css('margin-top', -offset + 'px')
        $('.header__nav').css('margin-top', -offset + 'px')
      }
    });
  }

  ////фикс панельки битрикса
  //if ($('#bx-panel').length) {
  //  var offset = $('.header-container').offset().top;
  //  $('.header__actions').css('top', offset + 15 + 'px');
  //  $('.header__nav').css('top', offset + 'px');
  //  $(window).scroll(function (e) {
  //    var scrollTop = $(this).scrollTop();
  //    if (scrollTop <= offset) {
  //      $('.header-container').css('margin-top', -scrollTop + 'px')
  //      $('.header__actions').css('margin-top', -scrollTop + 'px')
  //      $('.header__nav').css('margin-top', -scrollTop + 'px')
  //    }
  //    if (scrollTop > offset) {
  //      $('.header-container').css('margin-top', -offset + 'px')
  //      $('.header__actions').css('margin-top', -offset + 'px')
  //      $('.header__nav').css('margin-top', -offset + 'px')
  //    }
  //  });
  //}

  //фикс высоты курсов
  if ($('.courses').length) {
    var coursesHeight = $(window).height() - $('.courses').offset().top - $('.footer').height()
    $('.courses').height(coursesHeight);
    $(window).resize(function () {
      var coursesHeight = $(window).height() - $('.courses').offset().top - $('.footer').height()
      $('.courses').height(coursesHeight);
    });
  }
  //$(".header-container").sticky({ });
  //console.log($('body').outerHeight(), $(window).outerHeight());


  //слайдинг надписей на главной
  var i = 1, $sky = $('.sky');
  $sky.eq(0).fadeIn('slow')
  var interval = setInterval(function () {
    if (i == 3) {
      i = 0;
    }
    $sky.eq(i).fadeIn('slow').siblings().fadeOut();
    ++i;
  }, 4000);

  //тогглер курсов
  $('.js-toggle-title').each(function () {
    $(this).on('click', function (e) {
      e.preventDefault();
      $(this).parent().siblings().find('.js-toggle-item').slideUp('fast');
      $(this).parent().siblings().find('.js-toggle-title').removeClass('active');
      $(this).toggleClass('active').parent().find('.js-toggle-item').slideToggle('fast');
    })
  })

  //тогглер табов в навигации
  $('.js-authorize').on('click', function (e) {
    e.preventDefault();
    $('.js-tabs').slideToggle();
    $(this).hide();
  })


  // тогглер меню
  $('.js-toggler').on('click tap', function () {
    $(this).toggleClass('active');
    $('.nav').toggleClass('active');
  })

  // табы
  $('.js-tabs').on('click', '.js-tabs-head', function () {
    var $current = $(this);
    $current.addClass('active').siblings().removeClass('active');
    $current.closest('.js-tabs').find('.js-tabs-item').removeClass('active').eq($current.index()).addClass('active');
  })

  // языки
  $('.click-nav > ul').toggleClass('no-js js');
  $('.click-nav .js ul').hide();
  $('.click-nav .js').click(function (e) {
    $('.click-nav .js ul').slideToggle(200);
    $('.clicker').toggleClass('active');
    $('.click-nav').toggleClass('click-active');
    e.stopPropagation();
  });
  $(document).click(function () {
    if ($('.click-nav .js ul').is(':visible')) {
      $('.click-nav .js ul', this).slideUp();
      $('.clicker').removeClass('active');
      $('.click-nav').removeClass('click-active');
    }
  });

  $('.js-filters-block').each(function () {
    var $item = $(this);
    var $optionsBlock = $('.filters-block__options', $item);
    var $options = $('.filters-block__item', $item);
    var $optionActive = $('.active', $item);
    var $input = $('input', $item);

    if ($optionActive.length) {
      $input.val($optionActive.data('val'));
    }

    $optionsBlock.on('click', '.filters-block__item', function () {
      var $val = $(this).data('val');
      $('.js-clear-filters').fadeIn();
      $(this).addClass('active').siblings().removeClass('active');
      $input.val($val);
    });

  })
  $('.js-clear-filters').on('click', function (e) {
    e.preventDefault();
    $(this).fadeOut().closest('.js-filters').find('input[type="hidden"]').val('');
    $(this).closest('.js-filters').find('.filters-block__item').removeClass('active');
  });

  $('.js-filters-close').on('click', function (e) {
    e.preventDefault();
    $(this).closest('.js-filters').fadeOut();
    $('.js-filters-call').toggleClass('active');
    $('.page-title').toggle();
  });

  $('.js-filters-call').on('click', function (e) {
    e.preventDefault();
    $(this).toggleClass('active');
    $('.fa-user').removeClass('active');
    $('.page-title').toggle();
    $('.js-filters').fadeToggle();
  });


//  функционал таблиц
//  $('.documents_table__row').not('.documents_table__row--additional').on('click', function () {
//    $(this).toggleClass('documents_table__row--active').siblings().removeClass('documents_table__row--active')
//  })

  $('body').on('click', '.documents_table--main > tbody > .documents_table__row:not(.documents_table__row--additional)', function (e) {
    $(this).toggleClass('documents_table__row--active').siblings().removeClass('documents_table__row--active')
  })

  $('body').on('click', '.js-toggle-row', function (e) {
    e.preventDefault();
    $(this).closest('.documents_table__row--additional').prev().toggleClass('documents_table__row--active').siblings().removeClass('documents_table__row--active')
  })

  $('body').on('click', '.documents_table__row:not(.documents_table__row--additional) select', function (e) {
    e.stopPropagation()
  })

  var $table = $('.documents_table--main');
  $('.js-add-document-row').on('click', function (e) {
    e.preventDefault()
    $table.append('' +
      '<tr class="documents_table__row ">' +
      '<td class="documents_table__cell">9</td> ' +
      '<td class="documents_table__cell">23.04.2016</td>' +
      '<td class="documents_table__cell">-</td> ' +
      '<td class="documents_table__cell" contenteditable="true"><span></span></td>' +
      '<td class="documents_table__cell" contenteditable="true"><span></span></td>' +
      '<td class="documents_table__cell" contenteditable="true"><span></span></td>' +
      '</tr>' +
      '<tr class="documents_table__row documents_table__row--additional ">' +
      '<td class="documents_table__cell" colspan="6">' +
      '<table class="documents_table">' +
      '<tr class="documents_table__row">' +
      '<th class="documents_table__heading"></th>' +
      '<th class="documents_table__heading">Название курса</th>' +
      '<th class="documents_table__heading w130">Вид документа</th>' +
      '<th class="documents_table__heading w150">Номер документа</th>' +
      '<th class="documents_table__heading w130">Дата начала</th>' +
      '<th class="documents_table__heading w130">Дата окончания</th>' +
      '</tr>' +
      '<tr class="documents_table__row">' +
      '<td class="documents_table__cell"></td> ' +
      '<td class="documents_table__cell" contenteditable="true"><span></span></td>' +
      '<td class="documents_table__cell">-</td>' +
      '<td class="documents_table__cell" contenteditable="true"><span></span></td>' +
      '<td class="documents_table__cell" contenteditable="true"><span></span></td>' +
      '<td class="documents_table__cell" contenteditable="true"><span></span></td>' +
      '</tr>' +
      '</table>' +
      '<table class="documents_table">' +
      '<tr class="documents_table__row">' +
      '<th class="documents_table__heading"></th>' +
      '<th class="documents_table__heading w100">Индекс</th>' +
      '<th class="documents_table__heading w100">Страна</th>' +
      '<th class="documents_table__heading w100">Область</th>' +
      '<th class="documents_table__heading w100">Город</th>' +
      '<th class="documents_table__heading">Улица</th>' +
      '<th class="documents_table__heading w70">Дом</th>' +
      '<th class="documents_table__heading w70">Корпус</th>' +
      '<th class="documents_table__heading w100">Квартира</th>' +
      '</tr>' +
      '<tr class="documents_table__row">' +
      '<td class="documents_table__cell"></td>' +
      '<td class="documents_table__cell" contenteditable="true"><span></span></td>' +
      '<td class="documents_table__cell" contenteditable="true"><span></span></td>' +
      '<td class="documents_table__cell" contenteditable="true"><span></span></td>' +
      '<td class="documents_table__cell" contenteditable="true"><span></span></td>' +
      '<td class="documents_table__cell" contenteditable="true"><span></span></td>' +
      '<td class="documents_table__cell" contenteditable="true"><span></span></td>' +
      '<td class="documents_table__cell" contenteditable="true"><span></span></td>' +
      '<td class="documents_table__cell" contenteditable="true"><span></span></td>' +
      '</tr>' +
      '</table>' +
      '<table class="documents_table">' +
      '<tr class="documents_table__row">' +
      '<th class="documents_table__heading"></th>' +
      '<th class="documents_table__heading">Комментарий</th>' +
      '<th class="documents_table__heading w160">Идентификатор</th>' +
      '</tr>' +
      '<tr class="documents_table__row">' +
      '<td class="documents_table__cell"></td>' +
      '<td class="documents_table__cell" contenteditable="true"><span></span></td>' +
      '<td class="documents_table__cell" contenteditable="true"><span></span></td>' +
      '</tr>' +
      '<tr class="documents_table__row documents_table__row--padding">' +
      '<th class="documents_table__heading js-toggle-row"></th>' +
      '<th class="documents_table__heading" colspan="2">' +
      '<div class="pull-left">' +
      '<a class="btn" href="">Изменить</a>' +
      '<a class="btn" href="">Почта</a>' +
      '<a class="btn" href="">Печать</a>' +
      '</div>' +
      '<div class="pull-right">' +
      '<a class="btn" href="">Готов</a>' +
      '<a class="btn" href="">Выдан</a>' +
      '</div>' +
      '</th>' +
      '</tr>' +
      '</table>' +
      '</td>' +
      '</tr>' +
      '')
  })
})
