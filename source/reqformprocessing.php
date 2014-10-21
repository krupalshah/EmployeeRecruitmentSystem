<?php  

 require('connect.php');


$postname = $_POST['postname'];
$vacancies = $_POST['vacancy'];

        $reqexperience= $_POST['reqexperience'];
		 $minsalary = $_POST['minsalary'];
		  $maxsalary = $_POST['maxsalary'];
		 

		
      
  
		  $query = "UPDATE requirement SET vacancies='$vacancies',reqexperience='$reqexperience',minsalary='$minsalary',maxsalary='$maxsalary' WHERE postname='$postname'";
        $result = mysql_query($query);
        if($result){
	
       echo'Requirement Statistics successfully updated'."<br>"."<br>"."<a href='adminaccount.php'>Go Back To Account</a>";
			
        }
		else
		{
			echo'Database error';
		}
		
  
	
    ?>