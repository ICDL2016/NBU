<div class="teachers">
  <div class="container">
    <div class="title teachers-title">Лучшие преподаватели и эксперты</div>
    <div class="title teachers-subtitle">по нашим курсам</div>

    <div class="teachers-blocks owl-carousel">
      <?php for($i=0; $i<5; $i++) : ?>
      <div class="teachers-slide">
        <div class="teachers-block">
          <div class="teachers-img teachers-img<?=rand(1,4);?>"></div>
          <div class="teachers-name">Алексей Петров </div>
          <div class="teachers-position">Эксперт по маркетингу</div>
        </div>
        <div class="teachers-block">
          <div class="teachers-img teachers-img<?=rand(1,4);?>"></div>
          <div class="teachers-name">Алексей Петров </div>
          <div class="teachers-position">Эксперт по маркетингу</div>
        </div>
      </div>
      <?php endfor; ?>
    </div>
  </div>
</div>