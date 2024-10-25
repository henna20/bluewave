<?php

include "database.php";
session_start();

$s = "delete from event where EID={$_GET["id"]}";
$db->query($s);
echo "<script>window.open('events.php?mess=event deleted.', '_self')</script>";

?>