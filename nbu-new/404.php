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
        <a href="404.php">
          404
        </a>
      </div>
    </div>
  </div>
</div>

<div class="p404">
  <div class="container">
    <div class="p404-img">
      <img src="img/404/error404.png" alt="404" class="p404-img__desc">
      <img src="img/404/error404-mob.png" alt="404" class="p404-img__mob">
    </div>

    <div class="p404-text">Неправильно набран адрес или такой страницы на сайте больше не существует</div>
    <a href="index.php" class="button p404-button">Перейти на главную</a>
  </div>
</div>

<?php require_once '_menu.php'; ?>

<?php require_once '_footer.php'; ?>
<?php require_once '_scripts.php'; ?>
<?php require_once '_end.php'; ?>