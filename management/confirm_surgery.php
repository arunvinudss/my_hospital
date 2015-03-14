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
<div id="c_m">
<?php
$mx=$_POST['c_2'];
$m=explode("|",$mx);
$x1=$_POST['s_t_name'];
//echo $mx;
$link=mysqli_connect("localhost","root","","my_hospital") or die("Error " . mysqli_error($link));
echo "<p style=\"font:Helvetica;font-size:17px;color:#6C6CFF;font-weight:bold;\">9.Are you sure to book this surgery?</p>";
echo "<table id=\"r_t\"><tr><td>Patient id</td><td>Patient Name</td><td>Surgery Name</td><td>Surgeon Name</td><td>Nurse name</td><td>Surgery Date</td><td>Surgery Time</td><td>Theathre Name</td></tr></table><table id=\"d_t\">";
$q="select Patient_firstname,Patient_lastname from patients where patient_id=".$m[2].";";
//echo $q;
$q1="select physician_firstname,physician_lastname from physician where physician_id='".$m[1]."';";
$q2="select nurse_firstname,nurse_lastname from nurse where nurse_id=".$m[0];
$w1=mysqli_query($link,$q);
$w2=mysqli_query($link,$q1);
$w3=mysqli_query($link,$q2);
while($j1=mysqli_fetch_array($w1))
{
	 
	$k=$j1['Patient_firstname'];
	$mk=$j1['Patient_lastname'];
	$j2=mysqli_fetch_array($w2);
	$p1=$j2['physician_firstname'];
	$p2=$j2['physician_lastname'];
	$j3=mysqli_fetch_array($w3);
		echo "<tr><form name=\"m_s\" method=\"POST\" action=\"surgery_book_patient.php\"><input type=\"hidden\" name=\"fuck_me\" value=\"".$x1."|".$m[1]."|".$m[2]."|".$m[5]."|".$m[0]."|".$m[3]."|".$m[4]."\" /><td>".$m[2]."</td><td>".$k." ".$mk."</td><td>".$m[5]."</td><td>".$p1." ".$p2."</td><td>".$j3['nurse_firstname']." ".$j3['nurse_lastname']."</td><td>".$m[3]."</td><td>".$m[4]."</td><td>".$x1."</td></form></tr></table>";
}
echo "<br /></div><div id=\"center_1\"><input type=\"button\" class=\"m_g1\" value=\"BOOK\" onclick=\"my_f_s();\" />";
	
mysqli_close($link);
?>
<script>
function my_f_s()
{
	document.forms["m_s"].submit();
	
}
</script>
</div>
</body>
</html>
</div>
</body>
</html>