$('#exitBtn').click(function () {

    $.ajax({
        url: '../phpScripts/exit.php',
        type: 'POST',
        cache: false,
        data: {},
        dataType: 'html',
        success: function (data) {
            document.location.reload(true);
        }
    });
});

$('#authUser').click(function () {
    let email = $('#email').val();
    let pass = $('#pass').val();

    $.ajax({
        url: '../phpScripts/auth.php',
        type: 'POST',
        cache: false,
        data: {
            'email': email,
            'pass': pass,
        },
        dataType: 'html',
        success: function (data) {
            if (data == 'Готово') {
                $('#errorBlock').hide();
                document.location.reload(true);
            } else {
                $('#errorBlock').show();
                $('#errorBlock').text(data);
            }
        }
    });
});