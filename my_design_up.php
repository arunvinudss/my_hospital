<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="./js/jquery-1.11.0.min.js"></script>
<script src="./js/home.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="./css/patient.css" />
<link rel="stylesheet" type="text/css" href="./css/schedule.css" />
<title></title>
</head>
<body>
<?php
include('./schedule_header.php');
?>
<div id="head_top">
<b>1.Choose a Speciality</b>
</div>
<div id="schedule_appointment">
<ul>
<span><li><form method="post" action="check-design.php"><input name="dept_name" type="image" src="./department_pic/cardio.png" value="Cardiology|<?php session_start();echo $_SESSION['pid'];?>" width="68" height="75"/><p><b>Cardiology</b></p></li></form></span>
<span><li><form method="post" action="check-design.php"><input name="dept_name" type="image" src="./department_pic/derma.png" value="Dermatology|<?php session_start();echo $_SESSION['pid'];?>" width="68" height="75"/><p><b>Dermatology</b></p></li></form></span>
<span><li><form method="post" action="check-design.php"><input name="dept_name" type="image" src="./department_pic/oncology.png" value="Oncology|<?php session_start();echo $_SESSION['pid'];?>" width="68" height="75"/><p><b>Oncology</b></p></li></form></span>
<span><li><form method="post" action="check-design.php"><input name="dept_name" type="image" src="./department_pic/neurology.png" value="Neurology|<?php session_start();echo $_SESSION['pid'];?>" width="68" height="75"/><p><b>Neurology</b></p></li></form></span>
<span><li><form method="post" action="check-design.php"><input name="dept_name" type="image" src="./department_pic/pulmonology.png" value="Pulmonology|<?php session_start();echo $_SESSION['pid'];?>" width="68" height="75"/><p><b>Pulmonology</b></p></li></form></span>

<span><li><form method="post" action="check-design.php"><input name="dept_name" type="image" src="./department_pic/endocrinology.png" value="Endocrinology|<?php session_start();echo $_SESSION['pid'];?>" width="68" height="75"/><p><b>Endocrinology</b></p></li></form></span>
<span><li><form method="post" action="check-design.php"><input name="dept_name" type="image" src="./department_pic/nephro.png" value="Nephrology|<?php session_start();echo $_SESSION['pid'];?>" width="68" height="75"/><p><b>Nephrology</b></p></li></form></span>
<span><li><form method="post" action="check-design.php"><input name="dept_name" type="image" src="./department_pic/hepatology.png" value="Hepatology|<?php session_start();echo $_SESSION['pid'];?>" width="68" height="75"/><p><b>Hepatology</b></p></li></form></span>
<span><li><form method="post" action="check-design.php"><input name="dept_name" type="image" src="./department_pic/opthal.png" value="Ophthalmology|<?php session_start();echo $_SESSION['pid'];?>" width="68" height="75"/><p><b>Ophthalmology</b></p></li></form></span>
<span><li><form method="post" action="check-design.php"><input name="dept_name" type="image" src="./department_pic/oto.png" value="Otolaryngology|<?php session_start();echo $_SESSION['pid'];?>" width="68" height="75"/><p><b>Otolaryngology</b></p></li></form></span>
<span><li><form method="post" action="check-design.php"><input name="dept_name" type="image" src="./department_pic/urology.png" value="Urology|<?php session_start();echo $_SESSION['pid'];?>" width="68" height="75"/><p><b>Urology</b></p></li></form></span>
<span><li><form method="post" action="check-design.php"><input name="dept_name" type="image" src="./department_pic/rheumatology.png" value="Rheumatology|<?php session_start();echo $_SESSION['pid'];?>" width="68" height="75"/><p><b>Rheumatology</b></p></li></form></span>
<span><li><form method="post" action="check-design.php"><input name="dept_name" type="image" src="./department_pic/hematology.png" value="Hematology|<?php session_start();echo $_SESSION['pid'];?>" width="68" height="75"/><p><b>Hematology</b></p></li></form></span>
<span><li><form method="post" action="check-design.php"><input name="dept_name" type="image" src="./department_pic/gastroenterology.png" value="Gastroenterology|<?php session_start();echo $_SESSION['pid'];?>" width="68" height="75"/><p><b>Gastroenterology</b></p></li></form></span>
<span><li><form method="post" action="check-design.php"><input name="dept_name" type="image" src="./department_pic/psychiatry.png" value="Psychiatry|<?php session_start();echo $_SESSION['pid'];?>" width="68" height="75"/><p><b>Psychiatry</b></p></li></form></span>
<span><li><form method="post" action="check-design.php"><input name="dept_name" type="image" src="./department_pic/pediatrics.png" value="Pediatrics|<?php session_start();echo $_SESSION['pid'];?>" width="68" height="75"/><p><b>Pediatrics</b></p></li></form></span>
<span><li><form method="post" action="check-design.php"><input name="dept_name" type="image" src="./department_pic/cosmeto.png" value="Cosmetology|<?php session_start();echo $_SESSION['pid'];?>" width="68" height="75"/><p><b>Cosmetology</b></p></li></form></span>
<span><li><form method="post" action="check-design.php"><input name="dept_name" type="image" src="./department_pic/geriatrics.png" value="Geriatrics|<?php session_start();echo $_SESSION['pid'];?>" width="68" height="75"/><p><b>Geriatrics</b></p></li></form></span>


</ul>
</div>
</body>
</html>