<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GET and POST</title>
</head>

<body>
  <form action="GET_POST_variables.php" method="GET">
    <label for="username">Quanity:</label> <br>
    <input type="text" name="quantity" id="username"> <br>
  
    <input type="submit" value="Total">
  </form>

</body>

</html>

<?php
// $_GET, $_POST - special variables used to collect data from HTML forms. It can hold more than one value, technically an array
// $_GET - collects data from a form with method="get" Data is sent to the file in the action attribute 
//  

// $_POST is more secure than _$GET

// $_GET displays data in the URL, NOT SECURE, Better for search page
// echo $_GET["username"]; // use ["name"] to get the value you want to get
// echo $_GET["password"] . "<br>"; // use . "<br>" to add a line break, . is used for string concatenation 

// _$POST does not display data in the URL, SECURE, Better for login page, submitting credit card info
// If security matters, use _$POST if doesn't matter, use _$GET
// echo $_GET["username"] . " is logged in. <br>"; // string concatenation with line break
// echo "{$_GET["password"]} <br> "; // preferred way of adding line break
  $item = "pizza";
  $price = 5.99;
  $quantity = $_GET["quantity"];

  $total = null;

  $total = $price * $quantity;
  echo "You have ordered {$quantity} x {$item}s <br>";
  echo "Your total is: \${$total}";
?>