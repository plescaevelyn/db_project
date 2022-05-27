<?php
  define('ADMIN','C:/xampp/htdocs/gelateria_eve');
  include ADMIN . '/functions.php';

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // something was posted
  $name =  $_POST['name'];
  $price = $_POST['price'];

  if(!empty($name) && !empty($name) && !is_numeric($name) && is_float($price)){
      updateFlavorPrice($name, $price);
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Update menu item price</title>
  <link rel = "stylesheet" href = "crudstyle.css">
</head>
<body>
  <form method = "POST">
      <h2>Update ice cream flavor price</h2>
        <label for = "name">
        <input type="text" placeholder="Name" name = "name">

        <label for = "price">
        <input type="text" placeholder="New price" name = "price">

        <button type="submit" class="float">Update price</button>
   </div>
  </form>
</body>
</html>
