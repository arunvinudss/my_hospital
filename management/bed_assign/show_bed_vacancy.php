<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="../js/jquery-1.11.0.min.js"></script>
<script src="../js/home.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../css/management.css" />
<link rel="stylesheet" type="text/css" href="../css/local.css" />


<title></title>
</head>
<body>
<div id="cssmenu">
<ul>
<li><a href="./show_bed_vacancy.php"><span>CHECK BED VACANCY</span></a></li>
<li ><a href="./patient_assign.php"><span>PATIENT ASSIGNMENT</span></a></li>
<li><a href="../contact.php"><span>DOCTOR ASSIGNMENT</span></a></li>
<li><a href="../contact.php"><span>NURSE ASSIGNMENT</span></a></li>

</ul>
</div>
<div id="vacant_beds">
<p>Select the required bed number:</p>
<?php
$z=$_POST['booking_time'];
$y6=explode("|",$z);
$link = mysqli_connect("localhost","root","","my_hospital") or die("Error " . mysqli_error($link));
$query="select bed_id,ward_number,room_number,admit_date,discharge_date from bed_allocation where discharge_date<'".date("Y-m-d H:i:s",strtotime(($y6[1].$y6[0])))."' or patient_id is null;";
$q1=mysqli_query($link,$query);
echo "<table id=\"my_t_t\"><tr><td>Ward number</td><td>Room Number</td><td>Bed id</td></tr></table><table id=\"bed_available_1\">";
$r=0;
while($q2=mysqli_fetch_array($q1))
{
	echo "<tr><td onclick=\"sumbit_form(".$r.");\">".$q2['ward_number']."</td><td onclick=\"sumbit_form(".$r.");\">".$q2['room_number']."</td><td onclick=\"sumbit_form(".$r.");\"><form name=\"sub_form".$r."\" method=\"POST\" action=\"select_patient_bed.php\"><input type=\"hidden\" name=\"my_input\" value=\"".$y6[1]."|".$y6[0]."|".$q2['ward_number']."|".$q2['room_number']."|".$q2['bed_id']."\" />".$q2['bed_id']."</form></td></tr>";
	$r++;
	
}
mysqli_close($link);
?>
</div>
<script>
function sumbit_form(c)
{
	var e="sub_form"+c;
	document.forms[e].submit();
}
</script>

</body>
</html>