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
                <h4>Registration</h4>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="homepage.php">Home</a></li>
                    <li><a href="search.php">Search</a></li>
                    <li class="active"><a href="#">Register</a></li>
                    <li><a href="modify.php">Modify</a></li>
                </ul><br>
            </div>
            <div class="col-sm-9">
                <h3>Registration Form</h3>
                <form id="registrationForm" action="registrationDB.php" method="POST" class="form-horizontal">
                    <div class="form-group">
                        <label for="username" class="control-label col-sm-1">Username:</label>
                        <div class="col-sm-2">
                            <input id="username" type="textbox" placeholder="Username" name="username" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="control-label col-sm-1">Password:</label>
                        <div class="col-sm-2">
                            <input id="password" type="password" placeholder="*****" name="password" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="firstname" class="control-label col-sm-1">First Name:</label>
                        <div class="col-sm-2">
                            <input id="firstname" type="textbox" placeholder="First Name" name="firstname" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="lastname" class="control-label col-sm-1">Last Name:</label>
                        <div class="col-sm-2">
                            <input id="lastname" type="textbox" placeholder="Last Name" name="lastname" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="gender" class="control-label col-sm-1">Gender:</label>
                        <div class="col-sm-2">
                            <select id="gender" name="gender" required>
                                <option selected disabled value="">Choose Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="course" class="control-label col-sm-1">Course:</label>
                        <div class="col-sm-2">
                            <select id="course" name="course" required>
                                <option selected disabled value="">Choose Course</option>
                                <option value="IT">IT</option>
                                <option value="Engineer">Engineer</option>
                                <option value="Multi Media Arts">Multi Media Arts</option>
                                <option value="CTIHM">CTIHM</option>
                            </select>
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

    <script type="text/javascript" src="main.js"></script>
</body>

</html>