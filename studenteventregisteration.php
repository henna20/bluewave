<?php
include "database.php";
session_start();
$id = $_GET["id"] ;

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
        <h3>EVENT REGISTERATION</h3><br>


        <?php
        
        if(isset($_POST["register"])) {
            $w = "insert into register (RGEVENTNAME, RGFIRSTNAME, RGSECONDNAME, RGCOACH, RGDATE, RGTIME,RGADDRESS1,RGADDRESS2,RGCITY,RGSTATE,RGCOUNTRY,RGPIN,RGCATEGORY) 
            values('{$_POST["rgeventname"]}', '{$_POST["rgfirstname"]}', '{$_POST["rgsecondname"]}','{$_POST["rgcoach"]}', '{$_POST["rgdate"]}', '{$_POST["rgtime"]}', 
            '{$_POST["rgaddress1"]}','{$_POST["rgaddress2"]}','{$_POST["rgcity"]}','{$_POST["rgstate"]}','{$_POST["rgcountry"]}','{$_POST["rgpin"]}', '{$_POST["rgcategory"]}')";

            if($db->query($w)){

 
                echo "<script>window.open('studentevent.php?mess=Registeration Sucsessfull.', '_self')</script>";

            }else{

                echo "<div class='error'>registeration failed failed</div>";
            }
        }
        ?>

    

        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

        <label>Select the Name of Event</label><br>
            <input type="text" name="rgeventname" value="<?php 
                
               $t = "select ENAME from event where EID =$id";
               $res=$db->query($t);
           
               if($res->num_rows>0){
                 
           
               while($r=$res->fetch_assoc()){

                echo  "{$r["ENAME"]}";
               }}
            ?>" required class="input"><br>
             <label>First Name</label><br>
            <input type="text" name="rgfirstname" required class="input"><br>
            <label>Last Name</label><br>
            <input type="text" name="rgsecondname" required class="input"><br>
            <label>Coach Incharge</label><br>
            <input type="text" name="rgcoach" value="<?php 
                
               $t = "select ECOACH from event where EID =$id";
               $res=$db->query($t);
           
               if($res->num_rows>0){
                 
           
               while($r=$res->fetch_assoc()){

                echo  "{$r["ECOACH"]}";
               }}
            ?>" required class="input"><br>
           

<label>Date</label><br>
            <input type="text" name="rgdate" value="<?php 
                
               $t = "select EDATE from event where EID =$id";
               $res=$db->query($t);
           
               if($res->num_rows>0){
                 
           
               while($r=$res->fetch_assoc()){

                echo  "{$r["EDATE"]}";
               }}
            ?>" required class="input"><br>


            <label>Time</label><br>
            <input type="text" name="rgtime" value="<?php 
                
               $t = "select ETIME from event where EID = $id";
               $res=$db->query($t);
           
               if($res->num_rows>0){
                 
           
               while($r=$res->fetch_assoc()){

                echo  "{$r["ETIME"]}";
               }}
            ?>" required class="input"><br>
            <label>Address1</label><br>
            <input type="text" name="rgaddress1" value="<?php 
                
               $t = "select EADDRESS1 from event where EID =$id";
               $res=$db->query($t);
           
               if($res->num_rows>0){
                 
           
               while($r=$res->fetch_assoc()){

                echo  "{$r["EADDRESS1"]}";
               }}
            ?>" required class="input"><br>

<label>Address2</label><br>
            <input type="text" name="rgaddress2" value="<?php 
                
               $t = "select EADDRESS2 from event where EID =$id";
               $res=$db->query($t);
           
               if($res->num_rows>0){
                 
           
               while($r=$res->fetch_assoc()){

                echo  "{$r["EADDRESS2"]}";
               }}
            ?>" required class="input"><br>

<label>City</label><br>
            <input type="text" name="rgcity" value="<?php 
                
               $t = "select ECITY from event where EID =$id";
               $res=$db->query($t);
           
               if($res->num_rows>0){
                 
           
               while($r=$res->fetch_assoc()){

                echo  "{$r["ECITY"]}";
               }}
            ?>" required class="input"><br>
            <label>State</label><br>
            <input type="text" name="rgstate" value="<?php 
                
               $t = "select ESTATE from event where EID =$id";
               $res=$db->query($t);
           
               if($res->num_rows>0){
                 
           
               while($r=$res->fetch_assoc()){

                echo  "{$r["ESTATE"]}";
               }}
            ?>" required class="input"><br>

<label>Country</label><br>
            <input type="text" name="rgcountry" value="<?php 
                
               $t = "select ECOUNTRY from event where EID =$id";
               $res=$db->query($t);
           
               if($res->num_rows>0){
                 
           
               while($r=$res->fetch_assoc()){

                echo  "{$r["ECOUNTRY"]}";
               }}
            ?>" required class="input"><br>
            <label>Pin Code</label><br>
            <input type="text" name="rgpin" value="<?php 
                
               $t = "select EPIN from event where EID =$id";
               $res=$db->query($t);
           
               if($res->num_rows>0){
                 
           
               while($r=$res->fetch_assoc()){

                echo  "{$r["EPIN"]}";
               }}
            ?>" required class="input"><br>

<!-- -------------------------------------------------------------------------------------------------------
------------------competetion category----------------------------------------------------------------
------------------------------------------------------------------------------------------------------ -->
            <label>Competition Category</label><br>
           

            <select  name="rgcategory"  required class="input">
            <option value="">select</option>
            <option value="<?php 
                
                $t = "select EC1 from event where EID =$id";
                $res=$db->query($t);
            
                if($res->num_rows>0){
                  
            
                while($r=$res->fetch_assoc()){
 
                 echo  "{$r["EC1"]}";
                }}
             ?>"> <?php 
                
             $t = "select EC1 from event where EID =$id";
             $res=$db->query($t);
         
             if($res->num_rows>0){
               
         
             while($r=$res->fetch_assoc()){

              echo  "{$r["EC1"]}";
             }}
          ?>        </option>
             <option value="<?php 
                
                $t = "select EC2 from event where EID =$id";
                $res=$db->query($t);
            
                if($res->num_rows>0){
                  
            
                while($r=$res->fetch_assoc()){
 
                 echo  "{$r["EC2"]}";
                }}
             ?>"><?php 
                
             $t = "select EC2 from event where EID =$id";
             $res=$db->query($t);
         
             if($res->num_rows>0){
               
         
             while($r=$res->fetch_assoc()){

              echo  "{$r["EC2"]}";
             }}
          ?></option>
             <option value="<?php 
                
                $t = "select EC3 from event where EID =$id";
                $res=$db->query($t);
            
                if($res->num_rows>0){
                  
            
                while($r=$res->fetch_assoc()){
 
                 echo  "{$r["EC3"]}";
                }}
             ?>"><?php 
                
             $t = "select EC3 from event where EID =$id";
             $res=$db->query($t);
         
             if($res->num_rows>0){
               
         
             while($r=$res->fetch_assoc()){

              echo  "{$r["EC3"]}";
             }}
          ?></option>
             <option value="<?php 
                
                $t = "select EC4 from event where EID =$id";
                $res=$db->query($t);
            
                if($res->num_rows>0){
                  
            
                while($r=$res->fetch_assoc()){
 
                 echo  "{$r["EC4"]}";
                }}
             ?>"><?php 
                
             $t = "select EC4 from event where EID =$id";
             $res=$db->query($t);
         
             if($res->num_rows>0){
               
         
             while($r=$res->fetch_assoc()){

              echo  "{$r["EC4"]}";
             }}
          ?></option>
             <option value="<?php 
                
                $t = "select EC5 from event where EID =$id";
                $res=$db->query($t);
            
                if($res->num_rows>0){
                  
            
                while($r=$res->fetch_assoc()){
 
                 echo  "{$r["EC5"]}";
                }}
             ?>"><?php 
                
             $t = "select EC5 from event where EID =$id";
             $res=$db->query($t);
         
             if($res->num_rows>0){
               
         
             while($r=$res->fetch_assoc()){

              echo  "{$r["EC5"]}";
             }}
          ?></option>
            </select>

            <button type="submit" class="btn" name="register">Register</button><br><br>




        </form>
     
     </div><br>
     <br><br><br>





</div>
            
  
<div class="footer">
    <footer><p>Copy Right &copy; Swimming Club Management System</p></footer>
</div>
    
</body>
</html>