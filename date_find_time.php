<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="./js/jquery-1.11.0.min.js"></script>
<script src="./js/home.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="./css/patient.css" />
<link rel="stylesheet" type="text/css" href="./css/schedule.css" />
<link rel="stylesheet" type="text/css" href="./css/my_select_butt.css" />

<title></title>
</head>
<body>
<?php
include('./schedule_header.php');
?>
<div id="schedule_appointment">
<?php

$get_date=$_POST['appoint_date'];
$ap_date=$get_date;
$id1=$_POST['c1'];
$check_date=date("Y-m-d",strtotime($get_date));
require('./connect.php');
$count=0;
for($i=0;$i<18;$i++)
{

	if(substr($ap_date,11)=='18:00:00')
	{
		break;
		
	}
	else
	{
		$cur_date=strtotime($ap_date);
		$f_date=$cur_date+(60*30);
		$ap_date=date("Y-m-d H:i:s",$f_date);
		
		if(substr($ap_date,11)=='12:00:00')
    {
	$cur_date=strtotime($ap_date);
		$f_date=$cur_date+(60*60);
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
$date_my=date("Y-m-d",strtotime($get_date));
echo "<div id=\"my_schedule_result\"><table>";

$q_1="select emp_firstname,emp_lastname from employees where emp_id=".$id1.";";
//echo $q_1;
$re_2=mysqli_query($link,$q_1);
$re_3=mysqli_fetch_array($re_2);
//print_r($re_3);
	
		echo "<b style=\"font-size:19px;font-weight:700	;color:blue;\">The available time slots for Dr.".$re_3[0]." ".$re_3[1]." on ".$date_my." are:</b><tr>";
   foreach($pat as $key=>$val)
   {
	    foreach($val as $k=>$v )
		   {
		   
		   echo "<form id=\"my_time_schedule\" method=\"post\" action=\"book_appointment.php\"><input type=\"hidden\" name=\"booking_time\" value=\"".date("H:i:s",strtotime($v))."|".$id1."|".$date_my."\" /><td><input type=\"submit\" class=\"my_select\" value=\"".date("H:i",strtotime($v))."\" /></form></td>";
		   }
		   
		   			   

		   
	   
   }
   		   echo "</tr>";

echo "</table>";

echo "</div>";
mysqli_close($link);
//echo $get_date;
?>
<p>Click the required time to confirm your appointment</p>
</div>
</body>
</html>