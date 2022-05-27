<?php
  define('ADMIN','C:/xampp/htdocs/gelateria_eve');
  include ADMIN . '/functions.php';

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // something was posted
  $employee_username = $_POST['employee_username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $salary = $_POST['salary'];
  $work_hours_total = $_POST['work_hours_total'];
  $position = $_POST['position'];

  if(!empty($employee_username) && !empty($password) && !empty($email) && !empty($salary) && !empty($work_hours_total) && !empty($position) && !is_numeric($name)
  && is_numeric($salary) && is_numeric($work_hours_total) && !is_numeric($email)){
      addNewEmployee($employee_username, $pasword, $email, $salary, $work_hours_total, $position);
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Hire new employee</title>
  <link rel = "stylesheet" href = "crudstyle.css">
</head>
<body>
  <form method = "POST">
      <h2>Hire a new employee</h2>
        <label for = "employee_username">
        <input type="text" placeholder="Username" name = "employee_username">

        <label for = "password">
        <input type="password" placeholder="Password" name = "password">

        <label for = "email">
        <input type="text" placeholder="Email" name = "email">

        <label for = "salary">
        <input type="text" placeholder="Salary" name = "salary">

        <label for = "work_hours_total">
        <input type="text" placeholder="No. of working hours" name = "work_hours_total">

        <label for = "position">
        <input type="text" placeholder="Position" name = "position">

        <button type="submit" class="float">Hire new employee</button>
   </div>
  </form>
</body>
</html>
