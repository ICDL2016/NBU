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
          <a href="test-questions.php">
            Тест по профориентации
          </a>
        </div>
      </div>
    </div>
  </div>

<div class="testq">
  <div class="container">
    <div class="testq-title">Тест по профориентации</div>
    <div class="testq-q">Предположим, что после соответствующего обучения вы сможете выполнять любую работу</div>
    <div class="testq-q">Однако, если бы вам пришлось выбрать только из двух возможностей, что бы вы предпочли?</div>
    <div class="testq-options">
      <div class="testq-button">Ухаживать за животными</div>
      <div class="testq-button">Управлять машинами, приборами</div>
    </div>

    <div class="testq-list">
      <div class="testq-current">Вы ответили на 1 вопрос из 21</div>
      <div class="testq-steps">
        <?php for($i=0; $i<21; $i++) : ?>
          <div class="testq-step <?php if($i===0) {echo 'testq-step__active';}?>"><?=$i+1;?></div>
        <?php endfor;?>
      </div>
    </div>
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