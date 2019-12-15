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
        <a href="contacts.php">
          Контакты
        </a>
      </div>
    </div>
  </div>
</div>

<div class="contacts-form__wrapper overflow-hidden">
  <div class="container">
    <div class="contacts-form__title">
      <img src="img/contacts/mail.png" alt="mail">
      <span>Контакты</span>
    </div>

    <form class="contacts-form popup-form">
      <img src="img/contacts/contacts-girl.png" alt="girl" class="contacts-form__girl">
      <div class="contacts-title">Написать</div>
      <input class="form-input__name" type="text" name="name" placeholder="Имя*" required>
      <div class="form-input__span form-input__span-name">Поле "Имя" обязательно для заполнения</div>
      <input class="form-input__email" type="email" name="email" placeholder="Email*" required>
      <div class="form-input__span form-input__span-email">Поле "Email" обязательно для заполнения и должно содержать правильный электронный адрес (например, example@mail.ru)</div>
      <input type="text" name="phone" placeholder="Введите ваш телефон">
      <textarea name="comment" placeholder="Сообщение" rows="4"></textarea>
      <div class="form-checkbox__block">
        <input class="form-checkbox" type="checkbox" name="checkbox" id="ch1" checked required>
        <label class="form-label" for="ch1">Я принимаю <a href="#">Условия Конфиденциальности</a></label>
      </div>
      <button class="popup-form__submit button contacts-button">Отправить</button>
    </form>
  </div>
</div>

<div class="contacts-block">
  <div class="container">

    <div class="header-phone contacts-phone">
      <div class="header-phone__icon contacts-phone__icon">
        <a href="tel:88003509434">
          <img src="img/contacts/phone.png" alt="phone">
        </a>
      </div>
      <div class="header-phone__number contacts-phone__number">
        <div class="contacts-phone__number-title">Звонок бесплатный</div>
        <div class="header-phone__number-number contacts-phone__number-number"><a href="tel:88003509434">8 800 350-94-34</a></div>
      </div>
    </div>

    <div class="contacts-managers__title">Менеджеры учебного отдела:</div>

    <div class="contacts-managers">
      <div class="contacts-manager">
        <div class="contacts-manager__img">
          <img src="img/contacts/person.png" alt="photo">
        </div>
        <div class="contacts-manager__name">Анна</div>
      </div>
      <div class="contacts-manager">
        <div class="contacts-manager__img">
          <img src="img/contacts/person.png" alt="photo">
        </div>
        <div class="contacts-manager__name">Евгений</div>
      </div>
      <div class="contacts-manager">
        <div class="contacts-manager__img">
          <img src="img/contacts/person.png" alt="photo">
        </div>
        <div class="contacts-manager__name">Татьяна</div>
      </div>
    </div>

    <div class="contacts-address__title">Адрес</div>
    <div class="contacts-address">г. Москва, (ст. метро ВДНХ) Проспект Мира 150, гостиница "Космос", главный вход, 2-й этаж (из холла гостиницы подняться по левой лестнице, вход в ИНТУРИСТ), приемная МЦДО / НОЧУ "МБА СИТИ"
    </div>
  </div>

</div>

<div class="contacts-gallery">
  <a href="img/contacts/1.jpg" class="fancybox-buttons" data-fancybox="gallery"><img src="img/contacts/1.jpg" alt="photo"></a>
  <a href="img/contacts/2.jpg" class="fancybox-buttons" data-fancybox="gallery"><img src="img/contacts/2.jpg" alt="photo"></a>
  <a href="img/contacts/3.jpg" class="fancybox-buttons" data-fancybox="gallery"><img src="img/contacts/3.jpg" alt="photo"></a>
  <a href="img/contacts/4.jpg" class="fancybox-buttons" data-fancybox="gallery"><img src="img/contacts/4.jpg" alt="photo"></a>
</div>

<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A1f2cb066f8eb04aa97fe9edbac828af56976f5cff13d5ce5100b0e627b564557&amp;width=100%25&amp;height=541&amp;lang=ru_RU&amp;scroll=false"></script>

<?php require_once '_menu.php'; ?>

<?php require_once '_footer.php'; ?>
<?php require_once '_scripts.php'; ?>
<?php require_once '_end.php'; ?>
