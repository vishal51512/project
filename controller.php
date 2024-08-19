<?php
include('../intership/config.php');


   
if(!empty($_POST))
 {
    $email = $_POST['email'];
  

    if( empty($email) ){
        echo'<h2>error</h2>';
    }else{
        
           $sql="INSERT INTO `data` (  `email`) VALUES (  '$email')";
            
           
        }
        
 }
    ?>