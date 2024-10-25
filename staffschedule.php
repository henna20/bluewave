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
        <h3>SCHEDULES</h3><br>

        <?php
        
        if(isset($_POST["schedule"])) {
            $w = "insert into schedule (WDAY, WDATE, WSESSION, WSQUAD, WCOACH, WTIME, WPOOL) 
            values('{$_POST["wday"]}', '{$_POST["wdate"]}', '{$_POST["wsession"]}', '{$_POST["wsquad"]}', '{$_POST["wcoach"]}', '{$_POST["wtime"]}', '{$_POST["wpool"]}' )";

            if($db->query($w)){

                echo "<div class='success'>Insert schedule data success</div>";

            }else{

                echo "<div class='error'>Insert failed</div>";
            }
        }
        
        
        ?>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
   
           
            <label>Day</label><br>
            <input type="text" name="wday"  required class="input"><br>
            <label>Date</label><br>
            <input type="date" name="wdate" required class="input"><br>
            <label>Session</label><br>
            <input type="number" name="wsession" required class="input"><br>
            <label>Squad</label><br>
            <input type="number" name="wsquad" required class="input"><br>
            <label>Coach</label><br>
            <select name="wcoach"  required class="input">
            <option value="-select-">-select-</option>
            <option value="Alex George">Alex George</option>
            <option value="Martin Thomas">Martin Thomas</option>
            <option value="Shine Tomy">Shine Tomy</option>
            <option value="Toni Roy">Toni Roy</option>
            </select><br>
            <label>Time</label><br>
            <input type="text" name="wtime" placeholder="10:04:25"required class="input"><br>
            <label>Pool</label><br>
            <select name="wpool"  required class="input">
            <option value="-select-">-select-</option>
            <option value="Teaching Pool">Teaching Pool</option>
            <option value="Large Pool">Large Pool</option>
            </select>
        <button type="submit" class="btn" name="schedule">SCHEDULE</button><br><br>
    
    </form>
     
    </div><br>

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
        <th>Update</th>
        <th>Delete</th>
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
        
        <td> <a href= 'update.php?id={$r["WID"]}' class='btns' name='update'>Edit/Update</td>
        <td> <a href= 'schedule_delete.php?id={$r["WID"]}'class='btnr'>Delete</td>

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