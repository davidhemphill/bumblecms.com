$(document).on('ready', function () {
    // Add prettyprint to all pre
    $('pre').addClass('prettyprint');

    console.log('Starting App');

    $('#signup').on('submit', function (e) {
        e.preventDefault();

        var $form = $(this);
        var location = $(this).attr('action');
        var input = $form.serialize();

        $message = $('#message');
        $messageText = $('#message-text');
        $message.addClass('is-hidden').removeClass('success error');

        $.ajax({
            url: location,
            type: 'POST',
            //dataType: 'json',
            data: input
        })
            .done(function (data) {
                console.log(data);

                if (data.status == 'success')
                {
                    $message.removeClass('is-hidden').addClass('success');
                    $messageText.text(data.message);
                }
                else
                {
                    $message.removeClass('is-hidden').addClass('error');
                    $messageText.text(data.errors.email[0]);
                }
            })
            .fail(function (data) {
                console.log(data.errors.email);
                $message.show().addClass('error').text(data.errors.email[0]);
            });
    });
});
