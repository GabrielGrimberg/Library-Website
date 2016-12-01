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
				<li><a href="Reservation.php">Reserve</a></li>
				<li><a href="Register.php">Register</a></li>
				<li><a href="Login.php">My Account</a></li>
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
				
	<!-- Search Form Start -->
	<br>
	<!-- CSS to style the form. -->
	<div class="Form2">
		<!-- CSS to style the header. -->
		<h1 class="loginheader">Search For A Book</h1>
		<p>Fill in one option at a time please.<p>
		
		<!-- Form Start. -->
		<form action="SearchResults.php" method="GET">
	 		Title of Book:<br><input type="text" name="TitleOfBook">
	  		<br><br>
	  		Author of Book:<br><input type="text" name="AuthorOfBook">
			<br><br>
			Category of Book:<br>
		
		<!-- PHP to go here -->
		<?php
		
			//Connecting to the database.
			require('DatabaseConnect.php');
			
			//Connecting to the Category Section in the Table from the Database.
			$Query = $Connection->Query("SELECT CategoryID, CategoryDescription FROM CategoryTable");
			
			echo "<br>";
			echo "<select name='CategoryOfBook'>";
			
			//Variable to comapre with the category number.
			$CategoryIDVar = 0;
			
			//Name of the select button, displays too.
			$SelectOptionName = "Search";
			 
			echo '<option value="'.$CategoryIDVar.'">'.$SelectOptionName.'</option>';
			
			//Getting the names of the category and putting them in the select.
			while($Row = $Query->fetch_assoc()) 
			{
						  $CategoryIDVar = $Row['CategoryID'];
						  $SelectOptionName = $Row['CategoryDescription']; 
						  echo '<option value="'.$CategoryIDVar.'">'.$SelectOptionName.'</option>';
			}

			echo "</select><br><br>";
		?>
		
			<input type="submit" value="Submit">
		</form>
	</div>
					  
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