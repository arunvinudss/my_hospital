<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="./js/jquery-1.11.0.min.js"></script>
<script src="./js/home.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="./css/patient.css" />
<link rel="stylesheet" type="text/css" href="./css/slider.css" />
<title></title>
</head>
<body>

<?php
require('./patient_header.php');
require('./connect.php');
session_start();
$p_id=$_GET['pid'];
$_SESSION['pid']=$p_id;
//$password=$_POST['emp_pass'];
	
	$query = 'select patient_id,patient_ssn,patient_firstname,patient_lastname,patient_address1,patient_sex,patient_city,patient_state,patient_zip,patient_blood_group,patient_phone_number,patient_date_of_birth,patient_email_id,patient_password,patient_weight,patient_height from patients where patient_id='.$p_id.';' or die("Error in the consult.." . mysqli_error($link));
	$result=mysqli_query($link,$query);
	$row=mysqli_fetch_array($result);
		$pic_query="select domain_path,file_path from patient_pic where patient_id=".$row['patient_id'].";";
	$pic_path=mysqli_query($link,$pic_query);
	$res=mysqli_fetch_array($pic_path);
	//echo '<div id="profile_image"><img src="'.$res['domain_path'].$res['file_path'].'"></img></div>';
	echo "<div id=\"patient_profile\"><table><tr><td>Photo:</td><td><img src=\"".$res['domain_path'].$res['file_path']."\"></img></div></td></tr><tr><td>Identification Number:</td><td>".$row['patient_id']."</td></tr><tr><td>Social Security Number:</td><td>".$row['patient_ssn']."</td></tr><tr><td>Given Name:</td><td>".$row['patient_firstname']."</td></tr><tr><td>Sur Name:</td><td>".$row['patient_lastname']."</td></tr><tr><td>Gender:</td><td>".$row['patient_sex']."</td></tr><tr><td>Email Address:</td><td>".$row['patient_email_id']."</td></tr><tr><td>Address:</td><td>".$row['patient_address1']."</td></tr><tr><td>City:</td><td>".$row['patient_city']."</td></tr><tr><td>State:</td><td>".$row['patient_state']."</td></tr><tr><td>Phone Number:</td><td>".$row['patient_phone_number']."</td></tr><tr><td>Postal Code:</td><td>".$row['patient_zip']."</td></tr><tr><td>Blood Group:</td><td>".$row['patient_blood_group']."</td></tr><tr><td>Height:</td><td>".$row['patient_height']."cm</td></tr><tr><td>Weight:</td><td>".$row['patient_weight']."Kg</td></tr><table></div>";
	mysqli_close($link);
	?>
</body>
</html>