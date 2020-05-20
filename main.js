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
            },
            error: function () {
                alert("Invalid username or password!");
            }
        });
    });

    $(document).on('submit', '#registrationForm', function (e) {
        e.preventDefault();

        var username = $('#username').val();
        var password = $('#password').val();
        var firstname = $('#firstname').val();
        var lastname = $('#lastname').val();
        var gender = $('#gender').val();
        var course = $('#course').val();

        var varification = confirm("Are you sure, you want to submit your registration?");
        if (varification == true) {
            $.ajax({
                url: 'registrationDB.php',
                type: 'POST',
                data: {
                    username: username,
                    password: password,
                    firstname: firstname,
                    lastname: lastname,
                    gender: gender,
                    course: course
                },
                success: function (res) {
                    window.location.replace(res);
                }
            });
        }
    });

    $(document).on('submit', '#updateForm', function (e) {
        e.preventDefault();

        var userid = $('#userID').val();
        var username = $('#username').val();
        var password = $('#password').val();
        var firstname = $('#firstname').val();
        var lastname = $('#lastname').val();
        var gender = $('#gender').val();
        var course = $('#course').val();

        var varification = confirm("Are you sure, you want to Update?");
        if (varification == true) {
            $.ajax({
                url: 'modifyDB.php',
                type: 'POST',
                data: {
                    userID: userid,
                    username: username,
                    password: password,
                    firstname: firstname,
                    lastname: lastname,
                    gender: gender,
                    course: course
                },
                success: function (res) {
                    window.location.replace(res);
                }
            });
        }
    });
});
