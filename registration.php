<!DOCTYPE html>
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
                <h4>Junior's Blog</h4>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="homepage.php">Home</a></li>
                    <li><a href="search.php">Search</a></li>
                    <li class="active"><a href="#">Register</a></li>
                    <li><a href="modify.php">Modify</a></li>
                </ul><br>
            </div>
            <div class="col-sm-9">
                <form id="registrationForm" action="registrationDB.php" method="POST" class="form-horizontal">
                    <div class="form-group">
                        <label for="userName" class="control-label col-sm-1">Username:</label>
                        <div class="col-sm-2">
                            <input type="textbox" placeholder="Username" name="userName" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="control-label col-sm-1">Password:</label>
                        <div class="col-sm-2">
                            <input type="password" placeholder="*****" name="password" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="firstName" class="control-label col-sm-1">First Name:</label>
                        <div class="col-sm-2">
                            <input type="textbox" placeholder="First Name" name="firstName" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="lastName" class="control-label col-sm-1">Last Name:</label>
                        <div class="col-sm-2">
                            <input type="textbox" placeholder="Last Name" name="lastName" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="gender" class="control-label col-sm-1">Gender:</label>
                        <div class="col-sm-2">
                            <input type="textbox" placeholder="Male/Female" name="gender" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="course" class="control-label col-sm-1">Course:</label>
                        <div class="col-sm-2">
                            <input type="textbox" placeholder="Course.." name="course" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-1">
                            <button type="submit" id="submitbtn" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>