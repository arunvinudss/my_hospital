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
<div id="select_nurse">
<?php
$get_date=$_POST['booking_time'];
$g=explode("|",$get_date);
$link=mysqli_connect("localhost","root","","my_hospital") or die("Error " . mysqli_error($link));
//print_r($g);
$q7="select n.nurse_id,n1.nurse_firstname,n1.nurse_lastname from nurse_dept n,nurse n1 where surgeon_speciality in (select physician_speciality from physician where physician_id =".$g[1].") and n.nurse_id=n1.nurse_id;";
$z=mysqli_query($link,$q7);
echo "<p style=\"font:Helvetica;font-size:17px;color:#6C6CFF;font-weight:bold;\">7.Select the nurse for the surgery</p>";
echo "<table id=\"g_k\"><tr><td>Nurse id</td><td>Nurse name</td></tr></table><table id=\"m_g_k\">";
$m0=0;
while($xx=mysqli_fetch_array($z))
{
	echo "<tr><td onclick=\"s_f(".$m0.");\"><form name=\"b_s".$m0."\" method=\"POST\" action=\"select_theather.php\"><input type=\"hidden\" name=\"final_data\" value=\"".$xx['nurse_id']."|".$g[1]."|".$g[3]."|".$g[2]."|".$g[0]."|".$g[4]."\" />".$xx['nurse_id']."</td><td onclick=\"s_f(".$m0.");\">".$xx['nurse_firstname']." ".$xx['nurse_lastname']."</form></td></tr>";
	$m0++;
}
echo "</table>";
mysqli_close($link);

?>
<script>
function s_f(k)
{
	var g="b_s"+k;
	document.forms[g].submit();
}
</script>
</div>
</body>
</html>