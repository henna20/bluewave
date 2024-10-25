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
        <h3>SEARCH A MEMBER</h3><br>


        <form method="GET" action="<?php echo $_SERVER["PHP_SELF"];?>">
   
           
   <label>Search For Memebr</label><br>
   <input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" required class="input">
   <button type="submit" class="btn" name="search">Search</button><br><br>

</form>


        <div class="tbox">

        <table border="1px">
    <tr>
        <th>First Name</th>
        <th>last Name</th>
        <th>Gender</th>
        <th>Date of Birth</th>
        <th>Phone Number</th>
        <th>Email</th>
        
    </tr>       

    <?php 
        
        if(isset($_GET['search']))
        {
         $filtervalues = $_GET['search'];
        $query = "SELECT * FROM student WHERE CONCAT(SFIRSTNAME) LIKE '%$filtervalues%' ";
        $res=$db->query($query);

                                        if($res->num_rows>0){
                                        {
                                            while($r=$res->fetch_assoc())
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $r['SFIRSTNAME']; ?></td>
                                                    <td><?= $r['SLASTNAME']; ?></td>
                                                    <td><?= $r['SGENDER']; ?></td>
                                                    <td><?= $r['SDATEOFBIRTH']; ?></td>
                                                    <td><?= $r['SPHONE']; ?></td>
                                                    <td><?= $r['SEMAIL']; ?></td>
                                                    
                                                </tr>
                                                <?php
                                            }
                                        }
                                    
                                            ?>
                                                <tr>
                                                    <td >No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                        }
                                ?>



</table><br><br>


   
    </div><br>

   




    </div>
    </div>
  
<div class="footer">
    <footer><p>Copy Right &copy; Swimming Club Management System</p></footer>
</div>
    
</body>
</html>