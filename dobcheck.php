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
        $d=$dr='';
        if(isset($_POST['s'])){
            if($_POST['d']!='')
            {
                $d =$_POST['d'];

                $ey = date('Y',strtotime($_POST['d']));
                $em = date('m',strtotime($_POST['d']));
                $ed = date('d',strtotime($_POST['d']));

                $edays = ($ey-1)*365 + ($em-1)*30 + $ed;

                $sy=date('Y');
                $sm=date('m');
                $sd=date('d');

                $sdays = ($sy-1)*365 + ($sm-1)*30 + $sd;

                $diff=$sy-$ey;

                if($diff>18)
                {
                   
                    echo "<script>window.open('studentsignup.php?', '_self')</script>";
                }else{
                    echo "<script>window.open('parentsignup.php?', '_self')</script>";
                   
                }


            }else{
                $dr="enter any date";
            }
        }else{

        }
        
        
        ?>

        <form method="POST" action="">
            <label>Please enter your date of birth</label>
            <input type="date" name="d" value ="<?php echo $d;?>" required class="input">
            <!-- <span><?php echo $dr;?></span> -->
            <br>
            
            <button type="submit" class="btn" name="s">Submit</button>





</div>
</div>
<div class="footer">
    <footer><p>Copy Right &copy; Swimming Club Management System</p></footer>
</div>
            
<!-- <script>
    function message(){
        alert("please rember yoour password");
    }
</script> -->

</body>
</html>