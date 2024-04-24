<?php
session_start();



if (isset($_SESSION['name'])) {
    // Session is active, user is logged in
    echo "Welcome back,  " . $_SESSION['name'] . "!";
    // You can access other session variables here (if set)
  } else {
    // Session is not active, user is not logged in
    echo "You are not logged in.";
    // Redirect to login page or display a login form
  }

?>