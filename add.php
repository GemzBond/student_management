<?php 

include_once("connections/connection.php");
$con = connection();

if (isset($_POST['submit'])) {

  $fname = $_POST['firstName'];
  $lname = $_POST['lastName'];
  $gender = $_POST['gender'];

  $sql = "INSERT INTO `student_list`(`first_name`, `last_name`, `gender`) 
  VALUES ('$fname', '$lname', '$gender')";

  $con->query($sql) or die ($con-error); 

  echo header("Location: index.php");
}

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
  <form action="add.php  " method="post">
    <label for="firstName">First Name: </label>
    <input type="text" name="firstName" id="search">

    <label for="lastName">Last Name: </label>
    <input type="text" name="lastName" id="">

    <label for="lastName">Gender</label>
    <select name="gender" id="gender">
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>

    <input type="submit" name="submit" value="Submit">
  </form>
</body>
</html>