<?php
include "database.php";
session_start();

unset($_SESSION["SID"]);
unset($_SESSION["SNAME"]);

session_destroy();

echo "<script>window.open('studentlogin.php',_self)</script>";
?> 