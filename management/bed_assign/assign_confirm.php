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
<div id="confirmation">
<?php
$q2;
$b_1=explode("|",$_POST['cred']);;
//print_r($b_1);
$date_i=$b_1[0];
$pat_id=$b_1[1];
$tim_id=$b_1[2];
$war=$b_1[3];
$room=$b_1[4];
$bed_id=$b_1[5];
$q_2="select patient_id from bed_allocation where bed_id=".$bed_id.";";
//echo $q_2;
$link = mysqli_connect("localhost","root","","my_hospital") or die("Error " . mysqli_error($link));
$re=mysqli_query($link,$q_2);
while($r2=mysqli_fetch_array($re))
{
	if($r2['patient_id']==NULL)
	{
		$q2="update bed_allocation set patient_id=".$pat_id.",admit_date='".$date_i."' where bed_id=".$bed_id.";";
		$ass=mysqli_query($link,$q2);
		if($ass)
		echo"<b>Patient successfully assigned bed</b>";
		else
		echo "please try again";
	
	}
	else
	{
		$q2="update bed_allocation set patient_id=NULL where bed_id=".$bed_id;
		$ass=mysqli_query($link,$q2);
		if($ass)
		{
		$q3="update bed_allocation set patient_id=".$pat_id.",admit_date='".$date_i."' where bed_id=".$bed_id.";";
		$ass1=mysqli_query($link,$q3);
        if($ass1)
		echo"<b>Patient successfully assigned bed</b>";
		}
		else
		echo "please try again";
		
		
	}
	//$q2="update bed_allocation set patient_id=".$bed_id." where bed_id=".$pat_id.";";
}
	
mysqli_close($link);
?>

</div>

</body>
</html>