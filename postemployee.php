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
  <title>Insert menu item</title>
</head>
<body id = "body">
  <form method = "POST">
    <div class="heading">
      <h2>Insert new employee</h2>
         <div>
           <input type="text" placeholder="Employee username" name = "employee_username">
         </div>
         <div>
           <input type="text" placeholder="Password" name = "password">
         </div>
         <div>
           <input type="text" placeholder="Email" name = "email">
         </div>
         <div>
           <input type="text" placeholder="Salary" name = "salary">
         </div>
         <div>
           <input type="text" placeholder="No. of working hours" name = "work_hours_total">
         </div>
         <div>
           <input type="text" placeholder="Position" name = "position">
         </div>

         <button type="submit" class="float">Hire employee!</button>
   </div>
  </form>
</body>
</html>
