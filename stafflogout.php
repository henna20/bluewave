<?php
include "database.php";
session_start();

unset($_SESSION["TID"]);
unset($_SESSION["TNAME"]);

session_destroy();

echo "<script>window.open('stafflogin.php',_self)</script>";
?> 