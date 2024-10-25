<?php
include "database.php";
session_start();
$id=$_GET['id'];

?> 
<?php
if(isset($_POST["updaterace"])){

    $w = "UPDATE parent SET PSTUDENTNAME='{$_POST["pstudentname"]}', PPHONE='{$_POST["pphone"]}', PEMAIL= '{$_POST["pemail"]}'
    WHERE PID= '{$_POST["pid"]}'";
    if($db->query($w)){

        
        echo "<script>window.open('parentprofile.php?mess=Race data updated.', '_self')</script>";

    }else{

        echo "<div class='error'>update failed</div>";
    }
}


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
        <h3 class="text">Welcome <?php echo $_SESSION["PNAME"]; ?></h3><br><hr><br>
        <h3> UPDATE PROFILE</h3><br>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <input type="hidden" name="pid" value="<?php 
                
                $t = "select PID from parent where PID =$id";
                $res=$db->query($t);
            
                if($res->num_rows>0){
                  
            
                while($r=$res->fetch_assoc()){
 
                 echo  "{$r["PID"]}";
                }}
             ?>" required class="input"><br>
    
   
            <label>Student Name</label>
            <input type="text" name="pstudentname" value="<?php 
                
                $t = "select PSTUDENTNAME from parent where PID =$id";
                $res=$db->query($t);
            
                if($res->num_rows>0){
                  
            
                while($r=$res->fetch_assoc()){
 
                 echo  "{$r["PSTUDENTNAME"]}";
                }}
             ?>" required class="input"><br>
                  <label>Phone Number</label><br>
            
            <input type="text" name="pphone" value="<?php 
                
                $t = "select PPHONE from parent where PID =$id";
                $res=$db->query($t);
            
                if($res->num_rows>0){
                  
            
                while($r=$res->fetch_assoc()){
 
                 echo  "{$r["PPHONE"]}";
                }}
             ?>" required class="input"><br>
             <label>Email</label><br>
            
            <input type="text" name="pemail" value="<?php 
                
                $t = "select PEMAIL from parent where PID =$id";
                $res=$db->query($t);
            
                if($res->num_rows>0){
                  
            
                while($r=$res->fetch_assoc()){
 
                 echo  "{$r["PEMAIL"]}";
                }}
             ?>" required class="input"><br>
    
        
            
        <button type="submit" class="btn" name="updaterace">UPDATE RACE DATA</button><br><br>
    
    </form>
     
    </div><br>
    
 
    </div>
  
<div class="footer">
    <footer><p>Copy Right &copy; Swimming Club Management System</p></footer>
</div>
    
</body>
</html>



