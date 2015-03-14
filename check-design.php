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
<?php
include('./schedule_header.php');
?>
<div id="head_top">
<b>2.Pick the specialist:</b>
</div>
<div id="schedule_appointment">	
<?php
require('./connect.php');
if(isset($_POST['dept_name']))
{
	session_start();
$dep_n=explode("|",$_POST['dept_name']);
$dep_name=$dep_n[0];
$query="select physician_firstname,physician_lastname,physician_id from physician where physician_speciality='".$dep_name."';";
$result=mysqli_query($link,$query);
while($row=mysqli_fetch_array($result))
{
	echo "<form name=\"my_form\" method=\"post\" action=\"test-design.php\"><input type=\"hidden\" name=\"id1\" value=\"".$row['physician_id']."\"/>"."<p>Dr.".$row['physician_firstname']." ".$row['physician_lastname']."</p><input id =\"my_select_button\" type=\"submit\" value=\"SELECT\" /></form><br><br>";
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