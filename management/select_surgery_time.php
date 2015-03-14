<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="../js/jquery-1.11.0.min.js"></script>
<script src="../js/home.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../css/management.css" />
<link rel="stylesheet" type="text/css" href="../css/local-2.css" />
<link rel="stylesheet" type="text/css" href="../css/local-3.css" />
<link rel="stylesheet" type="text/css" href="../css/schedule.css" />
</head>
<body>
<div id="cssmenu">
<ul>
<li><a href="../css/show_bed_vacancy.php"><span>CHECK BED VACANCY</span></a></li>
<li ><a href="../css/patient_assign.php"><span>PATIENT ASSIGNMENT</span></a></li>
<li><a href="../contact.php"><span>DOCTOR ASSIGNMENT</span></a></li>
<li><a href="../contact.php"><span>NURSE ASSIGNMENT</span></a></li>
<li><a href="../book_surgery.php"><span>SURGERY SCHEDULING</span></a></li>
</ul>
</div>
<div id="schedule_appointment">
<p style="font:Helvetica;font-size:17px;color:#6C6CFF;font-weight:bold;">5.Select Date:</p>
<?php
$ix=explode("|",$_POST['id1']);
$id1=$ix[0];
//echo $id1;
date_default_timezone_set("America/New_York");
$a_date=date("Y-m-d",time());
echo "<form id=\"mss\" method=\"post\" action=\"surgery_time_find.php\"><input name=\"c1\" type=\"hidden\" value=\"".$id1."|".$ix[1]."|".$ix[2]."\" /><select  id =\"surgery_time_drop\" name=\"appoint_date\">";
for($i=0;$i<7;$i++)
{
$c_date=date('Y-m-d',date(strtotime("+".$i." day", strtotime($a_date))));
echo "<option value=\"".$c_date."\">".str_replace("-","/",date("d-m-Y",strtotime($c_date)))."</option>"; 
}
echo "</select><br><br><input type=\"submit\" class=\"select_patient_b1\" value=\"CHECK\" /></form>";
?>
</div>	
</body>
</html>