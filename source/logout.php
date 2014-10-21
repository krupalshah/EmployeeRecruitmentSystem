<?php



session_start();
if(isset($_SESSION['email'])){
  unset($_SESSION['email']);

}


    $url = "login.php";
        header("Location: " . $url);
        exit();


?>