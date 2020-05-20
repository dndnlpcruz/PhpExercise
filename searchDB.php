<?php
include "conndb.php";
$aAction = $_POST["aAction"];

if ($aAction == "autocomplete") {
    $sql = "SELECT ID, FirstName, LastName, Gender, Course FROM student";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row     
        $name = [];
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($name, $row["FirstName"] . " " . $row["LastName"]);
        }
        echo json_encode($name);
    } else {
        echo "error $sql" . mysqli_error($conn);
    }
} elseif ($aAction == "searchStudentThenOutput"){ //new aAction // di ko pa maayos hahahaha di makita ung firstname lastname
    $fullName = explode(" ", $_POST["fullName"]);
    $firstName = $fullName[0];
    $lastName = $fullName[1];
    $sql = "SELECT * FROM student where FirstName='$firstName' and LastName='$lastName'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr> <td>" . $row["ID"] . "</td> <td>" . $row["FirstName"] . " </td> <td> " . $row["LastName"] . " </td> <td> " . $row["Gender"] . " </td> <td> " . $row["Course"] . "</td> </tr>";
        }
    } else {
        echo "error $sql" . mysqli_error($conn);
    }

} elseif ($aAction == "searchStudentByName") {
    $fullName = explode(" ", $_POST["fullName"]);
    $firstName = $fullName[0];
    $lastName = $fullName[1];
    $sql = "SELECT * FROM student where FirstName='$firstName' and LastName='$lastName'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $getData = new \stdClass();
        while ($row = mysqli_fetch_assoc($result)) {
            $getData -> ID = $row["ID"];
            $getData -> Username = $row["Username"];
            $getData -> UserPassword = $row["UserPassword"];
            $getData -> FirstName = $row["FirstName"];
            $getData -> LastName = $row["LastName"];
            $getData -> Gender = $row["Gender"];
            $getData -> Course = $row["Course"];
        }
        $myJson = json_encode($getData);
        echo $myJson;
    } else {
        echo "error $sql" . mysqli_error($conn);
    }
} else {
    $sql = "SELECT ID, FirstName, LastName, Gender, Course FROM student";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr> <td>" . $row["ID"] . "</td> <td>" . $row["FirstName"] . " </td> <td> " . $row["LastName"] . " </td> <td> " . $row["Gender"] . " </td> <td> " . $row["Course"] . "</td> </tr>";
        }
    } else {
        echo "error $sql" . mysqli_error($conn);
    }
}

mysqli_close($conn);
