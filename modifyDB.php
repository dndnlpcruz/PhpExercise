<?php
include "conndb.php";
$userID = $_POST["userID"];
$username = $_POST["username"];
$password = $_POST["password"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$gender = $_POST["gender"];
$course = $_POST["course"];

$sql = "UPDATE student SET Username='$username', UserPassword='$password', FirstName='$firstname', LastName='$lastname', Gender='$gender', Course='$course' WHERE ID=$userID";

if (mysqli_query($conn, $sql)) {
    echo "modify.php";
} else {
    echo "error $sql" . mysqli_error($conn);
}

mysqli_close($conn);
?>