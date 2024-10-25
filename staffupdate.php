<?php
include "database.php";
session_start();
$id=$_GET['id'];

?> 
<?php
if(isset($_POST["updaterace"])){

    $w = "UPDATE race SET RCATEGORY='{$_POST["rcategory"]}',RSWIMMER='{$_POST["rswimmer"]}', RTIME = '{$_POST["rtime"]}',RDATE= '{$_POST["rdate"]}', 
    RBESTLAPTIME= '{$_POST["rbestlaptime"]}', RSQUAD='{$_POST["rsquad"]}' , RCOACH= '{$_POST["rcoach"]}' 
    WHERE RID= '{$_POST["rid"]}'";
    if($db->query($w)){

        
        echo "<script>window.open('staffracedata.php?mess=Race data updated.', '_self')</script>";

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
    <?php include "staffnavbar.php"?>
    <img src="images/2.png" class="sha" width=100% >
    <div id="section">
    <?php include "staffsidebar.php"?>
     <div id="content">
        <h3 class="text">Welcome <?php echo $_SESSION["TNAME"]; ?></h3><br><hr><br>
        <h3> UPDATE RACE DATA</h3><br>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <input type="hidden" name="rid" value="<?php 
                
                $t = "select RID from race where RID =$id";
                $res=$db->query($t);
            
                if($res->num_rows>0){
                  
            
                while($r=$res->fetch_assoc()){
 
                 echo  "{$r["RID"]}";
                }}
             ?>" required class="input"><br>
    
   
            <label>Race Category</label>
            <input type="text" name="rcategory" value="<?php 
                
                $t = "select RCATEGORY from race where RID =$id";
                $res=$db->query($t);
            
                if($res->num_rows>0){
                  
            
                while($r=$res->fetch_assoc()){
 
                 echo  "{$r["RCATEGORY"]}";
                }}
             ?>" required class="input"><br>
                  <label>Swimmer</label><br>
            
            <input type="text" name="rswimmer" value="<?php 
                
                $t = "select RSWIMMER from race where RID =$id";
                $res=$db->query($t);
            
                if($res->num_rows>0){
                  
            
                while($r=$res->fetch_assoc()){
 
                 echo  "{$r["RSWIMMER"]}";
                }}
             ?>" required class="input"><br>
    
        
            <label>Time</label><br>
            
            <input type="app_time" name="rtime" value="<?php 
                
                $t = "select RTIME from race where RID =$id";
                $res=$db->query($t);
            
                if($res->num_rows>0){
                  
            
                while($r=$res->fetch_assoc()){
 
                 echo  "{$r["RTIME"]}";
                }}
             ?>" required class="input"><br>
            <label>Date</label><br>
            

            <input type="date" name="rdate" value="<?php 
                
                $t = "select RDATE from race where RID =$id";
                $res=$db->query($t);
            
                if($res->num_rows>0){
                  
            
                while($r=$res->fetch_assoc()){
 
                 echo  "{$r["RDATE"]}";
                }}
             ?>" required class="input"><br>
            <label>Best Lap Time</label><br>
            


            <input type="app_time" name="rbestlaptime" value="<?php 
                
                $t = "select RBESTLAPTIME from race where RID =$id";
                $res=$db->query($t);
            
                if($res->num_rows>0){
                  
            
                while($r=$res->fetch_assoc()){
 
                 echo  "{$r["RBESTLAPTIME"]}";
                }}
             ?>" required class="input"><br>
            <label>Squad</label><br>
            

            <input type="text" name="rsquad" value="<?php 
                
                $t = "select RSQUAD from race where RID =$id";
                $res=$db->query($t);
            
                if($res->num_rows>0){
                  
            
                while($r=$res->fetch_assoc()){
 
                 echo  "{$r["RSQUAD"]}";
                }}
             ?>" required class="input"><br>
            <label>Coach</label><br>
            
            <input type="text" name="rcoach" value="<?php 
                
                $t = "select RCOACH from race where RID =$id";
                $res=$db->query($t);
            
                if($res->num_rows>0){
                  
            
                while($r=$res->fetch_assoc()){
 
                 echo  "{$r["RCOACH"]}";
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



