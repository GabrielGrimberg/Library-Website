<!--Web Development 2 Assingment-->
<!--Author: Gabriel Grimberg.-->
<!--Website: Library Website-->
<!--Page: Unreserve PHP Part-->

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	    <!--Linking to CSS-->
		<link type="text/css" rel="stylesheet" href="Main-Style.css"/>
		<title>Search</title>
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
	
	<div class="backgroundfix4">
		<div class="container">  
			<div class="main">
				<h1>Unreserved</h1>
				<p class="btn-primary">Welcome to your profile page, here you can check the books you have reserved.</p>
			</div>
		</div>
	</div>
				
	<?php

		//Check if logged in.
		session_start();
									
		require('DatabaseConnect.php');

		$Query = $Connection->Query(sprintf("UPDATE BookTable 
											  SET Reserved = 'N' 
											  WHERE ISBN = '%s'", 
											  $Connection->escape_string($_POST['ISBN'])));
												
		$Query = $Connection->Query(sprintf("DELETE FROM BookReserve 
											  WHERE ISBN = '%s'", 
											  $Connection->escape_string($_POST['ISBN'])));
											
		echo "<br>";
		echo "<div class='Form2'><h2>Book has been unreserved if code was correct.</h2></div>";
		echo "<div class='Form2'><h2>Check your account if the book has been unreserved.</h2></div>";
		echo "<br>";
		
		echo "<div class='Form'><h3><a href='Login.php'>View your account</a> <br></h3></div>";
		echo "<div class='Form'><h3><a href='LoggedOut.php'>Want to log out?</a> <br></h3></div>";

	?>
	
    <!--Start of footer-->
	<br><br>
	
	<div class="clearfix"></div>
	<div  class="footer">
		<div class="container">
			<p>Copyright. 2016 All rights reserved.</p>
		</div>
	</div>
	
</body>
</html>