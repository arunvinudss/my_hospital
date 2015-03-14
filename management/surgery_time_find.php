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
<div id="schedule_appointment">
<?php

$get_date=$_POST['appoint_date'];
$ap_date=$get_date;
$idx=$_POST['c1'];
$id=explode("|",$idx);
$id1=$id[0];
$id2=$id[1];
$id3=$id[2];
$check_date=date("Y-m-d",strtotime($get_date));
$link = mysqli_connect("localhost","root","","my_hospital") or die("Error " . mysqli_error($link));
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
	$c7=0;
		echo "<p style=\"font:Helvetica;font-size:17px;color:#6C6CFF;font-weight:bold;\">6.Select from the available time slots of Dr.".$re_3[0]." ".$re_3[1]." on ".$date_my."</p><br /><table><tr>";
   foreach($pat as $key=>$val)
   {
	    foreach($val as $k=>$v )
		   {
			   if($c7!=0 && $c7%4==0)
			   {
				   echo "</tr><tr>";
			   }
		   
		   echo "<form id=\"my_time_schedule\" method=\"post\" action=\"book_appointment.php\"><input type=\"hidden\" name=\"booking_time\" value=\"".date("H:i:s",strtotime($v))."|".$id1."|".$date_my."|".$id2."|".$id3."\" /><td><input type=\"submit\" class=\"my_select\" value=\"".date("H:i",strtotime($v))."\" /></form></td>";
		   $c7++;
		   }
		   
		   			   

		   
	   
   }
   		   //echo "</tr>";

echo "</tr></table>";

echo "</div>";

//echo $get_date;
?>
</div>
</body>
</html>