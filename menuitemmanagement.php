<?php
	define('ADMIN','C:/xampp/htdocs/gelateria_eve');
	include ADMIN . '/functions.php';

  $user_data = check_admin_login($con);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Flavors management</title>
	<link href="menuitemstyle.css" rel="stylesheet">
</head>
<body>
	<div class="header">
    <table>
      <tr>
        <td><h2>Gelateria Eve Management</h2></td>
        <!-- <td><h3 style = "display: inline; float: right;">Hello, <?php echo $user_data['user_name'];?></h3></td> -->
      </tr>
      <tr>
        <td><a href = "adminindex.php">Home</a></td>
        <td><a href = "menuitemmanagement.php">Menu Items Management</a></td>
        <td><a href = "employeemanagement.php">Employee Management</a></td>
        <td><a href = "adminlogout.php" id = "logout" style = "float: right">Logout</a></td>
      </tr>
    </table>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<div class="profile_info">
			<!-- <img src="images/user_profile.png"  > -->

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['user_name']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>0

				<?php endif ?>
			</div>
		</div>

		<br>

		<div class = "CRUD">
			<a href = "postmenuitem.php">Insert ice cream</a>
			<a href = "updatemenuitemprice.php">Update ice cream price</a>
			<a href = "updatemenuitemquantity.php">Update ice cream quantity</a></tr>
			<a href = "deletemenuitem.php">Delete ice cream</a>
		</div>

		<div class = "menuitems">
			<table>
			<tr class = "table-row">
				<th class = "table-header">Flavor name</th>
				<th class = "table-header">Price</th>
				<th class = "table-header">Quantity</th>
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

	</div>
</body>
</html>
