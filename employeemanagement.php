<?php
	define('ADMIN','C:/xampp/htdocs/gelateria_eve');
	include ADMIN . '/functions.php';

	$user_data = check_admin_login($con);

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
  	// something was posted
  	$user_name =  $_POST['user_name'];
  	$password = $_POST['password'];

  	if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
    	// read from database
    	$user_id = random_num(20);
    	$query = "select * from users where user_name = '$user_name' limit 1";

    	$result = mysqli_query($con, $query);

    	if ($result) {
      	if ($result && mysqli_num_rows($result) > 0) {
        	$user_data = mysqli_fetch_assoc($result);

        	if ($user_data['password'] == $password) {
          	$_SESSION['user_id'] = $user_data['user_id'];
          	header("Location: menuitemmanagement.php");
          	die;
        	}
      	}
    	echo "Wrong username or password!";
    	} else {
        	echo "Wrong username or password!";
    	}
    	header("Location: menuitemmanagement.php");
    	die;
  	} else {
    	echo ("Please enter some valid information!");
  	}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Employee management</title>
	<link rel = "stylesheet" href = "employeemanagement.css">
</head>
<body>
	<div class="header">
		<ul>
			<h2>Gelateria Eve Management</h2>
		</ul>
		<ul>
			 <li><a href = "adminindex.php">Home</a></li>
			 <li><a href = "menuitemmanagement.php">Menu items management</a></li>
			 <li><a href = "employeemanagement.php">Employees management</a></li>
			 <li style = "float:right"><a class="active" href = "adminlogout.php">Log out</a></li>
		</ul>
	</div>

	<div class = "CRUD">
		<a href = "postemployee.php">Insert employee</a>
		<a href = "updateemployeeposition.php">Update employee position</a></tr>
		<a href = "updateemployeesalary.php">Update employee salary</a></tr>
		<a href = "deleteemployee.php">Fire employee</a>
	</div>

	<br><br><br><br><br><br><br><br>

	<div id = "manageemployees">
		<table>
			<tr>
				<th>Employee ID</th>
				<th>Username</th>
				<th>Email address</th>
				<th>Salary</th>
				<th>No. of working hours</th>
				<th>Position</th>
			</tr>

		<?php
		error_reporting(0);
		$query = "SELECT * FROM employee";
		$data = mysqli_query($con, $query);
		$total = mysqli_num_rows($data);

		if ($total != 0) {
			while ($result = mysqli_fetch_assoc($data)){
				echo "
					<tr>
						<td>".$result['employee_id']."</td>
						<td>".$result['employee_username']."</td>
						<td>".$result['email']."</td>
						<td>".$result['salary']."</td>
						<td>".$result['work_hours_total']."</td>
						<td>".$result['position']."</td>
					</tr>
				";
			}
		} else {
			echo "No records found!";
		}
		?>
		</table>
	</div>
</body>
</html>
