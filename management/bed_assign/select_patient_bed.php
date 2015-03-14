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
<li><a href="../css/show_bed_vacancy.php"><span>CHECK BED VACANCY</span></a></li>
<li ><a href="../css/patient_assign.php"><span>PATIENT ASSIGNMENT</span></a></li>
<li><a href="../contact.php"><span>DOCTOR ASSIGNMENT</span></a></li>
<li><a href="../contact.php"><span>NURSE ASSIGNMENT</span></a></li>

</ul>
</div>
<div id="vacant_beds">
<?php
$x1=$_POST['my_input'];
$z=explode("|",$x1);
$link = mysqli_connect("localhost","root","","my_hospital") or die("Error " . mysqli_error($link));
$q1="SELECT bed_id, ward_number, room_number
FROM bed_allocation b
WHERE patient_id IS NULL";
$q2="select p.patient_id,p.patient_firstname,p.patient_lastname from patients p  where exists(select * from diagnosis d1 where d1.patient_id=p.patient_id and d1.hospitalization_req='yes') and not exists(select * from bed_allocation b where p.patient_id=b.patient_id)";
$res=mysqli_query($link,$q2);
echo "<p>List of in-patients with no beds allocated:</p><br />";
echo "<table id=\"my_t_t1\"><tr><td>Patient_id</td><td>Patient_name</td></tr></table><table id=\"bed_available_2\">";
$c=0;
while($r2=mysqli_fetch_array($res))
{
	echo "<tr><td  onclick=\"submit_form_patient(".$c.");\")><form name=\"select_patient".$c."\" method=\"POST\" action=\"./confirm_bed.php\"><input name=\"raw_data\" type=\"hidden\" value=\"".$r2['patient_id']."|".$z[0]."|".$z[1]."|".$z[2]."|".$z[3]."|".$z[4]."\" />".$r2['patient_id']."</form></td><td onclick=\"".ltrim("submit_form_patient(".$c.");")."\">".$r2['patient_firstname']." ".$r2['patient_lastname']."</td></tr>";
	
$c++;
}
echo "</table>";
mysqli_close($link);


?>
</div>
<script>
function submit_form_patient(b)
{
	//alert(b);
	var e="select_patient"+b;
	//alert(e);
document.forms[e].submit();
}
</script>
</body>
</html>