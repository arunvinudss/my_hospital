<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="../js/jquery-1.11.0.min.js"></script>
<script src="../js/home.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../css/management.css" />
<link rel="stylesheet" type="text/css" href="../css/local-4.css" />

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
<div id="remove_patient">
<?php
$pid=$_POST['p_send_id'];
$r_q="select b.bed_id,b.room_number,b.ward_number,p.patient_firstname,p.patient_lastname from bed_allocation b,patients p where b.patient_id=p.patient_id and p.patient_id=".$pid.";";
$link = mysqli_connect("localhost","root","","my_hospital") or die("Error " . mysqli_error($link));
$ans=mysqli_query($link,$r_q);
echo "<p>Are you sure you want to remove the bed allocation for the following patient?</p><br /><br />";
echo "<form name=\"confirm_delete_bed\" method=\"POST\" action=\"delete_bed.php\"><input type=\"hidden\" name=\"pid_send\" value=\"".$pid."\" /><table id=\"m_3\"><tr><td>Patient_name</td><td>Bed Id</td><td>Room Number</td><td>Ward Number</td></tr></table><table id=\"m_4\">";
while($r2=mysqli_fetch_array($ans))
{
	echo "<tr><td>".$r2['patient_firstname']." ".$r2['patient_lastname']."</td><td>".$r2['bed_id']."</td><td>".$r2['room_number']."</td><td>".$r2['ward_number']."</td></tr></table></form>";
}

?>
</div>

<div id="new_way">
<input type="button" onclick="submit_forms();" class="my_rem_button" value="REMOVE" />
<script>
function submit_forms()
{
	document.forms["confirm_delete_bed"].submit();
}
</script>
</div>
</body>
</html>