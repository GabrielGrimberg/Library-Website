<!--Web Development 2 Assingment-->
<!--Author: Gabriel Grimberg.-->
<!--Website: Library Website-->
<!--Page: Register-->

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	    <!--Linking to CSS-->
		<link type="text/css" rel="stylesheet" href="Main-Style.css"/>
		<title>Register</title>
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
				<li><a href="LoggedOut.php">Log Out</a></li>
			</ul>
			</div>
		</div>
	</div>
	
	<div class="backgroundfix3">
		<div class="container">  
			<div class="main">
				<h1>Registration</h1>
				<p class="btn-primary">You have now logged out, click on the navigator to log back in or go back to main page.</p>
			</div>
		</div>
	</div>
				
	<!-- PHP to go here -->
	<?php
		
		//Include to connect to database.
		require('DatabaseConnect.php');
		
		//Include this PHP file to secure all pages.
		//include("LoggedSeason.php"); 
		
	    // If form submitted, insert values into the database.
	    if (isset($_REQUEST['Username']))
		{
			//Escapes special characters in a string.
			$Username = mysqli_real_escape_string($Connection,$_REQUEST["Username"]);
						
			//Escapes special characters in a string.
			$Password = mysqli_real_escape_string($Connection,$_REQUEST["Password"]);
			
			//Escapes special characters in a string.
			$FirstName = mysqli_real_escape_string($Connection,$_REQUEST["FirstName"]);

			//Escapes special characters in a string.
			$Surname = mysqli_real_escape_string($Connection,$_REQUEST["Surname"]);
			

			//Escapes special characters in a string.
			$AddressLine1 = mysqli_real_escape_string($Connection,$_REQUEST["AddressLine1"]);
			
			//Escapes special characters in a string.
			$AddressLine2 = mysqli_real_escape_string($Connection,$_REQUEST["AddressLine2"]);
			
			//Escapes special characters in a string.
			$City = mysqli_real_escape_string($Connection,$_REQUEST["City"]);
			
			//Escapes special characters in a string.
			$Telephone = mysqli_real_escape_string($Connection,$_REQUEST["Telephone"]);

			//Escapes special characters in a string.
			$Mobile = mysqli_real_escape_string($Connection,$_REQUEST["Mobile"]);

	        $Query = "INSERT INTO UsersTable (Username, Password, FirstName, Surname, Addressline1, AddressLine2, City, Telephone, Mobile) VALUES ('$Username', '".md5($Password)."', '$FirstName', '$Surname', '$AddressLine1', '$AddressLine2', '$City', '$Telephone', '$Mobile')";
	        $Result = mysqli_query($Connection,$Query);
	        if($Result)
			{
	            echo "<div class='form'><h3>You have registered, please log in.</h3><br/>Click here to <a href='Login.php'>Login</a></div>";
	        }
			else
			{
				echo "<div class='form'><h3>Incorrect Details, please try again.</h3><br/>Click here to <a href='Register.php'>Login</a></div>";
			}
		}
			
	?>
		<div class="Form">
		<h1>Registration</h1>
			<form name="Registration" action="" method="post">
				<input type="text" name="Username" placeholder="Username" required />
				<input type="password" name="Password" placeholder="Password" required />
				<input type="text" name="FirstName" placeholder="First Name" required />
				<input type="text" name="Surname" placeholder="Surname" required />
				<input type="text" name="AddressLine1" placeholder="Address Line 1" required />
				<input type="text" name="AddressLine2" placeholder="Address Line 2" required />
				<input type="text" name="City" placeholder="City" required />
				<input type="text" name="Telephone" placeholder="Telephone" required />
				<input type="text" name="Mobile" placeholder="Mobile" required />
				<input type="submit" name="Submit" value="Register" />
			</form>
		</div>
			  
    <!--Start of footer-->
	<div class="clearfix"></div>
	<div  class="footer">
		<div class="container">
			<p>Copyright. 2016 All rights reserved.</p>
		</div>
	</div>
	
</body>

</html>