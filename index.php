<?php
  include("database.php");
  /*
  $username = "Patrick";
  $password = "Rock3";
  $hash = password_hash($password, PASSWORD_DEFAULT); // hash the password
  // sql query
  $sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";

  try {
    mysqli_query($conn, $sql); // submit the query to the database, pass the connection and the sql query
    echo "User is now registered!";
  }
  catch(mysqli_sql_exception){
    echo "Could not register user!";
  }
  */

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Database</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <h2>Welcome to Fakebook!</h2>
    <label for="username">Username:</label> <br>
    <input type="text" name="username" id="username"> <br>
    <label for="password">Password:</label> <br>
    <input type="text" name="password" id="password"> <br>
    <input type="submit" name="submit" value="register">
    </form>
</body>
</html>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($username)){
      echo "Please enter a username";
    }
    else if (empty($password)){
      echo "Please enter a password";
    }
    else {
      $hash = password_hash($password, PASSWORD_DEFAULT); // hash the password
      $sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";
      
      try {
        mysqli_query($conn, $sql); // initiate the query
        echo "You are now registered!";
      }
      catch(mysqli_sql_exception){
        echo "That username is already taken!";
      }
    
    }
  }
  mysqli_close($conn);


?>