<?php
// **Start user session:**
// - Initiate session management using session_start()
// **Require necessary files:**
// **Process login form submission:**
// **Establish database connection:**
// **Construct SQL query for admin authentication:**
// **Handle authentication result:**

session_start();
//require_once('admin_access_control.php');
require_once('../database.php');

$conn = db_connect();

if (isset($_POST["Submit"])){

    $name = $_POST["email"];
    $password = $_POST["password"];

    $sql_query = "SELECT * FROM admin WHERE
  admin_email = '$name' AND admin_pass = '$password'";
    $result = $conn->query($sql_query);

    if ($result->num_rows > 0){
        $row = $result->fetch_assoc();

        $_SESSION['name'] = $row['admin_name'];
        header("Location: admin_main_page.php");
        exit;
    } else {
        echo '<script>
        alert("Wrong username or password");
        setTimeout(function() {
          window.location.href = "../Frontend/admin/admin_login.html";
        }, 1000); 
      </script>';
       
    }
}
