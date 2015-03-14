<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="../js/jquery-1.11.0.min.js"></script>
<script src="../js/home.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
$x=file_get_contents('http://localhost/xampp/my_hospital/management/include_management_header.php');
echo $x;
echo "<div id=\"vi_sch\">";
$da=$_POST['get_patient_name'];
$xs=explode("|",$da);
$q="select patient_id,emp_id,surgery_type,Theatre_name,nurse_id,surgery_date_time from surgery_schedule where theatre_name='".$tna."' group by date(".$da.");";
$link = mysqli_connect("localhost","root","","my_hospital") or die("Error " . mysqli_error($link));
$z=mysqli_query($link,$q);
echo "<table id=\"sc_ne\"><tr><td>Patient id</td><td>emp id</td><td>Surgery Name</td><td>Theatre name</td><td>Nurse id</td><td>Surgery date</td><td>Surgery time</td></tr><table id=\"s_n_d\">";
while($m=mysqli_fetch_array($z))
{
	echo "<tr><td>".$m['patient_id']."</td><td>".$m['emp_id']."</td><td>".$m['surgery_type']."</td><td>".$m['Theatre_name']."</td><td>".$m['nurse_id']."</td><td>".date("Y-m-d",strtotime($m['surgery_date_time']))."</td><td>".date("H:i:s",strtotime($m['surgery_date_time']))."</td></tr>";
}
echo "</table>";
?>
</div>
</body>
</html>