<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>	
<?php
$link = mysqli_connect("localhost","root","","my_hospital") or die("Error " . mysqli_error($link));
$query="update diagnosis set hospitalization_req='";
$q_2="select illness_id,patient_id from diagnosis";
$r1=mysqli_query($link,$q_2);
$pq=array();
$count=0;
while($r2=mysqli_fetch_array($r1))
{
	if($r2['illness_id']==91 or $r2['illness_id']==93 or $r2['illness_id']==95 or $r2['illness_id']==86 or $r2['illness_id']==87 or $r2['illness_id']==88 or $r2['illness_id']==89 or $r2['illness_id']==90 or $r2['illness_id']==65 or $r2['illness_id']==31 or $r2['illness_id']==32 or $r2['illness_id']==14 or $r2['illness_id']==2 or $r2['illness_id']==94 or $r2['illness_id']==99)
	{
		$q4=$query."no' where patient_id=".$r2['patient_id'].";";
	}
	else
	$q4=$query."yes' where patient_id=".$r2['patient_id'].";";
	$r3=mysqli_query($link,$q4);
	echo $r3;
	}
?>
</body>
</html>