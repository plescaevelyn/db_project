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
</head>
<body id = "body">
  <form method = "POST">
    <div class="heading">
      <h2>Insert new ice cream</h2>
         <div>
           <input type="text" placeholder="Name" name = "name">
         </div>
         <div>
           <input type="text" placeholder="Price" name = "price">
         </div>
         <div>
           <input type="text" placeholder="Quantity" name = "quantity">
         </div>

         <button type="submit" class="float">Insert ice cream</button>
   </div>
  </form>
</body>
</html>
