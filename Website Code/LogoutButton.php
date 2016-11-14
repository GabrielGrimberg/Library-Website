<?php

		// remove all session variables
		session_unset(); 

		// destroy the session 
		session_destroy(); 
		
		//Destroying all sessions.
		if(session_destroy())
		{
			// Redirecting if needed.
			header("Location: LoggedOut.html");
		}
?>
