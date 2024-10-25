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
    <?php include "parentnavbar.php"?>
    <img src="images/2.png" class="sha" width=100% >
    <div id="section">
    <?php include "parentsidebar.php"?>
     <div id="content">
        <h3 class="text">Welcome <?php echo $_SESSION["PNAME"]; 
        $name=$_SESSION["PNAME"];?></h3><br><hr><br>
  

    <div class="tbox">
<h3>PROFILE</h3><br><br>



<table border="1px">
    <tr>
        <th>S.No</th>
        <th>First Name</th>
        <th>Phone Number</th>
        <th>Email ID</th>
        <th>Edit</th>
        
        

       
        
    </tr>

    <?php
    
    $s = "select PID,PSTUDENTNAME,PPHONE,PEMAIL from parent where PNAME='$name' ";
    $res=$db->query($s);

    if($res->num_rows>0){
       

    while($r=$res->fetch_assoc()){

     
     

        echo "<tr>
        
       
        <td> {$r["PSTUDENTNAME"]}</td>
        <td> {$r["PPHONE"]}</td>
        <td> {$r["PEMAIL"]}</td>
        <td> <a href= 'parentprofileupdate.php?id={$r["PID"]} ' class='btns' name='update'>Edit/Update</td>
      

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