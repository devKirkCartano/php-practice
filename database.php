<?php

  $db_server = "localhost";
  $db_user = "root";
  $db_password = "";
  $db_name = "shop_minimalist_db";
  $conn = "";

  // establish a connection to MYSQl database
  try {
    $conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);
  
  }
  catch (mysqli_sql_exception){
  echo "Failed to connect to database";
  }

?>