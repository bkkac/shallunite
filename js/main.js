jQuery(document).ready(function () {
    $(this).on('click', 'header .language p', function () {
        $(this).parent().find('.language-option').removeClass('hide');
    }).on('blur', 'header .language p',function () {
        $(this).parent().find('.language-option').addClass('hide');
    })

    // change language
    $(this).on('click', 'header .language a', function () {
        var option_box = $(this).parent(),
            p = option_box.prev();
        p.html($(this).html());
        option_box.addClass('hide');
    })
});