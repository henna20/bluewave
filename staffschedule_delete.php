<?php

include "database.php";
session_start();

$s = "delete from schedule where WID={$_GET["id"]}";
$db->query($s);
echo "<script>window.open('staffschedule.php?mess=schedule deleted.', '_self')</script>";

?>