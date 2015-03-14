<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$f2=file_get_contents('./main_data.txt');
$f1=explode("\n",$f2);
$f3=implode("|",$f1);
$f4=explode("|",$f3);
$k=1;
$m=28;
$l=17;
$q=18;
$add=19;
$se=16;
$cit=20;
$stat=21;
$zi=22;
$bo=29;
$ph=26;
$dob=27;
$ema=23;
$we=30;
$hi=31;
$user=24;
$pas=25;
for($i=1;$i<201;$i++)
{
	
		
		echo "insert into patients(patient_id,patient_ssn,patient_firstname,patient_lastname,patient_address1,patient_sex,patient_city,patient_state,patient_zip,patient_blood_group,patient_date_of_birth,patient_phone_number,patient_username,patient_email_id,patient_password,patient_weight,patient_height)"." values(".$k.",".str_replace("-","",$f4[$m]).","."\"".$f4[$l]."\",\"".$f4[$q]."\",\"".$f4[$add]."\",\"".$f4[$se]."\",\"".$f4[$cit]."\",\"".$f4[$stat]."\",".$f4[$zi].",\"".$f4[$bo]."\",'".date('Y-m-d', strtotime(str_replace('/', '-',$f4[$dob])))."',\"".$f4[$ph]."\",\"".$f4[$user]."\",\"".$f4[$ema]."\",\"".md5($f4[$pas])."\",".$f4[$we].",".rtrim($f4[$hi]).");";
	
	$m+=16;
	$l+=16;
	$q+=16;
	$add+=16;
	$se+=16;
	$cit+=16;
	$stat+=16;
	$zi+=16;
	$bo+=16;
	$dob+=16;
	$ph+=16;
	$we+=16;
	$hi+=16;
	$ema+=16;
	$user+=16;
	$pas+=16;
	$k++;
	echo "<br/>";

	
}
/*$feed=file_get_contents('./medicines.txt');
$feed_1=explode("\n",$feed);
$m=0;for($i=0;$i<306;$i++)
{
	$m++;

	$k=mt_rand(100,9999)/100;
echo "insert into medicines(medicine_id,medicine_name,unit_cost) values(".$m.",\"".rtrim($feed_1[$i])."\",".$k.");";

}*/
/*insert into  patients (patient_id,patient_ssn,patient_firstname,patient_lastname,patient_address1,patient_sex,patient_city,patient_state,patient_zip,patient_blood_group,patient_age) values 
$i=0;
$feed=file_get_contents('./names.txt');
$feed_1=explode("\n",$feed);
$feed_l=file_get_contents('./l.txt');
$feed_l1=explode("|",$feed_l);
$feed_a=file_get_contents('./address.txt');
$feed_a1=explode("\n",$feed_a);
$feed_c=file_get_contents('./cities.txt');
$feed_c1=explode("\n",$feed_c);
$feed_s=file_get_contents('./states.txt');
$feed_st1=explode("\n",$feed_s);
$feed_o=file_get_contents('./b_g.txt');
$feed_ob=explode("\n",$feed_o);
$feed_p=file_get_contents('./phone.txt');
$feed_ph=explode("\n",$feed_p);

$link = mysqli_connect("localhost","root","","us_cities") or die("Error " . mysqli_error($link));

for($i=1;$i<75;$i++)
{
	
	
	
	$k=mt_rand(0,384);
	$m=mt_rand(0,46);
	//$x=mt_rand(10000,99999);
	$q=mt_rand(0,7);
	$y=mt_rand(6,85);
	$mk=mt_rand(0,200);
	$z=mt_rand(0,480);
	$phone=mt_rand(1000000000,9999999999);

	$query = 'SELECT zip FROM zips where city='.'"'.rtrim($feed_c1[$k]).'"' or die("Error in the consult.." . mysqli_error($link));
	//echo $query;
	$result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result) ;
	$x=$row['zip'];
	$x=($x=="")?mt_rand(10000,99999):$x;
	
echo "insert into patients(patient_id,patient_ssn,patient_firstname,patient_lastname,patient_address1,patient_sex,//patient_city,patient_state,patient_zip,patient_blood_group,patient_age,patient_phone_number)"." values(".$i.",".mt_rand(100000000,999999999).",\"".rtrim($feed_1[$i])."\",\"".$feed_l1[$i]."\",\"".rtrim($feed_a1[$mk])."\",\"F\",\"".rtrim($feed_c1[$k])."\",\"".rtrim($feed_st1[$m])."\",".$x.",\"".rtrim($feed_ob[$q])."\",".$y.",\"".rtrim($feed_ph[$z])	."\");";*/
?>
</body>
</html>