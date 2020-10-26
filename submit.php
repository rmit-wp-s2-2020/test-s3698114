<?php
// Some code taken from w3schools https://www.w3schools.com/php/php_form_required.asp

// define variables and set to empty values
$nameErr = $emailErr= "";
$name = $email = "";

// checking if name or email is filled
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "*Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "*Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
}

// converting all input into text (XSS protection)
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>