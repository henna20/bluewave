<div class="sidebar">
    <h3 class="text">Dashboard</h3><br><hr><br>

    <ul class="side">

    <?php
    
    if(isset($_SESSION["AID"])) {
        echo '

        <li class="li"><a href="admin_home.php">ClUB INFORMATION</a></li><br>
        <li class="li"><a href="searchmember.php">SEARCH A MEMBER</a></li><br>
        <li class="li"><a href="memberdata.php">MEMBER DATA</a></li><br>
        <li class="li"><a href="minormemberdata.php">MINOR MEMBERS DATA</a></li><br>
        <li class="li"><a href="staffdetails.php">STAFF DETAILS</a></li><br>
        <li class="li"><a href="racedata.php">RACE DATA</a></li><br>
        <li class="li"><a href="galaresult.php">GALA RESULTS</a></li><br>
        <li class="li"><a href="eventsregisteredcandidates.php">EVENT REGISTERED CANDIDATES</a></li><br>
        <li class="li"><a href="events.php">EVENTS</a></li><br>
        <li class="li"><a href="schedules.php">SCHEDULES</a></li><br>
       
        ';
    }
    else{

        echo '

        <li class="li"><a href=""></a></li>
        <li class="li"><a href=""></a></li>
       
        ';
    }
    ?>
    


</div>