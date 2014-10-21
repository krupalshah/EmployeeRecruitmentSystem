<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>admin account</title>
<link rel="stylesheet" href="main.css" type="text/css" />
<style type="text/css">
#apDiv4 {
	position: absolute;
	left: 12px;
	top: 262px;
	width: 1320px;
	height: 639px;
	z-index: 2;
	border: thin none #09F;
}

#apDiv4 table tr td a {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 24px;
	font-style: normal;
	font-weight: 100;
	text-transform: capitalize;
	color: seashell;
	text-decoration: none;
	background-position: center center;
	text-align: center;
	vertical-align: middle;
	-webkit-transition: all 500ms ease-in-out 0s;
	-moz-transition: all 500ms ease-in-out 0s;
	-ms-transition: all 500ms ease-in-out 0s;
	-o-transition: all 500ms ease-in-out 0s;
	transition: all 500ms ease-in-out 0s;
}

#apDiv12 a {
	font-family: Georgia, "Times New Roman", sans-serif;
	font-size: 28px;
	font-weight: 100;
	color: seashell;
	text-decoration: none;
	background-position: center center;
	text-align: right;
	text-transform: capitalize;
}
#apDiv12 a:hover{color: #FFA346}
#apDiv8 h2 {
	font-family: Georgia, "Times New Roman", sans-serif;
	font-size: 28px;
	font-weight: 100;
	text-transform: capitalize;
	text-decoration: none;
	color: seashell;
	vertical-align: middle;
}
#apDiv4 table tr td {
	background-color: #09F;
	border: thin none #FFFFDF;
	border-radius: 15px;
	height: 30px;
	
}
#apDiv4 table tr td a:hover{
	color: #111;
	
}
#apDiv6 {
	position: absolute;
	left: 12px;
	top: 182px;
	width: 1320px;
	height: 30px;
	z-index: 3;
	font-family: Georgia, "Times New Roman", Times, serif;
	text-decoration: none;
}
#apDiv6 h2 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 20px;
	font-weight: 100;
	color: seashell;
	text-align: left;
	text-decoration: none;
}
#apDiv6 h2 a {
	font-family: Georgia, "Times New Roman", Times, serif;
	text-decoration: none;
	font-weight: 100;
	text-transform: capitalize;
	color: seashell;
	font-size: 20px;
}
#apDiv8 {
	position: absolute;
	left: 66px;
	top: 183px;
	width: 346px;
	height: 40px;
	z-index: 3;
}
#apDiv9 {
	position: absolute;
	left: 1194px;
	top: 192px;
	width: 128px;
	height: 49px;
	z-index: 4;
}
#apDiv10 {
	position: absolute;
	left: 1158px;
	top: 211px;
	width: 148px;
	height: 50px;
	z-index: 5;
	border: thin none #09F;
}
#apDiv4 table{border: #39F thin solid; border-radius:10px;}
#apDiv4 table tr td.odd{
	background-color: #09F;
	width: 60px;
}
#apDiv4 table tr td.even{
	background-color: #AB9950;
	width: 60px;
}
#apDiv4 table tr td.my1{
	background-color:#0C96B4 ;
	width: 60px;
}
#apDiv4 table tr td.my2{
	background-color: #6A6AD2;
	width: 60px;
}
#apDiv4 table tr td.my3{
	background-color:#F93 ;
	width: 60px;
}
#apDiv4 table tr td.my4{
	background-color: #57AE00;
	width: 60px;
}


#apDiv9 a {
	font-family: Georgia, "Times New Roman", sans-serif;
	font-size: 28px;
	font-weight: 100;
	text-transform: capitalize;
	color: seashell;
	background-position: center center;
	vertical-align: middle;
	text-align: right;
}
#apDiv15 {
	position: absolute;
	left: 503px;
	top: 216px;
	width: 540px;
	height: 49px;
	z-index: 5;
	font-family: Georgia, "Times New Roman", sans-serif;
	font-size: 24px;
	font-weight: 100;
	text-transform: none;
	color: seashell;
	text-decoration: none;
}

#apDiv11 {
	position: absolute;
	left: -2px;
	top: 956px;
	width: 1337px;
	height: 123px;
	z-index: 6;
}
#apDiv10 a {
	font-family: Georgia, "Times New Roman", sans-serif;
	font-size: 28px;
	font-weight: 100;
	color: seashell;
	text-decoration: none;
	background-position: center center;
	text-align: right;
	text-transform: capitalize;
}
#apDiv10 a:hover{color: #FFA346}
#apDiv12 {
	position: absolute;
	left: 91px;
	top: 216px;
	width: 258px;
	height: 33px;
	z-index: 7;
}
</style>
</style>
</head>

<body bgcolor="#333333">
<div id="apDiv1"></div>
<div id="apDiv4">
  <table width="90%" height="100%" align="center"  cellpadding="60px" cellspacing="50px">
    <tr>
      <td class="odd"><a href="updaterequirement.php"> Update Requirement Statistics.</a></td>
      <td class="even"><a href="updatedatabase.php">Update Candidate Database.</a></td>
    </tr>
    <tr>

      <td class="my1"><a href="scheduleexam.php">Schedule Exam Activities.</a></td>
      <td class="my2"><a href="sort.php">sort Candidates based on criteria.</a></td>
    </tr>
   <tr>
    
     
      <td class="my3"><a href="multiplemail.php">Send email to multiple candidates.</a></td>
      
      <td class="my4"><a href="seefeedback.php">see user feedback about system.</a></td>
    </tr>
    
  </table>
</div>
<div id="apDiv10">
  <a href="logout.php">logout</a></div>
<div id="apDiv11"></div>
<div id="apDiv12"><a href="adminaccount.php">My Account</a></div>

<div id="apDiv15">Admin : <?php
if (isset($_SESSION['email'])){
$email = $_SESSION['email'];
echo  $email;
}

?> </div>
</body>
<html>
