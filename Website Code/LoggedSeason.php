<?php
	
	//Basically keeps the user logged in until logged out.
	if(!isset($_SESSION["Username"]))
	{
		header("Location: LoggedOut.html");
		exit(); 
	}
?>
