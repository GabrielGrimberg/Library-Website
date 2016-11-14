<!--Web Development 2 Assingment-->
<!--Author: Gabriel Grimberg.-->
<!--Website: Library Website-->
<!--Page: Log In-->

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	    <!--Linking to CSS-->
		<link type="text/css" rel="stylesheet" href="Main-Style.css"/>
		<title>Log In</title>
	</head>
	
<body>

	<div div class="header">
		<div class="container">
	
	<!--Creating the Navigator-->
			<div id="menu">
			<ul class="nav">
				<li><a href="Main-Page.html">Welcome</a></li>
				<li><a href="Search.php">Search</a></li>
				<li><a href="Register.php">Register</a></li>
				<li><a href="Login.php">Log In</a></li>
				<li><a href="LogoutButton.php">Log Out</a></li>
			</ul>
			</div>
		</div>
	</div>
	
	<div class="backgroundfix4">
		<div class="container">  
			<div class="main">
				<h1>Log In</h1>
				<p class="btn-primary">Log in to access your account, view books and search for books.</p>
			</div>
		</div>
	</div>
					
	<!-- PHP to go here -->
	<?php

		//Searching for Database to connect.
		require('DatabaseConnect.php');
		
		//Include this PHP file to secure all pages.
		//include("LoggedSeason.php"); 
		
		//Start the season.
		session_start();
		
	    // If form submitted, insert values into the database.
	    if(isset($_POST['Username']))
		{
			//Removes backslashes.
			$Username = stripslashes($_REQUEST['Username']);
			//Prevents SQL Injection.
			$Username = mysqli_real_escape_string($Connection,$Username);
			
			//Removes backslashes.
			$Password = stripslashes($_REQUEST['Password']);
			//Prevents SQL Injection.
			$Password = mysqli_real_escape_string($Connection, $Password);
			
			//Checking is user existing in the database or not
	        $Query = "SELECT * FROM UserTable WHERE Username = '$Username' and Password = '".md5($Password)."'";
	
			//See if result is matched.
			$Result = mysqli_query($Connection,$Query) or die(mysql_error());
			
			$Rows = mysqli_num_rows($Result);
			
	        if($Rows == 1)
			{
				$_SESSION['Username'] = $Username;
				
				//When logged in direct user to page.
				header("Location: Search.php");
	        }
			else
			{
				echo "<div class='form'><h3>Username/Password is incorrect.</h3><br/>Click here to try again:  <a href='Login.php'>Login</a></div>";
			}
	    }
	?>
	
	<div class="form">
	<h1 class="loginheader">Log In</h1>
		<form action="" method="post" name="login">
			<input type="text" name="Username" placeholder="Username" required />
			<input type="password" name="Password" placeholder="Password" required />
			<input name="submit" type="submit" value="Login" />
		</form>
		
	<p>Not registered yet? <a href='register.php'>Register Here</a></p>

	</div>
	
    <!-- Start of footer -->
	<div class="clearfix"></div>
	<div  class="footer">
		<div class="container">
			<p>Copyright. 2016 All rights reserved.</p>
		</div>
	</div>
	
</body>
</html>