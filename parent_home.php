<?php
include "database.php";
session_start();
?> 

<!DOCTYPE html>
<html>
<head>
    
<title>Welcome to SwimmingClub Management System</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <?php include "parentnavbar.php"?>
    <img src="images/2.png" class="sha" width=100% >
    <div id="section">
    <?php include "parentsidebar.php"?>
     <div id="content">
        <h3 class="text">Welcome <?php echo $_SESSION["PNAME"]; ?></h3><br><hr><br>
        <h3>Swimming Club Information</h3><br>
        <img src="images/3.jpg" class="imgs">
        <p class="para">
        Bluewave Swimming Club provides professional swimming lesson in organised squads for all ages within a quality atmosphere under fully qualified staff supervision and coaching.  
        </p>
        <p class="para">
        We have state of the art facilities like temperature controlled pools . Pools for different age/ abilities Trained and qualified coaches.
        </p>
    </div>
    </div>
  
<div class="footer">
    <footer><p>Copy Right &copy; Swimming Club Management System</p></footer>
</div>
    
</body>
</html>