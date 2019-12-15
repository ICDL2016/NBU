<?php require_once '_header.php'; ?>
  <div class="video onecourse-video">
    <div class="video-wrapper onecourse-video__wrapper">
      <div class="container">
        <div class="video-contacts onecourse-video__contacts">
          <div class="video-phone">
            <i class="fa fa-phone"></i>
            <a href="tel:88003507358">8 800 350 73 58</a>
          </div>
          <div class="header-social video-social">
            <a href="" class="header-social__link">
              <i class="fa fa-pinterest-p"></i>
            </a>
            <a href="" class="header-social__link">
              <i class="fa fa-instagram"></i>
            </a>
            <a href="" class="header-social__link">
              <i class="fa fa-twitter"></i>
            </a>
            <a href="" class="header-social__link">
              <i class="fa fa-facebook"></i>
            </a>
            <a href="" class="header-social__link">
              <i class="fa fa-odnoklassniki"></i>
            </a>
            <a href="" class="header-social__link">
              <i class="fa fa-vk"></i>
            </a>
          </div>
        </div>

        <div class="video-titles onecourse-titles">
          <span class="video-title onecourse-video__title">ДИСТАНЦИОННОЕ</span><br>
          <span class="video-title onecourse-video__title">ОБУЧЕНИЕ С ВЫДАЧЕЙ</span><br>
          <span class="video-title video-title__desc onecourse-video__title">ОФИЦИАЛЬНОГО ДИПЛОМА</span>
          <span class="video-title video-title__mob">ОФИЦИАЛЬНОГО ДИПЛОМА</span>
        </div>

      </div>

      <div class="video-block prof-video__block onecourse-video__block" onclick="play1(event)">
        <?php require_once 'img/misc/play.svg'; ?>
      </div>

      <div class="container onecourse-offer__wrapper onecourse-offer__wrapper-desc">
        <div class="video-offer prof-offer onecourse-offer">
          <div class="prof-offer__title onecourse-offer__title">Курс обучения</div>
          <div class="prof-offer__name onecourse-offer__name">
            <img src="img/one-course/icon.png" alt="icon">
            <span>Маркетинговые исследования</span>
          </div>
          <div class="button onecourse-button video-button">Начать обучение бесплатно</div>
          <div class="prof-date onecourse-date">Сегодня 08.09.2019</div>
        </div>
      </div>

    </div>
    <div id="divPlayer1"></div>
  </div>

  <div class="container onecourse-offer__wrapper onecourse-offer__wrapper-mob">
    <div class="video-offer prof-offer onecourse-offer onecourse-offer__mob">
      <div class="prof-offer__title onecourse-offer__title">Курс обучения</div>
      <div class="prof-offer__name onecourse-offer__name">
        <img src="img/one-course/icon.png" alt="icon">
        <span>Маркетинговые исследования</span>
      </div>
      <div class="button onecourse-button video-button">Начать обучение бесплатно</div>
      <div class="prof-date onecourse-date">Сегодня 08.09.2019</div>
    </div>
  </div>

  <div class="onecourse-auth">
    <div class="container">
      <div class="onecourse-auth__subtitle">Курс обучения</div>
      <div class="title onecourse-auth__title">Маркетинговые исследования</div>

      <div class="onecourse-auth__blocks">
        <div class="onecourse-auth__block">
          <div class="onecourse-auth__name">Частей и тестов</div>
          <div class="onecourse-auth__img">
            <img src="img/auth/1.png" alt="icon">
          </div>
          <div class="onecourse-auth__oldnum"></div>
          <div class="onecourse-auth__num">12</div>
        </div>

        <div class="onecourse-auth__block">
          <div class="onecourse-auth__name">Объем курса</div>
          <div class="onecourse-auth__img">
            <img src="img/auth/2.png" alt="icon">
          </div>
          <div class="onecourse-auth__oldnum"></div>
          <div class="onecourse-auth__num">60 ч.</div>
        </div>

        <div class="onecourse-auth__block">
          <div class="onecourse-auth__name">Стоимость курса</div>
          <div class="onecourse-auth__img">
            <img src="img/auth/3.png" alt="icon">
          </div>
          <div class="onecourse-auth__oldnum onecourse-auth__oldnum-course">59000</div>
          <div class="onecourse-auth__num onecourse-auth__num-course">29400 р.</div>
        </div>
      </div>

      <div class="button video-button onecourse-auth__button">Начать обучение бесплатно</div>
      <div class="onecourse-auth__date">Сегодня 25.04.2019</div>
    </div>
  </div>

  <div class="mt-5"></div>
  <div class="knowledge prof-descr">
    <div class="container">
      <div class="knowledge-about">
        Администратор Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci, aperiam asperiores blanditiis consequatur corporis culpa doloremque eligendi esse ipsum libero maxime nemo omnis quibusdam, sapiente sint tenetur? Eos, optio.
      </div>

      <div class="knowledge-img">
        <a href="img/diploma/diploma3.png" class="fancybox-buttons" data-fancybox="gallery">
          <img src="img/diploma/diploma3.png" alt="photo">
        </a>
        <a href="img/diploma/diploma3.png" class="fancybox-buttons" data-fancybox="gallery">
          <img src="img/diploma/diploma3.png" alt="photo">
        </a>
        <a href="img/diploma/diploma3.png" class="fancybox-buttons" data-fancybox="gallery">
          <img src="img/diploma/diploma3.png" alt="photo">
        </a>
      </div>

      <div class="knowledge-about">
        Администратор Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci, aperiam asperiores blanditiis consequatur corporis culpa doloremque eligendi esse ipsum libero maxime nemo omnis quibusdam, sapiente sint tenetur? Eos, optio.
      </div>
    </div>
  </div>

  <div class="mt-5"></div>
  <div class="container">
    <div class="study-programm__subtitle">Программма обучения по курсу</div>
    <div class="title study-programm__title">МАРКЕТИНГОВЫЕ ИССЛЕДОВАНИЯ</div>
  </div>
<?php require_once '_study-programm.php'; ?>

  <div class="mt-5"></div>
<?php require_once '_diploma.php'; ?>
<?php require_once '_about.php'; ?>
  <div class="mt-5"></div>
<?php require_once '_teachers.php'; ?>
  <div class="mt-5"></div>
<?php require_once '_clients.php'; ?>
  <div class="mt-5"></div>
<?php require_once '_profit.php'; ?>

  <div class="mt-5"></div>
<?php require_once '_study.php'; ?>

  <div class="onecourse-start">
    <div class="container position-relative">
      <img src="img/one-course/onecourse-pair.png" alt="pair" class="onecourse-start__img">
      <div class="onecourse-start__subtitle">Курс обучения</div>
      <div class="onecourse-start__title">
        <img src="img/start/start.png" alt="icon">
        <span>Маркетинговые <br> исследования</span>
      </div>

      <div class="onecourse-start__form">
        <img src="img/one-course/onecourse-border.png" alt="border" class="onecourse-start__border">
        <div class="button onecourse-start__button video-button">Начать обучение бесплатно</div>
        <div class="onecourse-start__date">Сегодня 08.09.2019</div>
        <div class="onecourse-start__textmob">
          Нажмите на кнопку "Начать обучение бесплатно" и вы сразу перейдите к курсе обучения
        </div>
      </div>

      <div class="more-call onecourse-start__call">
        <div class="more-img">
          <img src="img/more/operator1.png" alt="call">
        </div>
        <div class="more-phone">
          <i class="fa fa-phone"></i>
          <div class="more-phone__title">Позвонить нам</div>
          <a class="more-phone__number" href="tel:88003507358">8 800 350 73 58</a>
          <div class="more-phone__free">Звонок бесплатный</div>
        </div>
        <div class="more-img">
          <img src="img/more/operator2.png" alt="call">
        </div>
      </div>
    </div>
  </div>

  <div class="mt-5"></div>
  <div class="choose-course">
    <div class="container">
      <div class="title choose-course__title onecourse-choose__title">Другие курсы раздела <span>Маркетинг и реклама</span></div>
    </div>
    <div class="choose-course">
      <div class="choose-course__blocks">
        <div class="choose-course__block choose-course__block1">
          <div class="choose-course__descr">
            Маркетинговые исследования
          </div>
        </div>
        <div class="choose-course__block choose-course__block2">
          <div class="choose-course__descr">
            Управление и организация
            услуг в сфере маркетинга и рекламы
          </div>
        </div>
        <div class="choose-course__block choose-course__block3">
          <div class="choose-course__descr">
            Маркетинговые исследования
          </div>
        </div>
        <div class="choose-course__block choose-course__block4">
          <div class="choose-course__descr">
            Маркетинговые исследования
          </div>
        </div>
        <div class="choose-course__block choose-course__block4">
          <div class="choose-course__descr">
            Маркетинговые исследования
          </div>
        </div>
        <div class="choose-course__block choose-course__block4">
          <div class="choose-course__descr">
            Маркетинговые исследования
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="mt-5"></div>
  <div class="onecourse-more">
    <div class="container">
      <div class="title choose-course__title onecourse-choose__title">Узнайте больше о профессии</div>
      <div class="title choose-course__title onecourse-choose__subtitle">маркетолога</div>

      <div class="onecourse-buttons">
        <div class="onecourse-more__button">Чем занимаются маркетологи</div>
        <div class="onecourse-more__button">Сколько зарабатывает маркетолог</div>
        <div class="onecourse-more__button">Секреты маркетологов</div>
        <div class="onecourse-more__button">Как начать работать маркетологом без опыта</div>
        <div class="onecourse-more__button">Где найти работу начинающему специалисту по маркетингу</div>
        <div class="onecourse-more__button">Как совершенствовать свои профессиональные навыки маркетолога</div>
      </div>

    </div>
  </div>

<?php require_once '_menu.php'; ?>

<?php require_once '_footer.php'; ?>
<?php require_once '_reviews.php'; ?>

<div class="onecourse-auth">
  <div class="container">
    <div class="onecourse-auth__subtitle">Курс обучения</div>
    <div class="title onecourse-auth__title">Маркетинговые исследования</div>

    <div class="onecourse-auth__blocks">
      <div class="onecourse-auth__block">
        <div class="onecourse-auth__name">Частей и тестов</div>
        <div class="onecourse-auth__img">
          <img src="img/auth/1.png" alt="icon">
        </div>
        <div class="onecourse-auth__oldnum"></div>
        <div class="onecourse-auth__num">12</div>
      </div>

      <div class="onecourse-auth__block">
        <div class="onecourse-auth__name">Объем курса</div>
        <div class="onecourse-auth__img">
          <img src="img/auth/2.png" alt="icon">
        </div>
        <div class="onecourse-auth__oldnum"></div>
        <div class="onecourse-auth__num">60 ч.</div>
      </div>

      <div class="onecourse-auth__block">
        <div class="onecourse-auth__name">Стоимость курса</div>
        <div class="onecourse-auth__img">
          <img src="img/auth/3.png" alt="icon">
        </div>
        <div class="onecourse-auth__oldnum onecourse-auth__oldnum-course">59000</div>
        <div class="onecourse-auth__num onecourse-auth__num-course">29400 р.</div>
      </div>
    </div>

    <div class="button video-button onecourse-auth__button">Начать обучение бесплатно</div>
    <div class="onecourse-auth__date">Сегодня 25.04.2019</div>
  </div>
</div>


<?php require_once '_popup.php'; ?>
<?php require_once '_modal.php'; ?>
<?php require_once '_scripts.php'; ?>
  <script>
      //video
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      var player1;

      function onYouTubeIframeAPIReady() {

          if($(window).width() < 576) {
              player1 = new YT.Player('divPlayer1', {
                  height: '350',
                  width: '100%',
                  videoId: 'd8Oc90QevaI',
              });
          } else if ($(window).width() < 768) {
              player1 = new YT.Player('divPlayer1', {
                  height: '400',
                  width: '100%',
                  videoId: 'd8Oc90QevaI',
              });
          } else if ($(window).width() < 992) {
              player1 = new YT.Player('divPlayer1', {
                  height: '450',
                  width: '100%',
                  videoId: 'd8Oc90QevaI',
              });
          } else {
              player1 = new YT.Player('divPlayer1', {
                  height: '550',
                  width: '100%',
                  videoId: 'd8Oc90QevaI',
              });
          }

      }

      function play1(event) {
          $('.video-wrapper').hide();
          $('#divPlayer1').show();
          $('iframe').css('display', 'block');
          player1.playVideo();
      }

      //модалка

      let popup = document.querySelector('.course-modal');
      var popupHeight = 0;

      $('.study-programm-block').on('click', function () {
          $('.overlay').show();
          $('.course-modal').fadeIn();
          $('body').css('overflow', 'hidden');
          popupHeight = +getComputedStyle(popup).height.replace('px', '');

          if (popupHeight > ($(window).height()-50)) {
              popup.style.overflow = 'scroll';
              popup.style.height = '95%';
          } else {
              popup.style.height = popupHeight + 'px';
          }
      });

      $('.overlay, .popup-close').on('click', function () {
          $('.overlay').fadeOut();
          $('.course-modal').fadeOut();
          $('body').css('overflow', 'visible');
      });

      $('.study-programm-block__more').on('click', function (e) {
          e.preventDefault();
      });

      // ресайзы экрана
      window.onresize = function() {
          if (popup) {
              if (popupHeight > ($(window).height()-50)) {
                  popup.style.overflow = 'scroll';
              }
          }
      };
  </script>
<?php require_once '_end.php'; ?>