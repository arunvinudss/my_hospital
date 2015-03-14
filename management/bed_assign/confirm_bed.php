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

</ul>
</div>


<div id="d_1">
<p>Please confirm your assignment and click assign to save it:</p>
<?php
$get_check=$_POST['raw_data'];
$p_1=explode("|",$get_check);
//print_r($p_1);
//$p_data=$_POST['raw_data'];
$link = mysqli_connect("localhost","root","","my_hospital") or die("Error " . mysqli_error($link));
$q1='select patient_id,patient_firstname,patient_lastname from patients where patient_id='.$p_1[0];
$zz=mysqli_query($link,$q1);
echo "<table id=\"m_1\"><tr><td>Patient id</td><td>Patient Name</td><td>Ward Number</td><td>Room Number</td><td>Bed Id</td><td>Admit Date</td><td>Admit Time</td></tr></table><table id=\"m_2\">";
while($ab=mysqli_fetch_array($zz))
{
	echo "<tr><td>".$ab['patient_id']."</td><td>".$ab['patient_firstname']." ".$ab['patient_lastname']."</td><td>".$p_1[3]."</td><td>".$p_1[4]."</td><td>".$p_1[5]."</td><td>".$p_1[1]."</td><td>".$p_1[2]."</td></tr>";
}
echo "</table>";
?>
</div>
<div id="my_assign_button">

<?php

//print_r($p_1);
echo "<form name=\"my_patient_assign\" method=\"POST\" action=\"./assign_confirm.php\"><input name=\"cred\" type=\"hidden\" value=\"".$p_1[1]."|".$p_1[0]."|".$p_1[2]."|".$p_1[3]."|".$p_1[4]."|".$p_1[5]."\" /><input class=\"assign\" type=\"submit\" value=\"ASSIGN\" /></form>"; 
?>
</div>

</div>
</body>
</html>