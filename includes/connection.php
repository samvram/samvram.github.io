<?php require_once('constants.php'); ?>
<?php
  $connect = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
   if(!$connect){
	   echo "Server connection failed".mysqli_error();
   }
   $db = mysqli_select_db($connect,DB_NAME);
   if(!$db){
	   echo "Database selection failed".mysqli_error();
   }
?>