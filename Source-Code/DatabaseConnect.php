<?php
  
  //Connecting to database.
  $Connection = mysqli_connect('localhost', 'root', '');
  if(!$Connection)
  {
    die("Database Connection Failed" . mysqli_error($Connection));
  }
  
  //Connecting to the specific database where the tables are.
  $Select_Db = mysqli_select_db($Connection, 'Library');
  if(!$Select_Db)
  {
    die("Database Selection Failed" . mysqli_error($Connection));
  }
?>
