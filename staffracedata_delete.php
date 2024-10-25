<?php

include "database.php";
session_start();

$s = "delete from race where RID={$_GET["id"]}";
$db->query($s);
echo "<script>window.open('staffracedata.php?mess=member details deleted.', '_self')</script>";

?>