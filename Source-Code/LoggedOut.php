<!--Web Development 2 Assingment-->
<!--Author: Gabriel Grimberg.-->
<!--Website: Library Website-->
<!--Page: Logged Out-->

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	    <!--Linking to CSS-->
		<link type="text/css" rel="stylesheet" href="Main-Style.css"/>
		<title>Logged Out</title>
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
	
	
	<div class="backgroundfix5">
		<div class="container">  
			<div class="main">
				<h1>Logged Out</h1>
				<p class="btn-primary">You have now logged out, click on the navigator to log back in or go back to main page.</p>
			</div>
		</div>
	</div>
				
	<!-- PHP to go here -->
	<?php
	
		session_start();
		unset($_SESSION['Username']);
		session_destroy();
	?>

	<br><br>
	<div class="supporting2">
		<div class = "Form2"><h1>You Have Logged Out</h1></div><br>
		<div class='Form2'><h2>We miss you already! Made a mistake and need to log back in? Click below.</h2></div>
		<div class='Form'><h3><a href='Login.php'>Login</a> <br></h3></div>;
	</div>
	<br><br>

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