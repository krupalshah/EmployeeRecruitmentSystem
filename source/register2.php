<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>register step2</title>
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
<script src="register2.js" type="text/javascript"></script>
</head>

<body>
<div id="apDiv1"></div>


<div id="apDiv7">
  <form id="registerform2" method="post" name="registerform2" action="registerform2.php">
    <fieldset>
      <legend>
      <h2>Academic details</h2>
      </legend>
      <table width="100%" height="251" align="center" cellpadding="5" cellspacing="15">
        <tr>
          <td align="right"><label title="This field is required">University * : </label></td>
          <td><input type="text" pattern=".{3,}"  title="3 characters minimum, write full name" id="university" name="university" size="40" required="required" class="formfield" /></td>
        </tr>
        <tr>
          <td align="right"><label title="This field is required">Institute * : </label></td>
          <td><input type="text" id="institute" name="institute" size="40" required="required" pattern=".{3,}"  title="3 characters minimum, write full name" class="formfield" /></td>
        </tr>
        <tr>
          <td align="right"><label title="This field is required">Branch * : </label></td>
          <td><select id="branch" name="branch" required="required" title="branch" class="formfield3"/>
            
            <option value=> - - select - -</option>
            <option value="Informantion Technology">Information Technology</option>
            <option value="Computer science">Computer Science</option>
            <option value="management">Management</option>
            </select></td>
        </tr>
        <tr>
          <td align="right"><label title="This field is required">Degree * : </label></td>
          <td><select id="degree" name="degree" required="required" title="degree" class="formfield3"/>
            
            <option value=> - - select - -</option>
            <option value="B.E/B.Tech">B.E/B.Tech</option>
            <option value="M.E/M.Tech">M.E/M.Tech</option>
            <option value="B.B.A">B.B.A</option>
            <option value="M.B.A">M.B.A</option>
            </select>
            &nbsp;&nbsp;&nbsp;
            <input type="radio"name="rad1" id="pursuing" required="required" value="pursuing" >
            &nbsp;Pursuing&nbsp;
            <input type="radio" name="rad1" id="completed" value="completed" required="required" />
            &nbsp;Completed</td>
        </tr>
        <tr>
          <td align="right"><label title="This field is required">Avarage CPI * : </label></td>
          <td><input type="number" min="4.00" max="9.99"  id="cpi" name="cpi" required="required" title="CPI" class="formfield3" step="0.01"  />
            <span id="semester1"> &nbsp;&nbsp;&nbsp;upto&nbsp;
            <input type="number" id="semester"  name="semester" max="8" min="2" maxlength="2" class="formfield3" title="semester"/>
            th semester</span></td>
        </tr>
        <tr>
          <td align="right"><label title="Toatl Experience"><span id="semester2">Experience &nbsp;: </span></label></td>
          <td><span id="semester3">
            <input type="number" min="0" max="30" id="experience" name="experience"title="experience" class="formfield" />
            &nbsp;years</span></td>
        </tr>
      </table>
    </fieldset>
    <table width="100%" cellpadding="5" cellspacing="15">
      <tr>
        <td align="center" valign="top"><input type="image" id="registersubmit3" name="registersubmit3" src="images/arrow-left.png" onclick="location='register.php'" title="previous"/>
          &nbsp;&nbsp;Step 2&nbsp;&nbsp;
          <input type="image" id="registersubmit4" name="registersubmit4" src="images/arrow-right.png"  title="next"/></td>
      </tr>
    </table>
  </form>
</div>
<div id="apDiv4">
  <h2>Step 2 : Your Academic Details</h2>
</div>
</body>
</html>
