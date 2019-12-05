if ($(window).width() < 768) {
    $('.form-label').on('click', function () {
        if ($(this).parent().children('input').is(":checked")) {
            $(this).parent().children('input').prop('checked',false);
        } else {
            $(this).parent().children('input').prop('checked',true);
        }
    });
}