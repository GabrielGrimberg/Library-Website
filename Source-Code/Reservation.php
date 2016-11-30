<!--Web Development 2 Assingment-->
<!--Author: Gabriel Grimberg.-->
<!--Website: Library Website-->
<!--Page: Reservation-->

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	    <!--Linking to CSS-->
		<link type="text/css" rel="stylesheet" href="Main-Style.css"/>
		<title>Reservation</title>
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
	
	<div class="backgroundfixReserve">
		<div class="container">  
			<div class="main">
				<h1>Reserve a Book</h1>
				<p class="btn-primary">The place where to reserve the book you want.</p>
			</div>
		</div>
	</div>
	
	<br>
	
	<div class="Form2">
	<h1 class="loginheader">Reserve A Book</h1>
		<form action="Reserve.php" method="POST">
		  ISBN Of The Book:<br>
	 	 <input type="text" name="ISBN" required><br>
	  
	 	 <input type="submit" value="Submit">
		</form>
	</div>
	
	<br><br>
					
    <!-- Start of footer -->
	<div class="clearfix"></div>
	<div  class="footer">
		<div class="container">
			<p>Copyright. 2016 All rights reserved.</p>
		</div>
	</div>
	
</body>
</html>