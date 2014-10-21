<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>myaccount</title>
<link rel="stylesheet" href="main.css" type="text/css" />

<style type="text/css">

#apDiv6 {
	position: absolute;
	left: 130px;
	top: 258px;
	width: 168px;
	height: 53px;
	z-index: 3;
}
#apDiv8 {
	position: absolute;
	left: 1145px;
	top: 257px;
	width: 150px;
	height: 56px;
	z-index: 4;
}
#apDiv6 a {
	font-family: Georgia, "Times New Roman", sans-serif;
	font-size: 28px;
	font-weight: 100;
	text-transform: capitalize;
	color: seashell;
	text-decoration: none;
}
#apDiv6 a:hover{color:#FFA346}
#apDiv8 a:hover{color:#FFA346}

#apDiv8 a {
	font-family: Georgia, "Times New Roman", sans-serif;
	font-size: 28px;
	font-weight: 100;
	text-transform: capitalize;
	color: seashell;
	text-decoration: none;
}

#apDiv9 {
	position: absolute;
	left: 503px;
	top: 257px;
	width: 562px;
	height: 49px;
	z-index: 5;
	font-family: Georgia, "Times New Roman", sans-serif;
	font-size: 24px;
	font-weight: 100;
	text-transform: none;
	color: seashell;
	text-decoration: none;
}
#apDiv4{
	position: absolute;
	left: 104px;
	top: 350px;
	width: 162px;
	height: 85px;
	z-index: 2;
	background: #FFFFB7;
	background-position: center center;
	text-align: center;
	vertical-align: middle;	border-radius:5px;
	
	
}

#apDiv4 a{
	font-family: Georgia, "Times New Roman", sans-serif;
	font-size: 20px;
	font-weight: 100;
	text-transform: capitalize;
	color:#111;
	text-decoration: none;
	text-align: center;
	line-height: 1cm;
	background-position: center center;
	float: left;
	padding: 5px;
	-webkit-transition: all 750ms ease-in-out 100ms;
	-moz-transition: all 750ms ease-in-out 100ms;
	-ms-transition: all 750ms ease-in-out 100ms;
	-o-transition: all 750ms ease-in-out 100ms;
	transition: all 750ms ease-in-out 100ms;
	border-radius: 5px;
	display: inline-table;
	vertical-align: middle;
}

#apDiv20{
	position: absolute;
	left: 104px;
	top: 450px;
	width: 162px;
	height: 85px;
	z-index: 2;
	background-color: #008BE8;
	background-position: center center;
	text-align: center;
	vertical-align: middle;	border-radius:5px;
	
	
}

#apDiv20 a{
	font-family: Georgia, "Times New Roman", sans-serif;
	font-size: 20px;
	font-weight: 100;
	text-transform: capitalize;
	color: seashell;
	text-decoration: none;
	text-align: center;
	line-height: 1cm;
	background-position: center center;
	float: left;
	padding: 5px;
	-webkit-transition: all 750ms ease-in-out 100ms;
	-moz-transition: all 750ms ease-in-out 100ms;
	-ms-transition: all 750ms ease-in-out 100ms;
	-o-transition: all 750ms ease-in-out 100ms;
	transition: all 750ms ease-in-out 100ms;
		border-radius:5px;
}
#apDiv20 a:hover{background: #FFFFB7; color:#111}
#apDiv21{
	position: absolute;
	left: 104px;
	top: 550px;
	width: 162px;
	height: 85px;
	z-index: 2;
	background-color: #008BE8;
	background-position: center center;
	text-align: center;
	vertical-align: middle;	border-radius:5px;
	
	
}

#apDiv21 a{
	font-family: Georgia, "Times New Roman", sans-serif;
	font-size: 20px;
	font-weight: 100;
	text-transform: capitalize;
	color: seashell;
	text-decoration: none;
	text-align: center;
	line-height: 1cm;
	background-position: center center;
	float: left;
	padding: 5px;
	-webkit-transition: all 750ms ease-in-out 100ms;
	-moz-transition: all 750ms ease-in-out 100ms;
	-ms-transition: all 750ms ease-in-out 100ms;
	-o-transition: all 750ms ease-in-out 100ms;
	transition: all 750ms ease-in-out 100ms;
		border-radius:5px;
}
#apDiv21 a:hover{background: #FFFFB7; color:#111}
#apDiv22{
	position: absolute;
	left: 104px;
	top: 650px;
	width: 162px;
	height: 85px;
	z-index: 2;
	background-color: #008BE8;
	background-position: center center;
	text-align: center;
	vertical-align: middle;	border-radius:5px;
	
	
}

#apDiv22 a{
	font-family: Georgia, "Times New Roman", sans-serif;
	font-size: 20px;
	font-weight: 100;
	text-transform: capitalize;
	color: seashell;
	text-decoration: none;
	text-align: center;
	line-height: 1cm;
	background-position: center center;
	float: left;
	padding: 5px;
	-webkit-transition: all 750ms ease-in-out 100ms;
	-moz-transition: all 750ms ease-in-out 100ms;
	-ms-transition: all 750ms ease-in-out 100ms;
	-o-transition: all 750ms ease-in-out 100ms;
	transition: all 750ms ease-in-out 100ms;
		border-radius:5px;
}
#apDiv22 a:hover{background: #FFFFB7; color:#111}

#apDiv11 {
	position: absolute;
	left: 190px;
	top: 863px;
	width: 526px;
	height: 123px;
	z-index: 6;
}
</style>
</head>

<body>


<div id="apDiv1"></div>

<div id="apDiv6"><a href="myaccount.php">My account</a></div>
<div id="apDiv8"><a 
href="logout.php">logout</a></div>
<div id="apDiv9">User : <?php
if (isset($_SESSION['email'])){
$email = $_SESSION['email'];
echo  $email;
}

?> </div>

<div id="apDiv4"><a href="myaccount.php">upcoming events</a></div>

<div id="apDiv20"><a href="requirementboard.php">requirement statistics</a></div>
<div id="apDiv21"><a href="viewprofile.php">my profile details</a></div>
<div id="apDiv22"><a href="helpandfeedback.php">help and feedback</a></div>

<div id="apDiv11"></div>
</body>
<html>
