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
    <?php include "staffnavbar.php"?>
    <img src="images/2.png" class="sha" width=100% >
    <div id="section">
    <?php include "staffsidebar.php"?>
     <div id="content">
        <h3 class="text">Welcome <?php echo $_SESSION["TNAME"] ;
        $name= $_SESSION["TNAME"]; ?></h3><br><hr><br>
        <h3>STAFF PROFILE</h3><br>
        
        
        <div class="tbox">


<table border="1px">


    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Squad</th>
        <th>Email</th>
        
        
    </tr>

    <?php
    
    $x = "SELECT TFIRSTNAME, TLASTNAME, TSQUAD, TEMAIL from staff where TNAME = '$name'";
    $res=$db->query($x);

    if($res->num_rows>0){
       
    while($r=$res->fetch_assoc()){


        echo "<tr>
        <td> {$r["TFIRSTNAME"]}</td>
        <td> {$r["TLASTNAME"]}</td>
        <td> {$r["TSQUAD"]}</td>
        <td> {$r["TEMAIL"]}</td>
        </tr>";

    }

    
    }else{


    }


    ?>
</table><br><br>
        

    </div>
    </div>
  
<div class="footer">
    <footer><p>Copy Right &copy; Swimming Club Management System</p></footer>
</div>
    
</body>
</html>