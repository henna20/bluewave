<?php

include "database.php";
session_start();

$s = "delete from student where SID={$_GET["id"]}";
$db->query($s);
echo "<script>window.open('staffmemberdata.php?mess=member details deleted.', '_self')</script>";

?>