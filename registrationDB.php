<?php 
include "conndb.php";
$username = $_POST["userName"];
$password = $_POST["password"];
$firstname = $_POST["firstName"];
$lastname = $_POST["lastName"];
$gender = $_POST["gender"];
$course = $_POST["course"];

$sql = "INSERT INTO student(Username, UserPassword, FirstName, LastName, Gender, Course) VALUES ('$username', '$password', '$firstname', '$lastname', '$gender', '$course')";
$result = mysqli_query($conn, $sql);

if(mysqli_query($conn, $sql)){
    echo "Added";
}
else{
    echo"error $sql" . mysqli_error($conn);
}

mysqli_close($conn);
?>
