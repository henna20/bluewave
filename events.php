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
        <h3>EVENTS</h3><br>

        <?php
        
        if(isset($_POST["event"])) {
            $w = "insert into event (ENAME, EDATE, ETIME, ECOACH, EADDRESS1, EADDRESS2, ECITY, ESTATE, ECOUNTRY, EPIN, EC1, EC2,EC3,EC4,EC5) 
            values('{$_POST["ename"]}', '{$_POST["edate"]}', '{$_POST["etime"]}', '{$_POST["ecoach"]}', '{$_POST["eaddress1"]}', '{$_POST["eaddress2"]}', '{$_POST["ecity"]}'
            , '{$_POST["estate"]}', '{$_POST["ecountry"]}', '{$_POST["epin"]}', '{$_POST["ec1"]}', '{$_POST["ec2"]}', '{$_POST["ec3"]}', '{$_POST["ec4"]}', '{$_POST["ec5"]}' )";

            if($db->query($w)){

                echo "<div class='success'>Insert schedule data success</div>";

            }else{

                echo "<div class='error'>Insert failed</div>";
            }
        }
        
        
        ?>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
   
           
            <label>Name of Event</label><br>
            <input type="text" name="ename"  required class="input"><br>
            <label>Date</label><br>
            <input type="date" name="edate" required class="input"><br>
            
            <label>Time</label><br>
            <input type="text" name="etime" placeholder="10:04:25"required class="input"><br>
            <label>Coach Incharge</label><br>
            <select name="ecoach"  required class="input">
            <option value="-select-">-select-</option>
            <option value="Alex George">Alex George</option>
            <option value="Martin Thomas">Martin Thomas</option>
            <option value="Shine Tomy">Shine Tomy</option>
            <option value="Toni Roy">Toni Roy</option>
            </select><br>
            <label>Location</label><br>
            
            <label>Address Line1</label><br>
            <input type="text" name="eaddress1" required class="input"><br>
            <label>Address Line2</label><br>
            <input type="text" name="eaddress2" required class="input"><br>
            <label>City</label><br>
            <input type="text" name="ecity" required class="input"><br>
            <label>State</label><br>
            <input type="text" name="estate" required class="input"><br>
            <label>Country</label><br>
            <input type="text" name="ecountry" required class="input"><br>
            <label>Pin Code</label><br>
            <input type="text" name="epin" placeholder="*** ***"required class="input"><br>
            <label>Category 1</label>
            <select name="ec1"  required class="input">

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
        <label>Category 2</label>
            <select name="ec2"  required class="input">

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
        <label> Category 3</label>
            <select name="ec3"  required class="input">

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
        <label>Category 4</label>
            <select name="ec4"  required class="input">

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
        <label>Category 5</label>
            <select name="ec5"  required class="input">

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
            
            
        <button type="submit" class="btn" name="event">ADD EVENT</button><br><br>
    
    </form>
     
    </div><br>

    <div class="tbox">


<table border="1px">


    <tr>
        <th>Name of Event</th>
        <th>Date</th>
        <th>Time</th>
        <th>Coach Incharge</th>
        <th>Location</th>
        <th>Competition Category</th>
        <th>Update</th>
        <th>Delete</th>
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

        <td> {$r["EADDRESS1"]},{$r["EADDRESS2"]}, {$r["ECITY"]}, {$r["ESTATE"]},{$r["ECOUNTRY"]},{$r["EPIN"]}</td>
        
    <td>-{$r["EC1"]}<br>-{$r["EC2"]}<br>-{$r["EC3"]}<br>-{$r["EC4"]}<br>-{$r["EC5"]}</td>
        <td> <a href= 'update.php?id={$r["EID"]}' class='btns' name='update'>Edit/Update</td>
        <td> <a href= 'event_delete.php?id={$r["EID"]}'class='btnr'>Delete</td>

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