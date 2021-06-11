$("#regUser").click(function () {
    let username = $('#username').val();
    let email = $('#email').val();
    let pass = $('#pass').val();
    let cPass = $('#cPass').val();

    $.ajax({
        url: '../phpScripts/reg.php',
        type: 'POST',
        cache: false,
        data: {
            'username': username,
            'email': email,
            'pass': pass,
            'cPass': cPass
        },
        dataType: 'html',
        success: function (data) {
            if (data == 'Готово') {
                $('#regUser').text('Ok');
                $('#errorBlock').hide();
            } else {
                $('#errorBlock').show();
                $('#errorBlock').text(data);
            }
        }
    });
});