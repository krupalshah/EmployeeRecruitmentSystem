<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>authorization</title>
<link rel="stylesheet" href="main.css" type="text/css" />
<style type="text/css">
#fsubmit,#fsubmit2
{padding: 5px;
border-radius: 5px;
text-decoration: none;
width: 75px;
display: inline-block;
color: #FFF; background: #36F
}
#apDiv4 {
	position: absolute;
	left: 412px;
	top: 265px;
	width: 541px;
	height: 230px;
	z-index: 6;
}
#apDiv4 h2 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 24px;
	font-weight: 100;
	color: #FFBB77;
	text-align: left;
}
#apDiv4 p {
	font-size: 20px;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight: 100;
	text-align: justify;
	color: #FFFFC6;
	margin-left: 40px;
}
#apDiv9 {
	position: absolute;
	left: 410px;
	top: 495px;
	width: 545px;
	height: 185px;
	z-index: 7;
	border: 2px none #FFFF93;
	border-radius: 5px;
	background-color: #FFFFCA;
}
#apDiv9 #fpassword #loginform table tr td label {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 20px;
	font-weight: 100;
	color: seashell;
}
#apDiv9 #f1 #loginform table tr td label {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 20px;
	font-weight: 100;
	color: #000;
	text-align: left;
}
#apDiv10 {
	position: absolute;
	left: 366px;
	top: 772px;
	width: 589px;
	height: 142px;
	z-index: 8;
}
#apDiv11 {
	position: absolute;
	left: 410px;
	top: 495px;
	width: 545px;
	height: 185px;
	z-index: 9;
	background-color: #FFFFCA;
	border-radius: 5px;
}
#f2 #apDiv11 #loginform table tr td label {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 18px;
	font-weight: 100;
	color: #000;
}
#f1 #apDiv9 #loginform table tr td label {
	font-size: 18px;
	font-weight: 100;
	color: #000;
}
#apDiv12 {
	position: absolute;
	left: 410px;
	top: 495px;
	width: 545px;
	height: 185px;
	z-index: 10;
}
#apDiv13 {
	position: absolute;
	left: 410px;
	top: 495px;
	width: 545px;
	height: 185px;
	z-index: 11;
}
#apDiv10 a {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 18px;
	font-weight: normal;
	text-transform: capitalize;
	color: seashell;
	background-position: center center;
	background-repeat: no-repeat;
	text-align: center;
	display: block;
}
#apDiv10 a:hover {
	color: #FF9B37;
}
</style>
<script src="auth.js" type="text/javascript"></script>
</head>
<body>
<div id="apDiv1"></div>
<div id="apDiv6"></div>
<div id="apDiv8"></div>
<div id="apDiv4">
  <p>
  <h2>Tell us what problem you are facing : </h2>
  </p>
  <p>
    <input name="frad" type="radio" id="frad1"/>
    I forgot my password.</p>
  <p>
    <input name="frad" type="radio" id="frad2"/>
    I have a problem with my mail address.</p>
</div>
<span id="f3">
<div id="apDiv12">
  <p>
  <h2>We have sent your password to your primary email address.</h2>
  </p>
  <p>
  <h2></h2>
  </p>
</div>
</span> <span id="f4">
<div id="apDiv13"> </div>
</span> <span id="f1">
<div id="apDiv9">
  <form id="forgotform" method="post" name="forgotform" action="authprocessing.php">
    <table height="100%" cellpadding="5" cellspacing="15" align="left">
      <tr>
        <td><label>Enter your primary email : </label></td>
        <td align="right"><input type="email" id="fpemail" name="fpemail" size="30" required="required" class="formfieldop" title="primary email"/></td>
      </tr>
      <tr><td colspan="2">&nbsp;</td></tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" id="fsubmit" name="fsubmit"/></td>
      </tr>
    </table>
  </form>
</div>
</span>
<div id="apDiv10"> <a href="login.php">Back to Login</a></div>
<span id="f2">
<div id="apDiv11">
  <form id="forgotform2" method="post" name="forgotform2" action="authprocessing.php">
    <table height="100%" cellpadding="5" cellspacing="15" align="left">
      <tr>
        <td><label>Enter your secondary email : </label></td>
        <td align="right"><input type="email" id="fsemail" name="fsemail" size="30" required="required" class="formfieldop" title="secondary email"/></td>
      </tr>
      <tr>
        <td align="right"><label>Enter your password : </label></td>
        <td><input type="password" id="fpassword" name="fpassword" required="required" title="password" class="formfieldop" size="30" /></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" id="fsubmit2" name="fsubmit2"/></td>
      </tr>
    </table>
  </form>
</div>
</span>
</body>
</html>