<?php
   function redirect_to($link){
	   header("Location:$link");
	   exit;
   }
?>