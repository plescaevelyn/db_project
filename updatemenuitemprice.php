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
</head>
<body id = "body">
  <form method = "POST">
    <div class="heading">
      <h2>Update the price of an ice cream flavor</h2>
         <div>
           <input type="text" placeholder="Name" name = "name">
         </div>
         <div>
           <input type="text" placeholder="New price" name = "price">
         </div>

         <button type="submit" class="float">Update ice cream price</button>
   </div>
  </form>
</body>
</html>
