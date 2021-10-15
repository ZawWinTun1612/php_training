<?php
 if ( isset( $_GET['submit'] ) ) {  
     $dob = $_GET['dob']; 
     $dob = new DateTime($dob);
     $currDate=new DateTime();
     $age=$currDate->diff($dob)->y;
     echo 'Your age is '.$age;
     exit;
}
?>