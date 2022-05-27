<?php
define('ADMIN','C:/xampp/htdocs/gelateria_eve');
include ADMIN . '/functions.php';

$user_data = check_user_login($con);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="userindex.css">
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
</body>
</html>
