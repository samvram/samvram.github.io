<?php
   if(isset($_POST['submit'])){
				
	   $error = '';
	    if(!isset($_POST['firstname']) || $_POST['firstname'] ==''){
			$error .= "<p class='error'>Please enter your firstname. </p>";
		}
		if(!isset($_POST['username']) || $_POST['username'] ==''){
			$error .= "<p class='error'>Please enter a username.</p>";
		} 
		if(!isset($_POST['email']) || $_POST['email'] ==''){
			$error .= "<p class='error'>Please enter an valid email id. </p>";
		} 
		if(!isset($_POST['password']) || $_POST['password'] ==''){
			$error .= "<p class='error'>Please enter a password. </p>";
		} 
		if(strlen($_POST['password'])<= 8){
			$error .= "<p class='error'>Password should contain atleast 8 characters. </p>";
		}
		if(!isset($_POST['confirm_password']) || $_POST['confirm_password'] =='' ){
			$error .= "<p class='error'>Please confirm the password. </p>";
		} 
		if($_POST['password'] != $_POST['confirm_password']){
			 $error .= "<p class='error'>Confirm Password is not correctly matched with password<br/> Enter the correct password.</p>";
		}
		if(isset($_POST['phone']) && $_POST['phone'] !='' && !is_numeric($_POST['phone'])){
			$error .= "<p class='error'>Invalid Phonenumber.</p>";
		}
		//checking for unique username
		   $query1 = "SELECT * FROM `user` WHERE username = '".$_POST['username']."'";
		   $result = mysqli_query($connect , $query1);
		   
		   if(mysqli_num_rows($result) !=0){
			   $error .= "Username already exists";
		   }
			   
		//end
		
		if(!empty($error)){
			echo $error;
		}else{
			 $username = trim($_POST['username']);
			  $password = ($_POST['password']);
			  $email = trim($_POST['email']);
			  $firstname = trim($_POST['firstname']);
			  $lastname = trim($_POST['lastname']);
			  $hash_password = sha1($password);
			  $phone = ($_POST['phone']);
			  $gender = ($_POST['gender']);
			  
			  $query = "INSERT INTO `user` (`id`, `firstname`, `lastname`, `username`, `hash_password`, `email`,`phone`,`gender`) VALUES (NULL, '".$firstname."', '".$lastname."','".$username."', '".$hash_password."', '".$email."', '".$phone."', '".$gender."')";
			  
			  $user_detail = mysqli_query($connect,$query);
			 if($user_detail){
				 /* $to = $email;
				  $subject = "Signup detail";
				  $message = "Congratulation,\n";
				  $message .= "Your username is <strong>".$username."</strong>";
				  $message .= "Your Password is <strong>".$password."</strong>";
				 
				  $header = "dibyaranjan.avanti@gmail.com";
				 if (mail($to,$subject,$message,$header)){
					  echo 'mail sent';
				 }else{
					 echo "not sent";
				 }*/
				  redirect_to("login.php?signup=1");
				
			 }else{
				  echo "signup failed ".mysqli_error();
			  }
			  
			  if(isset($connect))mysqli_close($connect);
			}
   }

?>