<?php

 if ( isset( $_POST['submit'] ) ) {  
      $dob = $_POST['dob']; 
      $dob = new DateTime($dob);
      $currDate=new DateTime();
      $age=$currDate->diff($dob)->y;
      echo 'Your age is '.$age;
 }
?>
