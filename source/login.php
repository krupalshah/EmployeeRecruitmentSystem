<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" content="creative web developers recruitment system" />
<title>login</title>
<link rel="stylesheet" href="main.css" type="text/css" />
<style type="text/css">
#apDiv7 {
	position: absolute;
	left: 418px;
	top: 234px;
	width: 533px;
	height: 350px;
	z-index: 6;
	color: seashell;
}
#apDiv7 #loginform fieldset table tr td pre {
	font-size: 18px;
}
#apDiv7 #loginform fieldset table tr td label {
	font-size: 18px;
}
#apDiv7 #loginform fieldset table tr td a {
	font-size: 14px;
}
#apDiv7 #loginform fieldset table tr td {
	font-size: 16px;
	font-family: Georgia, "Times New Roman", Times, serif;
}
#apDiv7 #loginform fieldset table tr td a {
	font-size: 14px;
	color: seashell;
}
#apDiv7 #loginform fieldset table tr td a:hover {
	font-size: 14px;
	color: #FF9B37;
}
#apDiv4 {
	position: absolute;
	left: 444px;
	top: 628px;
	width: 535px;
	height: 159px;
	z-index: 7;
}
</style>
</head>

<body>
<div id="apDiv1"></div>


<div id="apDiv7">
  <form id="loginform" method="post" name="loginform" action="loginprocessing.php">
    <fieldset>
      <legend>
      <h2>Login</h2>
      </legend>
      <table width="100%" height="251" align="center" cellpadding="5" cellspacing="15">
        <tr>
          <td align="right"><label>Email : </label></td>
          <td><input type="email" id="email" name="email" size="30" required="required" class="formfield" title="Email"/></td>
        </tr>
        <tr>
          <td align="right"><label>Password : </label></td>
          <td><input type="password" id="password" name="password" size="30" required="required" class="formfield" title="Password" autocomplete="off"/></td>
        </tr>
        <tr>
          <td colspan="2" align="center" valign="top"><input type="checkbox" id="logincheckbox" name="logincheckbox" checked="checked" style="margin-left:65px;"/> Remember me<a href="auth.php" style="margin-left: 25px; font-size: 16px;">Can't access?</a></td>
        </tr>
        <tr>
          <td height="60px" colspan="2" align="center"><input type="image" id="loginsubmit" name="loginsubmit" src="images/login-btn1.png"/></td>
        </tr>
        
        <tr>  <td colspan="2" align="center" style="font-size:18px">Not yet registered? <a href="register.php" style="font-size:18px;">Register now!</a></td>
        </tr>
      </table>
    </fieldset>
  </form>
</div>
<div id="apDiv4"></div>
</body>
</html>
