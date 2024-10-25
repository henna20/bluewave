<div class="sidebar">
    <h3 class="text">Dashboard</h3><br><hr><br>

    <ul class="side">

    <?php
    
    if(isset($_SESSION["SID"])) {
        echo '

        <li class="li"><a href="parent_home.php">CLUB INFROMATION</a></li><br>
        <li class="li"><a href="parentprofile.php">STUDENT PROFILE</a></li><br>
        <li class="li"><a href="parentcoach.php">COACH DETAILS</a></li><br>
        <li class="li"><a href="parentracedata.php">RACE DATA</a></li><br>
        <li class="li"><a href="parentevent.php">EVENTS & REGISTERATION</a></li><br>
        <li class="li"><a href="parentschedule.php">SCHEDULES</a></li><br>
        
       
        ';
    }

    else{

    }
    ?>
    


</div>