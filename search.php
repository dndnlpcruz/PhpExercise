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
                <h4>Search</h4>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="homepage.php">Home</a></li>
                    <li class="active"><a href="#">Search</a></li>
                    <li><a href="registration.php">Register</a></li>
                    <li><a href="modify.php">Modify</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul><br>
            </div>
            <div class="col-sm-9">
                <h1>Search Student</h1>

                <div id="AutoSearch">
                    <div>
                        <br />
                        <form action="searchDB.php" method="GET">
                            <div class="autocomplete" style="width:300px;">
                                <input type="text" id="searchInput" placeholder="Search.." />
                            </div>
                            <!-- Search -->
                            <input id="searchStudent" type="button" value="Search">
                            <!-- Search All -->
                            <input id="SearchAllButton" type="button" value="Search All" />
                            <br /><br />
                            <table id="MyAjaxTable" style="border: solid">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th> Last Name</th>
                                        <th> Gender</th>
                                        <th> Course</th>
                                    </tr>
                                </thead>
                                <tbody id="inputInfo"></tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="search.js"></script>
</body>

</html>