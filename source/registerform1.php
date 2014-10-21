<?php
    require('connect.php');
  
        
        $firstname = $_POST['firstname'];
		 $middlename = $_POST['middlename'];
		  $lastname = $_POST['lastname'];
		   $gender = $_POST['gender'];
		    $birthdate = $_POST['birthdate'];
			
	$state = $_POST['state'];
		$statespecify = $_POST['statespecify'];
		$city = $_POST['city'];
		$cityspecify = $_POST['cityspecify'];
      
  
		  $query = "INSERT INTO `personal` (firstname, middlename,lastname,gender,birthdate,state,statespecify,city,cityspecify) VALUES ('$firstname', '$middlename', '$lastname', '$gender', '$birthdate', '$state', '$statespecify', '$city', '$cityspecify')";
        $result = mysql_query($query);
        if($result){
       $url = "register2.php";
        header("Location: " . $url);
        exit();
			
        }
		
  
	
    ?>