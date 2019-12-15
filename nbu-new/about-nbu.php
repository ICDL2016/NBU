<?php require_once '_header.php'; ?>

<div class="video catalog-video">
  <div class="video-wrapper professions-video__wrapper">
    <div class="container">
      <div class="video-contacts professions-video__contacts">
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

    <div class="video-block professions-video__block" onclick="play1(event)">
      <?php require_once 'img/misc/play.svg'; ?>
    </div>

    <div class="container pt-md-5">
      <div class="video-titles">
        <span class="video-title">ДИСТАНЦИОННОЕ</span><br>
        <span class="video-title">ОБУЧЕНИЕ С ВЫДАЧЕЙ</span><br>
        <span class="video-title video-title__desc">ОФИЦИАЛЬНОГО</span>
        <div class="video-br"><br></div>
        <span class="video-title video-title__desc">ДИПЛОМА</span>
        <span class="video-title video-title__mob">ОФИЦИАЛЬНОГО ДИПЛОМА</span>
      </div>

    </div>
  </div>
  <div id="divPlayer1"></div>
</div>

<div class="mt-5"></div>
<div class="nbu">
  <div class="container">
    <div class="title nbu-title">ОБ НБУ</div>
    <div class="knowledge-about">
      Этот содержательный курс даст вам именно те знания которые вы ищите.
      Пройдите обучение в Новом Бизнес Университете получите престижный диплом и
      станьте высокооплачиваемым специалистом в интересной Вам сфере деятельности.
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
      Этот содержательный курс даст вам именно те знания которые вы ищите.
      Пройдите обучение в Новом Бизнес Университете получите престижный диплом и
      станьте высокооплачиваемым специалистом в интересной Вам сфере деятельности.
    </div>
  </div>
</div>

<div class="mt-5"></div>
<?php require_once '_diploma.php'; ?>

<div class="mt-5"></div>
<?php require_once '_knowledge.php'; ?>

<div class="mt-5"></div>
<?php require_once '_about.php'; ?>

<div class="mt-5"></div>
<?php require_once '_teachers.php'; ?>

<div class="mt-5"></div>
<?php require_once '_clients.php'; ?>

<div class="mt-5"></div>
<?php require_once '_profit.php'; ?>

<div class="mt-5"></div>
<?php require_once '_study.php'; ?>

<div class="mt-5"></div>
<div class="start">
  <div class="container position-relative">
    <img src="img/nbu/nbu-pair.png" alt="pair" class="start-girl nbu-pair">

    <div class="row">
      <div class="col-lg-8">
        <div class="start-prev">Если вы еще не определились с выбором программы обучения</div>
        <div class="start-title">
          <img src="img/start/start.png" alt="image">
          <span>Начните обучение <br>
          с вводного курса</span>
        </div>

        <div class="start-block">
          <img src="img/nbu/nbu-pair.png" alt="pair" class="start-girl__mobile nbu-pair__mob">
          <img src="img/start/border.png" alt="border" class="start-border">

          <a class="button start-button" href="#">Начать обучение бесплатно</a>
          <div class="start-today">СЕГОДНЯ 08.09.2019</div>
          <div class="start-text">Нажмите на кнопку
            <span>«Начать обучение бесплатно»</span>
            <span>и вы сразу перейдете<span>
            к курсу обучения
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div class="margin-top125"></div>
<?php require_once '_call.php'; ?>
<div class="mt-4"></div>
<?php require_once '_menu.php'; ?>
<?php require_once '_footer.php'; ?>
<?php require_once '_popup.php'; ?>
<?php require_once '_reviews.php'; ?>
<?php require_once '_scripts.php'; ?>
<script>
    //video
    var tag = document.createElement('script');

    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    var player1;

    function onYouTubeIframeAPIReady() {

        if ($(window).width() < 576) {
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
