<?php
session_start();
if (isset($_SESSION["username"])) {
unset($_SESSION["username"]);
unset($_SESSION["pass"]);
header("location:login.php");  // code...
}


 ?>
