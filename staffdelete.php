<?php

include "database.php";
session_start();

$s = "delete from staff where TID={$_GET["id"]}";
$db->query($s);
echo "<script>window.open('staffdetails.php?mess=Staff details deleted.', '_self')</script>";

?>