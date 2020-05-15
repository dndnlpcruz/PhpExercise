<?php 
include "conndb.php";
$username = $_POST["username"];
$password = $_POST["password"];

      //SELECT * FROM `users` WHERE userName="admin" AND userPassword="admin";
$sql = "SELECT * FROM users WHERE userName='$username' AND userPassword='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  echo "registration.php";
} else {
  echo "Invalid input!";
}

mysqli_close($conn);
?>
