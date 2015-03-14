<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="./js/jquery-1.11.0.min.js"></script>
<script src="./js/home.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="./css/patient.css" />
<link rel="stylesheet" type="text/css" href="./css/schedule.css" />
<title></title>
</head>
<body>
<div id="cssmenu">
<ul>
<li><a href="./home.php"><span>PATIENT INFORMATION</span></a></li>
<li class="active"><a href="./aboutus.php"><span>SCHEDULE AN APPOINTMENT</span></a></li>
<li><a href="./contact.php"><span>PATIENT HISTORY</span></a></li>

</ul>
</div>
<div id="head_top">
<b>1.Choose a Speciality</b>
</div>
<div id="schedule_appointment">
<ul>
<span><li class="active"><a href="/cardio_doctor_schedule.php"><img src="department_pic/cardio.png" /></a><p><b>Cardiology</b></p></li></span>
<span><li><a href="/derma-schedule.php"><img src="department_pic/derma.png" /</li></a><p><b>Dermatology</b></p></li></span>
<span><li><a href="/derma-schedule.php"><img src="department_pic/oncology.png" /</li></a><p><b>Oncology</b></p></li></span>
<span><li><a href="/derma-schedule.php"><img src="department_pic/neurology.png" /</li></a><p><b>Neurology</b></p></li></span>

</ul>
</div>
<div id="head_top">
<b>2.Pick the specialist:</b>
</div>
<div id="schedule_appointment">	
<?php

//echo $id1;
$link = mysqli_connect("localhost","root","","my_hospital") or die("Error " . mysqli_error($link));
$query="select physician_firstname,physician_lastname,physician_id from physician where physician_speciality='Cardiology'";
$result=mysqli_query($link,$query);
while($row=mysqli_fetch_array($result))
{
	echo "<form name=\"my_form\" method=\"post\" action=\"doctor_available_time_find.php\"><input type=\"hidden\" name=\"id1\" value=\"".$row['physician_id']."\" \\><input type=\"submit\" value=\"Select\""."<p>Dr.".$row['physician_firstname']." ".$row['physician_lastname']."</p></form><br><br>";
}
mysqli_close($link);
?>
</div>
<div id="schedule_appointment">

<?php
$pat=1;
$app=12345;
$ap_date='2014-04-15 08:30:00';

//$ap_date=strtotime('+15 hours', strtotime($ap_date));
//echo date("Y-m-d H:i:s",$ap_date);
//echo substr($ap_date,11);
for($i=0;$i<200;$i++)
{
	$emp=mt_rand(1001,1035);

	if(substr($ap_date,11)=='18:00:00')
	{
		$cur_date=strtotime($ap_date);
		$f_date=$cur_date+(60*60*15);
		$ap_date=date("Y-m-d H:i:s",$f_date);
		
	}
	else
	{
		$cur_date=strtotime($ap_date);
		$f_date=$cur_date+(60*30);
		$ap_date=date("Y-m-d H:i:s",$f_date);
		
		if(substr($ap_date,11)=='12:30:00')
    {
	$cur_date=strtotime($ap_date);
		$f_date=$cur_date+(60*30);
		$ap_date=date("Y-m-d H:i:s",$f_date);
	
    }
		
	}
	//echo "insert into consultation(Appointment_id,Emp_id,patient_id,Appointment_date) values(".$app.",".$emp.",".$pat.",'".$ap_date."');";
	$query="select appointment_id from consultation where appointment_date='".$ap_date."'and emp_id=".$id1.";";
	echo $query;
	$app++;
	$emp++;
	$pat++;
	echo "<br><br>";
	
}
?>
</div>
</body>
</html>