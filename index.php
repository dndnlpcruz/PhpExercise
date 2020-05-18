<!DOCTYPE html>
<html>

<head>
    <?php
    include "cssdesign.php";
    include "script.php";
    ?>
</head>

<body>
    <div><br />
        <form id="loginForm" action="login.php" method="POST" class="form-horizontal">
            <div class="form-group">
                <label for="username" class="control-label col-sm-1">Username:</label>
                <div class="col-sm-2">
                    <input id="username" type="textbox" placeholder="Username" name="username" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="userpass" class="control-label col-sm-1">Password:</label>
                <div class="col-sm-2">
                    <input id="userpass" type="password" placeholder="Password" name="userpass" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-1">
                    <button id="submitbtn" type="submit" class="btn btn-primary">Login</button>
                </div>
            </div>
        </form>
    </div>

    <script type="text/javascript" src="main.js"></script>

</body>

</html>