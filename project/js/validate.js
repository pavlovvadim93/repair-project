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

/* Маска для телефона в блоке offer */
$("#offer-phone").mask('+7 (999) 999-99-99');
/* Маска для телефона в форме modal */
$("#modal-phone").mask('+7 (999) 999-99-99');
/* Маска для телефона в блоке brif */
$("#brif-phone").mask('+7 (999) 999-99-99');


