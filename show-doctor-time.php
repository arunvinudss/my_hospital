<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="./js/jquery-1.11.0.min.js"></script>
<script src="./js/home.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="./css/patient.css" />
<link rel="stylesheet" type="text/css" href="./css/schedule.css" />
<link rel="stylesheet" type="text/css" href="./css/my_button.css" />

<title></title>
</head>
<body>
<?php
include('./doctor_header_schedule.php');
?>
</div>
<div id="schedule_appointment">
<p>3.Select Date to view doctor's schedule:</p>
<?php
$id1=$_POST['id1'];
//echo $id1;
date_default_timezone_set("America/New_York");
$a_date=date("Y-m-d",time());
echo "<form id=\"mss\" method=\"post\" action=\"date_find_time_of_doctor.php\"><input name=\"c1\" type=\"hidden\" value=\"".$id1."\" /><select  name=\"appoint_date\">";
for($i=0;$i<7;$i++)
{
$c_date=date('Y-m-d',date(strtotime("+".$i." day", strtotime($a_date))));
echo "<option value=\"".$c_date."\">".date("d-m-Y",strtotime($c_date))."</option>"; 
}
echo "</select><br><br><input type=\"submit\" class=\"my_available_button\" value=\"Check\" /></form>";
?>
<script>	
function xx()
{
	var e = document.getElementById("ddlViewBy");
var strUser = e.options[e.selectedIndex].text;
	
	
}

</script>
</body>
</html>