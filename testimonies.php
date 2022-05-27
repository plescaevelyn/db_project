<?php
define('ADMIN','C:/xampp/htdocs/gelateria_eve');
include ADMIN . '/functions.php';

error_reporting (E_ALL ^ E_NOTICE);

check_user_login($con);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $feedback_id = random_num(20);

  $user_name = $_POST['user_name'];
  $email = $_POST['email'];
  $comment = $_POST['comment'];

  mysqli_select_db($con,"gelateria_eve");

  $query = "INSERT INTO feedback (feedback_id, user_name, email, comment) VALUES ('feedback_id','$user_name','$email','$comment')";

  $result = mysqli_query($con,$query);

  if ($result) {
    header("Location: testimonies.php");
  } else {
    echo "Could not save data!";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Contact us</title>
  <link rel = "stylesheet" href = "testimoniesstyle.css">
</head>
<body id = "body">
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

  <div id = "box">
    <div class="container">
      <span class="big-circle"></span>
      <div class="form">
        <div class="contact-info">
        <h3 class="title">You can find us here!</h3>
        <div class="info">
          <div class="information">
            <p>Headquarters: Observator Student Complex, Student dorm no. 7, SDL1</p>
          </div>
          <div class="information">
            <p>Our e-mail address for business enquiries: gelateria_eve@db_project.com</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <br>

  <form method="POST">
    <form method = "post" class="modal-content animate" action="/action_page.php">
       <div class = "container">
         <p>Leave us a review/suggestions/ideas:</p>

         <table>
         <tr>
         <td><label for="user_name">Username:</label></td>
         <td><input type = "text" name = "user_name" placeholder="Your user name" required></input></td>
         </tr>

         <tr>
         <td><label for="email">E-mail adress:</label></td>
         <td><input type = "text" name = "email" placeholder="Your e-mail (optional)"></input></td>
         </tr>

         <tr>
         <td><label for="comment">Your feedback:</label></td>
         <td><textarea name = "comment" row = "15" cols = "50" placeholder="Your feedback here!"></textarea></td>
         </tr>

         <tr>
           <td><input id = "button" type = submit value = "Submit!"></input></td>
           <td><input id = "button" type = reset value = "Clear!"></input></td>
         </tr>
         </table>
      </div>
    </form>
  </div>
</form>
</body>
</html>
