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
<div id="my_show_time_now">
<p>Select the admit time:</p>
<?php
$x=$_POST['id2'];
$t='09:00:00';
echo "<table><tr>";
$c7=0;
for($i=1;$i<25;$i++)
{
	if($c7!=0 && $c7%4==0)
			   {
				   echo "</tr><tr>";
			   }
  echo "<form id=\"my_time_schedule\" method=\"post\" action=\"show_bed_vacancy.php\"><input type=\"hidden\" name=\"booking_time\" value=\"".date("H:i:s",strtotime($t."+".$i." hours"))."|".$x."\" /><td><input type=\"submit\" class=\"my_select\" value=\"".date("H:i",strtotime($t."+".$i." hours"))."\" /></form></td>";	
  $c7++;
	
}
echo "</tr></table>";



?>
</div>
</body>
</html>