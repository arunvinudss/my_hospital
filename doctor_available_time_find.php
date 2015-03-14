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
$id1=$_POST['id1'];
$pat=array();
date_default_timezone_set("America/New_York");

$ap_date=date("Y-m-d",time());

//$ap_date=strtotime('+15 hours', strtotime($ap_date));
//echo date("Y-m-d H:i:s",$ap_date);
//echo substr($ap_date,11);
$link = mysqli_connect("localhost","root","","my_hospital") or die("Error " . mysqli_error($link));
//echo "<table>";
$count=0;
for($i=0;$i<112;$i++)
{

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
	if(substr($ap_date,11)>='09:00:00' && substr($ap_date,11)<='18:00:00')
	{
	
	//echo "insert into consultation(Appointment_id,Emp_id,patient_id,Appointment_date) values(".$app.",".$emp.",".$pat.",'".$ap_date."');";
	$query="select appointment_id from consultation where appointment_date='".$ap_date."'and emp_id=".$id1.";";
	$res=mysqli_query($link,$query);
	//$rom=mysqli_fetch_array($res);
	//print_r($rom);
	//print_r($res);
	if($ro=mysqli_fetch_array($res))
	{
		//echo $ap_date;
		$count++;
		
	}
	else
	{
		$pat[date("Y-m-d",strtotime($ap_date))][$count]=date("Y-m-d H:i:s",strtotime($ap_date));
		$count++;
		
		//echo "<td>".date("H:i:s",strtotime($ap_date))."</td>";
	}
	
		
		//echo "</tr><tr><th><td>".date("Y-m-d",strtotime($ap_date))."</td></th>";
	
	//echo "<br>";
	
}
else
$i--;
}
//print_r($pat);



//print_r($pat);
//echo "<br>";
//print_r($pat);
//$stor_my=array();
//echo "Hello".$pat[date("Y-m-d",strtotime("2014-04-20"))][0];
$c_date=0;
$set_date=date("Y-m-d",time());
for($i=0;$i<7;$i++)
{
	$c_date=date('Y-m-d',date(strtotime("+".$i." day", strtotime($set_date))));
     $date_my[$i]=$c_date;
}
//print_r($date_my);
echo "<div id=\"my_schedule_result\"><table>";
for($i=0;$i<7;$i++)
{
	
	
		echo "<tr><td>".$date_my[$i]."</td>";
   foreach($pat as $key=>$val)
   {
	    foreach($val as $k=>$v )
		   {
		   if($date_my[$i]==date("Y-m-d",strtotime($v)))
		   {
		   echo "<form id=\"my_time_schedule\" method=\"post\" action=\"book_appointment.php\"><input type=\"hidden\" name=\"booking_time\" value=\"".date("H:i:s",strtotime($v))."|".$id1."|".$date_my[$i]."\" /><td><input type=\"submit\" value=\"".date("H:i",strtotime($v))."\" /></form></td>";
		   }
		   }
		   			   

		   
	   
   }
   		   echo "</tr>";

}
echo "</table>";

echo "</div>";

//print_r($pat);
?>
<script>
//$("#my_schedule_result").click(function() {
 //$("#my_time_schedule").submit();
//});
</script>
</div>
<?php

?></body>
</html>