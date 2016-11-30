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
				<li><a href="Reservation.php">Reserve</a></li>
				<li><a href="Register.php">Register</a></li>
				<li><a href="Login.php">My Account</a></li>
			</ul>
			</div>
		</div>
	</div>
	
	<div class="backgroundfix3">
		<div class="container">  
			<div class="main">
				<h1>Registration</h1>
				<p class="btn-primary">Sign up to this library website to reserve books, an account is always good to have.</p>
			</div>
		</div>
	</div>
	

	<!-- PHP to go here -->
	<?php
		
		//Include to connect to database.
		require('DatabaseConnect.php');
		
		session_start();
		
		//Checking if user is already logged in.
		//If logged in then you can't make a new account.
		if(isset($_SESSION['Username'])) 
		{
			echo "<br>";
			echo "<div class='Form2'><h2>You're already logged in, log out if you wish to make a new account.</h2></div>";
			echo "<br>";
			echo "<div class='Form'><h3><a href='Login.php'>View your account</a> <br></h3></div>";
			echo "<div class='Form'><h3><a href='LoggedOut.php'>Want to log out?</a> <br></h3></div>";
			echo "<br><br>";
			
			//Not recommened but solves the missing footer problem.
			goto includeFooter;
		}
		
	    // If form submitted, insert values into the database.
	    if(isset($_REQUEST['Username']))
		{
			//Escapes special characters in a string.
			$Username = mysqli_real_escape_string($Connection,$_REQUEST["Username"]);
						
			//Escapes special characters in a string.
			$Password = mysqli_real_escape_string($Connection,$_REQUEST["Password"]);
			
			//Escapes special characters in a string.
			$RePassword = mysqli_real_escape_string($Connection,$_REQUEST["RePassword"]);
			
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
			
			//Validation For: Matching passwords which both have to match.
			if ($Password != $RePassword) 
			{
				echo "<div class='Form'><h3>The passwords don't match, please make sure you're typing it correctly.</h3><br/></div>";
				//Not wise but wiser to use than exit; as exit doesn't display the form again.
				goto SkipBackToForm;
			
			}
			
			//Validation For: Password which should be more than 6 characters long.
			if(strlen($Password) < 6)
			{
				echo "<div class='Form'><h3>Your password should be at least 6 characters long.</h3><br/></div>";
				
				//Not wise but wiser to use than exit; as exit doesn't display the form again.
				goto SkipBackToForm;
			}
			
			//Validation For: Telephone number must be digits not characters.
			if (!is_numeric($Telephone))
			{
				echo "<div class='Form'><h3>Your telephone must be numeric, it must only contain valid numbers.</h3><br/></div>";
				
				//Not wise but wiser to use than exit; as exit doesn't display the form again.
				goto SkipBackToForm;
			}
			
			//Validation For: Mobile number must be digits not characters.
			if (!is_numeric($Mobile) )
			{
				echo "<div class='Form'><h3>Your Mobile must be numeric, it must only contain valid numbers.</h3><br/></div>";
				
				//Not wise but wiser to use than exit; as exit doesn't display the form again.
				goto SkipBackToForm;
			}
			
			//Validation For: Mobile number must be 10 digits long.
			if (strlen($Mobile) != 10)
			{
				echo "<div class='Form'><h3>Your mobile number should be 10 digits long.</h3><br/></div>";
				
				//Not wise but wiser to use than exit; as exit doesn't display the form again.
				goto SkipBackToForm;
			}
			
			//If no error occurs, put in the values into the UserTable in MySQL.
			//Notice the passwords entered will not be displayed in the SQL table.
			//They are salted so no one can see what they are.
			//Prevents hackers from getting the password if they have the server.
	        $Query = "INSERT INTO UsersTable (Username, Password, FirstName, Surname, Addressline1, AddressLine2, City, Telephone, Mobile) 
					   VALUES ('$Username', '".md5($Password)."', '$FirstName', '$Surname',
							   '$AddressLine1', '$AddressLine2', '$City', '$Telephone', '$Mobile')";
			
			//If all goes well and results have been entered, then account made.				
	        $Result = mysqli_query($Connection,$Query);
	        if($Result)
			{
				echo "<br>";
				
	            echo "<div class='Form'><h3>You have registered, please log in.</h3><br/>Click here to <a href='Login.php'>Login</a></div>";
	
				echo "<br><br>";
				
				//Not recommened but solves the missing footer problem.
				goto includeFooter;
	        }
	
			//If username already made then give an error message and don't allow to continue.
			else
			{
				echo "<div class='Form'><h3>Username already exists, please try another username.</h3><br/></div>";
			}
		}
		
		//If Any Error Happens pull the form again to try again.
		SkipBackToForm:
			
	?>
		<div class="Form">
		<h1>Fill in the form below</h1>
			<form name="Registration" action="" method="post">
				<input type="text" name="Username" placeholder="Username" required />
				<input type="password" name="Password" placeholder="Password" required />
				<input type="password" name="RePassword" placeholder="Confirm Your Password" required />
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
	<?php includeFooter: ?>
	<div class="clearfix"></div>
	<div  class="footer">
		<div class="container">
			<p>Copyright. 2016 All rights reserved.</p>
		</div>
	</div>
</body>

</html>