<?php
    require('connect.php');
  
   
        
        $university= $_POST['university'];
		 $institute = $_POST['institute'];
		  $branch = $_POST['branch'];
		   $degree = $_POST['degree'];
		    $status = $_POST['rad1'];
			
	$cpi = $_POST['cpi'];
		$semester = $_POST['semester'];
		$experience = $_POST['experience'];
		
      
  
		  $query = "INSERT INTO `academic` (university,institute,branch,degree,status,cpi,semester,experience) VALUES ('$university', '$institute', '$branch', '$degree', '$status', '$cpi', '$semester', '$experience')";
        $result = mysql_query($query);
        if($result){
        $url = "register3.php";
        header("Location: " . $url);
        exit();
			
        }
	
    ?>