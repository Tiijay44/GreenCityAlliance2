<?php
session_start();


// Check if user has admin priviledges
if (!isset($_SESSION['name'])) {
    header("Location: admin_login.php");
    exit;
}
