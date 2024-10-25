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
    <img src="images/1.png" width=100%>
    <div class="login">
        <h1 class="heading">Student Registeration</h1>
        <div class="log">

        <?php
        
        if(isset($_POST["reg"])) {

            if($_POST["spass"]!=$_POST["scpass"]){
                echo "<div class='error'>Password Doesn't match</div>";
            }else{

            $q = "insert into student(SNAME, 
            SFIRSTNAME,
             SLASTNAME, 
             SGENDER, 
             SDATEOFBIRTH, 
             SPHONE, 
             SEMAIL, 
             SPASS, 
             SCPASS) 
             values('{$_POST["sname"]}', 
            '{$_POST["sfirstname"]}',
            '{$_POST["slastname"]}',
            '{$_POST["sgender"]}',
            '{$_POST["sdateofbirth"]}',
            '{$_POST["sphone"]}',
            '{$_POST["semail"]}',
            '{$_POST["spass"]}',
            '{$_POST["scpass"]}' )";

            if($db->query($q)){

                echo "<div class='success'>Insert class success</div>";
               

            }else{

                echo "<div class='error'>Insert failed</div>";
            }

        }
            

        }
        
        
         ?>

            <form  method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
            <label>Username</label> 
            <input type="text" name="sname" required class="input"><br>
            <label>First Name</label>
            <input type="text" name="sfirstname" required class="input"><br>
            <label>Last Name</label>
            <input type="text" name="slastname" required class="input"><br>
            <label>Gender</label>
            <input type="radio" name="sgender" value="m" required >Male
            <input type="radio" name="sgender" value="f" required >Female<br><br>

           
            <label>Date of Birth</label>
            <input type="date" name="sdateofbirth" required class="input"><br>
            

            <label>Mobile Number</label>
            <input type="text" name="sphone" required class="input"><br>
             
           
            <label>Email Address</label>
            <input type="email" name="semail" required class="input" ><br>
      
            <label>Password</label>
            <input type="Password" name="spass" required  class="input"><br>
            <label>Confirm Password</label>
            <input type="Password" name="scpass" required class="input" ><br>
           

            
            
 
            <button type="submit" class="btn" name="reg" >Submit</button>
            <div class="signup">Please Login >>  <a href="studentlogin.php" class="link">Login Here</a></div>
           
           
            </form>
</div>
</div>
<div class="footer">
    <footer><p>Copy Right &copy; Swimming Club Management System</p></footer>
</div>

</body>
</html>