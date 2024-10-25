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
    <img src="images/Team members.gif" width=100%><br><br><br>

    <div class= "flexbox-container">
        <div class="flexbox-item flexbox-item1">
        <img src="images/team1.jpg" class="imag" >
            <h1>Alex George</h1><br>
            <h2>Squad 1</h2><br><br>
            <p>GOLD MEDAL WINNER (2015)</p>
            <p>Email ID: alex@gmail.com</p>
         
        </div>
        <div class="flexbox-item flexbox-item2">
        <img src="images/team2.jpg" class="imag">
        <h1>Martin Thomas</h1><br>
        <h2>Squad 2</h2><br><br>
        <p>NATIONAL CAMPAIGN (2020)</p>
        <p>Email ID: martin@gmail.com</p>
        
    </div>
        <div class="flexbox-item flexbox-item3">
        <img src="images/team3.jpg" class="imag" >
        <h1>Shine Tomy</h1><br>
        <h2>Squad 3</h2><br><br>
        <p>SILVER MEDAL WINNER (2018)</p>
        <p>Email ID: shine@gmail.com</p>
        </div>
        <div class="flexbox-item flexbox-item4">
        <img src="images/team4.jpg" class="imag" >
        <h1>Toni Roy</h1><br>
        <h2>Squad 4</h2><br><br>
        <p>INTERNATIONAL SWIMMING CAMPAIGN (2021)</p>
        <p>Email ID: toni@gmail.com</p>
        
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