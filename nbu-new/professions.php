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

        <div class="video-overlay">

        </div>

        <div class="video-block professions-video__block">
            <?php require_once 'img/misc/play.svg'; ?>
        </div>

        <div class="container pt-md-4">
            <div class="video-titles video-title__top">
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

<div class="under-video">
    <div class="container pt-4">
        <div class="video-titles video-title__bottom showOnPlay" style="text-align: center; margin-bottom: 25px">
            <span class="video-title">ДИСТАНЦИОННОЕ</span><br>
            <span class="video-title">ОБУЧЕНИЕ С ВЫДАЧЕЙ</span><br>
            <span class="video-title video-title__desc">ОФИЦИАЛЬНОГО</span>
            <div class="video-br"><br></div>
            <span class="video-title video-title__desc">ДИПЛОМА</span>
            <span class="video-title video-title__mob">ОФИЦИАЛЬНОГО ДИПЛОМА</span>
        </div>
    </div>
</div>

<div class="mt-5"></div>
<section class="directions directions-desktop">
    <div class="container mb-3 professions-title title">Выберите сферу и профессию по которой хотите стать
        дипломированным специалистом
    </div>
    <div class="directions-blocks">

        <?php $profs = ['Гостиничный бизнес и туризм', 'Торговля и предпринимательство', 'Менеджер по логистике']; ?>
        <?php for ($i = 0; $i < 10; $i++) : ?>
            <div class="directions-block margin-helper" data-program="<?= $i + 1; ?>"><?= $profs[rand(0, 2)] ?></div>
            <div class="programs-wrap" data-program="<?= $i + 1; ?>">
                <div class="programs">
                    <div class="programs-block">
                        <ul class="programs-block__list">
                            <li><a href="">Менеджер по финансам</a></li>
                            <li><a href="">Администратор гостиницы</a></li>
                            <li><a href="">Директор по финансам</a></li>
                            <li><a href="">Менеджер по логистике</a></li>
                            <li><a href="">Директор гостиницы</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endfor; ?>

    </div>
</section>

<div class="mt-2"></div>
<?php require_once '_call.php'; ?>
<div class="mt-4"></div>
<?php require_once '_menu.php'; ?>
<?php require_once '_footer.php'; ?>
<?php require_once '_reviews.php'; ?>
<?php require_once '_scripts.php'; ?>
<script src="js/video.js"></script>
<script>
    // блоки
    let directionsBlock = document.querySelectorAll('.directions-block');

    for (let i = 0; i < directionsBlock.length; i++) {
        directionsBlock[i].addEventListener('click', function () {

            for (let k = 0; k < directionsBlock.length; k++) {
                if (directionsBlock[k].classList.contains('directions-after') && i !== k) {
                    directionsBlock[k].classList.remove('directions-after');
                }
            }

            $('.programs-wrap[data-program!=' + $(this).attr('data-program') + ']').hide();
            $('.directions-block[data-program!=' + $(this).attr('data-program') + ']').removeClass('orange').addClass('margin-helper');

            let directionsTop = document.querySelector('.directions-blocks').getBoundingClientRect().top;
            let blockTop = this.getBoundingClientRect().top;
            let marginFromTop = blockTop - directionsTop;
            this.classList.toggle('orange');
            this.classList.toggle('directions-after');
            this.classList.toggle('margin-helper');

            $('.programs-wrap[data-program=' + $(this).attr('data-program') + ']').css('top', +marginFromTop + 58 + 'px').toggle();
            let blockHeight = $('.programs-wrap[data-program=' + $(this).attr('data-program') + ']').height();
            this.style.marginBottom = blockHeight + 'px';
            current = i;
        });
    }

    window.onresize = function () {
        let programsWrap = document.querySelectorAll('.programs-wrap');
        let directionsBlock = document.querySelectorAll('.directions-block');
        for (let i = 0; i < programsWrap.length; i++) {
            if (+programsWrap[i].style.top.replace('px', '') > 0) {
                let directionsTop = document.querySelector('.directions-blocks').getBoundingClientRect().top;
                let blockTop = directionsBlock[i].getBoundingClientRect().top;
                let marginFromTop = blockTop - directionsTop;
                programsWrap[i].style.top = +marginFromTop + 58 + 'px';
                directionsBlock[i].style.marginBottom = getComputedStyle(programsWrap[i]).height;
                break;
            }
        }
    }
</script>
<?php require_once '_end.php'; ?>
