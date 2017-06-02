<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>
<?php session_start();?>
<html>
   <head>
      <title>User</title>	  
   </head>
   <body>
      <?php
	     $username = $_POST['username'];
		 $password = sha1($_POST['password']);
	  ?>
	  <?php
	    $query = "SELECT * FROM `user`";
		$query .= "WHERE username = '".$username."'";
		$query .= "AND hash_password = '".$password."'";
		$query .= "LIMIT 1";
		$result = mysqli_query($connect,$query);	
		if(!$result){
			echo "Query selection failed".mysqli_error();
		}
		$found_user = mysqli_fetch_array($result);
		$_SESSION['user_id'] = $found_user['id'];
		$_SESSION['user_name'] = $found_user['username'];
		
			if($found_user){
				$firstname = ucfirst($found_user['firstname']) ;
				$lastname =  ucfirst($found_user['lastname']) ;
				$gender = $found_user['gender'];
				$email = $found_user['email'];
				$print = '<div id ="about_user">';
						$print .= '<a href="logout.php">Log Out </a>';
						$print .= '<h4> Hi '.$firstname.',</h4>';
						$print .= '<p>
						 <strong>Fullname: </strong>'.$firstname.' '.$lastname;
						$print .= '<br/><strong>Email id:</strong>'.$email;
						$print .= '<br/><strong>Gender:</strong>'.$gender;
						$print .= '</p>';
						$print .= '<div id="clear"> </div>';
						$print .= '</div>';
						echo $print;
				}
						
			else{
				redirect_to("login.php?login=0");
			}
		
		
	  ?>
	  
   </body>
</html>
<?php
  mysqli_close($connect);
?>