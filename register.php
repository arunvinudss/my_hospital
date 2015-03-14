<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="./css/register.css" type="text/css" />
<title>Patient Registration:</title>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.0/additional-methods.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.0/jquery.validate.min.js" type="text/javascript"></script>
<script src="http://jquery.bassistance.de/validate/jquery.validate.js" type="text/javascript" /></script>
</head>
<body>
<div id="register_me">
<p>PATIENT REGISTRATION:</p>
<form id="register_new" method="post" action="register_confirm.php">
First Name:* <input type="text" class="b_1" name="patient_firstname" /><br /><br />
Last Name:* <input type="text" class="b_1" name="patient_lastname" /><br /><br />
Gender:*
Male <input type="radio" name="Gender" value="male" />
Female <input type="radio" name="Gender" value="female" /><br /><br />
Social Security Number:* <input type="text" class="b_1" name="patient_ssn" /><br /><br />
Date of Birth:* 
<select class="c_1" name="Birthday_day" id="Birthday_Day">
<option value="-1">Day:</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
 
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
 
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
 
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
 
<option value="31">31</option>
</select>
 
<select id="dob" class="c_1" name="Birthday_Month">
<option value="-1-">Month:</option>
<option value="-01-">Jan</option>
<option value="-02-">Feb</option>
<option value="-03-">Mar</option>
<option value="-04-">Apr</option>
<option value="-05-">May</option>
<option value="-06-">Jun</option>
<option value="-07-">Jul</option>
<option value="-08-">Aug</option>
<option value="-09-">Sep</option>
<option value="-10-">Oct</option>
<option value="-11-">Nov</option>
<option value="-12-">Dec</option>
</select>
 
<select name="Birthday_Year" class="c_1" id="Birthday_Year">
 
<option value="-1">Year:</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
 
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
 
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
</select><br /><br />
Address 1* <input type="text" class="b_1" name="address_1" />
<br /><br />Address 2 <input type="text" class="b_1" name="address_2" />
<br /><br />City:* <input type="text" class="b_1" name="city" />
<br /><br />State:* <input type="text" class="b_1" name="state" />
<br /><br />Zip:* <input type="text" class="b_1" name="zip" />
<br /><br />Username:* <input type="text" class="b_1" name="username" />
<br /><br />Password:* <input class="b_1" type="password" name="pass" />
<br /><br />email:* <input type="text" class="b_1" name="em" />
<br /><br />Phone number:* <input type="text" class="b_1" name="phno" />
<br /><br />Height(cm):* <input type="text" class="b_1" name="height" />
<br /><br />Weight(kg):* <input type="text" class="b_1" name="weight" />
<br /><br />Blood Group:* <input type="text" class="b_1" name="bg" /><br /><br />
Enter the text shown above:
<?php
$x=mt_rand(1,5);

	if($x==1)
	{
		$suc="gFZ8P9";
	}
	if($x==2)
	{
		$suc="D2qwPZ";
	}
	if($x==3)
	{
		$suc="P2eR9i";
	}
	if($x==4)
	{
		$suc="SqLdB";
	}
	if($x==5)
	{
		$suc="rT6eZ2";
	}
	echo "<input name=\"captcha\" type=\"image\" style=\"width:180px; height:68px; padding-right:55px;\" src=\"./captcha/".$x.".jpg \" /><br /><input class=\"b_1\" name=\"c_get_secret\" type=\"text\" /><input type=\"hidden\" name=\"c_secret\" value=\"".$suc."\" />";
?>
<br /><br />
<input type="submit" value="REGISTER" class="m_r_1" /><input type="RESET" value="RESET" class="m_r_2" />

</form></div>
<script>
$(document).ready(function () {

    $('#register_new').validate({ // initialize the plugin
        rules: {
            patient_firstname: {
                required: true,
				minlength: 2
        
            },
            patient_lastname: {
                required: true,
                minlength: 2
            },
            Gender: {
                required: true,
            },
            patient_ssn: {
                required: true,
				number: true,
				minlength:9,
				maxlength:9
            },
            username: {
                required: true,
				minlength:6,
				maxlength:12
            },
			
            phno: {
				required:true,
               minlength:10,
			   maxlength:10
			               },
			height:
			{
				required:true,
				number:true
			},
				weight:
			{
				required:true,
				number:true
			},
			bg: 
			{
				required:true,
			},
			zip:
			{
				required:true,
				number:true,
				minlength:5,
				maxlength:5
			},
			em:
			{
				required:true,
				email:true
			},
			dob:
			{
				required:true,
			},
			address_1:
			{
				required:true,
				minlength:10
			}
			
        },
		
       // submitHandler: function (form) { // for demo
             // for demo
         //   return true; // for demo
        //}
    });

});</script>
</body>
</body>
</html>