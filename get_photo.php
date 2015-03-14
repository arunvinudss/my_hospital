<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$x="http://api.randomuser.me/0.3.2/portraits/men/";
$domain="http://web.njit.edu/~as2433/my_hospital/patient_pic/";
$f1=file_get_contents('./patient_male.txt');
$f2=explode("\n",$f1);
$z=1;
for($i=0;$i<100;$i++)
{
echo "insert into patient_pic(patient_id,domain_path,file_path) values(".rtrim($f2[$i]).",\"".$domain."\",\"".$z.".jpg\");";
echo "<br>";
$z++;
}
?>
</body>
</html>