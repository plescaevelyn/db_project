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
</head>
<body id = "body">
  <form method = "POST">
    <div class="heading">
      <h2>Update the quantity of an ice cream flavor</h2>
         <div>
           <input type="text" placeholder="Name" name = "name">
         </div>
         <div>
           <input type="text" placeholder="New quantity" name = "quantity">
         </div>

         <button type="submit" class="float">Update ice cream quantity</button>
   </div>
  </form>
</body>
</html>
