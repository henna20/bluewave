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
        <h3 class="text">Welcome <?php echo $_SESSION["SNAME"]; ?></h3><br><hr><br>
        <h3>SCHEDULES</h3><br>

        

    <div class="tbox">


<table border="1px">


    <tr>
        <th>Day</th>
        <th>Date</th>
        <th>Session</th>
        <th>Squad</th>
        <th>Coach</th>
        <th>Time</th>
        <th>Pool</th>
        
    </tr>

    <?php
    
    $x = "select * from schedule";
    $res=$db->query($x);

    if($res->num_rows>0){
       

    while($r=$res->fetch_assoc()){

     
      

        echo "<tr>
        <td> {$r["WDAY"]}</td>
        <td> {$r["WDATE"]}</td>
        <td> {$r["WSESSION"]}</td>
        <td> {$r["WSQUAD"]}</td>
        <td> {$r["WCOACH"]}</td>
        <td> {$r["WTIME"]}</td>
        <td> {$r["WPOOL"]}</td>
        
      

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