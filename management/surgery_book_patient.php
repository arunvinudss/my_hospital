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
<link rel="stylesheet" type="text/css" href="../css/my_select_butt.css" />

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
<div id="pc_1">
<?php
$i=$_POST['fuck_me'];
$r=explode("|",$i);
$z="'".$r[5]." ".$r[6]."'";
//echo $z;
$link = mysqli_connect("localhost","root","","my_hospital") or die("Error " . mysqli_error($link));

$m="insert into surgery_schedule(patient_id,emp_id,surgery_type,surgery_date_time,Theatre_name,nurse_id) values(".$r[2].",".$r[1].",'".$r[3]."',".$z.",'".$r[0]."',".$r[4].");";
$k=mysqli_query($link,$m);
if($k==true)
{
	echo "<p>Patient successfully booked for surgery</p>";
}
else
echo "<p>Something went wrong please try again</p>";
?>
</div>
</body>
</html>