// блоки
let directionsBlock = document.querySelectorAll('.directions-block');

for (let i=0; i<directionsBlock.length; i++) {
    directionsBlock[i].addEventListener('click', function () {

        for (let k=0; k<directionsBlock.length; k++) {
            if (directionsBlock[k].classList.contains('directions-after') && i !== k) {
                directionsBlock[k].classList.remove('directions-after');
            }
        }

        $('.programs-wrap[data-program!='+ $(this).attr('data-program') +']').hide();
        $('.directions-block[data-program!='+ $(this).attr('data-program') +']').removeClass('blue').addClass('margin-helper');

        let directionsTop = document.querySelector('.directions-blocks').getBoundingClientRect().top;
        let blockTop =  this.getBoundingClientRect().top;
        let marginFromTop = blockTop - directionsTop;
        this.classList.toggle('blue');
        this.classList.toggle('directions-after');
        this.classList.toggle('margin-helper');

        $('.programs-wrap[data-program='+ $(this).attr('data-program') +']').css('top', +marginFromTop + 58 + 'px').toggle();
        let blockHeight = $('.programs-wrap[data-program='+ $(this).attr('data-program') +']').height();
        this.style.marginBottom = blockHeight+'px';
        current = i;
    });
}