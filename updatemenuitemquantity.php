<?php
  define('ADMIN','C:/xampp/htdocs/gelateria_eve');
  include ADMIN . '/functions.php';

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // something was posted
  $name =  $_POST['name'];
  $quantity = $_POST['quantity'];

  if(!empty($name) && !empty($name) && !is_numeric($quantity) && is_numeric($quantity)){
      updateFlavorQuantity($name, $quantity);
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Update menu item quantity</title>
  <link rel = "stylesheet" href = "crudstyle.css">
</head>
<body>
  <form method = "POST">
      <h2>Update ice cream flavor quantity</h2>
        <label for = "name">
        <input type="text" placeholder="Name" name = "name">

        <label for = "quantity">
        <input type="text" placeholder="New quantity" name = "quantity">

        <button type="submit" class="float">Update quantity</button>
   </div>
  </form>
</body>
</html>
