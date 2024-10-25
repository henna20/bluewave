<div class="navbar">

<ul class="list">
<b style="color: white; float: left; line-height: 50px; margin-left: 15px; font-family: Cooper black; ">Blue Wave Swimming Club</b>
<?php

if(isset($_SESSION["AID"])){

    echo'

    <li class="li"><a href="index.php">Home</a></li>
    <li class="li"><a href="setting.php">Settings</a></li>
    <li class="li"><a href="adminlogin.php">Logout</a></li>
    ';
}
else{
    echo'

    <li class="li"><a href="index.php">Home</a></li>
    <li class="li"><a href="about.php">About Us</a></li>
    <li class="li"><a href="programs.php">Programs</a></li>
    <li class="li"><a href="services.php">Services</a></li>
    <li class="li"><a href="team.php">Our Team</a></li>
    <li class="li"><select onchange ="la(this.value)">
    <option href="">Login</option>
    <option value="adminlogin.php">Admin</option>
    <option value="stafflogin.php">Staffs</option>
    <option value="studentlogin.php">Students</option>
    <option value="parentlogin.php">Parents</option>
    </select>
    <script>
    function la(src){
        window.location=src;
    }
    </script>
    </li>
    ';

}

?>
</ul>
</div>
