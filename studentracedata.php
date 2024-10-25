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
        <h3>RACE DATA</h3><br>

        

    <div class="tbox">




<table border="1px">
    <tr>
        <th>S.No</th>
        <th>Race Category</th>
        <th>Time</th>
        <th>Data</th>
        <th>Best Lap Time</th>
        <th>Squad</th>
        <th>Coach</th>
        
    </tr>

    <?php
    
    $x = "select * from race";
    $res=$db->query($x);

    if($res->num_rows>0){
        $i = 0;

    while($r=$res->fetch_assoc()){

     
        $i++;

        echo "<tr>
        
        <td>{$i} </td>
        <td> {$r["RCATEGORY"]}</td>
        <td> {$r["RTIME"]}</td>
        <td> {$r["RDATE"]}</td>
        <td> {$r["RBESTLAPTIME"]}</td>
        <td> {$r["RSQUAD"]}</td>
        <td> {$r["RCOACH"]}</td>
        
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