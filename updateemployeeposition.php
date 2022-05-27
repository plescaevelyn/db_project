<?php
  define('ADMIN','C:/xampp/htdocs/gelateria_eve');
  include ADMIN . '/functions.php';

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // something was posted
  $employee_username =  $_POST['employee_username'];
  $position = $_POST['position'];

  if(!empty($name) && !empty($name) && !is_numeric($name)){
      updateEmployeePosition($name, $position);
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Update the position of an employee</title>
  <link rel = "stylesheet" href = "crudstyle.css">
</head>
<body>
  <form method = "POST">
      <h2>Update the position of an employee</h2>
        <label for = "employee_username">
        <input type="text" placeholder="Username" name = "employee_username">

        <label for = "position">
        <input type="text" placeholder="New position" name = "position">

        <button type="submit" class="float">Update employee position</button>
   </div>
  </form>
</body>
</html>
