<?php
	define('ADMIN','C:/xampp/htdocs/gelateria_eve');
	include ADMIN . '/functions.php';

  $user_data = check_user_login($con);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
  <link rel = "stylesheet" href = "menustyle.css">
</head>
<body>
	<div class="header">
    <div class="navbar">
			<ul>
				<h2 style = "color: white;">Gelateria Eve</h2>
			</ul>
			<ul>
			  <li><a href = "userindex.php">Home</a></li>
			  <li><a href = "menu.php">See our menu</a></li>
			  <li><a href = "testimonies.php">Contact us</a></li>
			  <li style = "float:right"><a class="active" href = "userlogout.php">Log out</a></li>
			</ul>
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

		 <br>
     <p> Go check these out at our newest location! @observatory student complex</p>
    </div>

	</div>
</body>
</html>
