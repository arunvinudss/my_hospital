<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="./js/jquery-1.11.0.min.js"></script>
<script src="./js/home.js"></script>
<script src="./js/login.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="./css/home.css" />
<link rel="stylesheet" type="text/css" href="./css/login.css" />
<title></title>
</head>
<body>
<?php
$x=file_get_contents('./home_header.php');
echo $x;
?>
<div id="login_form">
<form id="my_form" method="post" action="login_check.php">
<b>Type:</b><br /><select name="emp_des"><option value="patients">Patient</option><option value="physician">Employee</option><option value="admin">Admin</option>
</select>	
<br /><b>Username:</b><br /><input id="m12" type="text" name="emp_name" id="in_field" />
<br /><b>Password:</b><br /><input id="m12"type="password" name="emp_pass" id="in_field" />
<br /> <br /><input type="submit" value="Login" id="login_button" /><input type="button" onclick="redi();"  value="Register" id="login_button_1" />
</form>
<script>
function redi()
{
	window.location="./register.php";
}
</script>

</body>
</html>