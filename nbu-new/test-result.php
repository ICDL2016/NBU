<?php require_once '_header.php'; ?>
  <div class="breadcrumbs">
    <div class="container">
      <div class="breadcrumbs-wrapper">
        <i class="fa fa-home breadcrumbs-house"></i>
        <div class="breadcrumbs-main">
          <a href="index.php">Главная</a>
        </div>
        <i class="fa fa-arrow-right"></i>
        <div class="breadcrumbs-current">
          <a href="test-result.php">
            Тест по профориентации
          </a>
        </div>
      </div>
    </div>
  </div>

<div class="test-result">
  <div class="container">
    <div class="test-result__table">
      <div class="test-result__titles">
        <div class="test-result__titles-header">Результаты тестирования</div>
        <div class="test-result__title">Типы профессий</div>
        <div class="test-result__title">Человек - природа</div>
        <div class="test-result__title">Человек - техника</div>
        <div class="test-result__title">Человек - человек</div>
        <div class="test-result__title">Человек - знаковая техника, знаковый образ</div>
        <div class="test-result__title">Человек - художественный образ</div>
      </div>
      <div class="test-result__results">
        <div class="test-result__results-header">Баллы</div>
        <div class="test-result__result">5</div>
        <div class="test-result__result">6</div>
        <div class="test-result__result">3</div>
        <div class="test-result__result">4</div>
        <div class="test-result__result">5</div>
        <div class="test-result__result">3</div>
      </div>
    </div>

    <hr style="border-top: 1px solid #69c925">

    <div class="test-result__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae laborum nam nesciunt nisi, nobis odio quaerat veritatis. Aperiam, officiis, reprehenderit!</div>
    <div class="test-result__text">
      <ul class="test-result__text-list">
        <li><span>1. </span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, unde!</li>
        <li><span>2. </span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, unde!</li>
        <li><span>3. </span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, unde!</li>
        <li><span>4. </span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, unde!</li>
      </ul>
    </div>
    <div class="test-result__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur culpa cupiditate debitis dolores esse harum illo, in ipsum magnam magni nam natus neque officia optio rem sapiente sequi soluta totam.</div>
  </div>
</div>

  <div class="mt-5"></div>
  <div class="container">
    <div class="title catalog-title">Сферы и курсы, которые помогут Вам</div>
    <div class="title catalog-subtitle">освоить специальности, где Вы можете добиться наибольшего успеха</div>
  </div>
<?php require '_catalog_programms.php'; ?>
<div class="mt-5"></div>
<?php require '_diploma.php'; ?>
<?php require '_about.php'; ?>

  <div class="mt-5"></div>
<?php require '_knowledge.php'; ?>
  <div class="mt-5"></div>
<?php require '_study.php'; ?>
  <div class="mt-5"></div>
<?php require '_call.php'; ?>
  <div class="mt-5"></div>
<?php require_once '_menu.php'; ?>
<?php require_once '_footer.php'; ?>