<?php

// **Require necessary files:**
// require_once('admin_access_control.php');
// **Establish database connection:**
// **Get company ID from URL parameter:**
// **Process form submission:**
// **Extract form data:**
// **Construct SQL update statement:**
// **Execute update query:**
// **Handle update result:**
// **Close database connection:**
require_once('../database.php');

$conn = db_connect();

$company_id = isset($_GET['Company_id']);

if (isset($_POST["Submit"])) {

    $company_name = $_POST['Company_name'];
    $email = $_POST['Email'];
    $password = password_hash($_POST["Password"], PASSWORD_BCRYPT);
    $phone_number = $_POST['Phone_number'];
    $products_services = $_POST['Product_Services'];

    $sql = "UPDATE Company SET Company_name = '$company_name', Email = '$email', Password = '$password', Phone_number = '$phone_number', Product_Services = '$products_services' WHERE Company_id = '$company_id'";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        echo '<script>
    alert("Company data updated successfully!");
    setTimeout(function() {
      window.location.href = "index.php";
    },5000); 
  </script>';
    } else {
        echo "Error updating data: " . $conn->error;
    }
}

db_disconnect($conn);
