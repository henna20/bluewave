<?php

include "database.php";
session_start();

$s = "delete from register where RGID={$_GET["id"]}";
$db->query($s);
echo "<script>window.open('eventsregisteredcandidates.php?mess=Registered Candidate details deleted.', '_self')</script>";

?>