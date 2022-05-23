<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "gelateria_eve";

$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
if (!$con){
  die("Failed to connect!");
}

function check_user_login($con) {
  if (isset($_SESSION['user_id'])){
    $id = $_SESSION['user_id'];
    $query = "select * from users where user_id = '$id' limit 1";

    $result = mysqli_query($con, $query);
    if ($result && mysqli_num_rows($result) > 0) {
      $user_data = mysqli_fetch_assoc($result);
      return $user_data;
    }
  }

  // redirect to login
  header("Location: userindex.php");
  die;
}

function check_admin_login($con) {
  if (isset($_SESSION['admin_id'])){
    $id = $_SESSION['admin_id'];
    $query = "select * from admin where admin_id = '$id' limit 1";

    $result = mysqli_query($con, $query);
    if ($result && mysqli_num_rows($result) > 0) {
      $user_data = mysqli_fetch_assoc($result);
      return $user_data;
    }
  }

  // redirect to login
  header("Location: adminindex.php");
  die;
}

function random_num($length) {
  $text = "";
  if ($length < 5){
    $length = 5;
  }

  $len = rand(4, $length);

  for ($i=0; $i < $len; $i++) {
    $text .= rand(0,9);
  }

  return $text;
}

function addNewEmployee($employee_username, $pasword, $email, $salary, $work_hours_total, $position){
    $this->employee_username = $employee_username;
    $this->pasword = $pasword;
    $this->email = $email;
    $this->salary = $salary;
    $this->work_hours_total = $work_hours_total;
    $this->position = $position;

    $query = "INSERT INTO employee(employee_id, employee_username, password, email, salary, work_hours_total, position) VALUES ('','$employee_username','$password','$email','$salary','$work_hours_total','$position')";

    if($con->exec($query)) {
        header("Location: admin/employeemanagement.php");
    }
}

function updateEmployeeSalary($employee_username, $salary){
    $this->employee_username = $employee_username;
    $this->salary = $salary;

    $query = "UPDATE employee SET (salary = $'salary') where employee_username = '$employee_username'";
    if ($con->exec($query)){
       header("Location: admin/employeemanagement.php");
    }
}

function updateEmployeePosition($employee_username, $position){
    $this->employee_username = $employee_username;
    $this->position = $position;

    $query = "UPDATE employee SET (quantity = '$quantity') where employee_username = '$employee_username'";
    if ($con->exec($query)){
       header("Location: admin/employeemanagement.php");
    }
}


function addFlavor($name, $quantity, $price) {
    $this->$name = $name;
    $this->quantity = $quantity;
    $this->price = $price;

   $query = "INSERT INTO book (flavor_id, name, quantity, price) VALUES ('','$name','$quantity','$price')";

    if($con->exec($query)) {
        header("Location: admin/menuitemmanagement.php");
    }
}

function deleteFlavor($name){
    $query = "DELETE from flavor where name='$name'";
    if($con->exec($query)){
       header("Location: admin/menuitemmanagement.php");
    }
}

function updateFlavorPrice($name, $price){
    $query = "UPDATE flavor SET (price = '$price') where name = '$name'";
    if($con->exec($query)){
       header("Location: menuitemmanagement.php");
    }
}

function updateFlavorQty($name, $quantity){
    $query = "UPDATE flavor SET (quantity = '$quantity') where name = '$name'";
    if($con->exec($query)){
       header("Location: menuitemmanagement.php");
    }
}
