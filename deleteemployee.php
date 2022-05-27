<?php
  define('ADMIN','C:/xampp/htdocs/gelateria_eve');
  include ADMIN . '/functions.php';

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // something was posted
  $employee_username =  $_POST['employee_username'];

  if(!empty($employee_username) && !is_numeric($employee_username)){
      fireEmployee($employee_username);
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Delete employee</title>
  <link rel = "stylesheet" href = "crudstyle.css">
</head>
<body>
  <form method = "POST">
      <h2>Fire an employee</h2>
        <label for = "employee_username">
        <input type="text" placeholder="Username" name = "employee_username">

        <button type="submit" class="float">Fire</button>
   </div>
  </form>
</body>
</html>
