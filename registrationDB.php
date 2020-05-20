<?php 
include "conndb.php";
$username = $_POST["username"];
$password = $_POST["password"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$gender = $_POST["gender"];
$course = $_POST["course"];

$sql = "INSERT INTO student(Username, UserPassword, FirstName, LastName, Gender, Course) VALUES ('$username', '$password', '$firstname', '$lastname', '$gender', '$course')";

if(mysqli_query($conn, $sql)){
    echo "registration.php";
} else {
    echo"error $sql" . mysqli_error($conn);
}

mysqli_close($conn);
?>
