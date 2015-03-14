<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="../js/jquery-1.11.0.min.js"></script>
<script src="../js/home.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../css/management.css" />
<link rel="stylesheet" type="text/css" href="../css/local-2.css" />

<title></title>
</head>
<body>
<div id="cssmenu">
<ul>
<li><a href="../css/show_bed_vacancy.php"><span>CHECK BED VACANCY</span></a></li>
<li ><a href="../css/patient_assign.php"><span>PATIENT ASSIGNMENT</span></a></li>
<li><a href="../contact.php"><span>DOCTOR ASSIGNMENT</span></a></li>
<li><a href="../contact.php"><span>NURSE ASSIGNMENT</span></a></li>

</ul>
</div>
<div id="maintain_tables">
<div id="divide_1">
<?php
$p_data=$_POST['raw_data'];
$link = mysqli_connect("localhost","root","","my_hospital") or die("Error " . mysqli_error($link));
$q1="SELECT bed_id, ward_number, room_number
FROM bed_allocation b
WHERE patient_id IS NULL";
$q2="select p.patient_id,p.patient_firstname,p.patient_lastname from patients p  where exists(select * from diagnosis d1 where d1.patient_id=p.patient_id and d1.hospitalization_req='yes') and not exists(select * from bed_allocation b where p.patient_id=b.patient_id)";
$res=mysqli_query($link,$q2);
echo "<table><tr><td>Patient_id</td><td>Patient_name</td></tr>";
while($r2=mysqli_fetch_array($res))
{
	if($p_data==$r2['patient_id'])
	{
	echo "<form name=\"select_patient\" method=\"POST\" action=\"./select_bed.php\"><input name=\"raw_data\" type=\"hidden\" value=\"".$r2['patient_id']."|".$r2['patient_firstname']." ".$r2['patient_lastname']."\" /><tr><td  onclick=\"".ltrim("submit_form_patient();")."\">".$r2['patient_id']."</td><td onclick=\"".ltrim("submit_form_patient();")."\">".$r2['patient_firstname']." ".$r2['patient_lastname']."</td></tr></form>";
	}
	else
	{
		
	}
}
echo "</table>";
mysqli_close($link);
?>
</div>
<div id="divide_rule">
<?php

//echo $p_data;
$link = mysqli_connect("localhost","root","","my_hospital") or die("Error " . mysqli_error($link));
$query="select bed_id,ward_number,room_number from bed_allocation where patient_id IS NULL";
$q1=mysqli_query($link,$query);
echo "<table id=\"bed_available\"><tr><td>Ward number</td><td>Room Number</td><td>Bed id</td></tr>";
$c1=0;
while($q2=mysqli_fetch_array($q1))
{
	echo "<tr><td onclick=\"confirm_bed(".$c1.");\")><form name=\"confirm_bed".$c1."\" method=\"POST\" action=\"./confirm_bed.php\"><input name=\"raw_data_1\" type=\"hidden\" value=\"".$q2['bed_id']."|".$p_data."\" />".$q2['ward_number']."</form></td><td onclick=\"confirm_bed(".$c1.");\")><form name=\"confirm_bed".$c1."\" method=\"POST\" action=\"./confirm_bed.php\"><input name=\"raw_data_1\" type=\"hidden\" value=\"".$q2['bed_id'].$p_data."\" />".$q2['room_number']."</form></td><td onclick=\"confirm_bed(".$c1.");\")><form name=\"confirm_bed".$c1."\" method=\"POST\" action=\"./confirm_bed.php\"><input name=\"raw_data_1\" type=\"hidden\" value=\"".$q2['bed_id'].$p_data."\" />".$q2['bed_id']."</form></td></tr>";
	$c1++;
	
}
mysqli_close($link);
?>
<script>
function confirm_bed(b)
{
	//alert(b);
	var e="confirm_bed"+b;
	//alert(e);
document.forms[e].submit();
}
</script>
</div>
</div>
</body>
</html>