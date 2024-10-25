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
        <h1 class="heading">Students Login</h1>
        <div class="log">

        <?php
        if(isset($_POST["login"]))
        {
            $sql = "SELECT * from student where SNAME='{$_POST["sname"]}' and SPASS='{$_POST["spass"]}'";
            $res = $db->query($sql);

            if($res->num_rows>0){
                $ro =$res->fetch_assoc();

                $_SESSION["SID"] = $ro["SID"];
                $_SESSION["SNAME"] = $ro["SNAME"];

                echo "<script>window.open('student_home.php', '_self');</script>";

            }
            else{

                echo "<div class='error'>Invalid Username and password</div>";
            }
        }
        
        
        ?>

        <form method="POST" action="">
            <label>Username</label>
            <input type="text" name="sname" required class="input"><br>
            <label>Password</label>
            <input type="Password" name="spass" required class="input"><br>
        
            <button type="submit" class="btn" name="login">Login Here</button>
            <div class="signup">New Member?  <a href="dobcheck.php" class="link">Signup Here</a></div>
            </form>
</div>
</div>
<div class="footer">
    <footer><p>Copy Right &copy; Swimming Club Management System</p></footer>
</div>
            


</body>
</html>