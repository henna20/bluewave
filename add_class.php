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
        <h3>Add Class Details</h3><br>

        <?php
        
        if(isset($_POST["submit"])) {
            $sql = "insert into class (SNAME, SSEC) value('{$_POST["sname"]}', '{$_POST["ssection"]}' )";

            if($db->query($sql)){

                echo "<div class='success'>Insert class success</div>";

            }else{

                echo "<div class='success'>Insert failed</div>";
            }
        }
        
        
        ?>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <label>Class Name</label>
    <br>
    <select name="sname" required class="input2">

    <option value="">select</option>
    <option value="I">I</option>
    <option value="II">II</option>
    <option value="III">III</option>
    <option value="IV">IV</option>
    <option value="V">V</option>

    </select>
    <br>
    <br>
    <label>Section</label>
    <br>
    <select name="ssection" required class="input2">

    <option value="">select</option>
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
    <option value="D">D</option>
    

    </select>
    
    <button type="submit" class="btn" name="submit">Add class details</button>
    
    </form>
     
    </div><br>

    <div class="tbox">
<h3>Class Details</h3><br><br>


<?php
if(isset($_GET["mess"])) {
    echo "<div class='error'>{$_GET["mess"]}</div>";
}

?>
<table border="1px">
    <tr>
        <th>S.No</th>
        <th>Class Name</th>
        <th>Section</th>
        <th>Delete</th>
    </tr>

    <?php
    
    $s = "select * from class";
    $res=$db->query($s);

    if($res->num_rows>0){
        $i = 0;

    while($r=$res->fetch_assoc()){

     
        $i++;

        echo "<tr>
        
        <td>{$i} </td>
        <td> {$r["SNAME"]}</td>
        <td> {$r["SSEC"]}</td>
        <td> <a href= 'delete.php?id={$r["SID"]}'class='btnr'>Delete</td>

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