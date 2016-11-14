<?php

  /* Connecting to the database */
  $Connection = mysqli_connect('localhost', 'root', '');
  
  /* Search for the database */
  mysqli_select_db($Connection,"Library");
  
  //Checking for a connection to the database.
  if(mysqli_connect_errno())
  {
    echo "Connection could not be resolved. " . mysqli_connect_error();
  }
  
?>