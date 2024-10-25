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
    <?php include "adminnavbar.php"?>
    <img src="images/2.png" class="sha" width=100% >
    <div id="section">
    <?php include "sidebar.php"?>
     <div id="content">
        <h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
        <h3>Candidates Registered for events</h3><br>

        

    <div class="tbox">



<?php
if(isset($_GET["mess"])) {
    echo "<div class='error'>{$_GET["mess"]}</div>";
}

?>
<table border="1px">
    <tr>
        <th>Event Name</th>
        <th>Firt Name</th>
        <th>Last Name</th>
        <th>Coach Incharge</th>
        <th>Date</th>
        <th>Time</th>
        <th>Location</th>
        <th>Category</th>
        
        <th>Delete</th>
    </tr>

    <?php
    
    $x = "select * from register";
    $res=$db->query($x);

    if($res->num_rows>0){
       

    while($r=$res->fetch_assoc()){

     
       

        echo "<tr>
        
       
        <td> {$r["RGEVENTNAME"]}</td>
        <td> {$r["RGFIRSTNAME"]}</td>
        <td> {$r["RGSECONDNAME"]}</td>
        <td> {$r["RGCOACH"]}</td>
        <td> {$r["RGDATE"]}</td>
        <td> {$r["RGTIME"]}</td>
        

        <td> {$r["RGADDRESS1"]},{$r["RGADDRESS2"]}, {$r["RGCITY"]}, {$r["RGSTATE"]},{$r["RGCOUNTRY"]},{$r["RGPIN"]}</td>
        
        <td> {$r["RGCATEGORY"]}</td>
    
        <td> <a href='registerevent_delete.php?id={$r["RGID"]}' class='btnr'>Delete</td>

        </tr>";

    }

}else{


    }

    
    ?>
</table><br><br><br>

    </div>
    </div>
  
<div class="footer">
    <footer><p>Copy Right &copy; Swimming Club Management System</p></footer>
</div>
    
</body>
</html>