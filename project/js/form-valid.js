$('#offer-form').on('submit', function name(event) {
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: "mail.php",
        data: $(this).seriallize(),
        dataType: "dataType",
        success: function (response) {
            console.log('Прибыли данные' + response)
        },
        error: function (jqXHR, textstatus, errorThrown) {
            consol.error(jqXHR + "  " + textstatus);
        }
    });
});