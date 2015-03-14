<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="../js/jquery-1.11.0.min.js"></script>
<script src="../js/home.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../css/management.css" />
<link rel="stylesheet" type="text/css" href="../css/local-4.css" />

<title></title>
</head>
<body>
<div id="cssmenu">
<ul>
<li><a href="../css/show_bed_vacancy.php"><span>CHECK BED VACANCY</span></a></li>
<li ><a href="../css/patient_assign.php"><span>PATIENT ASSIGNMENT</span></a></li>
<li><a href="../contact.php"><span>DOCTOR ASSIGNMENT</span></a></li>
<li><a href="../contact.php"><span>NURSE ASSIGNMENT</span></a></li>

</ul>
</div>
<body>
<div id="con_del">
<?php
$pid=$_POST['pid_send'];
//echo $q_2;
$link = mysqli_connect("localhost","root","","my_hospital") or die("Error " . mysqli_error($link));
	
	$q_2="select bed_id,ward_number,room_number,patient_id from bed_allocation where patient_id=".$pid.";";
//echo $q_2;
	$q2="update bed_allocation set patient_id=NULL,admit_date=NULL,discharge_date=NULL where patient_id=".$pid.";";
	//echo $q2;
     //$re=mysqli_query($link,$q2);
	 $re=mysqli_query($link,$q_2);
while($r2=mysqli_fetch_array($re))
{
$q3="update bed_allocation set patient_id=NULL where bed_id=".$r2['bed_id'].";";
//echo $q3;
     }
	$ass_1=mysqli_query($link,$q2);
	if($ass_1==true)
{
		echo "<p>Patient successfully deallocated from the bed</p>"; 
	}
mysqli_close($link);
?>
</div>

</body>
</html>