<?php require_once '_header.php'; ?>

<div class="video catalog-video">
  <div class="video-wrapper catalog-video__wrapper">
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

    <div class="video-block catalog-video__block" onclick="play1(event)">
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
<div class="container">
  <div class="title catalog-title">Выберите курс из каталога программ</div>
  <div class="title catalog-subtitle">обучения</div>
</div>

<div class="catalog-blocks slider">
  <?php
  $arr = ['Журналистика и массовые коммуникации', 'IT-технологии', 'Ресторанный бизнес', 'Кулинария'];
  for ($i=0; $i<21; $i++) :
    $svg = 'img/svg/choose-sphere/' . rand(1,4) . '.svg'; ?>
    <div class="catalog-block margin-helper" data-program="<?=$i+1;?>">
      <?php require $svg; ?>
      <div class="choose-sphere__title"><?=$arr[rand(0,3)]?></div>
    </div>
    <div class="choose-course catalog-choose__course" data-program="<?=$i+1;?>">
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
  <?php endfor; ?>
</div>

<div class="mt-5"></div>
<?php require_once '_knowledge.php'; ?>
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

<div class="mt-5"></div>
<div class="start">
  <div class="container position-relative">
    <img src="img/catalog/prof-catalog.png" alt="man" class="start-girl catalog-man">

    <div class="row">
      <div class="col-lg-8">
        <div class="start-prev">Если вы еще не определились с выбором программы обучения</div>
        <div class="start-title catalog-start__title">
          <img src="img/catalog/catalog-start__icon.png" alt="image">
          <span>Начните обучение <br>
          с вводного курса</span>
        </div>

        <div class="start-block">
          <img src="img/catalog/prof-catalog.png" alt="girl" class="start-girl__mobile catalog-man__mobile">
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

    // блоки
    let directionsBlock = document.querySelectorAll('.catalog-block');

    for (let i = 0; i < directionsBlock.length; i++) {
        directionsBlock[i].addEventListener('click', function () {

            $('.catalog-choose__course[data-program!=' + $(this).attr('data-program') + ']').removeClass('opacity');
            $('.catalog-block[data-program!=' + $(this).attr('data-program') + ']').addClass('margin-helper').removeClass('catalog-block__hover');
            $('.catalog-choose__course[data-program=' + $(this).attr('data-program') + ']').toggleClass('opacity').fadeToggle();
            $(this).toggleClass('margin-helper');
            $(this).toggleClass('catalog-block__hover');

            let directionsTop = document.querySelector('.catalog-blocks').getBoundingClientRect().top;
            let blockTop = this.getBoundingClientRect().top;
            let marginFromTop = blockTop - directionsTop;

            let height = 200;
            if($(window).width() < 507) {
                height = 120;
            }

            let blockHeight = $('.catalog-choose__course[data-program=' + $(this).attr('data-program') + ']').height();
            $('.catalog-choose__course[data-program=' + $(this).attr('data-program') + ']').css('top', +marginFromTop + height + 'px').toggle();
            this.style.marginBottom = blockHeight + 'px';
        });
    }
</script>
<?php require_once '_end.php'; ?>
