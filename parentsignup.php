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
        <h1 class="heading">Parent Registeration</h1>
        <div class="log">

        <?php
        
        if(isset($_POST["parentreg"])) {
            if($_POST["ppass"]!=$_POST["pcpass"]){
                echo "<div class='error'>Password Doesn't match</div>";
            }else{
            $r = "insert into parent(PNAME, 
            PFIRSTNAME,
             PLASTNAME,
             PSTUDENTNAME, 
             PPARENT, 
             PPHONE, 
             PEMAIL, 
             PPASS, 
             PCPASS) 
             values('{$_POST["pname"]}', 
            '{$_POST["pfirstname"]}',
            '{$_POST["plastname"]}',
            '{$_POST["pstudentname"]}',
            '{$_POST["pparent"]}',
            '{$_POST["pphone"]}',
            '{$_POST["pemail"]}',
            '{$_POST["ppass"]}',
            '{$_POST["pcpass"]}' )";

            if($db->query($r)){

                echo "<div class='success'>Insert class success</div>";
               

            }else{

                echo "<div class='error'>Insert failed</div>";
            }
        }
        
    }
         ?>

            <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
            <label>Username</label> 
            <input type="text" name="pname" required class="input"><br>
            <label>First Name</label>
            <input type="text" name="pfirstname" required class="input"><br>
            <label>Last Name</label>
            <input type="text" name="plastname" required class="input"><br>
            <label>Student Name</label>
            <input type="text" name="pstudentname" required class="input"><br>
            <label>Parent</label>
            <input type="radio" name="pparent" value="m" required >Mother
            <input type="radio" name="pparent" value="f" required >Father<br><br>
            <label>Mobile Number</label>
            <input type="text" name="pphone" required class="input"><br>
            <label>Email Address</label>
            <input type="email" name="pemail" required class="input"><br>
            <label>Password</label>
            <input type="Password" name="ppass" required class="input"><br>
            <label>Confirm Password</label>
            <input type="Password" name="pcpass" required class="input"><br>
 
            <button type="submit" class="btn" name="parentreg" >Submit</button>
            <div class="signup">Please Login >>  <a href="parentlogin.php" class="link">Login Here</a></div>
           
            </form>
</div>
</div>
<div class="footer">
    <footer><p>Copy Right &copy; Swimming Club Management System</p></footer>
</div>

</body>
</html>