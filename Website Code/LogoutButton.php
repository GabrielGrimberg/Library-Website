<?php

		session_start();
		
		//Destroying all sessions.
		if(session_destroy())
		{
			// Redirecting if needed.
			header("Location: LoggedOut.html");
		}
?>
