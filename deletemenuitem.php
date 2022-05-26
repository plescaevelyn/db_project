<?php
  define('ADMIN','C:/xampp/htdocs/gelateria_eve');
  include ADMIN . '/functions.php';

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // something was posted
  $name =  $_POST['name'];

  if(!empty($name) && !is_numeric($name)){
      deleteFlavor($name);
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Delete menu item</title>
</head>
<body id = "body">
  <form method = "POST">
    <div class="heading">
      <h2>Delete an ice cream flavor</h2>
         <div>
           <input type="text" placeholder="Name" name = "name">
         </div>

         <button type="submit" class="float">Delete ice cream</button>
   </div>
  </form>
</body>
</html>
