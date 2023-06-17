<?php
  // variables - usable container to store data
  // declaration of variable - $ sign is used to declare a variable
  
  // String 
  $name = "Kirk Cedrick Cartaño";
  $food = "Pizza";
  $email = "fake123@gmail.com";

  // Integer
  $age = 20;
  $users = 2;
  $quantity = 4;

  // Float
  $gpa = 1.5;
  $price = 5.99;
  $tax_rate = 5.1;

  // Boolean - outputs 1 or nothing
  $employed = true;
  $online = true;
  $for_sale = true;

  $total = null; // null - no value
  // {} - used to concatenate a variable inside a string. Used like a placeholder
  echo "Hello {$name}<br>";
  echo "You like {$food}<br>";
  echo "Your email is {$email}<br>";

  echo "You are {$age} years old<br>";
  echo "There are {$users} users online<br>";
  echo "You would like to buy {$quantity} items<br>";

  echo "Your GPA is {$gpa}<br>";
  // \ - used to escape a character, escape sequence
  echo "Your price is \${$price}<br>";
  echo "The sales tax rate is {$tax_rate}%<br>";
  echo "Online status: {$online}<br>";

  echo "You have ordered {$quantity} x {$food}s <br>";
  $total = $quantity * $price;
  echo "Your total is \${$total}<br>";
?>