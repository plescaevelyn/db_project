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
  <title>Delete menu item</title>
</head>
<body id = "body">
  <form method = "POST">
    <div class="heading">
      <h2>Fire an employee</h2>
         <div>
           <input type="text" placeholder="Employee username" name = "employee_username">
         </div>

         <button type="submit" class="float">Fire employee!</button>
   </div>
  </form>
</body>
</html>
