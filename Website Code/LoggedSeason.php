<?php
	session_start();
	
	//Basically keeps the user logged in until logged out.
	if(!isset($_SESSION["Username"]))
	{
		header("Location: Main-Page.html");
		exit(); 
	}
?>
