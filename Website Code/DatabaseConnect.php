<?php

  $Connection = mysqli_connect("localhost","root","");
  
  //Checking for a connection to the database.
  if(mysqli_connect_errno())
  {
    echo "Connection could not be resolved. " . mysqli_connect_error();
  }
  
?>