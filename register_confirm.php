<?php
require('./connect.php');
$pf=$_POST['patient_firstname'];
$pl=$_POST['patient_lastname'];
$ge=$_POST['Gender'];
$em=$_POST['em'];
$ssn=$_POST['patient_ssn'];
$add=$_POST['address_1'];
$cit=$_POST['city'];
$stat=$_POST['state'];
$zip=$_POST['zip'];
$user=$_POST['username'];
$pass=$_POST['pass'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$phno=$_POST['phno'];
$bgo=$_POST['bg'];
$get_key=$_POST['c_get_secret'];
$check_key=$_POST['c_secret'];
$year=$_POST['Birthday_Year'];
$month=$_POST['Birthday_Month'];
$day=$_POST['Birthday_day'];
$m34="select max(patient_id) as s from patients";
$m0=mysqli_query($link,$m34);
$mk=mysqli_fetch_array($m0);
$io=$mk['s']+1;
if($get_key==$check_key)
{
	require("./connect.php");
	$que="insert into patients(patient_id,Patient_firstname,Patient_lastname,Patient_SSN,Patient_address1,patient_sex,patient_city,Patient_state,patient_zip,patient_blood_group,patient_phone_number,patient_date_of_birth,patient_username,patient_email_id,patient_password,patient_weight,patient_height) values(".$io.",'".$pf."','".$pl."',".$ssn.",'".$add."','".$ge."','".$cit."','".$stat."','".$zip."','".$bgo."','".$phno."','".$year.$month.$day."','".$user."','".$em."','".md5($pass)."','".$weight."','".$height."');";
$mm=mysqli_query($link,$que);;
if($mm==true)
{
	echo "<script>alert(\"Patient registered successfully.Please login.\");window.location=\"./login.php\";</script>";
}
}
else
{
	echo "<script>alert(\"Wrong captcha please try again.\");window.location=\"./register.php\";</script>";
	
}
mysqli_clode($link);
?>