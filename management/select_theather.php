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
<link rel="stylesheet" type="text/css" href="../css/my_select_butt.css" />

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
<div id="select_theater">
<p style=\"font:Helvetica;font-size:17px;color:#6C6CFF;font-weight:bold;\">8.Select the theatre Name:</p> 
<form name="confirm_surgery" action="confirm_surgery.php" method="post"><input type="hidden" name="c_2" value="<?php $c=$_POST['final_data'];echo $c;?>" /><select name="s_t_name"><option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="E">E</option></select><br /><br /><input type="submit" class="m_t_t_b" value="SELECT" /></form>
</div>
<body>
</body>
</html>