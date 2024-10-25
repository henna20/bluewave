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
<h3>PROFILE</h3><br><br>



<table border="1px">
    <tr>
       
        <th>First Name</th>
        <th>Last Name</th>
       
      
        <th>Phone Number</th>
        <th>Email ID</th>
        <th>Edit</th>
       
        
    </tr>

    <?php
    
    $s = "select SID,SFIRSTNAME, SLASTNAME,SPHONE,SEMAIL from student where SNAME='$name' ";
    $res=$db->query($s);

    if($res->num_rows>0){
      

    while($r=$res->fetch_assoc()){

     
      

        echo "<tr>
        
       
        <td> {$r["SFIRSTNAME"]}</td>
        <td> {$r["SLASTNAME"]}</td>
       

        <td> {$r["SPHONE"]}</td>
        <td> {$r["SEMAIL"]}</td>
        <td> <a href= 'studentprofileupdate.php?id={$r["SID"]} ' class='btns' name='update'>Edit/Update</td>
      

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