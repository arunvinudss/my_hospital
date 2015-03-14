<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body><?php
$x='2014-04-28 09:00:00';
$c4=0;
$link = mysqli_connect("localhost","root","","my_hospital") or die("Error " . mysqli_error($link));
$query="select patient_id from diagnosis where hospitalization_req='yes'";
$sq=mysqli_query($link,$query);
$c08=0;
while($z9=mysqli_fetch_array($sq))
{
	$zqw[$c08++]=$z9['patient_id'];
}
$cqe=0;
for($i=1;$i<=170;$i++)
{
	$c4++;
	$y=mt_rand(2,6);
	$z=mt_rand(1,9);
	$w=mt_rand(2,6);
	$u=mt_rand(1,9);

	if($y<$w && $z<$u )
	{
	$z=$z*60;
	$u=$u*60;
	echo "update bed_allocation set admit_date='".date("Y-m-d H:i:s",strtotime(date("Y-m-d H:i:s",strtotime($x."+ ".$y." day"))."+".$z." minutes"))."',discharge_date='".date("Y-m-d H:i:s",strtotime(date("Y-m-d H:i:s",strtotime($x."+ ".$w." day"))."+".$u." minutes"))."' where patient_id=".$zqw[$cqe].";";
	echo "<br><br>";
	$cqe++;
	}
	else
	{
		$i--;
	}
	

}

echo $c4;
?>
</body>
</html>