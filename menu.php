<?php
	define('ADMIN','C:/xampp/htdocs/gelateria_eve');
	include ADMIN . '/functions.php';

  $user_data = check_user_login($con);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
  <link rel = "stylesheet" href = "menuitemstyle.css">
</head>
<body>
	<div class="header">
    <div class="navbar">
      <table>
        <tr>
          <td><h2>Gelateria Eve</h2></td>
          <!-- <td><h3 style = "display: inline; float: right;">Hello, <?php echo $user_data['user_name'];?></h3></td> -->
        </tr>
        <tr>
          <td><a href = "userindex.php">Home</a></td>
          <td><a href = "menu.php">See our menu</a></td>
          <td><a href = "testimonies.php">Contact us</a></td>
        	<td><a href = "userlogout.php" id = "logout" style = "float: right">Logout</a></td>
        </tr>
      </table>
    </div>
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

		<div class = "menuitems">
			<table>
			<tr class = "table-row">
				<th class = "table-header">Flavor name</th>
				<th class = "table-header">Price</th>
			</tr>

			<?php
			error_reporting(0);
			$query = "SELECT name, price FROM flavor";
			$data = mysqli_query($con, $query);
			$total = mysqli_num_rows($data);

			if ($total != 0) {
				while ($result = mysqli_fetch_assoc($data)){
					echo "
						<tr>
							<td>".$result['name']."</td>
							<td>".$result['price']."</td>
						</tr>
					";
				}
			} else {
				echo "No records found!";
			}
			 ?>
		 </table>
		</div>

    <div class = "menuitems">
      <h3><b>See our menu items below 5 ron!</b></h3>
      <table>
      <tr class = "table-row">
        <th class = "table-header">Flavor name</th>
        <th class = "table-header">Price</th>
      </tr>

      <?php
      error_reporting(0);
      $query = "SELECT name, price FROM flavors_costing_lt_5";
      $data = mysqli_query($con, $query);
      $total = mysqli_num_rows($data);

      if ($total != 0) {
        while ($result = mysqli_fetch_assoc($data)){
          echo "
            <tr>
              <td>".$result['name']."</td>
              <td>".$result['price']."</td>
            </tr>
          ";
        }
      } else {
        echo "No records found!";
      }
       ?>
     </table>
     <p> Go check these out at our newest location! @observatory student complex</p>
    </div>

	</div>
</body>
</html>