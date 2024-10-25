<div class="sidebar">
    <h3 class="text">Dashboard</h3><br><hr><br>

    <ul class="side">

    <?php
    
    if(isset($_SESSION["SID"])) {
        echo '

        <li class="li"><a href="student_home.php">CLUB INFROMATION</a></li><br>
        <li class="li"><a href="studentprofile.php">PROFILE</a></li><br>
        <li class="li"><a href="studentcoach.php">COACH DETAILS</a></li><br>
        <li class="li"><a href="studentracedata.php">RACE DATA</a></li><br>
        <li class="li"><a href="studentevent.php">EVENTS & REGISTERATION</a></li><br>
        <li class="li"><a href="studentschedule.php">SCHEDULES</a></li><br>
        
       
        ';
    }

    else{

    }
    ?>
    


</div>