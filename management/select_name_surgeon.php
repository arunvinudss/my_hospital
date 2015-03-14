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
<p style="font:Helvetica;font-size:17px;color:#6C6CFF;font-weight:bold;">4.Select the name of the surgeon:</p>
<?php
if(isset($_POST['s1']))
{
$dep_n=explode("|",$_POST['s1']);
//print_r($dep_n);
$dep_name=$dep_n[0];
$link = mysqli_connect("localhost","root","","my_hospital") or die("Error " . mysqli_error($link));
$query="select physician_firstname,physician_lastname,physician_id from physician where physician_speciality='".$dep_name."';";
$result=mysqli_query($link,$query);
while($row=mysqli_fetch_array($result))
{
	echo "<form name=\"my_form\" method=\"post\" action=\"select_surgery_time.php\"><input type=\"hidden\" name=\"id1\" value=\"".$row['physician_id']."|".$dep_n[1]."|".$dep_n[2]."\"/>"."<p id=\"my_own_t\">Dr.".strtoupper($row['physician_firstname'])." ".strtoupper($row['physician_lastname'])."</p><input class=\"select_patient_b1\" type=\"submit\" value=\"SELECT\" /></form><br><br>";
}
mysqli_close($link);
}
else
{
	
}
?>
</div>
</body>
</html>