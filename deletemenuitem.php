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
  <title>Delete flavor</title>
  <link rel = "stylesheet" href = "crudstyle.css">
</head>
<body>
  <form method = "POST">
      <h2>Delete an ice cream flavor from the menu</h2>
        <label for = "name">
        <input type="text" placeholder="Name" name = "name">

        <button type="submit" class="float">Delete flavor</button>
   </div>
  </form>
</body>
</html>
