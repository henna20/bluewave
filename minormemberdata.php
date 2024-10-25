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
    <?php include "navbar.php"?>
    <img src="images/2.png" class="sha" width=100% >
    <div id="section">
    <?php include "sidebar.php"?>
     <div id="content">
        <h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
  

    <div class="tbox">
<h3>MEMBER DATA</h3><br><br>


<?php
if(isset($_GET["mess"])) {
    echo "<div class='error'>{$_GET["mess"]}</div>";
}

?>
<table border="1px">
    <tr>
        <th>S.No</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone Number</th>
        <th>Email ID</th>
        
        <th>Delete</th>
        
    </tr>

    <?php
    
    $s = "select * from parent";
    $res=$db->query($s);

    if($res->num_rows>0){
        $i = 0;

    while($r=$res->fetch_assoc()){

     
        $i++;

        echo "<tr>
        
        <td>{$i} </td>
        <td> {$r["PFIRSTNAME"]}</td>
        <td> {$r["PLASTNAME"]}</td>
        <td> {$r["PPHONE"]}</td>
        <td> {$r["PEMAIL"]}</td>
        
        <td> <a href= 'minordelete.php?id={$r["PID"]}'class='btnr'>Delete</td>

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