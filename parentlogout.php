<?php
include "database.php";
session_start();

unset($_SESSION["PID"]);
unset($_SESSION["PNAME"]);

session_destroy();

echo "<script>window.open('parentlogin.php',_self)</script>";
?> 