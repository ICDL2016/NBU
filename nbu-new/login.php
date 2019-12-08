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
        <a href="login.php">
          Войти в кабинет студента
        </a>
      </div>
    </div>
  </div>
</div>

<div class="login container">
  <div class="login-img text-center">
    <img src="img/login/arrow-login.png" alt="arrow">
  </div>

  <div class="login-form text-center">
    <div class="login-title__wrapper">
      <h3 class="login-title">Войти в кабинет студента</h3>
      <div class="login-auth">Авторизация</div>
      <img src="img/login/arrow-login.png" alt="arrow" class="login-img__mob">
    </div>

    <form action="" class="login-form__form">
      <input class="form-input__email login-form__email" type="email" name="email" placeholder="Email*">
      <div class="form-input__span form-input__span-email">Поле "Email" обязательно для заполнения и должно содержать правильный электронный адрес (например, example@mail.ru)</div>
      <input class="form-input__password login-form__password" type="password" name="password" placeholder="Пароль*">
      <div class="form-input__span form-input__span-email form-input__span-password">Поле "Пароль" обязательно для заполнения и должно содержать правильный электронный адрес (например, example@mail.ru)</div>
      <input class="form-checkbox" type="checkbox" name="checkbox" id="ch1" checked required>
      <label class="form-label" for="ch1">Я принимаю <a href="#">Условия Конфиденциальности</a></label>
      <button class="button login-button">Войти</button>
    </form>
  </div>

  <a href="remind.php" class="login-remind">Забыли пароль?</a>
</div>

<?php require_once '_menu.php'; ?>

<?php require_once '_footer.php'; ?>
<?php require_once '_scripts.php'; ?>
  <script>
      // псевдовалидация

      let emptyTop2 = false;
      let emptyBottom2 = false;
      $('.login-form__email').on('click', function () {
          emptyTop2 = true;
          if (emptyBottom2 === true && ($(this).parent().children('.login-form__email').val().length === 0 || $(this).parent().children('.login-form__email').val().indexOf('@') === -1)) {
              $(this).parent().children('.form-input__span-email').show();
          }
      }).on('input', function () {
          $(this).parent().children('.form-input__span-email').hide();
          $(this).parent().children('.login-form__email').removeClass('border-red');
      });

      $('.login-form__password').on('click', function () {
          emptyBottom2 = true;
          if (emptyTop2 === true && $(this).parent().children('.login-form__password').val().length === 0) {
              $(this).parent().children('.form-input__span-password').show();
          }
      }).on('input', function () {
          $(this).parent().children('.form-input__span-password').hide();
          $(this).parent().children('.login-form__password').removeClass('border-red');
      });

      $('.login-button').on('click', function () {
          event.preventDefault();
          let send = true;

          if ($(this).parent().children('.login-form__password').val().length === 0) {
              $(this).parent().children('.form-input__span-password').show();
              $(this).parent().children('.login-form__password').addClass('border-red');
              send = false;
          }

          if ($(this).parent().children('.login-form__email').val().length === 0 || $(this).parent().children('.login-form__email').val().indexOf('@') === -1) {
              $(this).parent().children('.form-input__span-email').show();
              $(this).parent().children('.login-form__email').addClass('border-red');
              send = false;
          }

          if (send === true) {
              $(this).parent().submit();
          }
      });
  </script>
<?php require_once '_end.php'; ?>