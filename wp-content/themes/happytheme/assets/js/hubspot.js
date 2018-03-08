
let loading = $('.loading');
let hForm = $('form');
let submitBtn = form.find("input[type='submit']");
var submit = false;

hForm.on('submit', function (e) {
    submitBtn.prop('disabled', 'true');
    e.preventDefault();

    if (submit) {
        return;
    }

    submit = true;

    loading.fadeIn("slow");

    let data = $(this).serializeArray();

    data.push({
        name: 'from',
        value: 'Happytech'
    });

    $.ajax({
        type: "POST",
        url: 'https://www.comeet.in/api/emails/contact',
        data: data,
        success: function (response, status) {
            if (status == 'success') {
                successHandler();
            }
        },
        error: function () {
            errorHandler();
        }
    });

});

function successHandler() {
    $('.loader').hide();
    $('.thumb-up').fadeIn();
    submitBtn.prop('disabled', true);
    submitBtn.css('color', '#eeb33f');
    submitBtn.css({
        color: '#eeb33f',
        borderColor: '#eeb33f'
    });

    setTimeout(function () {
        $('.thumb-up').fadeOut();
        loading.fadeOut();
        submitBtn.prop('disabled', false);
        submitBtn.val('Votre message a bien été envoyé.');
        submit = false;
        submitBtn.removeAttr('style');
        form.trigger('reset');
    }, 1500)
}

function errorHandler() {
    submitBtn.val('Une erreur est survenue');
    submitBtn.css({
        color: 'red',
        borderColor: 'red'
    });
    $('.thumb-down').fadeIn();
    $('.loader').hide();

    submitBtn.prop('disabled', false);

    setTimeout(function () {
        $('.thumb-down').fadeOut();
        loading.fadeOut();
    }, 1500)
}

