<div class="sidebar">
    <h3 class="text">Dashboard</h3><br><hr><br>

    <ul class="side">

    <?php
    
    if(isset($_SESSION["TID"])) {
        echo '

        <li class="li"><a href="staff_home.php">ClUB INFORMATION</a></li><br>
        <li class="li"><a href="staffprofile.php">PROFILE</a></li><br>
        <li class="li"><a href="staffmemberdata.php">MEMBER DATA</a></li><br>
        <li class="li"><a href="staffminormemberdata.php">MINOR MEMBERS DATA</a></li><br>
        <li class="li"><a href="staffracedata.php">RACE DATA</a></li><br>
       
        <li class="li"><a href="staffeventregisteredcandidate.php">EVENT REGISTERED CANDIDATES</a></li><br>
        <li class="li"><a href="staffevent.php">EVENTS</a></li><br>
        <li class="li"><a href="staffschedule.php">SCHEDULES</a></li><br>
       
        ';
    }
    else{

        echo '

        <li class="li"><a href=""></a></li>S
        <li class="li"><a href=""></a></li>
       
        ';
    }
    ?>
    


</div>