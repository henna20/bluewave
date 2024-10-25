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
    <?php include "staffnavbar.php"?>
    <img src="images/2.png" class="sha" width=100% >
    <div id="section">
    <?php include "staffsidebar.php"?>
     <div id="content">
        <h3 class="text">Welcome <?php echo $_SESSION["TNAME"]; ?></h3><br><hr><br>
        <h3>RACE DATA</h3><br>

        <?php
        
        if(isset($_POST["addrace"])) {
            $w = "insert into race (RCATEGORY, RSWIMMER, RTIME, RDATE, RBESTLAPTIME, RSQUAD, RCOACH) 
            values('{$_POST["rcategory"]}', '{$_POST["rswimmer"]}', '{$_POST["rtime"]}', '{$_POST["rdate"]}', '{$_POST["rbestlaptime"]}', '{$_POST["rsquad"]}', '{$_POST["rcoach"]}' )";

            if($db->query($w)){

                echo "<div class='success'>Insert race data success</div>";

            }else{

                echo "<div class='error'>Insert failed</div>";
            }
        }
        
        
        ?>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
   
            <label>Race Category</label>
            <select name="rcategory"  required class="input">

    <option value="">select</option>
    <option value="50m Free Style">50m Free Style</option>
    <option value="100m Free Style">100m Free Style</option>
    <option value="200m Free Style">200m Free Style</option>
    <option value="400m Free Style">400m Free Style</option>
    <option value="100m Backstroke">100m Backstroke</option>
    <option value="200m Backstroke">200m Backstroke</option>
    <option value="100m Breaststroke">100m Breaststroke</option>
    <option value="200m Breaststroke">200m Breaststroke</option>
    <option value="200m Medley">200m Medley</option>
    <option value="400m Medley">400m Medley</option>
    
    
        </select><br>
        <label>Swimmer</label><br>
            <input type="text" name="rswimmer"  required class="input"><br>
            <label>Time</label><br>
            <input type="appt-time" name="rtime"  required class="input"><br>
            <label>Date</label><br>
            <input type="date" name="rdate" required class="input"><br>
            <label>Best Lap Time</label><br>
            <input type="appt-time" name="rbestlaptime" required class="input"><br>
            <label>Squad</label><br>
            <input type="text" name="rsquad" required class="input"><br>
            <label>Coach</label><br>
            <input type="text" name="rcoach" required class="input">
        <button type="submit" class="btn" name="addrace">ADD RACE DATA</button><br><br>
    
    </form>
     
    </div><br>

    <div class="tbox">



<?php
if(isset($_GET["mess"])) {
    echo "<div class='error'>{$_GET["mess"]}</div>";
}

?>
<table border="1px">
    <tr>
        <th>S.No</th>
        <th>Race Category</th>
        <th>Swimmer</th>
        <th>Time</th>
        <th>Data</th>
        <th>Best Lap Time</th>
        <th>Squad</th>
        <th>Coach</th>
        <th>Update</th>
        <th>Delete</th>
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
        <td> {$r["RSWIMMER"]}</td>
        <td> {$r["RTIME"]}</td>
        <td> {$r["RDATE"]}</td>
        <td> {$r["RBESTLAPTIME"]}</td>
        <td> {$r["RSQUAD"]}</td>
        <td> {$r["RCOACH"]}</td>
        <td> <a href= 'staffupdate.php?id={$r["RID"]} ' class='btns' name='update'>Edit/Update</td>
        <td> <a href= 'staffracedata_delete.php?id={$r["RID"]}'class='btnr'>Delete</td>

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