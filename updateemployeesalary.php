<?php
  define('ADMIN','C:/xampp/htdocs/gelateria_eve');
  include ADMIN . '/functions.php';

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // something was posted
  $employee_username =  $_POST['employee_username'];
  $salary = $_POST['salary'];

  if(!empty($name) && !empty($name) && !is_numeric($name)){
      updateEmployeeSalary($name, $salary);
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
      <h2>Update the salary of an employee</h2>
        <label for = "employee_username">
        <input type="text" placeholder="Username" name = "employee_username">

        <label for = "position">
        <input type="text" placeholder="New salary" name = "salary">

        <button type="submit" class="float">Update employee salary</button>
   </div>
  </form>
</body>
</html>
