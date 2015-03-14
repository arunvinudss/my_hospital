<?php
$mj=require('./connect.php');
$emp_type=$_POST['emp_des'];
$emp_uname=$_POST['emp_name'];
$emp_pass=$_POST['emp_pass']; 
if($emp_type=="patients")
$check_query="select patient_id,patient_firstname,patient_lastname from patients where patient_username=\"".$emp_uname."\" and patient_password=\"".md5($emp_pass)."\";";
else
$check_query="select emp_id,emp_firstname,emp_lastname from employees where emp_username=\"".$emp_uname."\" and emp_password=\"".md5($emp_pass)."\" and emp_type=\"".$emp_type."\";";
//echo $check_query;
$check_res=mysqli_query($link,$check_query);
if(mysqli_num_rows($check_res)>0)
{
	while($get_res=mysqli_fetch_array($check_res))

	//echo "You are successfully logged in please wait you will be redirected.....";
     header("Location:http://localhost/xampp/my_hospital/patient.php?pid=".$get_res['patient_id']);	

}
else
{
//echo ''; echo 'alert("wrong username")'; echo '';


	echo"<script type='text/javascript'>alert('Wrong username or password Please try again');  window.location.assign(\"./login.php\")</script>";

				//header("Location:http://localhost/xampp/my_hospital/login.php");




}
mysqli_close($link);

?>