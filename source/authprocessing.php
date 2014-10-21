<?php
include "connect.php"; 
  ini_set("SMTP","ssl://smtp.gmail.com");

ini_set("smtp_port","465");

if (isset($_POST['fsubmit'])){

    $fpemail = $_POST['fpemail'];

	
    $query1="select * from account where pemail='$fpemail'";
	
    $result1=mysql_query($query1)or die(mysql_error());
$count1 = mysql_num_rows($result1);
  
    if($count1==1)
    {
        $rows=mysql_fetch_array($result1);
        $password  =  $rows['password'];
     
        $to = $rows['pemail'];
     
        $from = "xyz technolabs";
        $headers = "From: $from\n";
        $body  =  " Here is your password  :".$password;
        $subject = "your account recovery";
      
     
  
     mail ( $to, $subject, $body, $headers );
    }
	 else {
		echo"no account found on this email". "<a href='auth.php'>Go Back</a>";
	}
}

if (isset($_POST['fsubmit2'])){
	
	$fsemail = $_POST['fsemail'];
	$fpassword = $_POST['fpassword'];
	$query2="SELECT * FROM `account` WHERE semail='$fsemail' and password='$fpassword'";;
	
	 $result2=mysql_query($query2)or die(mysql_error());
	 
$count2 = mysql_num_rows($result2);

 if($count2==1)
    {
        $rows=mysql_fetch_array($result2);
        $pemail  =  $rows['pemail'];
     
        $to = $rows['semail'];
     
        $from = "xyz technolabs";
        $headers = "From: $from\n";
        $body  =  " Here is your primary email  :".$pemail;
        $subject = "your account recovery";
      
     
  
     mail ( $to, $subject, $body, $headers );
    }
	 else {
		echo"no account found on this email". "<a href='auth.php'>Go Back</a>";
	}
}

?>
