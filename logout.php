<?php
   session_start();
   unset($_SESSION["auth"]);
   
   echo 'You have cleaned session';
   header('Location: index.php');
?>