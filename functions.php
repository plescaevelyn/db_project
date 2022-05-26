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
    $con = mysqli_connect("localhost","root","","gelateria_eve");
    $employee_id = random_num(20);
    $query = "INSERT INTO employee(employee_id, employee_username, password, email, salary, work_hours_total, position) VALUES ('$employee_id','$employee_username','$password','$email','$salary','$work_hours_total','$position')";

    $result = mysqli_query($con, $query);

    if($result) {
        header("Location: employeemanagement.php");
    }
}

function updateEmployeeSalary($employee_username, $salary){
    $con = mysqli_connect("localhost","root","","gelateria_eve");
    $query = "UPDATE employee SET (salary = $'salary') where employee_username = '$employee_username'";

    $result = mysqli_query($con, $query);

    if($result) {
        header("Location: employeemanagement.php");
    }
}

function updateEmployeePosition($employee_username, $position){
    $con = mysqli_connect("localhost","root","","gelateria_eve");
    $query = "UPDATE employee SET (quantity = '$quantity') where employee_username = '$employee_username'";
    $result = mysqli_query($con, $query);

    if($result) {
        header("Location: employeemanagement.php");
    }
}

function fireEmployee($employee_username){
  $con = mysqli_connect("localhost","root","","gelateria_eve");
  $query = "DELETE FROM employee WHERE employee_username = $employee_username";
  $result = mysqli_query($con, $query);

  if($result) {
      header("Location: employeemanagement.php");
  }
}

function addFlavor($name, $quantity, $price) {
    $con = mysqli_connect("localhost","root","","gelateria_eve");
    $user_id = random_num(20);

    $query = "INSERT INTO flavor (flavor_id, name, quantity, price) VALUES ('$user_id','$name','$quantity','$price')";

    $result = mysqli_query($con, $query);

    if($result) {
        header("Location: menuitemmanagement.php");
    } else {
      echo "Please enter some valid information!";
    }
}

function deleteFlavor($name){
    $con = mysqli_connect("localhost","root","","gelateria_eve");

    $query = "DELETE from flavor where name='$name'";

    $result = mysqli_query($con, $query);

    if($result) {
        header("Location: menuitemmanagement.php");
    }
}

function updateFlavorPrice($name, $price){
    $con = mysqli_connect("localhost","root","","gelateria_eve");
    $query = "UPDATE flavor SET price = '$price' where name = '$name'";

    $result = mysqli_query($con, $query);

    if($result) {
        header("Location: menuitemmanagement.php");
    }
}

function updateFlavorQty($name, $quantity){
    $con = mysqli_connect("localhost","root","","gelateria_eve");
    $query = "UPDATE flavor SET quantity = '$quantity' where name = '$name'";

    $result = mysqli_query($con, $query);

    if($result) {
        header("Location: menuitemmanagement.php");
    }
}
