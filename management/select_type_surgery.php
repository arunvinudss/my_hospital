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
<link rel="stylesheet" type="text/css" href="../css/schedule.css" />
</head>
<body>
<div id="cssmenu">
<ul>
<li><a href="../css/show_bed_vacancy.php"><span>CHECK BED VACANCY</span></a></li>
<li ><a href="../css/patient_assign.php"><span>PATIENT ASSIGNMENT</span></a></li>
<li><a href="../contact.php"><span>DOCTOR ASSIGNMENT</span></a></li>
<li><a href="../contact.php"><span>NURSE ASSIGNMENT</span></a></li>
<li><a href="../book_surgery.php"><span>SURGERY SCHEDULING</span></a></li>
</ul>
</div>
<div id="schedule_appointment">
<p style="color:#6C6CFF;">2.Select the department type:</p>

<ul>
<span><li><form method="post" action="select_name_surgeon_1.php"><input name="dept_name" type="image" src="../department_pic/cardio.png" value="Cardiology|<?php  $p=$_POST['get_patient_name'];echo $p;?>" width="68" height="75"/><p><b>Cardiology</b></p></li></form></span>
<span><li><form method="post" action="select_name_surgeon_1.php"><input name="dept_name" type="image" src="../department_pic/derma.png" value="Dermatology|<?php  $p=$_POST['get_patient_name'];echo $p; ?>" width="68" height="75"/><p><b>Dermatology</b></p></li></form></span>
<span><li><form method="post" action="select_name_surgeon_1.php"><input name="dept_name" type="image" src="../department_pic/oncology.png" value="Oncology|<?php $p=$_POST['get_patient_name'];echo $p;?>" width="68" height="75"/><p><b>Oncology</b></p></li></form></span>
<span><li><form method="post" action="select_name_surgeon_1.php"><input name="dept_name" type="image" src="../department_pic/neurology.png" value="Neurology|<?php $p=$_POST['get_patient_name'];echo $p;?>" width="68" height="75"/><p><b>Neurology</b></p></li></form></span>
<span><li><form method="post" action="select_name_surgeon_1.php"><input name="dept_name" type="image" src="../department_pic/pulmonology.png" value="Pulmonology|<?php $p=$_POST['get_patient_name'];echo $p;?>" width="68" height="75"/><p><b>Pulmonology</b></p></li></form></span>

<span><li><form method="post" action="select_name_surgeon_1.php"><input name="dept_name" type="image" src="../department_pic/endocrinology.png" value="Endocrinology|<?php $p=$_POST['get_patient_name'];echo $p;?>" width="68" height="75"/><p><b>Endocrinology</b></p></li></form></span>
<span><li><form method="post" action="select_name_surgeon_1.php"><input name="dept_name" type="image" src="../department_pic/nephro.png" value="Nephrology|<?php $p=$_POST['get_patient_name'];echo $p;?>" width="68" height="75"/><p><b>Nephrology</b></p></li></form></span>
<span><li><form method="post" action="select_name_surgeon_1.php"><input name="dept_name" type="image" src="../department_pic/hepatology.png" value="Hepatology|<?php $p=$_POST['get_patient_name'];echo $p;?>" width="68" height="75"/><p><b>Hepatology</b></p></li></form></span>
<span><li><form method="post" action="select_name_surgeon_1.php"><input name="dept_name" type="image" src="../department_pic/opthal.png" value="Ophthalmology|<?php $p=$_POST['get_patient_name'];echo $p;?>" width="68" height="75"/><p><b>Ophthalmology</b></p></li></form></span>
<span><li><form method="post" action="select_name_surgeon_1.php"><input name="dept_name" type="image" src="../department_pic/oto.png" value="Otolaryngology|<?php $p=$_POST['get_patient_name'];echo $p;?>" width="68" height="75"/><p><b>Otolaryngology</b></p></li></form></span>
<span><li><form method="post" action="select_name_surgeon_1.php"><input name="dept_name" type="image" src="../department_pic/urology.png" value="Urology|<?php $p=$_POST['get_patient_name'];echo $p;?>" width="68" height="75"/><p><b>Urology</b></p></li></form></span>
<span><li><form method="post" action="select_name_surgeon_1.php"><input name="dept_name" type="image" src="../department_pic/rheumatology.png" value="Rheumatology|<?php $p=$_POST['get_patient_name'];echo $p;?>" width="68" height="75"/><p><b>Rheumatology</b></p></li></form></span>
<span><li><form method="post" action="select_name_surgeon_1.php"><input name="dept_name" type="image" src="../department_pic/hematology.png" value="Hematology|<?php $p=$_POST['get_patient_name'];echo $p;?>" width="68" height="75"/><p><b>Hematology</b></p></li></form></span>
<span><li><form method="post" action="select_name_surgeon_1.php"><input name="dept_name" type="image" src="../department_pic/gastroenterology.png" value="Gastroenterology|<?php $p=$_POST['get_patient_name'];echo $p;?>" width="68" height="75"/><p><b>Gastroenterology</b></p></li></form></span>
<span><li><form method="post" action="select_name_surgeon_1.php"><input name="dept_name" type="image" src="../department_pic/psychiatry.png" value="Psychiatry|<?php $p=$_POST['get_patient_name'];echo $p;?>" width="68" height="75"/><p><b>Psychiatry</b></p></li></form></span>
<span><li><form method="post" action="select_name_surgeon_1.php"><input name="dept_name" type="image" src="../department_pic/pediatrics.png" value="Pediatrics|<?php $p=$_POST['get_patient_name'];echo $p;?>" width="68" height="75"/><p><b>Pediatrics</b></p></li></form></span>
<span><li><form method="post" action="select_name_surgeon_1.php"><input name="dept_name" type="image" src="../department_pic/cosmeto.png" value="Cosmetology|<?php $p=$_POST['get_patient_name'];echo $p;?>" width="68" height="75"/><p><b>Cosmetology</b></p></li></form></span>
<span><li><form method="post" action="select_name_surgeon_1.php"><input name="dept_name" type="image" src="../department_pic/geriatrics.png" value="Geriatrics|<?php $p=$_POST['get_patient_name'];echo $p;?>" width="68" height="75"/><p><b>Geriatrics</b></p></li></form></span>


</ul>
</div>
</body>
</html>