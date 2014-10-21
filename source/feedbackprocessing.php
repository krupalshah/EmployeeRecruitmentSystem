<?php  


session_start();
if (isset($_SESSION['email'])){
$email = $_SESSION['email'];
}
 require('connect.php');
 $query = "SELECT * FROM account WHERE account.pemail='$email'";
	
	$result=mysql_query($query);
	
	    $row=mysql_fetch_array($result);
	
		  $userid = $row['userid'];
		   $user = $row['pemail'];
		
		  $feedback=$_POST['feedback'];

 
  
		$query = "INSERT INTO `feedback` (userid,user,feedback) VALUES ('$userid', '$user', '$feedback')";
        $result = mysql_query($query);
        if($result){
	
       echo'feedback successfully submitted'."<br>"."<br>"."<a href='helpandfeedback.php'>Go Back To Account</a>";
			
        }
		else
		{
			echo'Database error';
		}
		
  
	
    ?>