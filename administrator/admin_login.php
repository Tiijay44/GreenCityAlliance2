<?php
// Begin a new session
session_start();
require_once('../database.php');

// Connect to database
$conn = db_connect();

// Check and Process incoming form data
if (isset($_POST["Submit"])) {
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);

    $sql_query = "SELECT * FROM admin WHERE
  admin_email = '$email' AND admin_pass = '$password'";
    $result = $conn->query($sql_query);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $_SESSION['name'] = $row['admin_name'];
        header("Location: admin_page.php");
        exit;
    } else {
        $msg = "Username or password error";
    }
}

if (isset($msg)) {
    echo "<p>$msg</p>";   
}
