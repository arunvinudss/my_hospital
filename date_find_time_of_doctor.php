<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="./js/jquery-1.11.0.min.js"></script>
<script src="./js/home.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="./css/patient.css" />
<link rel="stylesheet" type="text/css" href="./css/schedule.css" />
<link rel="stylesheet" type="text/css" href="./css/time_button.css" />

<title></title>
</head>
<body>
<?php
include('./doctor_header_schedule.php');
?>
<div id="view_schedule">
<?php
$phy_id=$_POST['c1'];
$date_get=$_POST['appoint_date'];
require('./connect.php');
$get_d="select appointment_date from consultation where emp_id=".$phy_id." and date(appointment_date)='".date("Y-m-d",strtotime($date_get))."';";
$get_ph_name="select emp_firstname,emp_lastname from employees where emp_id=".$phy_id;
$phy_n=mysqli_query($link,$get_ph_name);
$ph_n=mysqli_query($link,$get_d);

while($p=mysqli_fetch_array($phy_n))
{
	echo "The schedule for Dr.".$p['emp_firstname']." ".$p['emp_lastname']." on ".str_replace("-","/",(date("d-m-Y",strtotime($date_get))))." is <br><br>";
	while($q=mysqli_fetch_array($ph_n))
	{
		echo "<button type=\"button\" class=\"time_buttom\">".date("H:i:s",strtotime($q['appointment_date']))."</button>";
	}
}
?>
</div>
</body>
</html>