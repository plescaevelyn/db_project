<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "gelateria_eve";

$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
if (!$con){
  die("Failed to connect!");
}
