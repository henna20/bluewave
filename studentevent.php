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
        <h3>EVENTS</h3><br>

    

    <div class="tbox">
    <?php
if(isset($_GET["mess"])) {
    echo "<div class='success'>{$_GET["mess"]}</div>";
}

?>


<table border="1px">


    <tr>
        <th>Name of Event</th>
        <th>Date</th>
        <th>Time</th>
        <th>Coach Incharge</th>
        <th>Location</th>
        <th>Competition Category</th>
        <th>Register</th>


        
    </tr>

    <?php
    
    $x = "select * from event";
    $res=$db->query($x);

    if($res->num_rows>0){
       

    while($r=$res->fetch_assoc()){

     
      

        echo "<tr>
        <td> {$r["ENAME"]}</td>
        <td> {$r["EDATE"]}</td>
        <td> {$r["ETIME"]}</td>
        <td> {$r["ECOACH"]}</td>

        <td> {$r["EADDRESS1"]},{$r["EADDRESS2"]}, {$r["ECITY"]}, {$r["ESTATE"]},{$r["ECOUNTRY"]},{$r["EPIN"]},</td>
        
    <td>-{$r["EC1"]}<br>-{$r["EC2"]}<br>-{$r["EC3"]}<br>-{$r["EC4"]}<br>-{$r["EC5"]}</td>
    <td> <a href= 'studenteventregisteration.php?id={$r["EID"]}'class='btnr'>Register</td>
       
        </tr>";

    }

}else{


    }

    
    ?>
</table><br><br><br>

    </div>
    </div>
    <br><br><br><br>
  
<div class="footer">
    <footer><p>Copy Right &copy; Swimming Club Management System</p></footer>
</div>
    
</body>
</html>