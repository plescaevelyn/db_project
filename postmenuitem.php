<?php
  define('ADMIN','C:/xampp/htdocs/gelateria_eve');
  include ADMIN . '/functions.php';

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // something was posted
  $name =  $_POST['name'];
  $quantity = $_POST['quantity'];
  $price = $_POST['price'];

  if(!empty($name) && !empty($price) && !empty($quantity) && !is_numeric($name)){
      addFlavor($name, $quantity, $price);
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Insert menu item</title>
  <link rel = "stylesheet" href = "crudstyle.css">
</head>
<body>
  <form method = "POST">
      <h2>Add new ice cream flavor</h2>
        <label for = "name">
        <input type="text" placeholder="Name" name = "name">

        <label for = "price">
        <input type="text" placeholder="Price" name = "price">

        <label for = "quantity">
        <input type="text" placeholder="Quantity" name = "quantity">

        <button type="submit" class="float">Add new flavor</button>
   </div>
  </form>
</body>
</html>
