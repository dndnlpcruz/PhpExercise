<!DOCTYPE html>
<?php
require_once 'authentication.php';
?>
<html>

<head>
    <?php
    include "cssdesign.php";
    include "script.php";
    ?>
</head>

<body>
    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-3 sidenav">
                <h4>Home</h4>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="search.php">Search</a></li>
                    <li><a href="registration.php">Register</a></li>
                    <li><a href="modify.php">Modify</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul><br>
            </div>
            <div class="col-sm-9">
                <h1>LOGO and other details</h1>
            </div>
        </div>
    </div>
</body>

</html>