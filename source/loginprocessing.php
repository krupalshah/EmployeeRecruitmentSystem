<?php  
session_start();
 require('connect.php');


$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM `account` WHERE pemail='$email' and password='$password'";
 
$result1 = mysql_query($query) or die(mysql_error());
$usercount = mysql_num_rows($result1);

$query = "SELECT * FROM `admin` WHERE email='$email' and password='$password'";
 
$result2 = mysql_query($query) or die(mysql_error());
$admincount = mysql_num_rows($result2);


 if ($usercount == 1) {
$_SESSION['email'] = $email;
	
   $url = "myaccount.php";
        header("Location: " . $url);
        exit();

    
    }
else if ($admincount == 1){
$_SESSION['email'] = $email;
	
 $url = "adminaccount.php";
        header("Location: " . $url);
        exit();
		}


	 
        


else{

echo "Invalid Details.";
echo "<a href='login.php'>Back to Login</a>";
}
