<?php
	define('ADMIN','C:/xampp/htdocs/gelateria_eve');
	include ADMIN . '/functions.php';

  $user_data = check_admin_login($con);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Flavors management</title>
	<link rel = "stylesheet" href = "menuitemsstyle.css">
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

	<br>

	<div class = "CRUD">
		<a href = "postmenuitem.php">Insert ice cream</a>
		<a href = "updatemenuitemprice.php">Update ice cream price</a>
		<a href = "updatemenuitemquantity.php">Update ice cream quantity</a></tr>
		<a href = "deletemenuitem.php">Delete ice cream</a>
	</div>

	<br><br><br><br><br><br><br><br>

	<div id = "menuitems">
		<table>
			<tr>
				<th>Flavor ID</th>
				<th>Flavor name</th>
				<th>Price</th>
				<th>Quantity</th>
			</tr>

		<?php
		error_reporting(0);
		$query = "SELECT * FROM flavor";
		$data = mysqli_query($con, $query);
		$total = mysqli_num_rows($data);

		if ($total != 0) {
			while ($result = mysqli_fetch_assoc($data)){
				echo "
					<tr>
						<td>".$result['flavor_id']."</td>
						<td>".$result['name']."</td>
						<td>".$result['price']."</td>
						<td>".$result['quantity']."</td>
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
