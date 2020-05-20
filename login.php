<?php 
include "conndb.php";
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

      //SELECT * FROM `users` WHERE userName="admin" AND userPassword="admin";
$sql = "SELECT * FROM users WHERE userName='$username' AND userPassword='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  $_SESSION["auth"] = "yes";
  echo "homepage.php";
} else {
  echo "index.php";
}

mysqli_close($conn);
?>
