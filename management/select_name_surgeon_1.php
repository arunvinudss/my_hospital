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
<link href="../css/m_9.css" type="text/css" rel="stylesheet" />  

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
<body>
<div id="m_9">
<p>3.Select the surgery:</p>
<?php
$x=$_POST['dept_name'];
$f=explode("|",$x);
//print_r($f);
$qu="select surgery_type from surgery_department where department_type='".$f[0]."';";
$link=mysqli_connect("localhost","root","","my_hospital") or die("Error " . mysqli_error($link));
$e=mysqli_query($link,$qu);
$c=0;
while($m=mysqli_fetch_array($e))
{
	echo "<br /><form name=\"su".$c."\" method=\"POST\" action=\"select_name_surgeon.php\"><input type=\"hidden\" name=\"s1\" value=\"".$f[0]."|".$f[1]."|".$m['surgery_type']."\" />".$m['surgery_type']."<br /><br /><input class=\"select_patient_2\" type=\"submit\" value=\"SELECT\" /></form>";
}
$c++;	
?>
</div>
</body>
</html>