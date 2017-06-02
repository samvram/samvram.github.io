<!DOCTYPE html>
<html>
   <head>
      <title>User log in</title>
	  
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
      	.error
      	{
      		color: red;
      	}
      	.success
      	{
      		color: green;
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
	          <div class="contentTitle">Log In</div>
	            <div class="pageContent">
				   <div id="clear"></div>
				    <?php
				        if(isset($_GET['signup']) && $_GET['signup'] == 1){
				   		  echo "<p class=\"success\">You are successfully signed up. <br/>Login to your page</p>";
				   	  	}
				   		if(isset($_GET['login']) && $_GET['login']==0){
				   		  echo "<h4 class=\"error\">Username and Password combination is incorrect <br/>";
				   		  echo "Please enter the correct and valid username and password </h4>";
				   	  	}
				    ?>	
				    <form method="post" action="User_Detail.php" >
						<p>Username:&nbsp;&nbsp;&nbsp;<input type="text" name="username" placeholder="Enter Your User Name"></p>
					     <p>Password:&nbsp;&nbsp;&nbsp;<input type="password" name="password" placeholder="Enter Your Password"></p>
					     <div style="text-align: center;">
						 <input type="Submit" value="Log In"><br/>
						 <a id="lnk" href="signup.php">Create an account</a>
						 </div>
					</form>
				</div>
				<div id="footer"><div style="text-align: center;">
						 <a href="login.php"><button>Log in</button></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="signup.php"><button>Sign Up</button></a>
						 </div>
				</div>
			</div>
		</div> 
   </body>
</html>