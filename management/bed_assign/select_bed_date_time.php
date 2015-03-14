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
<div id="select_date_time">
<p>Select the admit date:</p><br />
<?php
$timezone = date_default_timezone_set('America/New_York');
echo "<form method=\"POST\" action=\"select_bed_time.php\"><select name=\"id2\">";
for($i=1;$i<8;$i++)
{

echo"<option value=\"".date("Y-m-d",strtotime(date("Y-m-d H:i:s",time())."+".($i*24)."hours"))."\">".date("Y-m-d",strtotime(date("Y-m-d H:i:s",time())."+".($i*24)."hours"))."</option>";
}
echo "</select><br><br><input class=\"select_patient_b1\" type=\"submit\" value=\"CHECK\"></form>";
?>

</div>
</body>
</html>