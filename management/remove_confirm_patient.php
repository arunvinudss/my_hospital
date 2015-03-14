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
echo "<div id=\"remove_doc\">";
$p1=$_POST['p_1'];
$pk=explode("|",$p1);
$pat_id=$pk[0];
$doc_id=$pk[2];
$con=require('../connect.php');
$query="delete from primary_physician where patient_id=".$pat_id." and physician_id=".$doc_id;
$z=mysqli_query($link,$query);
if($z==true)
{
	echo "<p>Patient and doctor pair removed successfully</p>";
}
else
{
	echo "Please try again";
}

mysqli_close($link);
?>
</div>
</body>
</html>