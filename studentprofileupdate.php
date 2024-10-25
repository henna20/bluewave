<?php
include "database.php";
session_start();
$id=$_GET['id'];

?> 
<?php
if(isset($_POST["updaterace"])){

    $w = "UPDATE student SET SFIRSTNAME='{$_POST["sfirstname"]}', SLASTNAME='{$_POST["slastname"]}', 
   SPHONE = '{$_POST["sphone"]}', SEMAIL = '{$_POST["semail"]}'
    where SID = '{$_POST["sid"]}'";
    if($db->query($w)){

        
        echo "<script>window.open('studentprofile.php?mess=profile data updated.', '_self')</script>";

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
    <?php include "studentnavbar.php"?>
    <img src="images/2.png" class="sha" width=100% >
    <div id="section">
    <?php include "studentsidebar.php"?>
     <div id="content">
        <h3 class="text">Welcome <?php echo $_SESSION["SNAME"]; ?></h3><br><hr><br>
        <h3> UPDATE PROFILE</h3><br>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <input type="hidden" name="sid" value="<?php 
                
                $t = "select SID from student where SID =$id";
                $res=$db->query($t);
            
                if($res->num_rows>0){
                  
            
                while($r=$res->fetch_assoc()){
 
                 echo  "{$r["SID"]}";
                }}
             ?>" required class="input"><br>
    
   
            <label>First Name</label>
            <input type="text" name="sfirstname" value="<?php 
                
                $t = "select SFIRSTNAME from student where SID =$id";
                $res=$db->query($t);
            
                if($res->num_rows>0){
                  
            
                while($r=$res->fetch_assoc()){
 
                 echo  "{$r["SFIRSTNAME"]}";
                }}
             ?>" required class="input"><br>

                  <label>Last Name</label>
            <input type="text" name="slastname" value="<?php 
                
                $t = "select SLASTNAME from student where SID =$id";
                $res=$db->query($t);
            
                if($res->num_rows>0){
                  
            
                while($r=$res->fetch_assoc()){
 
                 echo  "{$r["SLASTNAME"]}";
                }}
             ?>" required class="input"><br>

            
                 

                  <label>Phone Number</label><br>
            
            <input type="text" name="sphone" value="<?php 
                
                $t = "select SPHONE from student where SID =$id";
                $res=$db->query($t);
            
                if($res->num_rows>0){
                  
            
                while($r=$res->fetch_assoc()){
 
                 echo  "{$r["SPHONE"]}";
                }}
             ?>" required class="input"><br>

             <label>Email</label><br>
            
            <input type="email" name="semail" value="<?php 
                
                $t = "select SEMAIL from student where SID =$id";
                $res=$db->query($t);
            
                if($res->num_rows>0){
                  
            
                while($r=$res->fetch_assoc()){
 
                 echo  "{$r["SEMAIL"]}";
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



