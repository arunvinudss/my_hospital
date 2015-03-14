<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$link = mysqli_connect("localhost","root","","my_hospital") or die("Error " . mysqli_error($link));
$query="select patient_id from diagnosis where hospitalization_req='yes'";
$q1=mysqli_query($link,$query);
$count=271;
$x=161;
while($s1=mysqli_fetch_array($q1))
{
	$m=mt_rand(1,8);
	if($x<=32)
	{
	$q2="insert into bed_allocation(bed_id,ward_number,room_number,patient_id) values(".$count.",\"A\",".$m.",".$s1['patient_id'].");";
	$count++;
	$x++;
	echo "<br>".$q2;
	}
	if($x>32 && $x<=64)
	{
		$q2="insert into bed_allocation(bed_id,ward_number,room_number,patient_id) values(".$count.",\"B\",".$m.",".$s1['patient_id'].");";
	$count++;
	$x++;
	echo "<br>".$q2;
	
	}
	if($x>64 && $x<=96)
	{
		$q2="insert into bed_allocation(bed_id,ward_number,room_number,patient_id) values(".$count.",\"C\",".$m.",".$s1['patient_id'].");";
	$count++;
	$x++;
	echo "<br>".$q2;
	
	}
	if($x>96 && $x<=128)
	{
		$q2="insert into bed_allocation(bed_id,ward_number,room_number,patient_id) values(".$count.",\"D\",".$m.",".$s1['patient_id'].");";
	$count++;
	$x++;
	echo "<br>".$q2;
	
	}
	
	if($x>128 && $x<=160)
	{
		$q2="insert into bed_allocation(bed_id,ward_number,room_number,patient_id) values(".$count.",\"E\",".$m.",".$s1['patient_id'].");";
	$count++;
	$x++;
	echo "<br>".$q2;
	
	}
	if($x>160 && $x<=185)
	{
			$q2="insert into bed_allocation(bed_id,ward_number,room_number) values(".$count.",\"F\",".$m.");";
	$count++;
	$x++;
	echo "<br>".$q2;
	}
	
}
?>
</body>
</html>