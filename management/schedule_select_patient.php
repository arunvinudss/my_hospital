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
<div id="schedule_p_1">
<?php
$x=file_get_contents('http://localhost/xampp/my_hospital/management/include_management_header.php');
echo $x;
echo "<p>1.SELECT THE PATIENT:</p>";
$link = mysqli_connect("localhost","root","","my_hospital") or die("Error " . mysqli_error($link));
$query="select patient_id,patient_firstname,patient_lastname from patients";
$res=mysqli_query($link,$query);
echo "<form name=\"get_id_p\" action=\"view_schedule_patient_surgery.php\" method=\"POST\"><select name=\"get_patient_name\">";
while($r=mysqli_fetch_array($res))
{
	echo "<option value=\"".$r['patient_id']."\">".$r['patient_firstname']." ".$r['patient_lastname']."</option>";
}
echo "</select><br><br><input type=\"submit\" class=\"select_patient_b\" value=\"SELECT\" /></form>";
mysqli_close($link);
?>
</div>
</body>
</html>