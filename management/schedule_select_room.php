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
echo "<div id=\"my_p_schedule\"><p>Select the date:</p>";
date_default_timezone_set("America/New_York");
$a_date=date("Y-m-d",time());
echo "<form id=\"mss\" method=\"post\" action=\"view_scheduled_room_surgery.php\"><select name=\"appoint_date\">";
for($i=0;$i<7;$i++)
{
$c_date=date('Y-m-d',date(strtotime("+".$i." day", strtotime($a_date))));
echo "<option value=\"".$c_date."\">".str_replace("-","/",date("d-m-Y",strtotime($c_date)))."</option>"; 
}
echo "</select><br /><br /><p>Select the theatre name:</p><select name=\"s_t_name\"><option value=\"A\">A</option><option value=\"B\">B</option><option value=\"C\">C</option><option value=\"D\">D</option><option value=\"E\">E</option></select><br /><br /><input type=\"submit\" class=\"select_patient_b1\" value=\"VIEW\" /></form>";
?>
</div>
</body>
</html>