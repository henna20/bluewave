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
    <img src="images/1.gif" width=100%>
    <div class="login">
        <h1 class="heading">Parents Login</h1>
        <div class="log">

        <?php
        if(isset($_POST["login"]))
        {
            $sql = "SELECT * from parent where PNAME='{$_POST["pname"]}' and PPASS='{$_POST["ppass"]}'";
            $res = $db->query($sql);

            if($res->num_rows>0){
                $ro =$res->fetch_assoc();

                $_SESSION["PID"] = $ro["PID"];
                $_SESSION["PNAME"] = $ro["PNAME"];

                echo "<script>window.open('parent_home.php', '_self');</script>";

            }
            else{

                echo "<div class='error'>Invalid Username and password</div>";
            }
        }
        
        
        ?>

        <form method="POST" action="">
            <label>Username</label>
            <input type="text" name="pname" required class="input"><br>
            <label>Password</label>
            <input type="Password" name="ppass" required class="input"><br>
            <button type="submit" class="btn" name="login">Login Here</button>
            <div class="signup">New Member?  <a href="parentsignup.php" class="link">Signup Here</a></div>
            </form>
</div>
</div>
<div class="footer">
    <footer><p>Copy Right &copy; Swimming Club Management System</p></footer>
</div>
            
    
</body>
</html>