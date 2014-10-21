<?php
    require('connect.php');

   
        
        $post= $_POST['post'];
		 $resume = $_POST['resume'];
		  $pemail = $_POST['pemail'];
		   $semail = $_POST['semail'];
		    $password = $_POST['setpassword'];
			
	
		
      
  
		  $query = "INSERT INTO `account` (post,resume,pemail,semail,password) VALUES ('$post', '$resume', '$pemail', '$semail', '$password')";
        $result = mysql_query($query);
		
		
		
        if($result){
       $url = "finish.php";
        header("Location: " . $url);
        exit();
			
        }
		else
		{
            $msg = "Database error. May be you have already registered an account on this email address or it is something else...Sorry for it.";
			echo($msg);
			echo"<br>"."<br>";
			echo"<br>"."<br>"."TIP : Verify that you have not registered any account on mentioned primary or secondary email address."."<br>"."<br>";
			echo "<a href='login.php'>Go Back To Login</a>";
		 }
		
  
	
    ?>