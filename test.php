<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$app=12345;
$pat=1;
for($i=0;$i<200;$i++)
{
	$ill=mt_rand(1,110);
echo "insert into diagnosis(appointment_id,illness_id,patient_id) values(".$app.",".$ill.",".$pat.");";
$app++;
$pat++;
echo "<br><br>";
}
?>
</body>
</html>