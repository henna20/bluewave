<?php

include "database.php";
session_start();

$s = "delete from parent where PID={$_GET["id"]}";
$db->query($s);
echo "<script>window.open('staffminormemberdata.php?mess=member details deleted.', '_self')</script>";

?>