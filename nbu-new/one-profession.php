<?php require_once '_header.php'; ?>
  <div class="video catalog-video">
    <div class="video-wrapper prof-video__wrapper">
      <div class="container">
        <div class="video-contacts catalog-video__contacts">
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
      </div>

      <div class="video-block prof-video__block" onclick="play1(event)">
        <?php require_once 'img/misc/play.svg'; ?>
      </div>

      <div class="container prof-offer__wrapper">
        <div class="video-offer prof-offer prof-offer__desc">
          <div class="prof-offer__title">Профессия</div>
          <div class="prof-offer__name">Администратор гостиницы</div>
          <div class="button prof-button video-button">Получить <span>Официальный диплом</span></div>
          <div class="prof-query">Отправить запрос</div>
          <div class="prof-date">Сегодня 08.09.2019</div>
        </div>

      </div>
    </div>
    <div id="divPlayer1"></div>
  </div>

  <div class="video-offer prof-offer prof-offer__mob">
    <div class="prof-offer__title">Профессия</div>
    <div class="prof-offer__name">Администратор гостиницы</div>
    <div class="button prof-button video-button">Получить <span>Официальный диплом</span></div>
    <div class="prof-query">Отправить запрос</div>
    <div class="prof-date">Сегодня 08.09.2019</div>
  </div>

  <div class="mt-5"></div>
  <div class="knowledge prof-descr">
    <div class="container">
      <div class="title knowledge-title">Администратор гостиницы это</div>
      <div class="title knowledge-subtitle">интересная и перспективная профессия</div>

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
<?php require_once '_diploma.php'; ?>
<?php require_once '_about.php'; ?>

  <div class="mt-5"></div>
<?php require_once '_knowledge.php'; ?>
  <div class="mt-5"></div>
<?php require_once '_study.php'; ?>
  <div class="mt-5"></div>
  <div class="start">
    <div class="container position-relative">
      <img src="img/prof/prof-woman.png" alt="girl" class="start-girl prof-woman">

      <div class="row">
        <div class="col-lg-8 offset-lg-1">
          <div class="prof-prev">Профессия</div>
          <div class="start-title prof-title">
            <span>Администратор <br>
            гостиницы</span>
          </div>

          <div class="start-block prof-block">
            <img src="img/prof/prof-woman.png" alt="girl" class="start-girl__mobile prof-woman__mob">
            <img src="img/start/border.png" alt="border" class="start-border">

            <a class="button start-button" href="#">Официальный диплом</a>
            <div class="prof-get">Получить</div>
            <div class="prof-start__query">Отправить запрос</div>
            <div class="prof-start__date">СЕГОДНЯ 08.09.2019</div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="margin-top125"></div>
<?php require_once '_more.php'; ?>

<?php require_once '_menu.php'; ?>

<?php require_once '_footer.php'; ?>
<?php require_once '_reviews.php'; ?>
<?php require_once '_popup.php'; ?>
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
                  height: '300',
                  width: '100%',
                  videoId: 'd8Oc90QevaI',
              });
          } else {
              player1 = new YT.Player('divPlayer1', {
                  height: '400',
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
  </script>
<?php require_once '_end.php'; ?>