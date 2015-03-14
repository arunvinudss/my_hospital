<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$p=1;
$c=1001;
$k=0;
for($i=1;$i<200;$i++)
{
	if($k%7==0 && $k!=0)
	{
		$c++;
	}
	echo "insert into primary_physician(patient_id,physician_id) values(".$p.",".$c.");";
	echo "<br>";
$p++;
$k++;
}
?>
</body>
</html>