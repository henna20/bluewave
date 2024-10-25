<?php

include "database.php";
session_start();

$s = "delete from race where RID={$_GET["id"]}";
$db->query($s);
echo "<script>window.open('racedata.php?mess=One race data deleted.', '_self')</script>";

?>