<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>update requirement statistics</title>
<link rel="stylesheet" href="main.css" type="text/css" />
<style type="text/css">
#apDiv15 {
	position: absolute;
	left: 503px;
	top: 216px;
	width: 507px;
	height: 49px;
	z-index: 5;
	font-family: Georgia, "Times New Roman", sans-serif;
	font-size: 24px;
	font-weight: 100;
	text-transform: none;
	color: seashell;
	text-decoration: none;
}
#asubmit
{padding: 5px;
border-radius: 5px;
text-decoration: none;
width: 75px;
display: inline-block;
color: #FFF; background: #36F
}

#apDiv9 {
	position: absolute;
	left: 334px;
	top: 300px;
	width: 725px;
	height: 400px;
	z-index: 7;
	border-radius: 5px;
	font-family: Georgia, "Times New Roman", sans-serif;
	font-size: 16px;
	color: seashell;

}
#apDiv9 #requirementform table{border: #39F medium solid; border-radius:10px;}

#apDiv9 #requirementform table tr td label {
	font-family: Georgia, "Times New Roman", sans-serif;
	font-size: 18px;
	text-transform: capitalize;
	color: seashell;
}
#apDiv9 #requirementform fieldset legend {
	font-family: Georgia, "Times New Roman", sans-serif;
	font-size: 20px;
	font-weight: 100;
	text-transform: capitalize;
	color: seashell;
}
#apDiv11 {
	position: absolute;
	left: 71px;
	top: 722px;
	width: 990px;
	height: 104px;
	z-index: 6;
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
<script src="auth.js" type="text/javascript"></script>
</head>
<body>
<div id="apDiv1"></div>

 
<div id="apDiv10">
  <a href="logout.php">logout</a></div>
<div id="apDiv11"></div>
<div id="apDiv12"><a href="adminaccount.php">My Account</a></div>

 
<div id="apDiv9">

  <form id="requirementform" method="post" name="requirementform" action="reqformprocessing.php">
 
   
    <table height="100%" cellpadding="5" cellspacing="15" align="left">
      <tr>
        <td align="right"><label>Select post : </label></td>
        <td><select id="postname" name="postname" required="required" class="formfield3" />
            
            <option value=""> - - select - -</option>
            <option value="Web Developer">Web Developer</option>
            <option value="Mobile App Developer">Mobile App Developer</option>
            <option value="DataBase Administrator">DataBase Administrator</option>
            <option value="Search Engine Optimizer">Search Engine Optimizer</option>
            <option value="Product Manager">Product Manager</option>
            <option value="HR Manager">HR Manager</option>
            </select></td>
      </tr>
      
      <tr>
        <td align="right"><label>Enter vacancies : </label></td>
        <td><input type="number" id="vacancy" name="vacancy" class="formfield"  min="0" max="1000" required="required"/></td>
      </tr>
      
      
       <tr>
        <td align="right"><label>Enter required experience </label>(years)&nbsp;:&nbsp; </td>
        <td><input type="number" id="reqexperience" name="reqexperience" class="formfield"  min="0" max="10" required="required"/></td>
      </tr>
      
      
      
       <tr>
        <td align="right"><label>Enter salary range </label>(per month)&nbsp;:&nbsp; </td>
        <td>From : <input type="number"  id="minsalary" name="minsalary" class="formfield" required="required" min="5000" max="250000" step="500" />&nbsp; &nbsp;To :<input type="number"  id="maxsalary" min="5000" max="500000"name="maxsalary" class="formfield" required="required" step="500"  /> </td>
      </tr>
     
      <tr>
        <td colspan="2" align="center"><input type="submit" id="asubmit" name="asubmit"/></td>
      </tr>
    </table>

  </form>
</div>

<div id="apDiv15">Admin : <?php
if (isset($_SESSION['email'])){
$email = $_SESSION['email'];
echo  $email;
}

?> </div>

</body>
</html>