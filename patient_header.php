<div id="cssmenu">
<ul>
<li class="active"><a href="<?php session_start();$mf=$_SESSION['pid'];echo "./patient.php?pid=".$mf;session_destroy();?>"><span>PATIENT INFORMATION</span></a></li>
<li><a href="./my_design_up.php"><span>SCHEDULE AN APPOINTMENT</span></a></li>
<li><a href="./patient_history.php"><span>PATIENT HISTORY</span></a></li>
<li><a href="./doctor_schedule.php"><span>DOCTOR SCHEDULE</span></a></li>


</ul>
</div>