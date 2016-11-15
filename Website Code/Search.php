<!--Web Development 2 Assingment-->
<!--Author: Gabriel Grimberg.-->
<!--Website: Library Website-->
<!--Page: Search-->

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
				<li><a href="Register.php">Register</a></li>
				<li><a href="Login.php">Log In</a></li>
				<li><a href="LogoutButton.php">Log Out</a></li>
			</ul>
			</div>
		</div>
	</div>
	
	<div class="backgroundfix6">
		<div class="container">  
			<div class="main">
				<h1>Search</h1>
				<p class="btn-primary">Search for a book in the library, you may wish to reserve it if avaliable.</p>
			</div>
		</div>
	</div>
				
	<!-- PHP to go here -->
	<?php
	
		//Starting the season.
		//session_start();
		
		//Connection to database.
		require('DatabaseConnect.php');
		
		
	?>
	
	<!-- HTML Search Below This -->
	<div class="form">
	<h1 class="loginheader">Search For A Book</h1>
		<form action="" method="post" name="search">
			<input type="text" name="Search" placeholder="Search for a book..." required />
			<input type="submit" name="submit" value="Search" />
		</form>
					  
    <!--Start of footer-->
	<div class="clearfix"></div>
	<div  class="footer">
		<div class="container">
			<p>Copyright. 2016 All rights reserved.</p>
		</div>
	</div>
	
</body>
</html>