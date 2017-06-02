<!DOCTYPE html>
<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>

<html>
   <head>
      <title>User signup</title>
      <link rel="stylesheet" type="text/css" href="bluebliss.css" />
      <style type="text/css">
      	#bluebox, p , .error , .contentTitle , h4 , #button, #lnk
      	{
      		text-align: center;
      	}
      	#lnk:hover
      	{
      		text-decoration: underline;
      		color: blue;
      	}
      </style>
   </head>
   <body>
   <div id="mainContentArea">
	<div id="contentBox">
        <div id="title">AeroProject</div>
        
        <div id="linkGroup">
            <div class="link"><a href="index.html">Home</a></div>
            <div class="link"><a href="about.html">About</a></div>
            <div class="link"><a href="presently.html">Presently</a></div>
            <div class="link"><a href="contact.html">Contact</a></div>
        </div>
        
        <div id="blueBox"> 
          <div id="header"></div>
	          <div class="contentTitle">Sign Up</div>
	            <div class="pageContent">
				   <?php include('signup_root.php'); ?>
				      <form method="post" enctype="multipart/form-data">
					     <h4> Field with (<span class="star" >*</span>) are mandatory</h4>
						 
						 <span class="error" id="error_first"></span>
					     <p class="label">First Name:<input type="text" name="firstname" id="firstname" placeholder="Enter your Firstname" value=<?php if(isset($_POST['firstname']))echo $_POST['firstname'];?>><span class="star">*</span></p>
						 
						 <span class="error" id="error_last"></span>
						 <p class="label">Last Name:<input type="text" name="lastname" id="lastname" placeholder="Enter your Lastname" value=<?php if(isset($_POST['lastname']))echo $_POST['lastname'];?>></p>
						 
						 <span class="error" id="error_user"></span>
					     <p class="label">Username:<input type="text" name="username" id="username" placeholder="Enter a User Name" value=<?php if(isset($_POST['username']))echo $_POST['username'];?>><span class="star">*</span></p>
						 
						 <span class="error" id="error_email"></span>
						 <p class="label">Email:<input type="email" name="email" id="email" placeholder="Enter your Email" value=<?php if(isset($_POST['email']))echo $_POST['email'];?>><span class="star">*</span> </p>
						 
						 <span class="error" id="error_pass"></span>
					     <p class="label">Password:<input type="password" name="password" id="password" placeholder="Enter Your Password"><span class="star">*</span></p>
						 
						 <span class="error" id="error_confirm_pass"></span>
						 <p class="label">Confirm Password:<input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Your Password"><span class="star">*</span></p>
						 
						 <p class="label">Phone Number:<input type="text" name="phone" id="phone" placeholder="Enter your phone number" value=<?php if(isset($_POST['phone'])) echo $_POST['phone'];?>></p>
						 <p class="label">Gender:<input type="radio" name="gender" value="Male" checked>Male
						  <input type="radio" name="gender" value="Female">Female
						 </p>
						 <div style="text-align: center;">
						 <input id= "button" type="Submit" name="submit" value="Create user">
						 </div>
					  </form>
					  	<div style="text-align: center;">
					    <a id="lnk" href="login.php">Back to login page</a>
					    </div>
				</div>
				<div id="footer"><div style="text-align: center;">
						 <a href="login.php"><button>Log in</button></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="signup.php"><button>Sign Up</button></a>
						 </div>
				</div>
			</div>
		</div>
	</div> 
   </body>
</html>
