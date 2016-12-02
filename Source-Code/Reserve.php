<!--Web Development 2 Assingment-->
<!--Author: Gabriel Grimberg.-->
<!--Website: Library Website-->
<!--Page: Reserve-->

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	    <!--Linking to CSS-->
		<link type="text/css" rel="stylesheet" href="Main-Style.css"/>
		<title>Reserve</title>
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
	
	<!-- Start of PHP -->
	<?php
	
		//Check to see if the user entered something.
		if($_SERVER['REQUEST_METHOD'] != 'POST' || empty($_POST)) 
		{
			echo "<br>";
			echo "<div class='Form2'><h2>You must enter an ISBN code into the form.</h2></div>";
			echo "<br>";
			echo "<div class='Form'><h3><a href='Reservation.php'>Try again</a> <br></h3></div>";
			echo "<div class='Form'><h3><a href='LoggedOut.php'>Want to log out?</a> <br></h3></div>";
			echo "<div class=\"clearfix\"></div>";
			echo "<div  class=\"footer\">";
			echo "<div class=\"container\">";
			echo "<p>Copyright. 2016 All rights reserved.</p>";
			echo "</div>";
			echo "</div>";
			exit;
		}
		
			
		//Check if session is good.
		session_start();
		

		if(!isset($_SESSION['Username'])) 
		{
			echo "<br>";
			echo "<div class='Form2'><h2>You're not logged in, please log in.</h2></div>";
			echo "<br>";
			echo "<div class='Form'><h3><a href='Login.php'>Log into your account</a> <br></h3></div>";
			echo "<div class=\"clearfix\"></div>";
			echo "<div  class=\"footer\">";
	        echo "<div class=\"container\">";
			echo "<p>Copyright. 2016 All rights reserved.</p>";
			echo "</div>";
			echo "</div>";
			exit;
		}

		
		require('DatabaseConnect.php');
		
		//Check if book exists.
		$Query = $Connection->Query(sprintf("SELECT * 
										FROM BookTable 
										WHERE ISBN = '%s'", 
										$Connection->escape_string($_POST['ISBN'])
									 )
							 );
		
		//Check if book isn't reserved.
		$Query = $Connection->Query(sprintf("SELECT * 
										FROM BookTable
										WHERE ISBN = '%s'
										AND Reserved = 'N'",
										$Connection->escape_string($_POST['ISBN'])
									 )
							 );
				
		if ($Query->num_rows == 0) 
		{
			echo "<br>";
			echo "<div class='Form2'><h2>The book is already reserved by a member, try another book.</h2></div>";
			echo "<div class='Form2'><h2>Or the ISBN code you have entered didn't match.</h2></div>";
			echo "<br>";
			
			echo "<div class='Form'><h3><a href='Reservation.php'>Try again?</a> <br></h3></div>";
			echo "<div class='Form'><h3><a href='LoggedOut.php'>Want to log out?</a> <br></h3></div>";
			
			echo "<div class=\"clearfix\"></div>";
			echo "<div  class=\"footer\">";
			echo "<div class=\"container\">";
			echo "<p>Copyright. 2016 All rights reserved.</p>";
			echo "</div>";
			echo "</div>";
			exit;
		}
		
		$Query = $Connection->Query(sprintf("UPDATE BookTable 
										SET Reserved = 'Y' 
										WHERE ISBN = '%s'",
										$Connection->escape_string($_POST['ISBN'])
									 )
							 );
							 
		if($Query) 
		{
			echo "<br>";
			echo "<div class='Form2'><h2>The book you have selected was reserved successfully.</h2></div>";
			echo "<br><br>";
			
			echo "<div class='Form'><h3><a href='Login.php'>View your account</a> <br></h3></div>";
			echo "<div class='Form'><h3><a href='LoggedOut.php'>Want to log out?</a> <br></h3></div>";
		} 
		
		//Record the reservation made.
		$Query = $Connection->Query(sprintf("SELECT ISBN 
										From BookTable 
										WHERE ISBN = '%s'",
										$Connection->escape_string($_POST['ISBN'])
									 )
							 );
							 
		$Result = $Query->fetch_assoc();
		
		//Record the reservation made.
		$Query = $Connection->Query(sprintf("INSERT INTO BookReserve(ISBN, Username, ReservedDate) 
										VALUES ('%s', '%s', '%s')", $Result['ISBN'], $_SESSION['Username'],date('Y-m-d H:i:s')
									 )
							 );
	?>
	
    <!-- Start of footer -->
	<div class="clearfix"></div>
	<div  class="footer">
		<div class="container">
			<p>Copyright. 2016 All rights reserved.</p>
		</div>
	</div>
	
</body>
</html>