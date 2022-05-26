<?php
define('ADMIN','C:/xampp/htdocs/gelateria_eve');
include ADMIN . '/functions.php';

$user_data = check_user_login($con);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="slideshow.css">
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
					</small>

				<?php endif ?>
			</div>

			<br>

			<div class = "text">
			  <h2>Fun facts about ice cream!</h2>
			  <p>When it comes to the invention of ice cream, it remains a hot debate although we do know an ice-cream-like food was first eaten in China in 618-97AD by King Tang of Shang.</p>
			  <p>The tallest ice cream cone was over 9 feet tall in Italy</p>
				<img src="resources/img1.jpg" alt = "">
				<p>Ice cream headaches or “brain freeze” is the result of the nerve endings in the roof of your mouth sending a message to your brain of the loss of heat</p>
				<img src="resources/img2.jpg"alt = "">
			  <p>The country that consumes the most ice cream is USA, followed by Australia then Norway.</p>
				<img src="resources/img3.jpg" alt = "">
				<p>William Dreyer, of Dreyer’s Ice Cream, is thought to be the original concoctor of Rocky Road in 1929. Partnering with candy maker Joseph Edy, he debuted the first incarnation of the now-famous flavor in Oakland, California.</p>
				<img src="resources/img4.jpg" alt = "">
				<p>Food historians note the history of ice cream started with ancient flavored ice just like Emperor Nero enjoyed, however by the Victorian times people began using elaborate molds and presses using milk, cream and butterfat as ingredients.</p>
		  </div>
		</div>
	</div>
</body>
</html>
