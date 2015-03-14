<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="../js/jquery-1.11.0.min.js"></script>
<script src="../js/home.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
$x=file_get_contents('http://localhost/xampp/my_hospital/management/include_management_header.php');
echo $x;
echo "<div id=\"r_x_1\"><p>Select the patient and doctor pair to remove:</p>";
$con=require('../connect.php');
$query="select physician_id,patient_id from primary_physician;";
$q2="seelct physicisan_firstname,physician_lastname where physician_id=";
$q3="select patient_firstname,patient_lastname where patient_id=";
$s1=mysqli_query($link,$query);
echo "<table id=\"r_3_1\"><tr><td>Patient_name</td><td>Primary Physician Name</td></tr></table><table id=\"r_4_1\">";
$l=0;
while($q1=mysqli_fetch_array($s1))
{
	     $q3="select Patient_firstname,Patient_lastname from patients where patient_id=".$q1['patient_id'];
		 $q5="select physician_firstname,physician_lastname from physician where physician_id=".$q1['physician_id'];
		 $sw=mysqli_query($link,$q3);
		 $sw1=mysqli_query($link,$q5);
        while( $q4=mysqli_fetch_array($sw))
		 {
			 $ska=$q4['Patient_firstname']." ".$q4['Patient_lastname'];
			 $q7=mysqli_fetch_array($sw1);
		 echo "<tr><form name=\"sms".$l."\" method=\"post\" action=\"./remove_confirm_patient.php\"><input name=\"p_1\" type=\"hidden\" value=\"".$q1['patient_id']."|".$ska."|".$q1['physician_id']."|".$q7['physician_firstname']."|".$q7['physician_lastname']."\" /><td onclick=\"submit_form_patient(".$l.");\">".$ska."</td><td onclick=\"submit_form_patient(".$l.");\">".$q7['physician_firstname']." ".$q7['physician_lastname']."</td></form></tr>";$l++;
}}
echo "</table></div>";
mysqli_close($link);
?>
<script>
function submit_form_patient(b)
{
	//alert(b);
	var e="sms"+b;
	//alert(e);
document.forms[e].submit();
}
</script>
</body>
</html>