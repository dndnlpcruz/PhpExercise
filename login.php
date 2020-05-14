<?php 
include "conndb.php";
$username = $_POST["username"];
$password = $_POST["userpass"];

      //SELECT * FROM `users` WHERE userName="admin" AND userPassword="admin";
$sql = "SELECT * FROM users WHERE userName='$username' AND userPassword='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row["userID"]. "<br>" . "Name: " . $row["fullName"] . "<br>";
  }
} else {
  echo "Invalid input!";
}

mysqli_close($conn);
?>
