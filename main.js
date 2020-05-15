$(document).ready(function () {
    $(document).on('submit', '#loginForm', function (e) {
        e.preventDefault();

        var username = $('#username').val();
        var password = $('#userpass').val();

        $.ajax({
            url: 'login.php',
            type: 'POST',
            data: {
                username: username,
                password: password
            },
            success: function (res) {                
                window.location.replace(res);
            }
        });
    });
});
