<?php
$_SESSION;

if (isset($_SESSION['user_id'])) {
  unset($_SESSION['user_id']);
}

header("Location: uiindex.html") ?>
