<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="./js/jquery-1.11.0.min.js"></script>
<script src="./js/home.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="./css/patient.css" />
<link rel="stylesheet" type="text/css" href="./css/schedule.css" />
<link rel="stylesheet" type="text/css" href="./css/book_appointment.css" />


<title></title>
</head>
<body>
<?php
include('./schedule_header.php');
?>
<div id="book_pat_app">
<?php

$book_time=$_REQUEST['booking_time'];
$doctor_id=explode("|",$book_time);
$x=date("Y-m-d H:i:s",strtotime($doctor_id[2].$doctor_id[0]));
$app_check="select max(appointment_id) as appointment_id from consultation";
require('./connect.php');
$get_app=mysqli_query($link,$app_check);
session_start();
while($get=mysqli_fetch_array($get_app))
{
$max_app=$get['appointment_id'];
}
$app_book="insert into consultation(appointment_id,appointment_date,patient_id,emp_id) values(".($max_app+1).",'".$x."',".$_SESSION['pid'].",".$doctor_id[1].");";
$check_scam="select appointment_date from consultation where patient_id=".$_SESSION['pid'].";";
$z=mysqli_query($link,$check_scam);
$flag=0;
while($o=mysqli_fetch_array($z))
{
	if($o['appointment_date']==$x)
	{
		$flag=1;
	}
}
if($flag==0)
{
$y=mysqli_query($link,$app_book);
if($y==true)
{
	echo "<p>You have successfully scheduled an appointment</p>";
}
else
{
	echo "<p>Sorry Please try again</p>";
}
}
else
{
			echo "<p>You already have an appointment at the requested time</p>";

}


mysqli_close($link);
?>
</div>
</body>
</html>
