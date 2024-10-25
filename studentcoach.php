<?php
include "database.php";
session_start();
?> 

<!DOCTYPE html>
<html>
<head>
    
<title>Welcome to Blue Wave SwimmingClub Management System</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <?php include "studentnavbar.php"?>
    <img src="images/2.png" class="sha" width=100% >
    <div id="section">
    <?php include "studentsidebar.php"?>
     <div id="content">
        <h3 class="text">Welcome <?php echo $_SESSION["SNAME"]; 
        $name=$_SESSION["SNAME"];?></h3><br><hr><br>
  

    <div class="tbox">
<h3>COACH DETAILS</h3><br><br>



<table border="1px">
    <tr>
        <th>S.No</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Squad</th>
        
        <th>Email ID</th>
       
        
    </tr>

    <?php
    
    $s = "select * from staff ";
    $res=$db->query($s);

    if($res->num_rows>0){
        $i = 0;

    while($r=$res->fetch_assoc()){

     
        $i++;

        echo "<tr>
        
        <td>{$i} </td>
        <td> {$r["TFIRSTNAME"]}</td>
        <td> {$r["TLASTNAME"]}</td>
        <td> {$r["TSQUAD"]}</td>
        
        <td> {$r["TEMAIL"]}</td>
      

        </tr>";

    }

    }else{


    }
    
    
    ?>
</table>

    </div>
    </div>
  
<div class="footer">
    <footer><p>Copy Right &copy; Swimming Club Management System</p></footer>
</div>
    
</body>
</html>