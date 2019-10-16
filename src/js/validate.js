/* Форма блока offer*/
$('#offer-form').validate({
    errorClass: "invalid",
    errorElement: "div",
    rules: {
        username: {
            required: true,
    
            minlength: 3,
            maxlength: 15
        },
        phone: {
            required: true,
        }
    },
    messages: {
        username: {
            required: "Укажите Ваше имя",
            minlength: "Требуется не менее 3 символов!",
            maxlength: "Требуется не более 15 символов!"
        },
        phone: {
            required: "Укажите Ваш телефон"
        }
    }
});

/* Форма modal */
$('#modal-form').validate({
    rules: {
        username: {
            required: true,
            minlength: 3,
            maxlength: 15
        },
        phone: {
            required: true
        }
    },
    messages: {
        username: {
            required: "Укажите Ваше имя",
            minlength: "Требуется не менее 3 символов!",
            maxlength: "Требуется не более 15 символов!"
        },
        phone: {
            required: "Укажите Ваш телефон"
        }
    }
});

/* Форма блока бриф */
$('#brif-form').validate({
    errorClass: "invalid",
    errorElement: "div",
    rules: {
        username: {
            required: true,
            minlength: 3,
            maxlength: 15
        },
        email: {
            required: true,
            email: true
        },
        phone: {
            required: true
        }  
    },
    messages: {
        username: {
            required: "Укажите Ваше имя",
            minlength: "Требуется не менее 3 символов!",
            maxlength: "Требуется не более 15 символов!"
        },
        email: {
            required: "Заполните поле",
            email: "Введите корректный email"
        },
        phone: {
            required: "Укажите Ваш телефон"
        }
    }
});

/* Маска для телефона в блоке offer */
$("#offer-phone").mask('+7 (999) 999-99-99');
/* Маска для телефона в форме modal */
$("#modal-phone").mask('+7 (999) 999-99-99');
/* Маска для телефона в блоке brif */
$("#brif-phone").mask('+7 (999) 999-99-99');

$('#offer-form').on('submit', function (event) {
    event.preventDefault();
    return false,
    $.ajax({
        type: "POST",
        url: "mail.php",
        data: $(this).serialize(),
        success: function (response) {
            console.log('Прибыли данные: ' + response);
            $('#offer-form')[0].reset();
            $(".offer-block__massege").text(response);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            consol.error(jqXHR + "  " + textStatus);
        }
    });
});

$('#modal-form').on('submit', function name(event) {
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: "mail.php",
        data: $(this).serialize(),
        success: function (response) {
            console.log('Прибыли данные: ' + response);
            $('#modal-form')[0].reset();
            $(".modal-dialog__massege").text(response);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            consol.error(jqXHR + "  " + textstatus);
        }
    });
});

$('#brif-form').on('submit', function name(event) {
    event.preventDefault();
    var phone = $('input [type]')
    $.ajax({
        type: "POST",
        url: "mail.php",
        data: $('#phone').serialize(),
        success: function (response) {
            console.log('Прибыли данные: ' + response);
            $('#brif-form')[0].reset();
            $(".brif__massege").text(response);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            consol.error(jqXHR + "  " + textstatus);
        }
    });
});