<div class="catalog-blocks slider">
  <?php
  $arr = ['Журналистика и массовые коммуникации', 'IT-технологии', 'Ресторанный бизнес', 'Кулинария'];
  for ($i=0; $i<21; $i++) :
  $svg = 'img/svg/choose-sphere/' . rand(1,4) . '.svg'; ?>
  <div class="catalog-block">
    <?php require $svg; ?>
    <div class="choose-sphere__title"><?=$arr[rand(0,3)]?></div>
  </div>
  <?php endfor; ?>
</div>