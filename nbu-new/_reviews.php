<div class="reviews">
  <div class="container">
    <div class="title reviews-title">
      Отзывы об <span>обучении в NBU</span>
    </div>

    <div class="reviews-blocks">
      <?php for ($i = 0; $i < 6; $i++) : ?>
        <div class="reviews-block">
          <div class="reviews-img">
            <img src="img/reviews/review<?= rand(1, 2) ?>.png" alt="review">
          </div>
          <div class="reviews-text">
            <div class="reviews-author">Данил, 32 года, <span>рыбак</span></div>
            <div class="reviews-descr">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid amet
              architecto atque, consectetur distinctio dolore enim eos explicabo facilis illum laborum maiores maxime
              molestias provident quaerat quasi quod tempora.
            </div>
          </div>
        </div>
      <?php endfor; ?>
    </div>
  </div>
</div>