<?php
  define('ADMIN','C:/xampp/htdocs/gelateria_eve');
  include ADMIN . '/functions.php';

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // something was posted
  $name =  $_POST['name'];
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
</head>
<body id = "body">
  <form method = "POST">
    <div class="heading">
      <h2>Update the position of an salary</h2>
         <div>
           <input type="text" placeholder="Name" name = "name">
         </div>
         <div>
           <input type="text" placeholder="New salary" name = "salary">
         </div>

         <button type="submit" class="float">Update employee salary</button>
   </div>
  </form>
</body>
</html>
