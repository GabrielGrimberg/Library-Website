<!--Web Development 2 Assingment-->
<!--Author: Gabriel Grimberg.-->
<!--Website: Library Website-->
<!--Page: Search Continued.-->

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	    <!--Linking to CSS-->
		<link type="text/css" rel="stylesheet" href="Main-Style.css"/>
		<title>Search Continued</title>
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
				<h1>Results Of Your Search</h1>
				<p class="btn-primary">Here are the results for your search...</p>
			</div>
		</div>
	</div>
	
	<?php
	
		//Unset the Variables so they can be used again.
		//This is needed to prevent errors and complications.
		function VariableClean() 
		{
			//Clean the AuthorOfBook variables.
			if(isset($_GET["AuthorOfBook"])) 
			{
				if (strlen($_GET["AuthorOfBook"]) == 0 ) 
				{
					unset($_GET["AuthorOfBook"]);
				}
			}
			
			//Clean the CategoryOfBook variables.
			if(isset($_GET["CategoryOfBook"])) 
			{
				if ($_GET["CategoryOfBook"] == 0 ) 
				{
					unset($_GET["CategoryOfBook"]);
				}
			}
			
			//Clean the TitleOfBook variables.
			if(isset($_GET["TitleOfBook"])) 
			{
				if (strlen($_GET["TitleOfBook"]) == 0 ) 
				{
					unset($_GET["TitleOfBook"]);
				}
			}
		}
		
		//Validate Function to prevent bugs and errors.
		function ErrorValidate() 
		{
			//If the user didn't type anything but presses search.
			//Gives an error to 
			if($_SERVER['REQUEST_METHOD'] != 'GET' || empty($_GET)) 
			{
				echo "<br><br>";
				echo "You must type something in.";
				return false;
			}
			
			/* 5 results per page, still in works.*/
			if(isset($_GET["page"])) 
			{ 
				$_GET['page']  = $_GET["page"]; 
			} 
			else 
			{ 
				$_GET['page'] = 0;
			}
			
			if($_GET['page'] < 0) 
			{
				$_GET['page'] = 0;
			}
			
			//If either CategoryOfBook, AuthorOfBook or TitleOfBook is set then we don't have anything to search for.
			if(!isset($_GET["AuthorOfBook"]) && !isset($_GET["CategoryOfBook"]) && !isset($_GET["TitleOfBook"])) 
			{
				echo 'No search criteria.';
				return false;
			}
			
			//If no errors happen then we move on to the displaying the search results.
			return true;
		}
		
		
		function FindResults() 
		{
			//Variable to store category and compare.
			$SearchCompareVar = "";
			
			//Validation Variable.
			$JoiningAdder = false;
			
			//Take the input from the user.
			if(isset($_GET["AuthorOfBook"]))
			{
				$SearchCompareVar .= sprintf(" LOWER(Author)=LOWER('%s')", $_GET["AuthorOfBook"]);
				$JoiningAdder = true;
			}
			
			//Take the input from the user.
			if(isset($_GET["CategoryOfBook"]))
			{
				if($JoiningAdder) 
				{
					$SearchCompareVar .= "AND";
				}
				
				$SearchCompareVar .= sprintf(" CategoryId=%d", $_GET["CategoryOfBook"]);
				$JoiningAdder = true;
			}
			
			//Take the input from the user.
			if(isset($_GET["TitleOfBook"]))
			{
				if($JoiningAdder) 
				{
					$SearchCompareVar .= "AND";
				}
				$SearchCompareVar .= sprintf("  BookTitle=LOWER('%s')", $_GET["TitleOfBook"]);
				$JoiningAdder = true;
			}
			
			return sprintf("SELECT BookTable.*, CategoryDescription 
							FROM BookTable 
							INNER JOIN CategoryTable 
							ON CategoryID=Category 
							WHERE %s 
							LIMIT 5 OFFSET %d", $SearchCompareVar, $_GET['page'] * 5);
		}
		
		//Calling the function to clean the variables.
		VariableClean();
		
		//Need to check for any errors.
		if(!ErrorValidate()) 
		{
			return;
		}
		
		//Displayign the page of results the user is on.
		echo "<div class=\"Form2\">";
		echo "<h2>";
		echo "Page " . ($_GET['page']+1) . "<br><br><br>";
		echo "</h2>";
		echo "</div>";
		
		//Including the database, to compare the results to it.
		require('DatabaseConnect.php');
		
		//
		$FindResultsCompare = FindResults();

		$Query = $Connection->Query($FindResultsCompare);
		
		//If nothing is found, give a meesage that nothing has been found.
		if($Query->num_rows == 0) 
		{
			echo 'No books have been found.'; 
		}
		
		//If books match with what the user wants, then display the results.
		while($Row = mysqli_fetch_array($Query, MYSQL_BOTH))
		{
			echo "<table border=\"2\"align=\"center\"width=\"600\">";
			echo("</td><td>");
			echo "<div class=\"Form2\">";
			echo '<br /> ISBN:       ' .$Row['ISBN'];  
			echo '<br /> Book Title: ' .$Row['BookTitle']; 
			echo '<br /> Author:     ' .$Row['Author'];
			echo '<br /> Edition:    ' .$Row['Edition'];    
			echo '<br /> Reserved:   ' .$Row['Reserved'];   
			echo '<br /> <br />';
			echo("</tr>\n");
			echo "</div>";
			echo "<br>";
		}
		echo "</table>\n";

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