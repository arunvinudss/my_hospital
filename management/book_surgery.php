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
<div id="surgery_time">
<?php
echo "<p>1.SELECT THE PATIENT:</p>";
$link = mysqli_connect("localhost","root","","my_hospital") or die("Error " . mysqli_error($link));
$query="select patient_id,patient_firstname,patient_lastname from patients";
$res=mysqli_query($link,$query);
echo "<form name=\"get_id_p\" action=\"select_type_surgery.php\" method=\"POST\"><select name=\"get_patient_name\">";
while($r=mysqli_fetch_array($res))
{
	echo "<option value=\"".$r['patient_id']."\">".$r['patient_firstname']." ".$r['patient_lastname']."</option>";
}
echo "</select><br><br><input type=\"submit\" class=\"select_patient_b\" value=\"SELECT\" /></form>";
mysqli_close($link);
 
?>
</div>
</body>
</body>
</html>