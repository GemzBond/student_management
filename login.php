<?php 

include_once("connections/connection.php");

$con = connection();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Management System</title>
  <link rel="stylesheet" href="css/styles.css">

</head>
<body>
    <h1>Login Page</h1>
    <br>
    <label for="username">Username: </label>
    <input type="text" name="username" id="username">
    <label for="username">Password: </label>
    <input type="password" name="password" id="password">
    <button type="submit" name="login"></button>
</body>
</html>