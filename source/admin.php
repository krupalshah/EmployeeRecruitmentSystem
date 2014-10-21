<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin register</title>
<style>
.register-form{
	width: 500px;
	margin: 0 auto;
	text-align: center;
	padding: 10px;
	color: #fff;
	background :#396;
	border-radius: 10px;
	-webkit-border-radius:10px;
	-moz-border-radius:10px;
}

.register-form form input{padding: 5px;}
.register-form .btn{
padding: 5px;
border-radius: 5px;
text-decoration: none;
width: 100px;
display: inline-block;
color: #FFF; background: #36F }

.register-form .register{
border: 0;
width: 60px;
padding: 8px;
}
</style>

</head>
<div class="register-form">
<h1>Admin Register</h1>
<form action="adminregister.php" method="POST">
   
     
    <p><label>E-Mail :  &nbsp;&nbsp;&nbsp;&nbsp;</label>
     <input id="email" type="email" name="email" required  /></p>
  
     <p><label>Password : </label>
     <input id="password" type="password" name="password" required /></p><span id="message"></span>
  
   
    <input class="btn register" id="adminsubmit" type="submit" name="submit" value="Register" /><span id="message"></span>
    </form>
</div>
<body>
</body>
</html>
