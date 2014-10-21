<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>register step3</title>
<link rel="stylesheet" href="main.css" type="text/css" />
<style type="text/css">
#apDiv7 {
	position: absolute;
	left: 313px;
	top: 287px;
	width: 739px;
	height: 558px;
	z-index: 6;
	color: seashell;
	font-size: 18px;
	text-transform: capitalize;
}
#apDiv7 #registerform fieldset table tr td pre {
	font-size: 18px;
}
#apDiv7 #registerform fieldset table tr td label {
	font-size: 18px;
}
#apDiv7 #registerform fieldset table tr td a {
	font-size: 14px;
}
#apDiv7 #registerform fieldset table tr td {
	font-size: 16px;
	font-family: Georgia, "Times New Roman", Times, serif;
}
#apDiv7 #registerform fieldset table tr td a {
	font-size: 14px;
	color: seashell;
}
#apDiv7 #registerform fieldset table tr td a:hover {
	font-size: 14px;
	color: #7F99FF;
}
#apDiv7 #registerform fieldset h2 {
	font-size: 20px;
	font-weight: 100;
}
#apDiv4 {
	position: absolute;
	left: 341px;
	top: 216px;
	width: 673px;
	height: 31px;
	z-index: 7;
	color: seashell;
	font-size: 16px;
}
#apDiv4 h2 {
	font-weight: 100;
	text-align: center;
	font-size: 22px
}
#apDiv7 #registerform p {
	font-size: 24;
}
#apDiv7 #registerform table tr td {
	font-size: 20px;
	font-weight: lighter;
}
</style>
<script src="register3.js" type="text/javascript"></script>
</head>

<body>
<div id="apDiv1"></div>

 
<div id="apDiv7">
  <form id="registerform3" method="post" name="registerform3" action="registerform3.php">
    <fieldset>
      <legend>
      <h2>Account details</h2>
      </legend>
      <table width="100%" height="251" align="center" cellpadding="5" cellspacing="15">
        <tr>
          <td align="right"><label title="This field is required">Post you are applying for * : </label></td>
          <td><select id="post" name="post" required="required" title="post you are applying for" class="formfield3" />
            
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
          <td align="right"><label title="This field is required">Upload Resume * : </label></td>
          <td><input type="file" id="resume" name="resume"  required="required" title="Upload your resume" class="formfield3" accept="application/msword,application/pdf,application/rtf"/></td>
        </tr>
        <tr>
          <td align="right"><label title="This field is required">Primary Email * : </label></td>
          <td><input type="email" id="pemail" name="pemail" size="31" required="required" class="formfield" title="Primary Email" placeholder="will be used for login" /></td>
        </tr>
        <tr>
          <td align="right"><label>Secondary Email&nbsp;&nbsp; : </label></td>
          <td><input type="email" id="semail" name="semail" size="31" class="formfield" title="Secondary Email" placeholder="can be used for account recovery"/></td>
        </tr>
        <tr>
          <td align="right"><label title="This field is required">Set Password * : </label></td>
          <td><input type="password" autocomplete="off" id="setpassword" name="setpassword" size="20" required="required" class="formfield" title="Password must be 8 characters long."  onkeyup="my();"/>
            <span id="message1" class="message1"></span></td>
        </tr>
        <tr>
          <td align="right"><label title="This field is required">Confirm Password * : </label></td>
          <td><input type="password" autocomplete="off" id="confirm" name="confirm" size="20" required="required" class="formfield" title="Confirm your password." onkeyup="checkPass();" />
            <span id="message2" class="message2"></span></td>
        </tr>
      </table>
    </fieldset>
    <table width="100%" cellpadding="5" cellspacing="15">
      <tr>
        <td align="center" valign="top"><input type="image" id="registersubmit5" name="registersubmit5" src="images/arrow-left.png" onclick="location='register2.php'" title="previous"/>
          &nbsp;&nbsp;Step 3&nbsp;&nbsp;
          <input type="image" id="registersubmit6" name="registersubmit6" src="images/arrow-right.png"  title="next"/></td>
      </tr>
    </table>
  </form>
</div>
<div id="apDiv4">
  <h2>Step 3 : Your Account Details</h2>
</div>
</body>
</html>
