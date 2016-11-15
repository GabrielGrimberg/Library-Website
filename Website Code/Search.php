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
				<li><a href="Login.php">My Account</a></li>
				<li><a href="LoggedOut.php">Log Out</a></li>
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
		
		//Connection to database.
		require('DatabaseConnect.php');
		
		if(!empty($_REQUEST['Search'])) 
		{

			$Searching = mysqli_real_escape_string($Connection,$_REQUEST['Search']);  

			$TableSearch = " SELECT * 
							 FROM  BookTable
							 WHERE BookTitle 
							 LIKE '%".$Searching."%' "; 
			$Finding = mysqli_query($Connection,$TableSearch); 
			
			//Error checking.
			if(!$Finding)
			{ 
				printf("Error: %s\n", mysqli_error($Connection));
				exit();
			}

			while($Row = mysqli_fetch_array($Finding, MYSQL_BOTH))
			{  
				echo        'ISBN:       ' .$Row['ISBN'];  
				echo '<br /> Book Title: ' .$Row['BookTitle']; 
				echo '<br /> Author:     ' .$Row['Author'];
				echo '<br /> Edition:    ' .$Row['Edition'];  
				echo '<br /> Category:   ' .$Row['Category'];  
				echo '<br /> Reserved:   ' .$Row['Reserved'];   
				echo '<br /> <br />';
			}  

		}
		
		
	?>
	
	<!-- HTML Search Below This -->
	<div class="form">
	<h1 class="loginheader">Search For A Book</h1>
		<form action="" method="post" name="search">
			<input type="text" name="Search" placeholder="Search for a book..." required />
			<select name="SearchOptions">
				<option value="Author">Any</option>
				<option value="Author">Author</option>
				<option value="Title">Title</option>
				<option value="Category">Category</option>
			</select>
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