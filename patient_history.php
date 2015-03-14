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
require('./patient_header_his.php');
?>

<?php
$p=$_SESSION['pid'];
$q="select p.patient_id,p.patient_firstname,p.patient_lastname,p.patient_sex,p.patient_blood_group,i.illness_name,d.hospitalization_req from patients p,illness i,diagnosis d where p.patient_id=".$p." and p.patient_id=d.patient_id and i.illness_id=d.illness_id";
$pic_query="select domain_path,file_path from patient_pic where patient_id=".$p.";";
require('./connect.php');
	$pic_path=mysqli_query($link,$pic_query);
	$res=mysqli_fetch_array($pic_path);
$d=mysqli_query($link,$q);
while($sp=mysqli_fetch_array($d))
{
	$get_b_d="select bed_id,ward_number,room_number from bed_allocation where patient_id=".$p.";";
	$xx=mysqli_query($link,$get_b_d);
	if(mysqli_num_rows($xx)>0)
	{
		while($zz=mysqli_fetch_array($xx))
		
	 echo "<div id=\"patient_profile\"><table><tr><td>Photo:</td><td><img src=\"".$res['domain_path'].$res['file_path']."\"></img></div></td></tr><tr><td>Identification Number:</td><td>".$sp['patient_id']."</td></tr><tr><td>Given Name:</td><td>".$sp['patient_firstname']."</td></tr><tr><td>Sur Name:</td><td>".$sp['patient_lastname']."</td></tr><tr><td>Gender:</td><td>".$sp['patient_sex']."</td></tr><tr><td>Blood Group:</td><td>".$sp['patient_blood_group']."</td></tr><tr><td>Diagnosed with:</td><td>".$sp['illness_name']."</td></tr><tr><td>Hospitalized</td><td>".$sp['hospitalization_req']."</td></tr><tr><td>Ward Number</td><td>".$zz['ward_number']."</td></tr><tr><td>Room Number</td><td>".$zz['room_number']."</td></tr>"."<tr><td>bed_id</td><td>".$zz['bed_id']."</td></tr></table></div>";
	 
	}
	 else
	 {
		 echo "<div id=\"patient_profile\"><table><tr><td>Photo:</td><td><img src=\"".$res['domain_path'].$res['file_path']."\"></img></div></td></tr><tr><td>Identification Number:</td><td>".$sp['patient_id']."</td></tr><tr><td>Given Name:</td><td>".$sp['patient_firstname']."</td></tr><tr><td>Sur Name:</td><td>".$sp['patient_lastname']."</td></tr><tr><td>Gender:</td><td>".$sp['patient_sex']."</td></tr><tr><td>Blood Group:</td><td>".$sp['patient_blood_group']."</td></tr><tr><td>Diagnosed with:</td><td>".$sp['illness_name']."</td></tr><tr><td>Hospitalized</td><td>".$sp['hospitalization_req']."</td></tr></table></div>";
		 
	 }
}
mysqli_close($link);
?>

</body>
</html>