<?php
include"database.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to SwimmingClub Management System</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body classs="back">

<?php include "navbarmain.php"?>
    <img src="images/service.gif" width=100%><br><br><br>

    <div class= "flexbox-container">
        <div class="flexbox-item flexbox-item1">
            <br>
            <h1>WATER TOTS</h1><br>
            <h2>Beginners</h2><br><br><br>
            <p>Water Tots swimming lessons are designed to help newborns and young children get comfortable in the aquatic, enjoy water activities, and learn fundamental swimming skills.
            </p>
           <button type="submit" class="btn2" name="service"><a href="studentlogin.php">Register</a></button>
        </div>
        <div class="flexbox-item flexbox-item2">
            <br>
        <h1>MINI STARS</h1><br>
        <h2>Beginners</h2><br><br><br>
        <p>Mini Stars swimming lessons include developing water confidence, learning to swim independently, submerging, and adhering to both water and pool safety.</p>
        <button type="submit" class="btn2" name="service"><a href="studentlogin.php">Register</a></button>
    </div>
        <div class="flexbox-item flexbox-item3">
            <br>
        <h1>LITTLE STARS</h1><br>
        <h2>Intermediate</h2><br><br><br>
        <p>With the support of floats and aids, Little Stars swimming sessions help intermediate swimmers develop early techniques such as kicking, breathing, and arm movements.</p>
        <br>
        <button type="submit" class="btn2" name="service"><a href="studentlogin.php">Register</a></button>
        </div>
        <div class="flexbox-item flexbox-item4">
            <br>
        <h1>WATER STARS</h1><br>
        <h2>Advanced</h2><br><br><br>
        <p>Water Stars swimming lessons are for older, more experienced swimmers who would like to enhance their technique and control by learning a variety of strokes.</p>
        <br>
        <button type="submit" class="btn2" name="service"><a href="studentlogin.php">Register</a></button>
        </div>
       
</div>  

<br>
<br>
<br>
<br>
<br>
<br>

<div class="footer">
    <footer><p>Copy Right &copy; Swimming Club Management System</p></footer>
</div>
            
    
</body>
</html>